<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    
    $pageName = "Home";
    $pageLink = "/";
    $pageLevel = 1;

    require_once $rootPath . "views/frontend/partials/header.php";
    require_once $rootPath . "views/frontend/Breadcrumb.php";

    require_once $rootPath . "models/handlers/newsHandler.php";
    require_once $rootPath . "controllers/frontendNews.php"; 

    require_once $rootPath . "models/handlers/ProductsHandler.php";
    require_once $rootPath . "controllers/frontendDiscount.php"; 

    require_once $rootPath . "models/handlers/frontpageHandler.php"; 
    require_once $rootPath . "controllers/frontpage.php"; 
    
?>



<!--  Make a empty space  -->
<div class="header-empty-space"></div>

<div class="content-margins grey">
    <!--  Main slider for homepage  -->
    <div class="slider-wrapper">
        <div class="swiper-button-prev Slider-wrapper-next">
            <span class="icon"><img src="assets/icons/icon-102.png" alt=""></span>
        </div>
        <div class="swiper-button-next Slider-wrapper-next">
            <span class="icon"><img src="assets/icons/icon-1.png" alt=""></span>
        </div>
        <div class="swiper-container" data-parallax="1" data-auto-height="1">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url(assets/img/background-1.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6  margin-minus">
                                <div class="cell-view page-height">
                                    <div class="col-xs-b40 col-sm-b80"></div>
                                    <div data-swiper-parallax-x="-600">
                                        <div class="simple-article light transparent size-3 uppercase"><?php echo $bannerSubtitle1 ?></div>
                                        <div class="col-xs-b5"></div>
                                    </div>
                                    <div data-swiper-parallax-x="-500">
                                        <h1 class="h1 light"><?php echo $bannerTitle1 ?></h1>
                                        <div class="title-underline light left"><span></span></div>
                                    </div>
                                    <div data-swiper-parallax-x="-400">
                                        <div class="simple-article size-4 light transparent">
                                            <p><?php echo $bannerText1 ?></p>
                                            <ul>
                                                <li><?php echo $banner1Slogan1?></li>
                                                <li><?php echo $banner1Slogan2?></li>
                                                <li><?php echo $banner1Slogan3?></li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-b30"></div>
                                    </div>
                                    <div class="col-xs-b40 col-sm-b80"></div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-product-preview FirstBannerImage" data-swiper-parallax-x="-600">
                            <img src="uploads/<?php echo $bannerImageOne?>" alt="" />
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
                                        <div class="simple-article light transparent size-3"><?php echo $bannerSubtitle1 ?></div>
                                        <div class="col-xs-b5"></div>
                                    </div>
                                    <div data-swiper-parallax-x="-500">
                                        <h1 class="h1 light"><?php echo $bannerTitle1 ?></h1>
                                        <div class="title-underline light left"><span></span></div>
                                    </div>
                                    <div data-swiper-parallax-x="-400">
                                        <div class="simple-article size-4 light transparent">
                                            <p><?php echo $banner2Text1 ?></p>
                                            <ul>
                                                <li><?php echo $banner2Slogan1 ?></li>
                                                <li><?php echo $banner2Slogan2 ?></li>
                                                <li><?php echo $banner2Slogan3 ?></li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-b30"></div>
                                    </div>
                                    <div class="col-xs-b40 col-sm-b80"></div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-product-preview align-left width-left" data-swiper-parallax-x="-600">
                                <img src="uploads/<?php echo $bannerImageTwo?>" alt="" />
                        </div>
                        <div class="empty-space col-xs-b80 col-sm-b0"></div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
        </div>
    </div>

    <!--  Make empty spaces  -->
    <div class="empty-space col-xs-b35 col-md-b70"></div>
    <div class="empty-space col-xs-b35 col-md-b70"></div>

    <!--  About us section for the homepage  -->
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="simple-article size-3 grey uppercase col-xs-b5"><?php echo $aboutusSubtitle ?></div>
                <div class="h2"><?php echo $aboutusTitle ?></div>
                <div class="title-underline left"><span></span></div>
                <div class="simple-article size-4 grey"><?php echo $aboutusSlogan ?></div>
            </div>
            <div class="col-sm-7">
                <div class="simple-article size-3">
                    <p><?php echo $aboutUs1 ?></p>
                    <p><?php echo $aboutUs2 ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="empty-space col-xs-b35 col-md-b70"></div>
    <div class="empty-space col-xs-b35 col-md-b70"></div>

    <!--  News products section for the homepage  -->
    <div class="container-fluid">
        <div class="row">
            <?php 
                /* Loop through the News */
                foreach($news as $new){
            ?>
                    <form id="<?php echo $new['title'] ?>" action="/NewsShow" method="POST">
                        <input type="hidden" name="id" value="<?php echo $new['news_id'] ?>">
                        <input type="hidden" name="title" value="<?php echo $new['title'] ?>">
                        <input type="hidden" name="description" value="<?php echo $new['description'] ?>">
                        <input type="hidden" name="time" value="<?php echo $new['time'] ?>">
                        <input type="hidden" name="media" value="<?php echo $new['media'] ?>">
                    </form>
                    <div class="col-md-4 col-xs-b15 col-md-b0">
                        <div class="banner-shortcode style-4 rounded-image text-center"
                            style="background-image: url(assets/img/background-5.jpg);">
                            <div class="valign-middle-cell">
                                <div class="valign-middle-content flex-center">
                                    
                                    <!--  News title loaded from database  -->
                                    <h3 class="h3 light"><?php echo $new['title'] ?></h3>
                                    <div class="title-underline light center"><span></span></div>

                                    <!--  News image loaded from database  -->
                                    <div class="news-image-div">
                                        <?php 
                                            $image = explode(".", $new['media']);
                                        ?>
                                        <img src="uploads/<?php echo $image[0] ?>.<?php echo $image[1] ?>" alt="">
                                    </div>

                                    <!--  News description loaded from database  -->
                                    <div class="simple-article size-4 light transparent col-xs-b30 font-size-news"><?php echo $new['description'] ?></div>
                                    
                                    <button class="button size-2 style-2 margin-bottom" form="<?php echo $new['title'] ?>" type="submit">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="assets/icons/icon-1.png" alt=""></span>
                                            <span class="text">learn more</span>
                                        </span>
                                    </button>

                                </div>
                            </div>

                            <div class="angle-left hidden-xs"></div>
                        </div>
                    </div>
            <?php 
                }
            ?>
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
                   <div class="swiper-wrapper Discount-wrapper">

                   <?php 
                        /* Loop through the Discounts */
                        foreach($Sales as $Sale){
                    ?>
                       <div class="swiper-slide">
                            <div class="container">
                                <div class="row vertical-aligned-columns">
                                    <div class="col-sm-6 col-xs-b30 col-sm-b0">
                                        
                                    <?php
                                    /* Exception this can´t be in controllers */
                                    $productsOnSale = $ProductsHandler->getProductSalesBySaleId($Sale['sale_id']);
                                    $productOnSale = $ProductsHandler->getProducts('', $productsOnSale[0]['product_id']);
                                    
                                    echo $productOnSale[0]['primary_image'];
                                    ?>
                                    <img class="discount-image" src="uploads/<?php echo $productOnSale[0]['primary_image']; ?>" alt="">

                                    </div>
                                    <div class="col-sm-6 col-md-4 col-md-offset-2">
                                        <form id="ProductSale" action="/ProductSale" method="POST">
                                            <input type="hidden" value="BLACK FRIDAY" name="title">
                                            <input type="hidden" value="1" name="sale">
                                        </form>

                                        <h3 class="h3 col-xs-b15"><?php echo $Sale['title'] ?></h3>
                                        <div class="simple-article size-5 uppercase col-xs-b20">best Price: <span class="color"><?php echo $Sale['title'] ?></span></div>
                                        <!-- countdown <div class="countdown max-width col-xs-b20" data-end="Sep,1,2017"></div>-->
                                        <div class="simple-article size-3 col-xs-b30"><?php echo $Sale['description'] ?></div>
                                        <div class="simple-article size-3 col-xs-b30">Praesent nec finibus massa. Phasellus id auctor lacus, at iaculis lorem. Donec quis arcu elit. In vehicula purus sem, eu mattis est lacinia sit amet.</div>
                                        <div class="buttons-wrapper">
                                            <button type="submit" form="ProductSale" class="button size-2 style-2">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="assets/icons/icon-2.png" alt=""></span>
                                                    <span class="text">View Products</span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>

                       <?php 
                            }
                       ?>

                   </div>
                   <div class="col-xs-b25 col-sm-b50"></div>
                   <div class="swiper-pagination relative-pagination"></div>
                </div>
            </div>




    <div class="empty-space col-xs-b35 col-md-b70"></div>


</div>

<?php 
    require_once $rootPath . "views/frontend/partials/footer.php";
?>