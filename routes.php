<?php
//
require_once(__DIR__.'/router.php');
// #####################################
// #####################################
// #####################################
// #####################################
//get('/login', '/index.php');
//altering the below line so it also routes to the root yellowmellow.indraja.dk, not only yellowmellow.indraja.dk/index.php
get('/', 'index.php');
get('/signup', '/verify-user.php');
get('/home', '/home.php');


// #####################################
// #####################################
// #####################################
// #####################################


any('/404','/page_404.php');
