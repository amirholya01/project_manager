<?php
    include "Router.php";

    $request = $_SERVER["REQUEST_URI"];
    $router = new Router($request);

    /* Frontend */
    $router->get('/', 'views/frontend/home');
    $router->get('/login', 'views/login/login');
    $router->get('/signup', 'views/login/signup');
    $router->get('/profile', 'views/login/profile');

    /* Admin */
    $router->get('/adminProducts', 'views/backend/home');
    $router->get('/adminUsers', 'views/backend/users');
    $router->get('/adminEditUser', 'views/backend/editUser');
    $router->get('/adminCreateUser', 'views/backend/createUser');
    

