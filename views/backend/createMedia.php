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
    <form method="POST" action="adminMedia" enctype="multipart/form-data">
        <!-- 
            i send createMedia to tell the controller that it should run create user
        -->
        <input type="hidden" name="validated" value="true">
        <input type="hidden" name="createMedia" value="true">

        <input type="text" name="createName" placeholder="Name">
        <input type="number" name="createType" placeholder="Type">
        <input type="file" name="createImage">
        <input type="submit">

    </form>

</div>

<?php 
    require $rootPath . "views/backend/partials/footer.php";
?>
