<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }

    if($_POST == array()){
        $_POST = $_SESSION["savedPost"]['adminEditNews'];
    }else{
        $_SESSION["savedPost"]['adminEditNews'] = $_POST;
    }

    require_once $rootPath . "public/dbconn.php";
    
    require_once $rootPath . "models/handlers/UsersHandler.php";
    require_once $rootPath . "security/adminCheck.php";
    require_once $rootPath . "models/handlers/ProductsHandler.php";
    
    require_once $rootPath . "controllers/adminEditNews.php";

    require_once $rootPath . "views/backend/partials/header.php";
?>
<div class="wrapper">
    <form method="POST" action="adminNews">
        <!-- 
            i send editNews to tell the controller that it should run edit user
        -->
        <div class="Admin-handlers">
            <div class="Admin-search-product">
                <input class="input" type="hidden" name="editNews" value="true">

                <input class="input" type="hidden" name="editId" value="<?php echo $_POST['id'] ?>">
                <input class="input" type="text" name="editTitle" value="<?php echo $_POST['title'] ?>">
                <input class="input" type="text" name="editDescription" value="<?php echo $_POST['description'] ?>">
            </div>
            <input class="height-button button submit" type="submit">
        </div>


        <div class="Admin-page-title margin-bottom">
              <h1>Edit News</h1>
        </div>

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
                <input type="radio" <?php echo $indData['media_id'] == $_POST['media'] ? "checked" : "" ?> id="<?php echo $indData['media_id']; ?>" name="editMedia" value="<?php echo $indData['media_id']; ?>">
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