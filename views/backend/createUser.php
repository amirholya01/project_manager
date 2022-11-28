<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require_once $rootPath . "public/dbconn.php";
    
    require_once $rootPath . "models/handlers/usersHandler.php";
    require_once $rootPath . "security/adminCheck.php";
    
    require_once $rootPath . "views/backend/partials/header.php";

    /* 🔥 Needs to check if the user is allowed to be here */
?>
<div class="wrapper">
    <form method="POST" action="adminUsers">
        <!-- 
            i send createUser to tell the controller that it should run create user
        -->
        <input type="hidden" name="validated" value="true">
        <input type="hidden" name="createUser" value="true">

        <input type="text" name="createName" placeholder="Username">
        <input type="text" name="createPassword" placeholder="Password">
        <select name="createRole">
            <option value="0">Customer</option>
            <option value="1">Admin</option>
        </select>
        <input type="submit">
    </form>

</div>

<?php 
    require $rootPath . "views/backend/partials/footer.php";
?>