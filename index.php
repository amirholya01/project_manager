<?php
    $stepUps = "";
    $connPath = "views/partials/header.php";
    while(!file_exists($connPath)){
        $stepUps = "../$stepUps";
    }
    require $stepUps . $connPath;

    require $stepUps . "controllers/getProducts.php"
?>

<?php
    foreach($data as $indData){
?>
    <div>
        <p><?php echo $indData['name'] ?></p>
        <p><?php echo $indData['type'] ?></p>
        <p><?php echo $indData['description'] ?></p>
        <p><?php echo $indData['price'] ?> DKK</p>
    </div>
<?php
    }
?>

<?php 
    $connPath = "views/partials/footer.php";
    while(!file_exists($connPath)){
        $connPath = "../$connPath";
    }
    require $connPath;
?>
