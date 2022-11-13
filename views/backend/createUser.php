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
        i send createUser to tell the controller that it should run create user
    -->
    <input type="hidden" name="validated" value="true">
    <input type="hidden" name="createUser" value="true">

    <input type="text" name="createName">
    <input type="text" name="createPassword">
    <select name="createRole">
        <option value="0">Customer</option>
        <option value="1">Admin</option>
    </select>
    <input type="submit">
</form>

<?php 
    require $rootPath . "views/backend/partials/adminEnd.php";
?>
