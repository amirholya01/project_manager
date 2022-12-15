<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }

    if($_POST == array()){
        $_POST = $_SESSION["savedPost"]['adminEditSale'];
    }else{
        $_SESSION["savedPost"]['adminEditSale'] = $_POST;
    }

    require_once $rootPath . "public/dbconn.php";

    require_once $rootPath . "models/handlers/ProductsHandler.php";
    require_once $rootPath . "models/handlers/UsersHandler.php";
    require_once $rootPath . "security/adminCheck.php";

    require_once $rootPath . "security/formSpam.php";
    require_once $rootPath . "security/inputSanitation.php";

    require_once $rootPath . "controllers/adminProducts.php";
    require_once $rootPath . "controllers/adminEditSale.php";
    require_once $rootPath . "controllers/getProductsWithFilters.php";

    require_once $rootPath . "views/backend/partials/header.php";
?>
<div class="wrapper">
    <form method="POST" action="adminSale">
        
        <div class="Admin-page-title">
            <h1>Edit Sale</h1>
        </div>
        <div class="Admin-handlers">
            <div class="Admin-search-product">
                <input type="hidden" name="editSale" value="true">
                <input type="hidden" name="sale_id" value="<?php echo $saleData['sale_id']; ?>">
                <input class="input" type="text" name="title" value="<?php echo $saleData['title']; ?>" placeholder="Title">
                From <input class="input" type="date" name="start" value="<?php echo $saleData['start']; ?>" placeholder="Starts">
                To <input class="input" type="date" name="end" value="<?php echo $saleData['end']; ?>" placeholder="Ends">
                <textarea name="description" id="" cols="30" rows="10"><?php echo $saleData['description']; ?></textarea>
                <input class="button submit" type="submit">
            </div>
            <div class="Reset_create_div"> <!-- ✒️ should be in the top right corner and not the middle of the page -->
                <a class="button" href="/adminSale">Back to discounts</a>
            </div>
        </div>
    
        <div class="wrapper-main-area">
            <div class="products">
                <?php
                    for($i = 0; $i < count($data); $i++){
                        $indData = $data[$i];

                        $onSale = false;
                        foreach($productData as $product){
                            if($product['products_id'] == $indData['products_id']){
                                $onSale = $product;
                            }
                        }
                ?>
                        <label for="<?php echo $indData['products_id'] ?>" class="product">
                            <div class="product-info">
                                <p><?php echo $indData['name'] ?></p>
                                <p><?php echo $indData['type'] ?></p>
                                <!-- Adds colors -->
                                <?php 
                                    foreach($colorAssignments as $color){
                                        if($color['products_id'] == $indData['products_id']){
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
                                <!-- 
                                    The idea of how this is going to work (Psuedo code)
                                     * we send all product_ids and sales in even if empty
                                     * we get the array indexes of all filled out sales and put them in a new array
                                     * we loop through the array[new array[i]]
                                     * sales[new array[i]] and product_ids[new array[i]] are matching
                                     * saleType[new array[i]] will give the type of sail
                                 -->
                                <?php
                                    if($onSale == false){
                                ?>
                                        <input type="hidden" name="product_ids[]" value="<?php echo $indData['products_id'] ?>">
                                        <input required value="0" class="input" type="number" name="sales[]" placeholder="Sale" id="<?php echo $indData['products_id'] ?>">
                                        <input checked class="input" type="checkbox" name="saleTypes[]" value="%" id="%<?php echo $indData['products_id'] ?>">
                                        <label for="%<?php echo $indData['products_id'] ?>">%</label>
            
                                        <input class="input" type="checkbox" name="saleTypes[]" value="$" id="$<?php echo $indData['products_id'] ?>">
                                        <label for="$<?php echo $indData['products_id'] ?>">$</label>
                                <?php 
                                    } else {
                                ?>
                                        
                                        <input type="hidden" name="product_ids[]" value="<?php echo $indData['products_id'] ?>">
                                        <input required value="<?php echo $onSale['sale'] ?>" class="input" type="number" name="sales[]" placeholder="Sale" id="<?php echo $indData['products_id'] ?>">
                                        <input <?php echo $onSale['saleType'] == '%' ? "checked" : "" ?> class="input" type="radio" name="saleTypes[<?php echo $i; ?>]" value="%" id="%<?php echo $indData['products_id'] ?>">
                                        <label for="%<?php echo $indData['products_id'] ?>">%</label>

                                        <input <?php echo $onSale['saleType'] == '$' ? "checked" : "" ?> class="input" type="radio" name="saleTypes[<?php echo $i; ?>]" value="$" id="$<?php echo $indData['products_id'] ?>">
                                        <label for="$<?php echo $indData['products_id'] ?>">$</label>
                                <?php 
                                    }
                                ?>
                            </div>
                        </label>
                <?php
                    }
                ?>
            </div>
            <div class="choose-image"> 
                <?php
                    for($i = 0; $i < count($mediaData); $i++){
                        $imageData = $mediaData[$i];
                ?>  
                    <div class="image">
                        <label for="<?php echo $imageData['media_id']; ?>">
                            <div>
                                <p><?php echo $imageData['name'] ?></p>
                                <figure class="figure">
                                    <!-- ✒️ should be styled with seperate css file -->
                                    <?php 
                                        /* get the thumb version of the image 
                                        (its the fullsize version that saved on the db so i have to do string manipulation) */
                                        $image = explode(".", $imageData['media_id']);
                                    ?>
                                    <img width="300px" src="<?php echo $rootPath."/uploads/thumbs/".$image[0]."_thumb.".$image[1] ?>">
                                </figure>
                            </div>
                        </label>
                        <input class="input-checkbox-hidden"
                        <?php 
                            $assigned = false;
                            if($saleData["media"] == $imageData['media_id']){
                                $assigned = true;
                            }

                            echo $assigned == true ? "checked" : "";
                        ?>
                        type="checkbox" id="<?php echo $imageData['media_id']; ?>" name="media[]" value="<?php echo $imageData['media_id']; ?>">
                        <div class="alignment">
                            <label for="<?php echo $imageData['media_id']?>_primaryImage">Primary Image</label>
                            <input 
                            <?php echo $saleData['media'] == $imageData['media_id'] ? "checked" : ""; ?>
                            name="editPrimaryImage" type="radio" id="<?php echo $imageData['media_id']?>_primaryImage" value="<?php echo $imageData['media_id']; ?>"> 
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </form>
</div>

<?php 
    require_once $rootPath . "views/backend/partials/footer.php";
?>