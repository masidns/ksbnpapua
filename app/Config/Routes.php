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
$routes->setDefaultController('ksbn');
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
$routes->get('/', 'Ksbn::index');
$routes->get('/auth', 'Auth::index');
// profil
$routes->get('/profil', 'Profil::index', ['filter' => 'Authcek']);
$routes->get('/profil/create', 'Profil::create', ['filter' => 'Authcek']);
$routes->post('/profil/save', 'Profil::save', ['filter' => 'Authcek']);
$routes->get('/profil/update/(:num)', 'Profil::update/$1', ['filter' => 'Authcek']);
// news
$routes->get('/newsevent', 'Newsevent::index', ['filter' => 'Authcek']);
$routes->get('/newsevent/create', 'Newsevent::create', ['filter' => 'Authcek']);
$routes->get('/newsevent/detail/(:any)', 'Newsevent::detail/$1', ['filter' => 'Authcek']);
$routes->get('/newsevent/update/(:any)', 'Newsevent::update/$1', ['filter' => 'Authcek']);
$routes->post('/newsevent/save', 'Newsevent::save', ['filter' => 'Authcek']);
$routes->post('/newsevent/updating/(:any)', 'Newsevent::updating/$1', ['filter' => 'Authcek']);
$routes->delete('/newsevent/delete/(:num)', 'Newsevent::detail/$1', ['filter' => 'Authcek']);
// gallery
$routes->get('/gallery', 'Gallery::index', ['filter' => 'Authcek']);
$routes->get('/gallery/create', 'Gallery::create', ['filter' => 'Authcek']);
$routes->post('/gallery/updatefoto/$id', 'Gallery::updatefoto/$1', ['filter' => 'Authcek']);
$routes->get('/videogallery', 'Videogallery::index', ['filter' => 'Authcek']);


// web ksbn
$routes->get('/berita', 'Ksbn::berita');
$routes->get('/pengumuman', 'Ksbn::pengumuman');
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
