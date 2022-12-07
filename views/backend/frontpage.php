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

    require_once $rootPath . "controllers/editFrontpage.php";

    require_once $rootPath . "views/backend/partials/header.php";
?>

<div class="wrapper">
    <form method="POST" action="/adminFrontpage">
        <h3>
            About us
        </h3>
        <textarea name="aboutUs" id="" cols="60" rows="10"></textarea>
        <button type="submit">Edit</button>
    </form>
</div>

<?php 
    require_once $rootPath . "views/backend/partials/footer.php";
?>
