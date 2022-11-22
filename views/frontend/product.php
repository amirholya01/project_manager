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


    <div class="breadcrumbs SiteMap">
        <a href="/">home</a>
        <a href="Product">Products</a>
    </div>

    <div class="container">
        <div class="text-center">
            <div class="simple-article size-3 grey uppercase col-xs-b5">Products</div>
            <div class="h2">choose your favorite bowtie</div>
            <div class="title-underline center"><span></span></div>
        </div>
    </div>



    <div class="empty-space col-xs-b35 col-md-b70"></div>

    <div class="container flex ">
        <a class="button size-2 style-2 button-size" href="#">
            <span class="button-wrapper">
                <span class="text">Normal</span>
            </span>
        </a>

        <a class="button size-2 style-2 button-size" href="#">
            <span class="button-wrapper">
                <span class="text">Special Theme</span>
            </span>
        </a>


        <a class="button size-2 style-2 button-size" href="#">
            <span class="button-wrapper">
                <span class="text">Costumized</span>
            </span>
        </a>
    </div>


    <div class="empty-space col-xs-b35 col-md-b70"></div>

    <div class="container">
        <div class="small-items-line">
            <div class="row nopadding">
                <div class="col-sm-4 col-lg-2">
                    <div class="product-shortcode style-7">
                        <div class="preview">
                            <img src="assets/img/product-74.jpg" alt="" />
                            <div class="preview-buttons valign-middle">
                                <div class="valign-middle-content">
                                    <a class="button size-1 style-2" href="ProductShow">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                            <span class="text">See product</span>
                                        </span>
                                    </a>
                                    <a class="button size-1 style-3" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-3.png" alt=""></span>
                                            <span class="text">Add To Cart</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                            <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                        </div>
                        <div class="price">
                            <div class="simple-article size-2"><span class="dark">$24.00</span></div>
                        </div>
                        <div class="icons">
                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="product-shortcode style-7">
                        <div class="preview">
                            <img src="assets/img/product-75.jpg" alt="" />
                            <div class="preview-buttons valign-middle">
                                <div class="valign-middle-content">
                                    <a class="button size-1 style-2" href="ProductShow">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                            <span class="text">See product</span>
                                        </span>
                                    </a>
                                    <a class="button size-1 style-3" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-3.png" alt=""></span>
                                            <span class="text">Add To Cart</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                            <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                        </div>
                        <div class="price">
                            <div class="simple-article size-2"><span class="dark">$24.00</span></div>
                        </div>
                        <div class="icons">
                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="product-shortcode style-7">
                        <div class="product-label red">20% discount</div>
                        <div class="preview">
                            <img src="assets/img/product-76.jpg" alt="" />
                            <div class="preview-buttons valign-middle">
                                <div class="valign-middle-content">
                                    <a class="button size-1 style-2" href="ProductShow">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                            <span class="text">See product</span>
                                        </span>
                                    </a>
                                    <a class="button size-1 style-3" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-3.png" alt=""></span>
                                            <span class="text">Add To Cart</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                            <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                        </div>
                        <div class="price">
                            <div class="simple-article size-2"><span class="color">$24.00</span> <span
                                    class="line-through">$32.00</span></div>
                        </div>
                        <div class="icons">
                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="product-shortcode style-7">
                        <div class="preview">
                            <img src="assets/img/product-77.jpg" alt="" />
                            <div class="preview-buttons valign-middle">
                                <div class="valign-middle-content">
                                    <a class="button size-1 style-2" href="ProductShow">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                            <span class="text">See product</span>
                                        </span>
                                    </a>
                                    <a class="button size-1 style-3" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-3.png" alt=""></span>
                                            <span class="text">Add To Cart</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                            <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                        </div>
                        <div class="price">
                            <div class="simple-article size-2"><span class="dark">$24.00</span></div>
                        </div>
                        <div class="icons">
                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="product-shortcode style-7">
                        <div class="preview">
                            <img src="assets/img/product-78.jpg" alt="" />
                            <div class="preview-buttons valign-middle">
                                <div class="valign-middle-content">
                                    <a class="button size-1 style-2" href="ProductShow">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                            <span class="text">See product</span>
                                        </span>
                                    </a>
                                    <a class="button size-1 style-3" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-3.png" alt=""></span>
                                            <span class="text">Add To Cart</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                            <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                        </div>
                        <div class="price">
                            <div class="simple-article size-2"><span class="dark">$24.00</span></div>
                        </div>
                        <div class="icons">
                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="product-shortcode style-7">
                        <div class="preview">
                            <img src="assets/img/product-79.jpg" alt="" />
                            <div class="preview-buttons valign-middle">
                                <div class="valign-middle-content">
                                    <a class="button size-1 style-2" href="ProductShow">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                            <span class="text">See product</span>
                                        </span>
                                    </a>
                                    <a class="button size-1 style-3" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-3.png" alt=""></span>
                                            <span class="text">Add To Cart</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                            <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                        </div>
                        <div class="price">
                            <div class="simple-article size-2"><span class="color">$24.00</span> <span
                                    class="line-through">$32.00</span></div>
                        </div>
                        <div class="icons">
                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="product-shortcode style-7">
                        <div class="preview">
                            <img src="assets/img/product-80.jpg" alt="" />
                            <div class="preview-buttons valign-middle">
                                <div class="valign-middle-content">
                                    <a class="button size-1 style-2" href="ProductShow">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                            <span class="text">See product</span>
                                        </span>
                                    </a>
                                    <a class="button size-1 style-3" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-3.png" alt=""></span>
                                            <span class="text">Add To Cart</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                            <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                        </div>
                        <div class="price">
                            <div class="simple-article size-2"><span class="dark">$24.00</span></div>
                        </div>
                        <div class="icons">
                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="product-shortcode style-7">
                        <div class="preview">
                            <img src="assets/img/product-81.jpg" alt="" />
                            <div class="preview-buttons valign-middle">
                                <div class="valign-middle-content">
                                    <a class="button size-1 style-2" href="ProductShow">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                            <span class="text">See product</span>
                                        </span>
                                    </a>
                                    <a class="button size-1 style-3" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-3.png" alt=""></span>
                                            <span class="text">Add To Cart</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                            <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                        </div>
                        <div class="price">
                            <div class="simple-article size-2"><span class="dark">$24.00</span></div>
                        </div>
                        <div class="icons">
                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="product-shortcode style-7">
                        <div class="product-label green">Best Price</div>
                        <div class="preview">
                            <img src="assets/img/product-82.jpg" alt="" />
                            <div class="preview-buttons valign-middle">
                                <div class="valign-middle-content">
                                    <a class="button size-1 style-2" href="ProductShow">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                            <span class="text">See product</span>
                                        </span>
                                    </a>
                                    <a class="button size-1 style-3" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-3.png" alt=""></span>
                                            <span class="text">Add To Cart</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                            <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                        </div>
                        <div class="price">
                            <div class="simple-article size-2"><span class="color">$24.00</span> <span
                                    class="line-through">$32.00</span></div>
                        </div>
                        <div class="icons">
                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="product-shortcode style-7">
                        <div class="preview">
                            <img src="assets/img/product-83.jpg" alt="" />
                            <div class="preview-buttons valign-middle">
                                <div class="valign-middle-content">
                                    <a class="button size-1 style-2" href="ProductShow">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                            <span class="text">See product</span>
                                        </span>
                                    </a>
                                    <a class="button size-1 style-3" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-3.png" alt=""></span>
                                            <span class="text">Add To Cart</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                            <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                        </div>
                        <div class="price">
                            <div class="simple-article size-2"><span class="dark">$24.00</span></div>
                        </div>
                        <div class="icons">
                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="product-shortcode style-7">
                        <div class="preview">
                            <img src="assets/img/product-84.jpg" alt="" />
                            <div class="preview-buttons valign-middle">
                                <div class="valign-middle-content">
                                    <a class="button size-1 style-2" href="ProductShow">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                            <span class="text">See product</span>
                                        </span>
                                    </a>
                                    <a class="button size-1 style-3" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-3.png" alt=""></span>
                                            <span class="text">Add To Cart</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                            <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                        </div>
                        <div class="price">
                            <div class="simple-article size-2"><span class="dark">$24.00</span></div>
                        </div>
                        <div class="icons">
                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <div class="product-shortcode style-7">
                        <div class="preview">
                            <img src="assets/img/product-85.jpg" alt="" />
                            <div class="preview-buttons valign-middle">
                                <div class="valign-middle-content">
                                    <a class="button size-1 style-2" href="ProductShow">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                            <span class="text">See product</span>
                                        </span>
                                    </a>
                                    <a class="button size-1 style-3" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-3.png" alt=""></span>
                                            <span class="text">Add To Cart</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <div class="simple-article size-1 color col-xs-b10"><a href="#">Modern edition</a></div>
                            <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                        </div>
                        <div class="price">
                            <div class="simple-article size-2"><span class="color">$24.00</span> <span
                                    class="line-through">$32.00</span></div>
                        </div>
                        <div class="icons">
                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="empty-space col-xs-b30"></div>
        <div class="text-center">
            <a class="button size-2 style-3" href="#">
                <span class="button-wrapper">
                    <span class="icon"><img src="assets/img/icon-4.png" alt=""></span>
                    <span class="text">view all accessories</span>
                </span>
            </a>
        </div>
    </div>



<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>


<?php 
    require $rootPath . "views/frontend/partials/footer.php";
?>