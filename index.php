<?php
    include "Router.php";

    $request = $_SERVER["REQUEST_URI"];
    $router = new Router($request);

    $router->get('/', 'views/frontend/home');
    $router->get('/p', 'views/frontend/🍍');
    $router->get('/login', 'views/login/login');
    $router->get('/signup', 'views/login/signup');
    $router->get('/profile', 'views/login/profile');

