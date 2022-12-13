<?php

echo $_POST['type'];
$relatedProducts = $ProductsHandler->getRelatedProducts($_POST['type']);