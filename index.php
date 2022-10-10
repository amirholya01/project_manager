<?php
    $connPath = "views/partials/header.php";
    while(!file_exists($connPath)){
        $connPath = "../$connPath";
    }
    require $connPath;
?>
Meep moop
<?php 
    $connPath = "views/partials/footer.php";
    while(!file_exists($connPath)){
        $connPath = "../$connPath";
    }
    require $connPath;
?>
