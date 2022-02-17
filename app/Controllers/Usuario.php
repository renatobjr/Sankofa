<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Usuario extends BaseController
{

    public function novoUsuario()
    {
        // render page to save new users
        echo view('usuario/novo_usuario');
    }

    public function primeiro_login()
    {
        echo view('usuario/primeiro_login');
    }

    public function salvar()
    {
        if ($this->request->getPost()
            && $this->validate([
                'nome_completo'     => 'required',
                'username'          => 'required',
            ])
        ) {
            $usuario = new UsuarioModel(); 
            $isUnique = $usuario->where('username', $this->request->getPost('username'))->first();
            if ($isUnique) {
                session()->setFlashdata('error_user','Usuario já existe. Tente utilizar outro usuário');
                return redirect()->to(base_url('/dashboard/novo-usuario'));
            } else {
                // get data 
                $data = [
                    'nome_completo'     => $this->request->getPost('nome_completo'),
                    'username'          => $this->request->getPost('username'),
                    'isAdmin'           => $this->request->getPost('isAdmin'),
                    'firstLogin'        => '1'
                ];
                $usuario->save($data);
                // return
                session()->setFlashdata('success_user','Usuario cadastrado com sucesso');
                return redirect()->to(base_url('dashboard'));
            }
        } else {
            return view('usuario/novo_usuario',[
                'validation' => $this->validator
            ]);
        }
    }
    
    public function registrar()
    {
        if ($this->request->getPost()
            && $this->validate([
                'username'          => 'required',
                'password'          => 'required',
                'password_repeat'   => 'required|matches[password]'
            ])
        ) {
            $usuario = new UsuarioModel();
            $isUnique = $usuario->where('username', $this->request->getPost('username'))->first();

            if ($isUnique['firstLogin'] == '0') {
                session()->setFlashdata('error_user','Usuario já existe. Utilize suas credenciais para Login.');
                return redirect()->to(base_url());
            } else {
                $data = [
                    'password'          => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                    'firstLogin'        => '0'
                ];
                // update data
                $usuario->set($data)
                        ->where('id', $isUnique['id'])
                        ->update();
                // return
                session()->setFlashdata('success_user','Utilize suas crendeciais para realizar o Login.');
                return redirect()->to(base_url());
            }
        } else {
            return view('usuario/primeiro_login',[
                'validation' => $this->validator
            ]);
        }
    }

    public function login()
    {
        if ($this->request->getPost()
            && $this->validate([
                'username'      => 'required',
                'password'      => 'required'
            ])
        ) {
            // check DB
            $usuario = new UsuarioModel();
            $isValid = $usuario->where('username', $this->request->getPost('username'))->first();
            if ($isValid) {
                // init session
                $session = session();
                $isAuth = password_verify($this->request->getPost('password'), $isValid['password']);

                if ($isAuth) {
                    $session_user = [
                        'id'            => $isValid['id'],
                        'nome_completo' => $isValid['nome_completo'],
                        'isAdmin'       => $isValid['isAdmin'],
                        'isLogged'      => true
                    ];

                    $session->set($session_user);
                    session()->setFlashdata('success_user','Seja bem vindo ' . $session_user['nome_completo']);
                    return redirect()->to('dashboard');
                } else {
                    $err = 'Verifique sua senha.';
                }
            } else {
                $err = 'Verifique seu nome de usuário.';
            }
            session()->setFlashdata('error_user', $err);
            return redirect()->to(base_url());
        } else {
            return view('index', [
                'validation' => $this->validator
            ]);
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }
}