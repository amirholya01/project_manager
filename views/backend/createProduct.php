<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require_once $rootPath . "public/dbconn.php";
    
    require_once $rootPath . "models/handlers/UsersHandler.php";
    require_once $rootPath . "security/adminCheck.php";
    require_once $rootPath . "models/handlers/ProductsHandler.php";
    
    require_once $rootPath . "controllers/adminCreateProduct.php";
    
    require_once $rootPath . "views/backend/partials/header.php";
?>
<div class="wrapper">
    <form method="POST" action="/adminCreateProductFunction" enctype="multipart/form-data">
        <!-- 
            i send createProduct to tell the controller that it should run create user
        -->
        <div class="Admin-handlers">
            <input class="input" type="hidden" name="validate" value="true">
            <input class="input" type="hidden" name="createProduct" value="true">

            <input class="input" type="text" name="createName" placeholder="Name">
            <input class="input" type="text" name="createDescription" placeholder="Description">
            <select name="createType">
                <?php 
                    foreach($allTypes as $type){
                ?>
                    <option value="<?php echo $type['id'] ?>"><?php echo $type['type'] ?></option>
                <?php
                    }
                ?>
            </select>
            <input class="margin-right" type="number" name="createPrice" placeholder="Price">
            <select name="createColors[]" multiple>
                <?php 
                    foreach($allColors as $color){
                ?>
                    <option value="<?php echo $color['color_id'] ?>"><?php echo $color['color'] ?></option>
                <?php
                    }
                ?>
            </select>
            <input class="height-button button submit" type="submit">
        </div>

        <div class="Admin-page-title margin-bottom">
              <h1>Create Products</h1>
        </div>

        <!-- Img select system -->

    <div class="choose-image">

            <?php
                for($i = 0; $i < count($mediaData); $i++){
                    $indData = $mediaData[$i];
            ?>
                <div class="image">
                        <label for="<?php echo $indData['media_id']; ?>">
                            <div>
                                <p><?php echo $indData['name'] ?></p>
                                <figure class="figure">
                                    <!-- ✒️ should be styled with seperate css file -->
                                    <img width="300px" src="<?php echo $rootPath."/uploads/".$indData['media_id'] ?>" alt="">
                                </figure>
                            </div>
                        </label>
                        <input class="input-checkbox-hidden" type="checkbox" id="<?php echo $indData['media_id']; ?>" name="media[]" value="<?php echo $indData['media_id']; ?>">
                        <div class="alignment">
                            <label for="<?php echo $indData['media_id']?>_primaryImage">Primary Image</label>
                            <input name="primaryImage" type="radio" id="<?php echo $indData['media_id']?>_primaryImage" value="<?php echo $indData['media_id']; ?>">
                        </div>
                        <div class="alignment">
                            <label for="<?php echo $indData['media_id']?>_media">Assign Image</label>
                            <input name="media[]" type="checkbox" id="<?php echo $indData['media_id']?>_media" value="<?php echo $indData['media_id']; ?>">
                        </div>
                </div>
            <?php
                }
            ?>

    </div>

    </form>

</div>

<?php 
    require $rootPath . "views/backend/partials/footer.php";
?>
