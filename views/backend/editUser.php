<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    
    require $rootPath . "views/backend/partials/adminStart.php";
    
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
    <input type="submit">
</form>

<?php 
    require $rootPath . "views/backend/partials/adminEnd.php";
?>
