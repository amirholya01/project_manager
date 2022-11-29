<?php

$allTypes = $ProductsHandler->getTypes();

$allColors = $ProductsHandler->getColors();

$mediaData = $ProductsHandler->getMedia();

$mediaAssignedToProduct = $ProductsHandler->getAssignedMediaToProductsByProductId($_POST['id']);

$colorsAssignedToProduct = $ProductsHandler->getAssignedColorsToProductsByProductId($_POST['id']);