<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require_once $rootPath . "public/dbconn.php";

    require_once $rootPath . "models/handlers/Usershandler.php";
    require_once $rootPath . "security/adminCheck.php";

    require_once $rootPath . "security/formSpam.php";
    require_once $rootPath . "security/stringSanitation.php";
    
    require_once $rootPath . "models/handlers/frontpageHandler.php";
    require_once $rootPath . "models/handlers/productsHandler.php";

    require_once $rootPath . "controllers/adminFrontpage.php";
    require_once $rootPath . "views/backend/partials/header.php";
?>

<div class="choose-image">

    <form method="POST" action="/adminFrontpage">
        <input type="submit">
        <?php
            for($i = 0; $i < count($mediaData); $i++){
                $indData = $mediaData[$i];
        ?>
                <label for="<?php echo $indData['media_id']; ?>">
                    <div>
                        <p><?php echo $indData['name'] ?></p>
                        <figure class="figure">
                            <!-- ✒️ should be styled with seperate css file -->
                            <img width="300px" src="<?php echo $rootPath."/uploads/".$indData['media_id'] ?>" alt="">
                        </figure>
                    </div>
                </label>
                <label for="<?php echo $indData['media_id']?>_primaryImage">Primary Image</label>
                <input name="bannerImageOne" type="radio" id="<?php echo $indData['media_id']?>_primaryImage" value="<?php echo $indData['media_id']; ?>">
                <?php echo $indData['media_id']?>
        <?php
            }
        ?>
    </form>

   

</div>