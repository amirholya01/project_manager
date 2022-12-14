<?php

if(!isset($_POST['sale'])){
?>
<script>
    //This works
    window.history.go(-1);
</script>
<?php
}

$productSales = $ProductsHandler->getProductSalesBySaleId($_POST['sale']);

$products = array();
foreach($productSales as $sale){
    $product = $ProductsHandler->getProducts('', $sale['products_id']);
    if($sale['saleType'] == '%'){
        $product[0]['price'] -= (($product[0]['price'] / 100) * $sale['sale']);
    }else{
        $product[0]['price'] = $sale['sale'];
    }
    array_push($products, $product[0]);
}

$types = $ProductsHandler->getTypes();