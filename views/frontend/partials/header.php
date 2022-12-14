<?php
    require_once $rootPath . "models/handlers/frontpageHandler.php"; 
    require_once $rootPath . "models/handlers/ProductsHandler.php"; 

    require_once $rootPath . "security/stringSanitation.php";
    
    require_once $rootPath . "controllers/frontpage.php";
    require_once $rootPath . "controllers/cartManager.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheCustomTies</title>

    <link href="https://fonts.googleapis.com/css?family=Questrial|Raleway:700,900" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>/views/frontend/partials/css/TheCostumCSS.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>/views/frontend/partials/css/bootstrap.extension.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>/views/frontend/partials/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>/views/frontend/partials/css/style.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>/views/frontend/partials/css/swiper.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>/views/frontend/partials/css/sumoselect.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>/views/frontend/partials/css/font-awesome.min.css" rel="stylesheet">


</head>


<body>

    <div id="content-block">

        <!-- Header - Navigation -->
        <header>
            <div class="header-top">
                <div class="content-margins">
                    <div class="row">

                        <!-- HEADER Contact - Email -->
                        <div class="col-md-5 hidden-xs hidden-sm">
                            <div class="entry">
                                <b>contact us:</b>
                                <a href="tel:+4553525239"><?php echo $phone ?></a>
                            </div>
                            <div class="entry">
                                <b>email:</b> 
                                <a href="mailto:thecostumebowtie@gmail.com"><?php echo $email ?></a>
                            </div>
                        </div>

                        <!-- HEADER Login/Register - Shooping Bag -->
                        <div class="col-md-7 col-md-text-right">
                            <?php
                                if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
                            ?>
                                    <div class="entry">
                                        <a class="open-popup" data-rel="1"><b>login</b></a>
                                        &nbsp; or &nbsp;
                                        <a class="open-popup" data-rel="2"><b>register</b></a>
                                    </div>
                            <?php
                                } else {
                            ?>
                                    <div class="entry">
                                        <?php
                                            if ($_SESSION["adminLayout"] == true){
                                        ?>
                                        <a href="/adminFrontpage"><b>Admin Page</b></a>
                                        &nbsp; or &nbsp;
                                        <?php
                                            }
                                        ?>
                                        <a href="/logoutFunction"><b>Log out</b></a>
                                    </div>
                            <?php
                                }
                            ?>

                            <div class="entry hidden-xs hidden-sm cart">

                                <a href="Checkout">
                                    <b class="hidden-xs">Your bag</b>
                                    <?php
                                        $amountOfItems = 0;
                                        foreach($cart as $item){
                                            $amountOfItems += $item['quantity'];
                                        }
                                    ?>
                                    <span class="cart-icon">
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        <span class="cart-label"><?php echo $amountOfItems ?></span>
                                    </span>
                                    <span class="cart-title hidden-xs"><?php echo $total ?> DKK</span>
                                </a>

                                <div class="cart-toggle hidden-xs hidden-sm">
                                    <div class="cart-overflow">

                                        <?php
                                            foreach($cart as $item){
                                        ?>
                                        <div class="cart-entry clearfix">
                                            <?php $image = explode(".", $item['product'][0]['primary_image']) ?>
                                            <a class="cart-entry-thumbnail Cart-image" href="#">
                                                <img src="uploads/thumbs/<?php echo $image[0] . "_thumb." . $image[1] ?>" alt="" />
                                            </a>

                                            <div class="cart-entry-description">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="h6"><a href="#"><?php echo $item['product'][0]['name'] ?></a></div>
                                                            <div class="simple-article size-1">QUANTITY: <?php echo $item['quantity'] ?></div>
                                                        </td>
                                                        <td>
                                                            <div class="simple-article size-3 grey black"><?php echo $item['product'][0]['price'] ?> DKK</div>
                                                            <div class="simple-article size-1">TOTAL: <?php print_r( $item['total']) ?> DKK</div>
                                                        </td>
                                                        <td>
                                                            <form action="/removeFromCart" method="POST">
                                                                <input type="hidden" name="id" value="<?php print_r($item['product'][0]['products_id']) ?>">
                                                                <button class="button-shoping-cart" type="submit">X</button>
                                                            </form>
                                                            <form action="/editQuantityInCart" method="POST">
                                                                <input type="hidden" name="id" value="<?php print_r($item['product'][0]['products_id']) ?>">
                                                                <input class="number-shopin-cart" type="number" name="quantity" value="<?php echo $item['quantity'] ?>">
                                                                <button class="button-shoping-cart" type="submit">edit</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                    <div class="empty-space col-xs-b40"></div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="cell-view empty-space col-xs-b50">
                                                <div class="simple-article size-5 grey"> TOTAL
                                                    <span class="color"><?php echo $total ?> DKK</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <a class="button size-2 style-3" href="Checkout">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="assets/img/icon-4.png" alt=""></span>
                                                    <span class="text">proceed to checkout</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- -Main Navigation -->
            <div class="header-bottom">
                <div class="content-margins">
                    <div class="row">
                        <div class="col-xs-3 col-sm-1">
                            <a id="logo" href="/"><img src="assets/icons/logo-2.png" alt="" /></a>
                        </div>
                        <div class="col-xs-9 col-sm-11 text-right">
                            <div class="nav-wrapper">
                                <div class="nav-close-layer"></div>
                                <nav>
                                    <ul>
                                        <li <?php echo $pageName == "Home" ? 'class="active"' : "" ?>>
                                            <a href="/"><?php echo $nav1 ?></a>
                                        </li>
                                        <li style="margin-left: 2px;" <?php echo $pageName == "Product" ? 'class="active"' : "" ?>>
                                            <a href="Product"><?php echo $nav2 ?></a>
                                        </li>
                                        <li style="margin-left: 2px;" <?php echo $pageName == "About Us" ? 'class="active"' : "" ?>>
                                            <a href="AboutUS"><?php echo $nav3 ?></a>
                                        </li>
                                        <li style="margin-left: 2px;" <?php echo $pageName == "Contact Us" ? 'class="active"' : "" ?>>
                                            <a href="Contact"><?php echo $nav4 ?></a>
                                        </li>
                                    </ul>
                                    <div class="navigation-title">
                                        Navigation
                                        <div class="hamburger-icon active">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <div class="header-bottom-icon visible-rd"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
                            <div class="header-bottom-icon visible-rd">
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                <span class="cart-label">5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>