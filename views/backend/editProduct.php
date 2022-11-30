<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require_once $rootPath . "public/dbconn.php";
    
    require_once $rootPath . "models/handlers/Usershandler.php";
    require_once $rootPath . "security/adminCheck.php";
    require_once $rootPath . "models/handlers/productsHandler.php";
    
    require_once $rootPath . "controllers/adminEditProduct.php";
    
    require_once $rootPath . "views/backend/partials/header.php";
?>
<div class="wrapper">
    <form method="POST" action="adminProducts">
        <!-- 
            i send editProducts to tell the controller that it should run edit user
        -->
        <input type="hidden" name="editProduct" value="true">

        <input type="hidden" name="editId" value="<?php echo $_POST['id'] ?>">
        <input type="text" name="editName" value="<?php echo $_POST['name'] ?>">
        <input type="text" name="editDescription" value="<?php echo $_POST['description'] ?>">
        <input type="text" name="editPrice" value="<?php echo $_POST['price'] ?>">
        <select name="editType">
            <?php 
                foreach($allTypes as $type){
            ?>
                <option value="<?php echo $type['id'] ?>"><?php echo $type['type'] ?></option>
            <?php
                }
            ?>
        </select>
        <select name="editColors[]" multiple>
            <?php 
                foreach($allColors as $color){
            ?>
                <!-- ✒️ Needs to select already selected colors -->
                <option 
                    <?php
                        $assigned = false;
                        foreach($colorsAssignedToProduct as $assignedColor){
                            if($assignedColor["color_id"] == $color['id']){
                                $assigned = true;
                            }
                        }

                        echo $assigned == true ? "selected" : "";
                    ?>
                
                    value="<?php echo $color['id'] ?>"><?php echo $color['color'] ?>
                </option>
            <?php
                }
            ?>
        </select>
        <input type="submit">

        <?php
            for($i = 0; $i < count($mediaData); $i++){
                $indData = $mediaData[$i];
        ?>
                <label for="<?php echo $indData['media_id']; ?>">
                    <div>
                        <p><?php echo $indData['name'] ?></p>
                        <figure>
                            <!-- ✒️ should be styled with seperate css file -->
                            <?php 
                                /* get the thumb version of the image 
                                (its the fullsize version that saved on the db so i have to do string manipulation) */
                                $image = explode(".", $indData['media_id']);
                            ?>
                            <img width="300px" src="<?php echo $rootPath."/uploads/thumbs/".$image[0]."_thumb.".$image[1] ?>">
                        </figure>
                    </div>
                </label>
                <input
                <?php 
                    $assigned = false;
                    foreach($mediaAssignedToProduct as $assignedMedia){
                        if($assignedMedia["media_id"] == $indData['media_id']){
                            $assigned = true;
                        }
                    }

                    echo $assigned == true ? "checked" : "";
                ?>
                type="checkbox" id="<?php echo $indData['media_id']; ?>" name="media[]" value="<?php echo $indData['media_id']; ?>">
        <?php
            }
        ?>
    </form>

</div>

<?php 
    require $rootPath . "views/backend/partials/footer.php";
?>