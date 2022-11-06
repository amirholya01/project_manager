<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    
    require $rootPath . "views/partials/adminStart.php";
    require $rootPath . "models/products.php";

    /* 🔥 Needs to check if the user is allowed to be here */
    require $rootPath . "controllers/deleteProduct.php";
    require $rootPath . "controllers/getProductsWithFilters.php";
?>

<form method="POST" action="adminProducts">
    <input type="text" name="id" placeholder="ID">
    <input type="text" name="search" placeholder="Search Something!">
    <select name="type" id="type">
        <option value="">Nothing</option>

        <!-- ✒️ Needs to be loaded from the DB -->
        <option value="Pineapple">pineapple</option>
        <option value="Aaargh">aaargh</option>
    </select>
    <input type="submit">
</form>
<a href="/">Reset</a>
<a href="/adminCreateProduct">Create new product</a>

<?php
    foreach($data as $indData){
?>
    <div>
        <p><?php echo $indData['name'] ?></p>
        <p><?php echo $indData['type'] ?></p>
        <p><?php echo $indData['description'] ?></p>
        <p><?php echo $indData['price'] ?> DKK</p>
        
        <form method="POST" action="adminProducts">
            <input type="hidden" name="delete" value="<?php echo $indData['products_id'] ?>">
            <input type="submit" value="Delete">
        </form>
    </div>
<?php
    }
?>

<?php 
    require $rootPath . "views/partials/adminEnd.php";
?>
