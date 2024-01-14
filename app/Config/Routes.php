<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('PostController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

$routes->get('/', 'Home::index');
$routes->get('profil', 'Home::profil');
$routes->get('home', 'Home::home');
$routes->post('login', 'Home::login');
$routes->get('TambahProduct', 'Home::tambahproduct');
$routes->get('TambahProduct/:any', 'Home::editproduct');
$routes->get('tambahdataproduct', 'Home::tambahdataproduct');
$routes->get('getListProductbyid', 'Home::editbyproduct');
$routes->get('getListProduct', 'Home::getListProduct');
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
