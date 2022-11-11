<?php
    define("BASE_URL", "http://bowtie.test");

    include "Router.php";

    $request = $_SERVER["REQUEST_URI"];
    $router = new Router($request);

    /* Frontend */
    $router->get('/', 'views/frontend/home');
    $router->get('/login', 'views/login/login');
    $router->get('/signup', 'views/login/signup');
    $router->get('/profile', 'views/login/profile');
    $router->get('/Product', 'views/frontend/Product');
    $router->get('/AboutUS', 'views/frontend/AboutUS');
    $router->get('/Contact', 'views/frontend/Contact');
    $router->get('/Checkout', 'views/frontend/Checkout');

    /* Admin */
    $router->get('/adminProducts', 'views/backend/products');
    $router->get('/adminUsers', 'views/backend/users');

    $router->get('/adminEditUser', 'views/backend/editUser');
    $router->get('/adminCreateUser', 'views/backend/createUser');

    $router->get('/adminEditProduct', 'views/backend/editProduct');
    $router->get('/adminCreateProduct', 'views/backend/createProduct');
    

