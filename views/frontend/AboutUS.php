<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    
    $pageName = "About Us";
    $pageLink = "/AboutUS";
    $pageLevel = 2;

    require_once $rootPath . "views/frontend/partials/header.php";
    require_once $rootPath . "views/frontend/Breadcrumb.php";

    require_once $rootPath . "models/handlers/frontpageHandler.php"; 
    require_once $rootPath . "controllers/frontpage.php"; 
?>

    <div class="empty-space col-xs-b35 col-md-b70"></div>
    <div class="empty-space col-xs-b35 col-md-b70"></div>
    <div class="empty-space col-xs-b35 col-md-b70"></div>
    

<!-- impelementing the sitemap with a for loop (breadcrumb) -->
<div class="breadcrumbs SiteMap">
    <?php 
    for($i = 0; $i < count($_SESSION['breadcrumbs']); $i++){
        $link = $_SESSION['breadcrumbsLinks'][$i];
        echo "<a class='breadcrumb-flex' href='$link'> ".$_SESSION['breadcrumbs'][$i]."</a>";
    }
    ?>
</div>


<div class="container">
    <div class="text-center">
        <div class="simple-article size-3 grey uppercase col-xs-b5"><?php echo $aboutusSlogan ?></div>
        <div class="h2"><?php echo $aboutusTitle ?></div>
        <div class="title-underline center"><span></span></div>
    </div>
</div>


<div class="container">
    <div class="slider-wrapper">
        <div class="swiper-button-prev hidden"></div>
        <div class="swiper-button-next hidden"></div>
        <div class="swiper-container" data-breakpoints="1" data-xs-slides="1" data-sm-slides="2" data-md-slides="2"
            data-lt-slides="3" data-slides-per-view="3" data-space="30">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="icon-description-shortcode style-2">
                        <img class="image-icon image-thumbnail rounded-image" src="uploads/<?php echo $aboutUsImageOne?>"
                            alt="" />
                        <div class="content">
                            <h6 class="title h6"><?php echo $aboutPageTitle1?></h6>
                            <div class="description simple-article size-2"><?php echo $aboutPageText1?></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="icon-description-shortcode style-2">
                        <img class="image-icon image-thumbnail rounded-image" src="uploads/<?php echo $aboutUsImageTwo?>"
                            alt="" />
                        <div class="content">
                            <h6 class="title h6"><?php echo $aboutPageTitle2?></h6>
                            <div class="description simple-article size-2"><?php echo $aboutPageText2?></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="icon-description-shortcode style-2">
                        <img class="image-icon image-thumbnail rounded-image" src="uploads/<?php echo $aboutUsImageThree?>"
                            alt="" />
                        <div class="content">
                            <h6 class="title h6"><?php echo $aboutPageTitle3?></h6>
                            <div class="description simple-article size-2"><?php echo $aboutPageText3?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>

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
                <p><?php echo $aboutUs2 ?>
                </p>
            </div>
        </div>
    </div>
</div>





<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>
<?php 
    require_once $rootPath . "views/frontend/partials/footer.php";
?>