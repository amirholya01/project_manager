<?php

$getTypes = $pdo->prepare($Products->getAllTypes);
$getTypes->execute();

$allTypes = $getTypes->fetchAll();


$getColors = $pdo->prepare($Products->getAllColors);
$getColors->execute();

$allColors = $getColors->fetchAll();