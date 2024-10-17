<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/testdb', 'TestDB::index');

$routes->get('/', 'C_BASE::Affiche_Index'); 
$routes->get('/organisateurs', 'C_BASE::Affiche_Organisateurs');
$routes->get('/evenements', 'C_BASE::Affiche_Evenements');
$routes->get('/tarifs', 'C_BASE::Affiche_Tarifs');
$routes->get('/contact', 'C_BASE::Affiche_Contact');
$routes->get('/contact_inscription', 'C_BASE::Affiche_Contact_Inscription');

$routes->match(['get', 'post'],'/table_utilisateurs', 'C_BASE::Affiche_Table_Utilisateurs');

$routes->match(['get', 'post'],'/contact_connection', 'C_BASE::Connecte_Contact');
$routes->match(['get', 'post'],'/contact_deconnexion', 'C_BASE::Deconnexion_Utilisateur');
$routes->match(['get', 'post'],'/contact_ajouter', 'C_BASE::Inscription_Utilisateur');

//$routes->get('/api/get_personnes', 'API::Get_Personnes');
$routes->match(['get', 'post'], '/api/contact_connection', 'C_BASE::Connecte_Contact_API');
$routes->match(['get', 'post'],'/api/table_utilisateurs', 'C_BASE::Affiche_Table_Utilisateurs_API');
$routes->post('/logout', 'C_BASE::logout');