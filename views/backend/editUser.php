<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require $rootPath . "dbconn.php";
    
    require $rootPath . "views/backend/partials/header.php";
    require $rootPath . "models/users.php";
    require $rootPath . "security/adminCheck.php";
    
    /* 🔥 Needs to check if the user is allowed to be here */
?>

<form method="POST" action="adminUsers">
    <!-- 
        i send editUser to tell the controller that it should run edit user
    -->
    <input type="hidden" name="editUser" value="true">

    <input type="hidden" name="editId" value="<?php echo $_POST['id'] ?>">
    <input type="text" name="editName" value="<?php echo $_POST['name'] ?>">
    <input type="text" name="password">
    <select name="editRole">
        <option <?php echo ($_POST['role'] == 0 ? "selected" : "") ?> value="0">Customer</option>
        <option <?php echo ($_POST['role'] == 1 ? "selected" : "") ?> value="1">Admin</option>
    </select>
    <input type="submit">
</form>

<?php 
    require $rootPath . "views/backend/partials/footer.php";
?>
