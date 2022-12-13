<?php

if(!isset($_POST['type'])){
?>
<script>
    window.history.go(-1);
</script>
<?php
}

$products = $ProductsHandler->getProducts('', '', $_POST['type']);