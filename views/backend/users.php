<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    
    require $rootPath . "views/partials/adminStart.php";
    require $rootPath . "controllers/deleteUser.php";
    require $rootPath . "controllers/getUsersWithFilters.php";
?>

<form method="POST" action="adminUsers">
    <input type="text" name="id" placeholder="ID">
    <input type="text" name="name" placeholder="Name">
    <input type="submit">
</form>
<a href="/adminUsers">Reset</a>

<?php
    foreach($data as $indData){
?>
    <div>
        <p><?php echo $indData['name'] ?></p>
        <p>Delete <?php echo $indData['user_id'] ?></p>
        <p>Edit <?php echo $indData['user_id'] ?></p>

        <form method="POST" action="adminUsers">
            <input type="text" name="delete" value="<?php echo $indData['user_id'] ?>">
            <input type="submit" value="Delete">
        </form>
    </div>
<?php
    }
?>

<?php 
    require $rootPath . "views/partials/adminEnd.php";
?>
