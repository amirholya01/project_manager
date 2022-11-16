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
    
    require $rootPath . "controllers/adminEditProduct.php";
    
    /* 🔥 Needs to check if the user is allowed to be here */
?>
<div class="wrapper">
    <form method="POST" action="adminProducts">
        <!-- 
            i send editUser to tell the controller that it should run edit user
        -->
        <input type="hidden" name="editProduct" value="true">

        <input type="hidden" name="editId" value="<?php echo $_POST['id'] ?>">
        <input type="text" name="editName" value="<?php echo $_POST['name'] ?>">
        <input type="text" name="editDescription" value="<?php echo $_POST['description'] ?>">
        <input type="text" name="editPrice" value="<?php echo $_POST['price'] ?>">
        <select name="editType">
            <?php 
                foreach($allTypes as $type){
            ?>
                <option value="<?php echo $type['id'] ?>"><?php echo $type['type'] ?></option>
            <?php
                }
            ?>
        </select>
        <select name="editColors[]" multiple>
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
        require $rootPath . "views/backend/partials/footer.php";
    ?>
</div>
