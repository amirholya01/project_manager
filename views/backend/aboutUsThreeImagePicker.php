<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require_once $rootPath . "public/dbconn.php";

    require_once $rootPath . "models/handlers/UsersHandler.php";
    require_once $rootPath . "security/adminCheck.php";

    require_once $rootPath . "security/formSpam.php";
    require_once $rootPath . "security/inputSanitation.php";
    
    require_once $rootPath . "models/handlers/FrontpageHandler.php";
    require_once $rootPath . "models/handlers/ProductsHandler.php";

    require_once $rootPath . "controllers/adminFrontpage.php";
    require_once $rootPath . "views/backend/partials/header.php";
?>
<div class="wrapper">

<div class="Admin-page-title margin-bottom">
    <h1>Choose image for banner 1</h1>
</div>
    <form method="POST" action="/adminEditFrontpageFunction">
        <input class="height-button button" type="submit">
            <div class="choose-image">
                <?php
                    for($i = 0; $i < count($mediaData); $i++){
                        $indData = $mediaData[$i];
                ?>
                        <div class="image">
                            <label for="<?php echo $indData['media_id']?>_primaryImage">
                                <div>
                                    <p><?php echo $indData['name'] ?></p>
                                    <figure class="figure">
                                        <!-- ✒️ should be styled with seperate css file -->
                                        <img width="300px" src="<?php echo $rootPath."/uploads/".$indData['media_id'] ?>" alt="">
                                    </figure>
                                </div>
                            </label>
                            <div class="alignment">
                                <label for="<?php echo $indData['media_id']?>_primaryImage">Primary Image</label>
                                <input name="aboutUsImageThree" type="radio" id="<?php echo $indData['media_id']?>_primaryImage" value="<?php echo $indData['media_id']; ?>">
                            </div>
                        </div>
                <?php
                    }
                ?> 
            </div>
    </form>
</div>