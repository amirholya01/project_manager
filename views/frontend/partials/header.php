<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheCustomTies</title>

    <link href="https://fonts.googleapis.com/css?family=Questrial|Raleway:700,900" rel="stylesheet">

    <link href="<?php echo BASE_URL ?>/views/frontend/partials/css/bootstrap.extension.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>/views/frontend/partials/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>/views/frontend/partials/css/style.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>/views/frontend/partials/css/swiper.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>/views/frontend/partials/css/sumoselect.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>/views/frontend/partials/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="assets/img/favicon.ico">

</head>

<style>
nav>ul>li>a:hover,
nav>ul>li.active>a {
    background-color: #B2A6CE;
}

.swiper-pagination-bullet-active {
    border: 2px #B2A6CE solid;
}

.header-top .cart-toggle,
.megamenu {
    border-top: 5px #B2A6CE solid;
}

.button.style-3 {
    background: #B2A6CE;
}

.checkbox-entry input:checked+span::before {
    border-color: #B2A6CE;
    background-color: #B2A6CE;
}

.header-top a:hover,
.header-top a:hover .fa,
.header-top a:hover b {
    color: #B2A6CE;
}

.simple-input:focus,
.SumoSelect.open>.CaptionCont {
    border-color: #B2A6CE;
}

.SumoSelect>.optWrapper>.options li.opt.selected:not(.disabled) {
    background-color: #B2A6CE;
}

.SumoSelect>.optWrapper>.options li.opt:hover {
    background-color: #B2A6CE;
}

.button-close {
    background: url(../../../assets/img/icon-5.png) 50% 50% no-repeat !important;
}

button {
    border: none !important;
}

.simple-article h1 a:hover,
.h1 a:hover,
.simple-article h2 a:hover,
.h2 a:hover,
.simple-article h3 a:hover,
.h3 a:hover,
.simple-article h4 a:hover,
.h4 a:hover,
.simple-article h5 a:hover,
.h5 a:hover,
.simple-article h6 a:hover,
.h6 a:hover {
    color: #B2A6CE !important;
}

.product-shortcode:hover .animate-to-green {
    color: #B2A6CE;
}

.product-shortcode.style-7 .product-label {
    top: 19px;
}

.swiper-wrapper {
    cursor: url(../../../assets/img/drag.png) 16 9, ew-resize;
}

.slider-product-preview {
    top: 55px;
    bottom: 55px;
}

.slider-product-preview>img {
    left: 60%;
}

.simple-article.light ul li::before {
    background-image: url(../../../assets/img/icon-21.png);
}

.slider-2-img {
    left: 40% !important;
}

.ProductShow-container {
    padding: 0 100px 0 30px !important;
}

.Related-ProductShow-container {
    padding: 0 150px !important;
}

.title-underline {
    color: #B2A6CE;
}

.product-shortcode .icons .entry:hover {
    background: #B2A6CE;
    border-color: #B2A6CE;
}
.breadcrumbs{
    margin-left: 20px;
}
</style>


<body>

    <div id="content-block">
        <!-- Header - Navigation -->
        <header>
            <div class="header-top">
                <div class="content-margins">
                    <div class="row">
                        <!-- HEADER Contact - Email -->
                        <div class="col-md-5 hidden-xs hidden-sm">
                            <div class="entry"><b>contact us:</b> <a href="tel:+35235551238745">+3 (523) 555 123
                                    8745</a></div>
                            <div class="entry"><b>email:</b> <a href="mailto:office@exzo.com">office@exzo.com</a></div>
                        </div>
                        <!-- HEADER Login/Register - Liked products - Your Bag -->
                        <div class="col-md-7 col-md-text-right">
                            <div class="entry"><a class="open-popup" data-rel="1"><b>login</b></a>&nbsp; or &nbsp;<a
                                    class="open-popup" data-rel="2"><b>register</b></a></div>
                            <div class="entry hidden-xs hidden-sm"><a href="#"><i class="fa fa-heart-o"
                                        aria-hidden="true"></i></a></div>
                            <div class="entry hidden-xs hidden-sm cart">
                                <a href="Checkout">
                                    <b class="hidden-xs">Your bag</b>
                                    <span class="cart-icon">
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        <span class="cart-label">5</span>
                                    </span>
                                    <span class="cart-title hidden-xs">$1195.00</span>
                                </a>
                                <div class="cart-toggle hidden-xs hidden-sm">
                                    <div class="cart-overflow">
                                        <div class="cart-entry clearfix">
                                            <a class="cart-entry-thumbnail" href="#"><img src="assets/img/product-1.png"
                                                    alt="" /></a>
                                            <div class="cart-entry-description">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="h6"><a href="#">modern beat ht</a></div>
                                                            <div class="simple-article size-1">QUANTITY: 2</div>
                                                        </td>
                                                        <td>
                                                            <div class="simple-article size-3 grey">$155.00</div>
                                                            <div class="simple-article size-1">TOTAL: $310.00</div>
                                                        </td>
                                                        <td>
                                                            <div class="cart-color" style="background: #eee;"></div>
                                                        </td>
                                                        <td>
                                                            <div class="button-close"></div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="cart-entry clearfix">
                                            <a class="cart-entry-thumbnail" href="#"><img src="assets/img/product-2.png"
                                                    alt="" /></a>
                                            <div class="cart-entry-description">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="h6"><a href="#">modern beat ht</a></div>
                                                            <div class="simple-article size-1">QUANTITY: 2</div>
                                                        </td>
                                                        <td>
                                                            <div class="simple-article size-3 grey">$155.00</div>
                                                            <div class="simple-article size-1">TOTAL: $310.00</div>
                                                        </td>
                                                        <td>
                                                            <div class="cart-color" style="background: #bf584b;"></div>
                                                        </td>
                                                        <td>
                                                            <div class="button-close"></div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="cart-entry clearfix">
                                            <a class="cart-entry-thumbnail" href="#"><img src="assets/img/product-3.png"
                                                    alt="" /></a>
                                            <div class="cart-entry-description">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="h6"><a href="#">modern beat ht</a></div>
                                                            <div class="simple-article size-1">QUANTITY: 2</div>
                                                        </td>
                                                        <td>
                                                            <div class="simple-article size-3 grey">$155.00</div>
                                                            <div class="simple-article size-1">TOTAL: $310.00</div>
                                                        </td>
                                                        <td>
                                                            <div class="cart-color" style="background: #facc22;"></div>
                                                        </td>
                                                        <td>
                                                            <div class="button-close"></div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-space col-xs-b40"></div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="cell-view empty-space col-xs-b50">
                                                <div class="simple-article size-5 grey">TOTAL <span
                                                        class="color">$1195.00</span></div>
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
                            <a id="logo" href="/"><img src="assets/img/logo-2.png" alt="" /></a>
                        </div>
                        <div class="col-xs-9 col-sm-11 text-right">
                            <div class="nav-wrapper">
                                <div class="nav-close-layer"></div>
                                <nav>
                                    <ul>
                                        <li class="active">
                                            <a href="/">Home</a>
                                        </li>
                                        <li class="megamenu-wrapper">
                                            <a href="Product">products</a>
                                        </li>
                                        <li>
                                            <a href="AboutUS">about us</a>
                                        </li>
                                        <li>
                                            <a href="Contact">contact</a>
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
                            <div class="header-bottom-icon toggle-search"><i class="fa fa-search"
                                    aria-hidden="true"></i></div>
                            <div class="header-bottom-icon visible-rd"><i class="fa fa-heart-o" aria-hidden="true"></i>
                            </div>
                            <div class="header-bottom-icon visible-rd">
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                <span class="cart-label">5</span>
                            </div>
                        </div>
                    </div>
                    <div class="header-search-wrapper">
                        <div class="header-search-content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
                                        <form>
                                            <div class="search-submit">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                                <input type="submit" />
                                            </div>
                                            <input class="simple-input style-1" type="text" value=""
                                                placeholder="Enter keyword" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="button-close"></div>
                        </div>
                    </div>
                </div>
            </div>

        </header>