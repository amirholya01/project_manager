<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }

    if($_POST == array()){
        $_POST = $_SESSION["savedPost"]['adminEditMedia'];
    }else{
        $_SESSION["savedPost"]['adminEditMedia'] = $_POST;
    }

    require_once $rootPath . "public/dbconn.php";
    
    require_once $rootPath . "models/handlers/Usershandler.php";
    require_once $rootPath . "security/adminCheck.php";
    require_once $rootPath . "models/handlers/productsHandler.php";
    
    require_once $rootPath . "views/backend/partials/header.php";
?>
<div class="wrapper">
    <form class="Admin-handlers" method="POST" action="adminMedia">
        <!-- 
            i send editUser to tell the controller that it should run edit user
        -->
        <div class="Admin-search-product">
            <input class="input" type="hidden" name="editMedia" value="true">

            <input class="input" type="hidden" name="editId" value="<?php echo $_POST['id'] ?>">
            <input class="input" type="text" name="editName" value="<?php echo $_POST['name'] ?>">
            <input class="height-button button submit" type="submit">
        </div>

    </form>

    <div class="Admin-page-title margin-bottom">
              <h1>Edit Media</h1>
    </div>

</div>

<?php 
    require $rootPath . "views/backend/partials/footer.php";
?>