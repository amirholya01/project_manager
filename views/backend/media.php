<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require_once $rootPath . "dbconn.php";

    require_once $rootPath . "models/handlers/productsHandler.php";
    require_once $rootPath . "models/handlers/usersHandler.php";
    require_once $rootPath . "security/adminCheck.php";

    
    require_once $rootPath . "security/formSpam.php";
    require_once $rootPath . "security/stringSanitation.php";

    require_once $rootPath . "controllers/imageUpload.php";

    /* require_once $rootPath . "controllers/createProduct.php";
    require_once $rootPath . "controllers/editProduct.php";
    require_once $rootPath . "controllers/deleteProduct.php"; */

    /* require_once $rootPath . "controllers/adminProducts.php";
    require_once $rootPath . "controllers/getProductsWithFilters.php"; */
    require_once $rootPath . "controllers/getMediaWithFilters.php";

    require_once $rootPath . "views/backend/partials/header.php";

    
    /* This is to make so search data dosent disapear after search */

    $id = null;
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
    $search = null;
    if(isset($_POST['search'])){
        $search = $_POST['search'];
    }
    $searchType = null;
    if(isset($_POST['type'])){
        $searchType = $_POST['type'];
    }
    $page = 0;
    if(isset($_POST['page'])){
        $page = $_POST['page'];
    }
?>
<div class="wrapper">
    <?php
        $pageNr = $page;
        $productsPrPage = 10;
        $pageMinIndex = $pageNr * $productsPrPage;
        $pageMaxIndex = $pageMinIndex + $productsPrPage;
    ?>

    <!-- ✒️ Search -->
    <!-- ✒️ Reset search -->
    <!-- ✒️ Create Media -->

    <?php
        /* Previous button */
        if($page > 0){
    ?>
        <form method="POST" action="adminProducts">
            <input type="hidden" name="id" value="<?php echo ($id != null) ? $id : ""; ?>">
            <input type="hidden" name="search" value="<?php echo ($search != null) ? $search : ""; ?>">
            <input type="hidden" name="type" value="<?php echo ($searchType != null) ? $searchType : ""; ?>">
            <input type="hidden" name="page" value="<?php echo ($page - 1) ?>">
            <input type="submit" value="Prev">
        </form>
    <?php
        }
    ?>

    <?php
        /* Next button */
        if($page < (count($data) / $productsPrPage) - 1){
    ?>
    <form method="POST" action="adminProducts">
        <input type="hidden" name="id" value="<?php echo ($id != null) ? $id : ""; ?>">
        <input type="hidden" name="search" value="<?php echo ($search != null) ? $search : ""; ?>">
        <input type="hidden" name="type" value="<?php echo ($searchType != null) ? $searchType : ""; ?>">
        <input type="hidden" name="page" value="<?php echo ($page + 1) ?>">
        <input type="submit" value="Next">
    </form>
    <?php
        }
    ?>

    <?php
        for($i = $pageMinIndex; $i < $pageMaxIndex && $i < count($data); $i++){
            $indData = $data[$i];
    ?>
            <div>
                <p><?php echo $indData['name'] ?></p>
                <p><?php echo $indData['type'] ?></p>
                <figure>
                    <img src="<?php echo $rootPath."/uploads/".$indData['media_id'] ?>" alt="">
                </figure>
                
                <!-- <form method="POST" action="adminEditProduct">
                    <input type="hidden" name="id" value="<?php /*echo $indData['products_id'] ?>">
                    <input type="hidden" name="name" value="<?php echo $indData['name'] ?>">
                    <input type="hidden" name="description" value="<?php echo $indData['description'] ?>">
                    <input type="hidden" name="price" value="<?php echo $indData['price'] ?>">
                    <input type="submit" value="Edit">
                </form>

                <form method="POST" action="adminProducts">
                    <input type="hidden" name="delete" value="<?php echo $indData['products_id']*/ ?>">
                    <input type="submit" value="Delete">
                </form> -->
            </div>
    <?php
        }
    ?>

    <?php
        echo "<br>";
        /* Previous button */
        if($page > 0){
    ?>
        <form method="POST" action="adminProducts">
            <input type="hidden" name="id" value="<?php echo ($id != null) ? $id : ""; ?>">
            <input type="hidden" name="search" value="<?php echo ($search != null) ? $search : ""; ?>">
            <input type="hidden" name="type" value="<?php echo ($searchType != null) ? $searchType : ""; ?>">
            <input type="hidden" name="page" value="<?php echo ($page - 1) ?>">
            <input type="submit" value="Prev">
        </form>
    <?php
        }
    ?>

    <?php
        /* Next button */
        if($page < (count($data) / $productsPrPage) - 1){
    ?>
    <form method="POST" action="adminProducts">
        <input type="hidden" name="id" value="<?php echo ($id != null) ? $id : ""; ?>">
        <input type="hidden" name="search" value="<?php echo ($search != null) ? $search : ""; ?>">
        <input type="hidden" name="type" value="<?php echo ($searchType != null) ? $searchType : ""; ?>">
        <input type="hidden" name="page" value="<?php echo ($page + 1) ?>">
        <input type="submit" value="Next">
    </form>
    <?php
        }
    ?>

</div>

<?php 
    require_once $rootPath . "views/backend/partials/footer.php";
?>