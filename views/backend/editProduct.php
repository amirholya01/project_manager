<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require_once $rootPath . "public/dbconn.php";
    
    require_once $rootPath . "models/handlers/Usershandler.php";
    require_once $rootPath . "security/adminCheck.php";
    require_once $rootPath . "models/handlers/productsHandler.php";
    
    require_once $rootPath . "controllers/adminEditProduct.php";
    
    require_once $rootPath . "views/backend/partials/header.php";
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
                <!-- ✒️ Needs to select already selected colors -->
                <option value="<?php echo $color['id'] ?>"><?php echo $color['color'] ?></option>
            <?php
                }
            ?>
        </select>
        <input type="submit">
    </form>

</div>

<?php 
    require $rootPath . "views/backend/partials/footer.php";
?>