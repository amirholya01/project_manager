<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }

    if($_POST == array()){
        $_POST = $_SESSION["savedPost"]['productSale'];
    }else{
        $_SESSION["savedPost"]['productSale'] = $_POST;
    }
    
    // including breadcrumb to be able to see the sitemap in frontend
    $pageName = $_POST['title'];
    $pageLink = "/ProductSale";
    $pageLevel = 3;

    require_once $rootPath . "views/frontend/partials/header.php";
    require_once $rootPath . "views/frontend/Breadcrumb.php";

    require_once $rootPath . "models/handlers/ProductsHandler.php";
    require_once $rootPath . "controllers/productSale.php";

    require_once $rootPath . "models/handlers/frontpageHandler.php"; 
    require_once $rootPath . "controllers/frontpage.php"; 
     
    require_once $rootPath . "controllers/discount.php";
?>


<!-- making white spaces  -->
<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>

<!-- impelementing the sitemap (breadcrumb) -->
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
        <div class="simple-article size-3 grey uppercase col-xs-b5"><?php echo $productsSubtitle ?></div>
        <div class="h2"><?php echo $_POST['title'] ?></div>
        <div class="title-underline center"><span></span></div>
    </div>
</div>



<div class="empty-space col-xs-b35 col-md-b70"></div>


<div class="products-content">
    <div class="products-wrapper side-padding">
        <div class="row nopadding product-flex">
            <?php 
                /* Loop through the products */
                foreach($products as $product){
            ?>
                    <div class="col-sm-4">
                        <div class="product-shortcode style-1">
                            <div class="title">
                                <div class="h6 animate-to-green"><a href="#"><?php echo $product['name'] ?></a></div>
                                <div class="simple-article size-1 color col-xs-b5"><a href="#"><?php echo $product['type'] ?></a></div>
                            </div>
                            <div class="preview">
                                <?php 
                                    $image = explode(".", $product['primary_image']);
                                ?>
                                <img src="uploads/thumbs/<?php echo $image[0] ?>_thumb.<?php echo $image[1] ?>" alt="">
                                <div class="preview-buttons valign-middle">
                                    <div class="valign-middle-content ">
                                        <form class="button size-2 style-2" action="ProductShow" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $product['products_id'] ?>">
                                            <input type="hidden" name="name" value="<?php echo $product['name'] ?>">
                                            <input type="hidden" name="description" value="<?php echo $product['description'] ?>">
                                            <input type="hidden" name="price" value="<?php echo $product['price'] ?>">
                                            <input type="hidden" name="type" value="<?php echo $product['type'] ?>">
                                            <input type="hidden" name="primary_image" value="<?php echo $product['primary_image'] ?>">
                                            <button class="product-button" type="submit">
                                                <span class="button-wrapper ">
                                                    <span class="icon"><img src="assets/icons/icon-1.png" alt=""></span>
                                                    <span class="text">See Product</span>
                                                </span>
                                            </button>
                                        </form>
                                        <form class="button size-2 style-3" action="addToCart" method="POST">
                                            <input type="hidden" name="product" value="<?php echo $product['products_id'] ?>">
                                            <button class="product-button" type="submit">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="assets/icons/icon-3.png" alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="price">
                                <div class="simple-article size-4 dark"><?php echo $product['price'] ?> DKK</div>
                            </div>
                        </div>
                    </div>
            <?php 
                }
            ?>
        </div>
    </div>
</div>



<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>


<?php 
    require_once $rootPath . "views/frontend/partials/footer.php";
?>