<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    
    $pageName = "Product-Show";
    $pageLink = "/ProductShow";
    $pageLevel = 3;

    require $rootPath . "views/frontend/partials/header.php";
    require_once $rootPath . "views/frontend/Breadcrumb.php";
    require_once $rootPath . "models/handlers/ProductsHandler.php";
?>

<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>


<div class="row ProductShow-container">
    <div class="col-sm-6 col-xs-b30 col-sm-b0">

        <div class="breadcrumbs">
            <?php 
            for($i = 0; $i < count($_SESSION['breadcrumbs']); $i++){
                $link = $_SESSION['breadcrumbsLinks'][$i];
                echo "<a class='breadcrumb-flex' href='$link'> ".$_SESSION['breadcrumbs'][$i]."</a>";
            }
            ?>
        </div>

        <div class="main-product-slider-wrapper swipers-couple-wrapper">
            <div class="swiper-container swiper-control-top">
                <div class="swiper-button-prev hidden"></div>
                <div class="swiper-button-next hidden"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-lazy-preloader"></div>
                        <div class="product-big-preview-entry swiper-lazy"
                            data-background="uploads/<?php echo $_POST['primary_image'] ?>"></div>
                    </div>
                    <?php
                        /* Get medias */

                        $medias = $ProductsHandler->getAssignedMediaToProductsByProductId($_POST['id']);

                        /* foreach... */
                        foreach($medias as $media){
                    ?>
                            <div class="swiper-slide">
                                <div class="swiper-lazy-preloader"></div>
                                <div class="product-big-preview-entry swiper-lazy"
                                    data-background="uploads/<?php echo $media[0] ?>"></div>
                            </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>

    </div>
    <div class="col-sm-6">
        <div class="simple-article size-3 grey col-xs-b5"><?php echo $_POST['type'] ?></div>
        <div class="h3 col-xs-b25"><?php echo $_POST['name'] ?></div>
        <div class="row col-xs-b25">
            <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color"><?php echo $_POST['price'] ?>DKK</span></div>
            </div>
        </div>
        <div class="simple-article size-3 col-xs-b30">
            <?php echo $_POST['description'] ?>
        </div>
        <div class="row col-xs-b40">
            <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">quantity:</div>
            </div>
            <div class="col-sm-9">
                <div class="quantity-select">
                    <span class="minus"></span>
                    <span class="number">1</span>
                    <span class="plus"></span>
                </div>
            </div>
        </div>
        <div class="row m5 col-xs-b40">
            <div class="col-sm-6 col-xs-b10 col-sm-b0">
                <a class="button size-2 style-2 block" href="#">
                    <span class="button-wrapper">
                        <span class="icon"><img src="assets/img/icon-2.png" alt=""></span>
                        <span class="text">add to cart</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="empty-space col-xs-b35 col-md-b70"></div>


<div class="row Related-ProductShow-container">
    <div class="swiper-container arrows-align-top" data-breakpoints="1" data-xs-slides="1" data-sm-slides="3"
        data-md-slides="4" data-lt-slides="4" data-slides-per-view="5">
        <div class="h4 swiper-title">Related products</div>
        <div class="empty-space col-xs-b20"></div>

        <div class="swiper-button-prev style-1"></div>
        <div class="swiper-button-next style-1"></div>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="product-shortcode style-1 small">
                    <div class="title">
                        <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                        <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                    </div>
                    <div class="preview">
                        <img src="assets/img/product-49.jpg" alt="">
                        <div class="preview-buttons valign-middle">
                            <div class="valign-middle-content">
                                <a class="button size-2 style-2" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                        <span class="text">Learn More</span>
                                    </span>
                                </a>
                                <a class="button size-2 style-3" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><img src="assets/img/icon-3.png" alt=""></span>
                                        <span class="text">Add To Cart</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <div class="simple-article size-4 dark">$630.00</div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="product-shortcode style-1 small">
                    <div class="title">
                        <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                        <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                    </div>
                    <div class="preview">
                        <img src="assets/img/product-50.jpg" alt="">
                        <div class="preview-buttons valign-middle">
                            <div class="valign-middle-content">
                                <a class="button size-2 style-2" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                        <span class="text">Learn More</span>
                                    </span>
                                </a>
                                <a class="button size-2 style-3" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><img src="assets/img/icon-3.png" alt=""></span>
                                        <span class="text">Add To Cart</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <div class="simple-article size-4 dark">$630.00</div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="product-shortcode style-1 small">
                    <div class="title">
                        <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                        <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                    </div>
                    <div class="preview">
                        <img src="assets/img/product-51.jpg" alt="">
                        <div class="preview-buttons valign-middle">
                            <div class="valign-middle-content">
                                <a class="button size-2 style-2" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                        <span class="text">Learn More</span>
                                    </span>
                                </a>
                                <a class="button size-2 style-3" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><img src="assets/img/icon-3.png" alt=""></span>
                                        <span class="text">Add To Cart</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <div class="simple-article size-4 dark">$630.00</div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="product-shortcode style-1 small">
                    <div class="title">
                        <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                        <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                    </div>
                    <div class="preview">
                        <img src="assets/img/product-52.jpg" alt="">
                        <div class="preview-buttons valign-middle">
                            <div class="valign-middle-content">
                                <a class="button size-2 style-2" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                        <span class="text">Learn More</span>
                                    </span>
                                </a>
                                <a class="button size-2 style-3" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><img src="assets/img/icon-3.png" alt=""></span>
                                        <span class="text">Add To Cart</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <div class="simple-article size-4 dark">$630.00</div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="product-shortcode style-1 small">
                    <div class="title">
                        <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                        <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                    </div>
                    <div class="preview">
                        <img src="assets/img/product-53.jpg" alt="">
                        <div class="preview-buttons valign-middle">
                            <div class="valign-middle-content">
                                <a class="button size-2 style-2" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                        <span class="text">Learn More</span>
                                    </span>
                                </a>
                                <a class="button size-2 style-3" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><img src="vimg/icon-3.png" alt=""></span>
                                        <span class="text">Add To Cart</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <div class="simple-article size-4 dark">$630.00</div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="product-shortcode style-1 small">
                    <div class="title">
                        <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                        <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                    </div>
                    <div class="preview">
                        <img src="assets/img/product-54.jpg" alt="">
                        <div class="preview-buttons valign-middle">
                            <div class="valign-middle-content">
                                <a class="button size-2 style-2" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                        <span class="text">Learn More</span>
                                    </span>
                                </a>
                                <a class="button size-2 style-3" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><img src="assets/img/icon-3.png" alt=""></span>
                                        <span class="text">Add To Cart</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <div class="simple-article size-4 dark">$630.00</div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="product-shortcode style-1 small">
                    <div class="title">
                        <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                        <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                    </div>
                    <div class="preview">
                        <img src="assets/img/product-55.jpg" alt="">
                        <div class="preview-buttons valign-middle">
                            <div class="valign-middle-content">
                                <a class="button size-2 style-2" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                        <span class="text">Learn More</span>
                                    </span>
                                </a>
                                <a class="button size-2 style-3" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><img src="assets/img/icon-3.png" alt=""></span>
                                        <span class="text">Add To Cart</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <div class="simple-article size-4 dark">$630.00</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination relative-pagination visible-xs"></div>
    </div>
</div>



<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>

<?php 
    require $rootPath . "views/frontend/partials/footer.php";
?>