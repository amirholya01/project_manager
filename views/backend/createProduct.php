<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    
    require $rootPath . "views/partials/adminStart.php";
    
    /* 🔥 Needs to check if the user is allowed to be here */
?>

<form method="POST" action="adminProducts">
    <!-- 
        i send createProduct to tell the controller that it should run create user
    -->
    <input type="hidden" name="createProduct" value="true">

    <input type="text" name="createName">
    <input type="number" name="createType">
    <input type="text" name="createDescription">
    <input type="number" name="createPrice">
    <input type="submit">
</form>

<?php 
    require $rootPath . "views/partials/adminEnd.php";
?>
