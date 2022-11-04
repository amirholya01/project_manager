<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    
    require $rootPath . "views/partials/adminStart.php";
    
    /* 🔥 Needs to check if the user is allowed to be here */
?>

<form method="POST" action="adminUsers">
    <input type="hidden" name="editUser" value="true">
    <input type="hidden" name="editId" value="<?php echo $_POST['id'] ?>">
    <input type="text" name="editName" value="<?php echo $_POST['name'] ?>">
    <input type="text" name="password">
    <input type="submit">
</form>

<?php 
    require $rootPath . "views/partials/adminEnd.php";
?>
