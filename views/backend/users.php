<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    
    require $rootPath . "views/backend/partials/adminStart.php";
    require $rootPath . "models/users.php";

    /* 🔥 Needs to check if the user is allowed to be here */
    require $rootPath . "controllers/createUser.php";
    require $rootPath . "controllers/editUser.php";
    require $rootPath . "controllers/deleteUser.php";
    require $rootPath . "controllers/getUsersWithFilters.php";
?>

<form method="POST" action="adminUsers">
    <input type="text" name="id" placeholder="ID">
    <input type="text" name="name" placeholder="Name">
    <input type="submit">
</form>
<a href="/adminUsers">Reset</a>
<a href="/adminCreateUser">Create new user</a>

<?php
    foreach($data as $indData){
?>
    <div>
        <p><?php echo $indData['name'] ?></p>
        <form method="POST" action="adminEditUser">
            <input type="hidden" name="id" value="<?php echo $indData['user_id'] ?>">
            <input type="hidden" name="name" value="<?php echo $indData['name'] ?>">
            <input type="submit" value="Edit">
        </form>

        <form method="POST" action="adminUsers">
            <input type="hidden" name="delete" value="<?php echo $indData['user_id'] ?>">
            <input type="submit" value="Delete">
        </form>
    </div>
<?php
    }
?>

<?php 
    require $rootPath . "views/backend/partials/adminEnd.php";
?>
