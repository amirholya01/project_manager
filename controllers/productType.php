<?php

if(!isset($_POST['type'])){
?>
<script>
    //This works
    window.history.go(-1);
</script>
<?php
}

$inputSanitation->numberSanitice($_POST['type']);

$validStrings = $inputSanitation->getValidationStatus();

if($validStrings == true){
    $products = $ProductsHandler->getProducts('', '', $_POST['type']);
    
    $types = $ProductsHandler->getTypes();
}