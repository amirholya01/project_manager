<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    
    require $rootPath . "views/partials/adminStart.php";
    require $rootPath . "controllers/getUsersWithFilters.php";
?>

<form method="POST" action="controllers/adminUsers.php">
    <input type="text" name="id" placeholder="ID">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="url" value="" id="url">
    <input type="submit">
</form>
<script>
    /* Hmm probably not the solution */

    const url = document.querySelector('#url');

    url.value = window.location.href;

    let trimCount = 7; /* Trim of http or https */
    if(url.value[4] == "s"){
        trimCount++;
    }

    url.value = url.value.substring(trimCount);

    url.value = url.value.split("/")[0];
    
</script>


<?php
    foreach($data as $indData){
?>
    <div>
        <p><?php echo $indData['name'] ?></p>
        <p>Delete <?php echo $indData['user_id'] ?></p>
        <p>Edit <?php echo $indData['user_id'] ?></p>
    </div>
<?php
    }
?>

<?php 
    require $rootPath . "views/partials/adminEnd.php";
?>
