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
    <form method="POST" action="adminMedia">
        <!-- 
            i send editUser to tell the controller that it should run edit user
        -->
        <input type="hidden" name="editMedia" value="true">

        <input type="hidden" name="editId" value="<?php echo $_POST['id'] ?>">
        <input type="text" name="editName" value="<?php echo $_POST['name'] ?>">
        <input type="submit">
    </form>

</div>

<?php 
    require $rootPath . "views/backend/partials/footer.php";
?>