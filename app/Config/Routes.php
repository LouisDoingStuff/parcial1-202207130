<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->resource('integrantes', ['placeholder' =>'(:num)', 'except' => 'show']);


$routes->get('ver_ig','Integrantes::index');
$routes->get('nuevo_ig','Integrantes::nuevoIntegrante');
$routes->post('guardar_ig','Integrantes::guardarIntegrante');
$routes->get('eliminar_ig/(:num)','Integrantes::eliminarIntegrante/$1');
$routes->get('buscar_ig/(:num)','Integrantes::buscarIntegrante/$1');
$routes->post('modificar_ig','Integrantes::modificarIntegrante');
