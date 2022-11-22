<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require_once $rootPath . "dbconn.php";
    
    require_once $rootPath . "views/backend/partials/header.php";
    require_once $rootPath . "models/users.php";
    require_once $rootPath . "security/adminCheck.php";
    
    /* 🔥 Needs to check if the user is allowed to be here */
?>
<div class="wrapper">
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

</div>

<?php 
    require_once $rootPath . "views/backend/partials/footer.php";
?>