<?php
    session_start();
    /* session_destroy(); */

    include "public/host.php";
    /*
        Make a file called host.php in public
        and past this in there and change the url
        to whatever url you use

        define("BASE_URL", "//URL//");

        Example:
        <?php
        define("BASE_URL", "http://bowtie.test");
    */

    include "public/Router.php";

    if(!isset($_SESSION['breadcrumbs'])){
        $_SESSION['breadcrumbs'] = array();
        $_SESSION['breadcrumbsLinks'] = array();
        $_SESSION['breadcrumbsLevels'] = array();
        $_SESSION['prevpage']= "";
    }

    $request = $_SERVER["REQUEST_URI"];
    $router = new Router($request);

    /* Frontend */
    $router->get('/', 'views/frontend/Home');
    //$router->get('/login', 'views/login/login');
    //$router->get('/signup', 'views/login/signup');
    $router->get('/profile', 'views/login/profile');
    $router->get('/editProfileFunction', 'controllers/editProfile');
    $router->get('/loginFunction', 'controllers/login');
    $router->get('/signupFunction', 'controllers/signup');
    $router->get('/logoutFunction', 'controllers/logout');
    $router->get('/Product', 'views/frontend/Product');
    $router->get('/AboutUS', 'views/frontend/AboutUS');
    $router->get('/Contact', 'views/frontend/Contact');
    $router->get('/Checkout', 'views/frontend/Checkout');
    $router->get('/ProductShow', 'views/frontend/ProductShow');
    $router->get('/Breadcrumb', 'views/frontend/Breadcrumb');

    /* Admin */
    $router->get('/adminProducts', 'views/backend/products');
    $router->get('/adminUsers', 'views/backend/users');
    $router->get('/adminMedia', 'views/backend/media');
    $router->get('/adminNews', 'views/backend/news');

    $router->get('/adminCreateUser', 'views/backend/createUser');
    $router->get('/adminEditUser', 'views/backend/editUser');

    $router->get('/adminCreateProduct', 'views/backend/createProduct');
    $router->get('/adminEditProduct', 'views/backend/editProduct');
    $router->get('/adminSale', 'views/backend/createSale');
    
    $router->get('/adminCreateMedia', 'views/backend/createMedia');
    $router->get('/adminEditMedia', 'views/backend/editMedia');
    
    $router->get('/adminCreateNews', 'views/backend/createNews');
    $router->get('/adminEditNews', 'views/backend/editNews');
    

