<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require_once $rootPath . "public/dbconn.php";
    
    require_once $rootPath . "models/handlers/Usershandler.php";
    require_once $rootPath . "security/adminCheck.php";
    //require_once $rootPath . "models/handlers/newsHandler.php";
    
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

    </form>

</div>

<?php 
    require $rootPath . "views/backend/partials/footer.php";
?>
