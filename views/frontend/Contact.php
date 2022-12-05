<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    
    require_once $rootPath . "views/frontend/partials/header.php";

    $pageName = "Contact Us";
    $pageLink = "/Contact";
    $pageLevel = 2;
    require_once $rootPath . "views/frontend/Breadcrumb.php";
?>

<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>


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
        <div class="simple-article size-3 grey uppercase col-xs-b5">Contact us</div>
        <div class="h2">You can ask us about everything</div>
        <div class="title-underline center"><span></span></div>
    </div>
</div>

<div class="empty-space col-sm-b15 col-md-b50"></div>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="icon-description-shortcode style-1">
                <img class="icon" src="assets/img/icon-25.png" alt="">
                <div class="title h6">address</div>
                <div class="description simple-article size-2">1st, new york, usa</div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="icon-description-shortcode style-1">
                <img class="icon" src="assets/img/icon-23.png" alt="">
                <div class="title h6">phone</div>
                <div class="description simple-article size-2" style="line-height: 26px;">
                    <a href="tel:+4553525239">+45 53 52 52 39</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="icon-description-shortcode style-1">
                <img class="icon" src="assets/img/icon-28.png" alt="">
                <div class="title h6">email</div>
                <div class="description simple-article size-2"><a
                        href="mailto:thecostumebowtie@gmail.com">thecostumebowtie@gmail.com</a></div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="icon-description-shortcode style-1">
                <img class="icon" src="assets/img/icon-26.png" alt="">
                <div class="title h6">Follow us</div>
                <div class="description simple-article size-2" style="line-height: 26px;">
                    To see the last news about our bowties
                </div>
            </div>
        </div>
    </div>
</div>

<div class="empty-space col-xs-b25 col-sm-b50"></div>
<div class="empty-space col-xs-b25 col-sm-b50"></div>

<div class="container">
    <h4 class="h4 text-center col-xs-b25">have a questions?</h4>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form class="contact-form">
                <div class="row m5">
                    <div class="col-sm-6">
                        <input class="simple-input col-xs-b20" type="text" value="" placeholder="Name" name="name" />
                    </div>
                    <div class="col-sm-6">
                        <input class="simple-input col-xs-b20" type="text" value="" placeholder="Email" name="email" />
                    </div>
                    <div class="col-sm-6">
                        <input class="simple-input col-xs-b20" type="text" value="" placeholder="Phone" name="phone" />
                    </div>
                    <div class="col-sm-6">
                        <input class="simple-input col-xs-b20" type="text" value="" placeholder="Subject"
                            name="subject" />
                    </div>
                    <div class="col-sm-12">
                        <textarea class="simple-input col-xs-b20" placeholder="Your message" name="message"></textarea>
                    </div>
                    <div class="col-sm-12">
                        <div class="text-center">
                            <div class="button size-2 style-3">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="assets/img/icon-4.png" alt=""></span>
                                    <span class="text">send message</span>
                                </span>
                                <input type="submit" />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>





<?php 
    require_once $rootPath . "views/frontend/partials/footer.php";
?>