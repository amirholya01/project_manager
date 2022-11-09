<?php

$getColors = $pdo->prepare($Products->getAllRawColors);
$getColors->execute();

$allColors = $getColors->fetchAll();


$getTypes = $pdo->prepare($Products->getAllTypes);
$getTypes->execute();

$allTypes = $getTypes->fetchAll();