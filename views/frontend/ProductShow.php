<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    
    require $rootPath . "views/frontend/partials/header.php";
?>

<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>


<div class="row ProductShow-container">
    <div class="col-sm-6 col-xs-b30 col-sm-b0">

        <div class="breadcrumbs">
            <a href="/">home</a>
            <a href="Product">Products</a>
            <a href="ProductShow">Product-Show</a>
        </div>

        <div class="main-product-slider-wrapper swipers-couple-wrapper">
            <div class="swiper-container swiper-control-top">
                <div class="swiper-button-prev hidden"></div>
                <div class="swiper-button-next hidden"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-lazy-preloader"></div>
                        <div class="product-big-preview-entry swiper-lazy"
                            data-background="assets/img/product-preview-4.png"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-lazy-preloader"></div>
                        <div class="product-big-preview-entry swiper-lazy"
                            data-background="assets/img/product-preview-5.png"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-lazy-preloader"></div>
                        <div class="product-big-preview-entry swiper-lazy"
                            data-background="assets/img/product-preview-6.jpg"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-lazy-preloader"></div>
                        <div class="product-big-preview-entry swiper-lazy"
                            data-background="assets/img/product-preview-7.jpg"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-lazy-preloader"></div>
                        <div class="product-big-preview-entry swiper-lazy"
                            data-background="assets/img/product-preview-8.png"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-lazy-preloader"></div>
                        <div class="product-big-preview-entry swiper-lazy"
                            data-background="assets/img/product-preview-9.jpg"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-lazy-preloader"></div>
                        <div class="product-big-preview-entry swiper-lazy"
                            data-background="assets/img/product-preview-10.jpg"></div>
                    </div>
                </div>
            </div>

            <div class="empty-space col-xs-b30 col-sm-b60"></div>

            <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3"
                data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1"
                data-click="1">
                <div class="swiper-button-prev hidden"></div>
                <div class="swiper-button-next hidden"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-small-preview-entry">
                            <img src="assets/img/product-preview-4_.jpg" alt="" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-small-preview-entry">
                            <img src="assets/img/product-preview-5_.jpg" alt="" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-small-preview-entry">
                            <img src="assets/img/product-preview-6_.jpg" alt="" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-small-preview-entry">
                            <img src="assets/img/product-preview-7_.jpg" alt="" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-small-preview-entry">
                            <img src="assets/img/product-preview-8_.jpg" alt="" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-small-preview-entry">
                            <img src="assets/img/product-preview-9_.jpg" alt="" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-small-preview-entry">
                            <img src="assets/img/product-preview-10_.jpg" alt="" />
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="col-sm-6">
        <div class="simple-article size-3 grey col-xs-b5">SMART WATCHES</div>
        <div class="h3 col-xs-b25">watch 42mm smartwatch</div>
        <div class="row col-xs-b25">
            <div class="col-sm-6">
                <div class="simple-article size-5 grey">PRICE: <span class="color">$225.00</span></div>
            </div>
            <div class="col-sm-6 col-sm-text-right">
                <div class="rate-wrapper align-inline">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <div class="simple-article size-2 align-inline">128 Reviews</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">127-#5238</span></div>
            </div>
            <div class="col-sm-6 col-sm-text-right">
                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">YES</span></div>
            </div>
        </div>
        <div class="simple-article size-3 col-xs-b30">Vivamus in tempor eros. Phasellus rhoncus in nunc sit amet mattis.
            Integer in ipsum vestibulum, molestie arcu ac, efficitur tellus. Phasellus id vulputate erat.</div>
        <div class="row col-xs-b40">
            <div class="col-sm-3">
                <div class="h6 detail-data-title size-1">size:</div>
            </div>
            <div class="col-sm-9">
                <select class="SlectBox">
                    <option disabled="disabled" selected="selected">Choose size</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
        </div>
        <div class="row col-xs-b40">
            <div class="col-sm-3">
                <div class="h6 detail-data-title">color:</div>
            </div>
            <div class="col-sm-9">
                <div class="color-selection size-1">
                    <div class="entry active" style="color: #a7f050;"></div>
                    <div class="entry" style="color: #50e3f0;"></div>
                    <div class="entry" style="color: #eee;"></div>
                    <div class="entry" style="color: #4d900c;"></div>
                    <div class="entry" style="color: #edb82c;"></div>
                    <div class="entry" style="color: #7d3f99;"></div>
                    <div class="entry" style="color: #3481c7;"></div>
                    <div class="entry" style="color: #bf584b;"></div>
                </div>
            </div>
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
            <div class="col-sm-6">
                <a class="button size-2 style-1 block noshadow" href="#">
                    <span class="button-wrapper">
                        <span class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        <span class="text">add to favourites</span>
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