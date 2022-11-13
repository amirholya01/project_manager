<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    
    require $rootPath . "views/backend/partials/adminStart.php";
    require $rootPath . "models/products.php";
    require $rootPath . "security/adminCheck.php";

    require $rootPath . "controllers/adminCreateProduct.php";
    
    /* 🔥 Needs to check if the user is allowed to be here */
?>

<form method="POST" action="adminProducts">
    <!-- 
        i send createProduct to tell the controller that it should run create user
    -->
    <input type="hidden" name="validated" value="true">
    <input type="hidden" name="createProduct" value="true">

    <input type="text" name="createName" placeholder="Name">
    <input type="text" name="createDescription" placeholder="Description">
    <select name="createType">
        <?php 
            foreach($allTypes as $type){
        ?>
            <option value="<?php echo $type['id'] ?>"><?php echo $type['type'] ?></option>
        <?php
            }
        ?>
    </select>
    <input type="number" name="createPrice" placeholder="Price">
    <select name="createColors[]" multiple>
        <?php 
            foreach($allColors as $color){
        ?>
            <option value="<?php echo $color['id'] ?>"><?php echo $color['color'] ?></option>
        <?php
            }
        ?>
    </select>
    <input type="submit">
</form>

<?php 
    require $rootPath . "views/backend/partials/adminEnd.php";
?>
