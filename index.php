<?php

require ("core/router.php");
require ("Controller/UserController.php");
require ("Model/purpose.php");

session_start();

$controller = new Controller();
$router = new router();

$router->get('/','list');
$router->post('/login','login');
$router->post('/logout','logout');
$router->post('/addPlaylist','addPlaylist');
$router->post('/addArtist','addArtist');




$router->routing();