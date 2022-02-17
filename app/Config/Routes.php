<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::dashboard', ['filter' => 'authGuard']);
// Matriculas
$routes->get('/dashboard/matricula', 'Matricula::matricula', ['filter' => 'authGuard']);
$routes->get('/dashboard/matricula/comprovante_matricula/(:any)','Matricula::comprovante_matricula/$1', ['filter' => 'authGuard']);
$routes->get('/dashboard/lista-turma/(:any)/(:any)', 'Matricula::lista_turma/$1/$2', ['filter' => 'authGuard']);
$routes->match(['get','post'],'/dashboard/matricula/salvar','Matricula::salvar', ['filter' => 'authGuard']);
// Usuarios
$routes->get('/primeiro-login', 'Usuario::primeiro_login');
$routes->get('/dashboard/novo-usuario', 'Usuario::novoUsuario', ['filter' => 'authGuard']);
$routes->get('/dashboard/logout', 'Usuario::logout', ['filter' => 'authGuard']);
$routes->match(['get','post'],'/login', 'Usuario::login');
$routes->match(['get','post'],'/primeiro-login/registrar', 'Usuario::registrar');
$routes->match(['get','post'],'/dashboard/usuario/salvar', 'Usuario::salvar', ['filter' => 'authGuard']);
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
