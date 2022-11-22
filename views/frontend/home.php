<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    
    require_once $rootPath . "views/frontend/partials/header.php";
?>

<!--  Make a empty space  -->
<div class="header-empty-space"></div>

<div class="content-margins grey">
    <!--  Main slider for homepage  -->
    <div class="slider-wrapper">
        <div class="swiper-button-prev visible-lg"></div>
        <div class="swiper-button-next visible-lg"></div>
        <div class="swiper-container" data-parallax="1" data-auto-height="1">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url(assets/img/background-1.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="cell-view page-height">
                                    <div class="col-xs-b40 col-sm-b80"></div>
                                    <div data-swiper-parallax-x="-600">
                                        <div class="simple-article light transparent size-3">PROFESSIONAL EDITION</div>
                                        <div class="col-xs-b5"></div>
                                    </div>
                                    <div data-swiper-parallax-x="-500">
                                        <h1 class="h1 light">Your Bowties</h1>
                                        <div class="title-underline light left"><span></span></div>
                                    </div>
                                    <div data-swiper-parallax-x="-400">
                                        <div class="simple-article size-4 light transparent">
                                            <p>We strive to offer our customers the lowest possible prices, the best
                                                available selection while giving them a chance to bring their own ideas,
                                                and the utmost convenience.

                                            </p>
                                            <ul>
                                                <li>Customize your own design and order</li>
                                                <li>Huge range to choose from</li>
                                                <li>Easy communication with our live chat</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-b30"></div>
                                    </div>
                                    <div data-swiper-parallax-x="-300">
                                        <div class="buttons-wrapper">
                                            <div class="simple-article size-5 light transparent">BEST PRICE: 150 DKK
                                            </div>
                                            <a class="button size-2 style-1" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-2 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="assets/img/icon-2.png" alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-b40 col-sm-b80"></div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-product-preview FirstBannerImage" data-swiper-parallax-x="-600">
                            <img src="assets/img/product-preview-12.png" alt="" />
                        </div>
                        <div class="empty-space col-xs-b80 col-sm-b0"></div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url(assets/img/background-2.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-6 col-sm-text-right">
                                <div class="cell-view page-height">
                                    <div class="col-xs-b40 col-sm-b80"></div>
                                    <div data-swiper-parallax-x="-600">
                                        <div class="simple-article light transparent size-3">PROFESSIONAL EDITION</div>
                                        <div class="col-xs-b5"></div>
                                    </div>
                                    <div data-swiper-parallax-x="-500">
                                        <h1 class="h1 light">real beat trx</h1>
                                        <div class="title-underline light left"><span></span></div>
                                    </div>
                                    <div data-swiper-parallax-x="-400">
                                        <div class="simple-article size-4 light transparent">
                                            <p>In feugiat molestie tortor a malesuada. Etiam a venenatis ipsum. Proin
                                                pharetra elit at feugiat commodo vel placerat tincidunt sapien nec</p>
                                            <ul>
                                                <li>20.000h of high quality music</li>
                                                <li>Perfect insulation</li>
                                                <li>5 years guaranteed work</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-b30"></div>
                                    </div>
                                    <div data-swiper-parallax-x="-300">
                                        <div class="buttons-wrapper">
                                            <div class="simple-article size-5 light transparent">BEST PRICE: $195.00
                                            </div>
                                            <a class="button size-2 style-1" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-2 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="assets/img/icon-2.png" alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-b40 col-sm-b80"></div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-product-preview align-left" data-swiper-parallax-x="-600">
                            <img class="slider-2-img" src="assets/img/product-preview-13.png" alt="" />
                        </div>
                        <div class="empty-space col-xs-b80 col-sm-b0"></div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
        </div>
    </div>


    <div class="empty-space col-xs-b35 col-md-b70"></div>
    <div class="empty-space col-xs-b35 col-md-b70"></div>

    <!--  About us section for the homepage  -->
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="simple-article size-3 grey uppercase col-xs-b5">about us</div>
                <div class="h2">we love music</div>
                <div class="title-underline left"><span></span></div>
                <div class="simple-article size-4 grey">Praesent nec finibus massa. Phasellus id auctor lacus, at
                    iaculis lorem. Donec quis arcu elit. In vehicula purus sem</div>
            </div>
            <div class="col-sm-7">
                <div class="simple-article size-3">
                    <p>Aenean facilisis, purus ut tristique pulvinar, odio neque commodo ligula, non vestibulum lacus
                        justo vel diam. Aenean ac aliquet tortor, nec gravida urna. Ut nec urna elit. Etiam id
                        scelerisque ante. Cras velit nunc, luctus a volutpat nec, blandit id dolor. Quisque commodo elit
                        nulla, eu semper quam feugiat et. Integer quam velit, suscipit eget consectetur ac, molestie eu
                        diam.</p>
                    <p>Fusce semper rhoncus dignissim. Curabitur dapibus convallis varius. Suspendisse sem urna,
                        ullamcorper eget porttitor ut, sagittis in justo. Vestibulum egestas nulla nec purus porttitor
                        fermentum. Integer mauris mi, viverra eget nibh at, efficitur consectetur erat. Curabitur et
                        imperdiet enim.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="empty-space col-xs-b35 col-md-b70"></div>
    <div class="empty-space col-xs-b35 col-md-b70"></div>

    <!--  News products section for the homepage  -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-xs-b15 col-md-b0">
                <div class="banner-shortcode style-4 rounded-image text-center"
                    style="background-image: url(assets/img/background-5.jpg);">
                    <div class="valign-middle-cell">
                        <div class="valign-middle-content">
                            <div class="simple-article size-3 light transparent uppercase col-xs-b5">RELIABILITY</div>
                            <h3 class="h3 light">perfect soundfor everyone</h3>
                            <div class="title-underline light center"><span></span></div>
                            <div class="simple-article size-4 light transparent col-xs-b30">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Praesent pulvinar ante et nisl scelerisque.</div>
                            <a class="button size-2 style-2" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                    <span class="text">learn more</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="angle-left hidden-xs"></div>
                </div>
            </div>
            <div class="col-md-4 col-xs-b15 col-md-b0">
                <div class="banner-shortcode style-4 rounded-image text-center"
                    style="background-image: url(assets/img/background-6.jpg);">
                    <div class="valign-middle-cell">
                        <div class="valign-middle-content">
                            <div class="simple-article size-3 light transparent uppercase col-xs-b5">high quality</div>
                            <h3 class="h3 light">choise of professionals</h3>
                            <div class="title-underline light center"><span></span></div>
                            <div class="simple-article size-4 light transparent col-xs-b30">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Praesent pulvinar ante et nisl scelerisque.</div>
                            <a class="button size-2 style-2" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                    <span class="text">learn more</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="angle-left hidden-xs"></div>
                </div>
            </div>
            <div class="col-md-4 col-xs-b15 col-md-b0">
                <div class="banner-shortcode style-4 rounded-image text-center"
                    style="background-image: url(assets/img/background-7.jpg);">
                    <div class="valign-middle-cell">
                        <div class="valign-middle-content">
                            <div class="simple-article size-3 light transparent uppercase col-xs-b5">convenience</div>
                            <h3 class="h3 light">satisfaction guarantted</h3>
                            <div class="title-underline light center"><span></span></div>
                            <div class="simple-article size-4 light transparent col-xs-b30">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Praesent pulvinar ante et nisl scelerisque.</div>
                            <a class="button size-2 style-2" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="assets/img/icon-1.png" alt=""></span>
                                    <span class="text">learn more</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="angle-left hidden-xs"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="empty-space col-xs-b35 col-md-b70"></div>
    <div class="empty-space col-xs-b35 col-md-b70"></div>

    <!--  Special offers section for the homepage  -->
    <div class="container">
        <div class="text-center">
            <div class="simple-article size-3 grey uppercase col-xs-b5">special offers</div>
            <div class="h2">choose the best</div>
            <div class="title-underline center"><span></span></div>
        </div>
    </div>




    <div class="slider-wrapper">
        <div class="swiper-button-prev hidden"></div>
        <div class="swiper-button-next hidden"></div>
        <div class="swiper-container" data-parallax="1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row vertical-aligned-columns">
                            <div class="col-sm-6 col-xs-b30 col-sm-b0">
                                <img src="assets/img/thumbnail-24.png" class="block-image rounded-image" alt="" />
                            </div>
                            <div class="col-sm-6 col-md-4 col-md-offset-2">
                                <h3 class="h3 col-xs-b15">headphones klm <span class="color">+</span> leather case <span
                                        class="color">+</span> free delivery</h3>
                                <div class="simple-article size-5 uppercase col-xs-b20">best Price: <span
                                        class="color">$195.00</span></div>
                                <!-- countdown <div class="countdown max-width col-xs-b20" data-end="Sep,1,2017"></div>-->
                                <div class="simple-article size-3 col-xs-b30">Praesent nec finibus massa. Phasellus id
                                    auctor lacus, at iaculis lorem. Donec quis arcu elit. In vehicula purus sem, eu
                                    mattis est lacinia sit amet.</div>
                                <div class="simple-article size-3 col-xs-b30">Praesent nec finibus massa. Phasellus id
                                    auctor lacus, at iaculis lorem. Donec quis arcu elit. In vehicula purus sem, eu
                                    mattis est lacinia sit amet.</div>
                                <div class="buttons-wrapper">
                                    <a class="button size-2 style-3" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-4.png" alt=""></span>
                                            <span class="text">Learn More</span>
                                        </span>
                                    </a>
                                    <a class="button size-2 style-2" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-2.png" alt=""></span>
                                            <span class="text">Add To Cart</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row vertical-aligned-columns">
                            <div class="col-sm-6 col-xs-b30 col-sm-b0">
                                <img src="assets/img/thumbnail-25.png" class="block-image rounded-image" alt="" />
                            </div>
                            <div class="col-sm-6 col-md-4 col-md-offset-2">
                                <h3 class="h3 col-xs-b15">headphones klm <span class="color">+</span> leather case <span
                                        class="color">+</span> free delivery</h3>
                                <div class="simple-article size-5 uppercase col-xs-b20">best Price: <span
                                        class="color">$195.00</span></div>
                                <!--<div class="countdown max-width col-xs-b20" data-end="Sep,1,2017"></div>-->
                                <div class="simple-article size-3 col-xs-b30">Praesent nec finibus massa. Phasellus id
                                    auctor lacus, at iaculis lorem. Donec quis arcu elit. In vehicula purus sem, eu
                                    mattis est lacinia sit amet.</div>
                                <div class="simple-article size-3 col-xs-b30">Praesent nec finibus massa. Phasellus id
                                    auctor lacus, at iaculis lorem. Donec quis arcu elit. In vehicula purus sem, eu
                                    mattis est lacinia sit amet.</div>
                                <div class="buttons-wrapper">
                                    <a class="button size-2 style-3" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-4.png" alt=""></span>
                                            <span class="text">Learn More</span>
                                        </span>
                                    </a>
                                    <a class="button size-2 style-2" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-2.png" alt=""></span>
                                            <span class="text">Add To Cart</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row vertical-aligned-columns">
                            <div class="col-sm-6 col-xs-b30 col-sm-b0">
                                <img src="assets/img/thumbnail-26.png" class="block-image rounded-image" alt="" />
                            </div>
                            <div class="col-sm-6 col-md-4 col-md-offset-2">
                                <h3 class="h3 col-xs-b15">headphones klm <span class="color">+</span> leather case <span
                                        class="color">+</span> free delivery</h3>
                                <div class="simple-article size-5 uppercase col-xs-b20">best Price: <span
                                        class="color">$195.00</span></div>
                                <!--<div class="countdown max-width col-xs-b20" data-end="Sep,1,2017"></div>-->
                                <div class="simple-article size-3 col-xs-b30">Praesent nec finibus massa. Phasellus id
                                    auctor lacus, at iaculis lorem. Donec quis arcu elit. In vehicula purus sem, eu
                                    mattis est lacinia sit amet.</div>
                                <div class="simple-article size-3 col-xs-b30">Praesent nec finibus massa. Phasellus id
                                    auctor lacus, at iaculis lorem. Donec quis arcu elit. In vehicula purus sem, eu
                                    mattis est lacinia sit amet.</div>
                                <div class="buttons-wrapper">
                                    <a class="button size-2 style-3" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-4.png" alt=""></span>
                                            <span class="text">Learn More</span>
                                        </span>
                                    </a>
                                    <a class="button size-2 style-2" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/img/icon-2.png" alt=""></span>
                                            <span class="text">Add To Cart</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-b25 col-sm-b50"></div>
            <div class="swiper-pagination relative-pagination"></div>
        </div>
    </div>

    <div class="empty-space col-xs-b35 col-md-b70"></div>
    <div class="empty-space col-xs-b35 col-md-b70"></div>


</div>

<?php 
    require_once $rootPath . "views/frontend/partials/footer.php";
?>