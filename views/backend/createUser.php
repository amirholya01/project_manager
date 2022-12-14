<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require_once $rootPath . "public/dbconn.php";
    
    require_once $rootPath . "models/handlers/Usershandler.php";
    require_once $rootPath . "security/adminCheck.php";
    
    require_once $rootPath . "views/backend/partials/header.php";
?>
<div class="wrapper">
    <form class="Admin-handlers" method="POST" action="adminCreateUserFunction">
        <!-- 
            i send createUser to tell the controller that it should run create user
        -->

        <div class="Admin-search-product">
            <input class="input" type="hidden" name="validate" value="true">
            <input class="input" type="hidden" name="createUser" value="true">

            <input class="input" type="text" name="createName" placeholder="Username">
            <input class="input" type="password" name="createPassword" placeholder="Password">
            <select name="createRole">
                <option value="0">Customer</option>
                <option value="1">Admin</option>
            </select>
            <input class="height-button button submit" type="submit">
        </div>
    </form>

    <div class="Admin-page-title margin-bottom">
              <h1>Create Users</h1>
    </div>

</div>

<?php 
    require $rootPath . "views/backend/partials/footer.php";
?>