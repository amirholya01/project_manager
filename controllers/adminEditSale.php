<?php

$saleData =  $ProductsHandler->getSaleById($_POST['sale']);
$productData =  $ProductsHandler->getProductSalesBySaleId($_POST['sale']);
