<?php
    session_start();
    //session_destroy();

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

    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }

    if(!isset($_SESSION["adminLayout"])){
        $_SESSION["adminLayout"] = false;
    }

    if(!isset($_SESSION["savedPost"])){
        $_SESSION["savedPost"] = array(
            'adminEditMedia' => array(),
            'adminEditNews' => array(),
            'adminEditProduct' => array(),
            'adminEditSale' => array(),
            'adminEditUser' => array(),
            'adminFrontpage' => array(),
            'adminMedia' => array(),
            'adminNewOrders' => array(),
            'adminNews' => array(),
            'adminOrders' => array(),
            'adminProducts' => array(),
            'adminUsers' => array(),
            'newsShow' => array(),
            'productSale' => array(),
            'productShow' => array(),
            'productType' => array()
        );
    }

    /* Used in admin page, should probably find a way so customers don't get it */
    if(!isset($_SESSION["pageNr"])){
        $_SESSION["pageNr"] = 0;
        $_SESSION["pageNrName"] = '';
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
    $router->get('/ProductType', 'views/frontend/productType');
    $router->get('/ProductSale', 'views/frontend/productSale');
    $router->get('/AboutUS', 'views/frontend/AboutUS');
    $router->get('/Contact', 'views/frontend/Contact');
    $router->get('/Checkout', 'views/frontend/Checkout');
    $router->get('/ProductShow', 'views/frontend/ProductShow');
    $router->get('/NewsShow', 'views/frontend/NewsShow');
    $router->get('/contactSubmit', 'controllers/contactForm');
    $router->get('/Breadcrumb', 'views/frontend/Breadcrumb');
    $router->get('/removeFromCart', 'controllers/removeFromCart');
    $router->get('/editQuantityInCart', 'controllers/editQuantityInCart');
    $router->get('/purchase', 'views/frontend/purchase');
    $router->get('/addToCart', 'controllers/addToCart');

    /* Admin */
    $router->get('/adminProducts', 'views/backend/products');
    $router->get('/adminUsers', 'views/backend/users');
    $router->get('/adminMedia', 'views/backend/media');
    $router->get('/adminNews', 'views/backend/news');
    $router->get('/adminFrontpage', 'views/backend/frontpage');
    $router->get('/adminOrders', 'views/backend/orders');
    $router->get('/adminNewOrders', 'views/backend/newOrders');

    $router->get('/adminCreateUser', 'views/backend/createUser');
    $router->get('/adminEditUser', 'views/backend/editUser');

    $router->get('/adminCreateProduct', 'views/backend/createProduct');
    $router->get('/adminEditProduct', 'views/backend/editProduct');
    $router->get('/bannerOneImagePicker', 'views/backend/bannerOneImagePicker');
    $router->get('/bannerTwoImagePicker', 'views/backend/bannerTwoImagePicker');

    $router->get('/adminSale', 'views/backend/createSale');
    $router->get('/salesActionDecider', 'controllers/salesActionDecider');
    $router->get('/adminEditSale', 'views/backend/editSale');
    
    $router->get('/adminCreateMedia', 'views/backend/createMedia');
    $router->get('/adminEditMedia', 'views/backend/editMedia');
    
    $router->get('/adminCreateNews', 'views/backend/createNews');
    $router->get('/adminEditNews', 'views/backend/editNews');

    $router->get('/addPayedToOrder', 'controllers/addPayedToOrder');
    $router->get('/addSendToOrder', 'controllers/addSendToOrder');



    $router->get('/adminCreateProductFunction', 'controllers/createProduct');

    $router->get('/adminCreateSaleFunction', 'controllers/createSale');

    $router->get('/adminCreateUserFunction', 'controllers/createUser');

    $router->get('/adminCreateMediaFunction', 'controllers/createMedia');
    $router->get('/adminDeleteMediaFunction', 'controllers/deleteMedia');
    
    $router->get('/adminNewsMediaFunction', 'controllers/createNews');