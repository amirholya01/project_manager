<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }

    if($_POST == array()){
        $_POST = $_SESSION["savedPost"]['adminEditUser'];
    }else{
        $_SESSION["savedPost"]['adminEditUser'] = $_POST;
    }

    require_once $rootPath . "public/dbconn.php";
    
    require_once $rootPath . "views/backend/partials/header.php";
    require_once $rootPath . "models/handlers/Usershandler.php";
    require_once $rootPath . "security/adminCheck.php";
?>
<div class="wrapper">
    <form class="Admin-handlers" method="POST" action="adminUsers">

        <!-- 
            i send editUser to tell the controller that it should run edit user
        -->

        <div class="Admin-search-product">
            <input class="input" type="hidden" name="editUser" value="true">

            <input class="input" type="hidden" name="editId" value="<?php echo $_POST['id'] ?>">
            <input class="input" type="text" name="editName" value="<?php echo $_POST['name'] ?>">
            <input class="input" type="text" name="password">
            <select name="editRole">
                <option <?php echo ($_POST['role'] == 0 ? "selected" : "") ?> value="0">Customer</option>
                <option <?php echo ($_POST['role'] == 1 ? "selected" : "") ?> value="1">Admin</option>
            </select>
            <input  class="height-button button submit" type="submit">
        </div>

    </form>

    <div class="Admin-page-title margin-bottom">
              <h1>Edit User</h1>
    </div>

</div>

<?php 
    require $rootPath . "views/backend/partials/footer.php";
?>