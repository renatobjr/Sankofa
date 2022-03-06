<?php

namespace App\Controllers;

use App\Models\MatriculaModel;
use App\Models\TabelasAuxiliares;
use App\Models\CadastroReservaModel;

class Matricula extends BaseController
{
    public function matricula()
    {
        return view('matriculas/matricula', $this->data);
    }

    public function cadastro_reserva()
    {
        return view('matriculas/cadastro_reserva', $this->data);
    }

    public function salvar()
    {
        if ($this->request->getPost() 
            && $this->validate([
            // form_beneficiario.php
            'nome_beneficiario'         => 'required',
            'data_nascimento'           => 'required',
            'idade'                     => 'required|numeric',
            'naturalidade'              => 'required',
            'certidao_nascimento'       => 'required',
            'folha_certidao_nascimento' => 'required',
            'nome_escola'               => 'required',
            'livro'                     => 'required',
            'ano_escolar'               => 'required',
            // form_dados_responsavel
            'nome_responsavel'          => 'required',
            'grau_parentesco'          => 'required',
            'nome_mae'                  => 'required',
            'nis'                       => 'required',
            'cpf_responsavel'           => 'required',
            'identidade_responsavel'    => 'required',
            'orgao_emissor_responsavel' => 'required',
            'cep'                       => 'required',
            'endereco'                  => 'required',
            'bairro'                    => 'required',
            'numero'                    => 'required',
            'telefone_contato'          => 'required',
            // form_socio_economicos
            'composicao_familiar'               => 'required',
            'quantidade_atividades_laborativas' => 'required',
            'quantidade_vinculo_empregaticio'   => 'required',
            'renda_total'                       => 'required',
            // form_documentos
            'documentos_digitalizados_arquivo'  => 'required'
        ])
        ) {
            $matricula = new MatriculaModel();
            $data = [
                'nome_beneficiario'                     => $this->request->getPost('nome_beneficiario'),
                'nome_mae'                              => $this->request->getPost('nome_mae'),
                'data_nascimento'                       => date('Y-m-d', strtotime(str_replace("/","-",$this->request->getPost('data_nascimento')))),
                'etnia'                                 => $this->request->getPost('etnia'),
                'idade'                                 => $this->request->getPost('idade'),
                'sexo'                                  => $this->request->getPost('sexo'),
                'naturalidade'                          => $this->request->getPost('naturalidade'),
                'uf'                                    => $this->request->getPost('uf'),
                'certidao_nascimento'                   => $this->request->getPost('certidao_nascimento'),
                'folha_certidao_nascimento'             => $this->request->getPost('folha_certidao_nascimento'),
                'livro'                                 => $this->request->getPost('livro'),
                'pessoa_deficiencia'                    => $this->request->getPost('pessoa_deficiencia'),
                'tipo_deficiencia'                      => $this->request->getPost('tipo_deficiencia'),
                'nome_escola'                           => $this->request->getPost('nome_escola'),
                'nivel_escolaridade'                    => $this->request->getPost('nivel_escolaridade'),
                'ano_escolar'                           => $this->request->getPost('ano_escolar'),
                'turno'                                 => $this->request->getPost('turno'),
                'eja'                                   => $this->request->getPost('eja'),
                'confirma_vacina'                       => $this->request->getPost('confirma_vacina'),
                'turma'                                 => $this->request->getPost('turma'),
                'documentos_digitalizados'              => $this->request->getFile('documentos_digitalizados'),
                'auxilio_brasil'                        => $this->request->getPost('auxilio_brasil') == 'on' ? 1 : 2,
                'servico_socioassistencial'             => $this->request->getPost('servico_socioassistencial') == 'on' ? 1 : 2,
                'servico_socioassistencial_positivo'    => $this->request->getPost('servico_socioassistencial_positivo'),
                'nome_responsavel'                      => $this->request->getPost('nome_responsavel'),
                'nis'                                   => $this->request->getPost('nis'),
                'cpf_responsavel'                       => $this->request->getPost('cpf_responsavel'),
                'identidade_responsavel'                => $this->request->getPost('identidade_responsavel'),
                'orgao_emissor_responsavel'             => $this->request->getPost('orgao_emissor_responsavel'),
                'cep'                                   => $this->request->getPost('cep'),
                'endereco'                              => $this->request->getPost('endereco'),
                'numero'                                => $this->request->getPost('numero'),
                'bairro'                                => $this->request->getPost('bairro'),
                'tipo_moradia'                          => $this->request->getPost('tipo_moradia'),
                'telefone_contato'                      => $this->request->getPost('telefone_contato'),
                'composicao_familiar'                   => $this->request->getPost('composicao_familiar'),
                'quantidade_atividades_laborativas'     => $this->request->getPost('quantidade_atividades_laborativas'),
                'quantidade_vinculo_empregaticio'       => $this->request->getPost('quantidade_vinculo_empregaticio'),
                'beneficio_familia'                     => $this->request->getPost('beneficio_familia'),
                'descricao_beneficios'                  => $this->request->getPost('descricao_beneficios'),
                'renda_total'                           => $this->request->getPost('renda_total'),
                'grau_parentesco'                       => $this->request->getPost('grau_parentesco'),
                'turma'                                 => $this->request->getPost('turma'),
                'observacoes'                           => $this->request->getPost('observacoes'),
                'criado_por'                            => $_SESSION['id']
            ];
            
            // Counting matriculas
            $turmas = new TabelasAuxiliares();
            $total = $turmas->countMatriculas($data['turma']);
            // Verifing
            if ($total['totalAlunos'] >= 20) {
                // Return data
                session()->setFlashdata('modal_error','total');
                return view('matriculas/matricula', $this->data);
            } else {
                // // read and save pdf files
                $nomeArquivo = $data['documentos_digitalizados']->getRandomName(); 
                $data['documentos_digitalizados']->move('../public/docs', $nomeArquivo);
                $data['documentos_digitalizados'] = $nomeArquivo;

                // Save data
                $matricula->save($data);
                $id_matricula = $matricula->getInsertID();

                // Increment...
                $total = $matricula->countMatriculas($data['turma']);
                $turmas->addTotalAlunos($data['turma'],$total);
                    
                // Return data
                session()->setFlashdata('modal_success',$id_matricula);
                return redirect()->to(base_url('dashboard'));
            }
            
        } else {
            return view('matriculas/matricula',
                $this->data,
                [ 
                    'validation' => $this->validator, 
                ]
            );
        } 
    }

    public function reservar() {
        if ($this->request->getPost()
            && $this->validate([
              'nome_beneficiario' => 'required',  
              'telefone_contato' => 'required',  
              'observacoes' => 'required',  
            ])
        ) {
            $reserva = new CadastroReservaModel();
            $data = [
                'nome_beneficiario' => $this->request->getPost('nome_beneficiario'),  
                'telefone_contato' => $this->request->getPost('telefone_contato'),  
                'observacoes' => $this->request->getPost('observacoes'),
            ];
            $reserva->save($data);
            session()->setFlashdata('success','Reserva realizada com sucesso');            
            return redirect()->to(base_url('dashboard'));            
        } else {
            return view('/matriculas/cadastro_reserva',
                $this->data,
                [
                    'validation' => $this->validator
                ]
            );
        }
    }

    public function comprovante_matricula($id)
    {
        $matricula = new MatriculaModel();

        $data['aluno'] = $matricula->getMatricula($id);
        return view('matriculas/comprovante_matricula', $data);
    }

    public function lista_turma($turma, $descricao)
    {   $matricula = new MatriculaModel();

        $data['descricao'] = $descricao;
        $data['lista'] = $matricula->getMatriculasTurma($turma);
        return view('matriculas/lista_turma', $data);

    }
}