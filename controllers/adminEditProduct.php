<?php

$getColors = $pdo->prepare($Products->getAllRawColors);
$getColors->execute();

$allColors = $getColors->fetchAll();