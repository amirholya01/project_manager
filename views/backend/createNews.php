<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require_once $rootPath . "public/dbconn.php";
    
    require_once $rootPath . "models/handlers/usersHandler.php";
    require_once $rootPath . "security/adminCheck.php";
    require_once $rootPath . "models/handlers/productsHandler.php";

    require_once $rootPath . "controllers/adminCreateNews.php";
    
    require_once $rootPath . "views/backend/partials/header.php";
?>
<div class="wrapper">
    <form class="Admin-handlers" method="POST" action="adminNews">
        <!-- 
            i send createNews to tell the controller that it should run create user
        -->
        <div class="Admin-search-product">
            <input class="input" type="hidden" name="validated" value="true">
            <input class="input" type="hidden" name="createNews" value="true">

            <input class="input" type="text" name="createTitle" placeholder="Title">
            <input class="input" type="text" name="createDescription" placeholder="Description">
            <input class="height-button button submit" type="submit">
        </div>

        <!-- Img select system -->
        
        <?php
            for($i = 0; $i < count($mediaData); $i++){
                $indData = $mediaData[$i];
        ?>
                <label for="<?php echo $indData['media_id']; ?>">
                    <div>
                        <p><?php echo $indData['name'] ?></p>
                        <figure>
                            <!-- ✒️ should be styled with seperate css file -->
                            <img width="300px" src="<?php echo $rootPath."/uploads/".$indData['media_id'] ?>" alt="">
                        </figure>
                    </div>
                </label>
                <input type="radio" id="<?php echo $indData['media_id']; ?>" name="createMedia" value="<?php echo $indData['media_id']; ?>">
        <?php
            }
        ?>
    </form>

</div>

<?php 
    require $rootPath . "views/backend/partials/footer.php";
?>
