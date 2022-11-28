<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require_once $rootPath . "public/dbconn.php";
    
    require_once $rootPath . "models/handlers/Usershandler.php";
    require_once $rootPath . "security/adminCheck.php";
    require_once $rootPath . "models/handlers/productsHandler.php";
    
    require_once $rootPath . "controllers/adminCreateProduct.php";
    
    require_once $rootPath . "views/backend/partials/header.php";
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

        <!-- Img select system -->
    </form>

</div>

<?php 
    require $rootPath . "views/backend/partials/footer.php";
?>
