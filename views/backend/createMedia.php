<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require_once $rootPath . "public/dbconn.php";
    
    require_once $rootPath . "models/handlers/Usershandler.php";
    require_once $rootPath . "security/adminCheck.php";
    require_once $rootPath . "models/handlers/productsHandler.php";
    
    require_once $rootPath . "views/backend/partials/header.php";
?>
<div class="wrapper">
    <form class="Admin-handlers" method="POST" action="adminMedia" enctype="multipart/form-data">
        <!-- 
            i send createMedia to tell the controller that it should run create user
        -->
        <div class="Admin-search-product">
            <input class="input" type="hidden" name="validated" value="true">
            <input class="input" type="hidden" name="createMedia" value="true">

            <input class="input" type="text" name="createName" placeholder="Name">
            <input  type="file" name="createImage">
            <input class="height-button button submit" type="submit">
        </div>

    </form>

    <div class="Admin-page-title margin-bottom">
              <h1>Create Media</h1>
    </div>
</div>

<?php 
    require $rootPath . "views/backend/partials/footer.php";
?>
