<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }

    require $rootPath . "views/backend/partials/adminStart.php";
    require $rootPath . "models/products.php";

    /* 🔥 Needs to check if the user is allowed to be here */
    
    require $rootPath . "security/formSpam.php";
    require $rootPath . "security/stringSanitation.php";

    require $rootPath . "controllers/createProduct.php";
    require $rootPath . "controllers/editProduct.php";
    require $rootPath . "controllers/deleteProduct.php";
    require $rootPath . "controllers/getProductsWithFilters.php";

    require $rootPath . "controllers/adminProducts.php";
?>

<form method="POST" action="adminProducts">
    <input type="text" name="id" placeholder="ID">
    <input type="text" name="search" placeholder="Search Something!">
    <select name="type" id="type">
        <option value="">Nothing</option>
        <!-- Adds types to the search select field -->
        <?php
            foreach($allTypes as $type){
        ?>
            <option value="<?php echo $type['type']; ?>"><?php echo $type['type']; ?></option>
        <?php
            }
        ?>
    </select>
    <input type="submit">
</form>
<a href="/adminProducts">Reset</a>
<a href="/adminCreateProduct">Create new product</a>

<?php
    foreach($data as $indData){
?>
    <div>
        <p><?php echo $indData['name'] ?></p>
        <p><?php echo $indData['type'] ?></p>
        <!-- Adds colors -->
        <?php 
            foreach($allColors as $color){
                if($indData['products_id'] == $color['product_id']){
        ?>
            <p><?php echo $color['color'] ?></p>
        <?php
                }
            }
        ?>
        <p><?php echo $indData['description'] ?></p>
        <p><?php echo $indData['price'] ?> DKK</p>
        
        <form method="POST" action="adminEditProduct">
            <input type="hidden" name="id" value="<?php echo $indData['products_id'] ?>">
            <input type="hidden" name="name" value="<?php echo $indData['name'] ?>">
            <input type="hidden" name="description" value="<?php echo $indData['description'] ?>">
            <input type="hidden" name="price" value="<?php echo $indData['price'] ?>">
            <input type="submit" value="Edit">
        </form>

        <form method="POST" action="adminProducts">
            <input type="hidden" name="delete" value="<?php echo $indData['products_id'] ?>">
            <input type="submit" value="Delete">
        </form>
    </div>
<?php
    }
?>

<?php 
    require $rootPath . "views/backend/partials/adminEnd.php";
?>
