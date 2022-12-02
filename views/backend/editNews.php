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
    <form method="POST" action="adminNews">
        <!-- 
            i send editNews to tell the controller that it should run edit user
        -->
        <input type="hidden" name="editNews" value="true">

        <input type="hidden" name="editId" value="<?php echo $_POST['id'] ?>">
        <input type="text" name="editTitle" value="<?php echo $_POST['title'] ?>">
        <input type="text" name="editDescription" value="<?php echo $_POST['description'] ?>">
        <input type="submit">
    </form>

</div>

<?php 
    require $rootPath . "views/backend/partials/footer.php";
?>