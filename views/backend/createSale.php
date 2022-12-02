<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require_once $rootPath . "public/dbconn.php";

    require_once $rootPath . "models/handlers/productsHandler.php";
    require_once $rootPath . "models/handlers/Usershandler.php";
    require_once $rootPath . "security/adminCheck.php";

    require_once $rootPath . "security/formSpam.php";
    require_once $rootPath . "security/stringSanitation.php";

    require_once $rootPath . "controllers/createProduct.php";
    require_once $rootPath . "controllers/editProduct.php";
    require_once $rootPath . "controllers/deleteProduct.php";

    require_once $rootPath . "controllers/adminProducts.php";
    require_once $rootPath . "controllers/getProductsWithFilters.php";

    require_once $rootPath . "views/backend/partials/header.php";
?>
<form class="wrapper">
    <div class="Admin-handlers">
        <div class="Admin-search-product">
            <input class="input" type="text" name="title" placeholder="Title">
            <input class="input" type="number" name="sale" placeholder="Sale percentage">
            From <input class="input" type="date" name="start" placeholder="Starts">
            To <input class="input" type="date" name="end" placeholder="Ends">
            <input class="button submit" type="submit">
        </div>
        <div class="Reset_create_div">
            <a class="button" href="/adminProducts">Back to products</a>
        </div>
    </div>

    <div class="Admin-page-title">
            <h1>Create Sale</h1>
    </div>

    <div class="wrapper-main-area">
        <div class="products">
            <?php
                for($i = 0; $i < count($data); $i++){
                    $indData = $data[$i];
            ?>
                    <label for="<?php echo $indData['products_id'] ?>" class="product">
                        <div class="product-info">
                            <p><?php echo $indData['name'] ?></p>
                            <p><?php echo $indData['type'] ?></p>
                            <!-- Adds colors -->
                            <?php 
                                foreach($colorAssignments as $color){
                                    if($color['product_id'] == $indData['products_id']){
                            ?>
                                <p><?php echo $color['color'] ?></p>
                            <?php
                                    }
                                }
                            ?>
                            <p><?php echo $indData['description'] ?></p>
                            <p><?php echo $indData['price'] ?> DKK</p>
                        </div>

                        <div class="Edit-Delete-div">
                            <input type="checkbox" name="products[]" value="<?php echo $indData['products_id'] ?>" id="<?php echo $indData['products_id'] ?>">
                        </div>
                    </label>
            <?php
                }
            ?>
        </div>
    </div>
</form>

<?php 
    require_once $rootPath . "views/backend/partials/footer.php";
?>