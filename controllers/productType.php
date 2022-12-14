<?php

if(!isset($_POST['type'])){
?>
<script>
    //This works
    window.history.go(-1);
</script>
<?php
}

$products = $ProductsHandler->getProducts('', '', $_POST['type']);

$types = $ProductsHandler->getTypes();