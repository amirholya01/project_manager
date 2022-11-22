<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require $rootPath . "dbconn.php";
    
    require $rootPath . "views/backend/partials/header.php";
    require $rootPath . "models/users.php";
    require $rootPath . "security/adminCheck.php";
    require $rootPath . "models/products.php";

    require $rootPath . "controllers/adminCreateProduct.php";
    
    /* 🔥 Needs to check if the user is allowed to be here */
?>
<div class="wrapper">
    <form method="POST" action="adminProducts" enctype="multipart/form-data">
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
        <input type="file" name="createImage">
        <input type="submit">
    </form>

</div>

<?php 
    require $rootPath . "views/backend/partials/footer.php";
?>
