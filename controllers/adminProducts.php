<?php

$getTypes = $pdo->prepare($Products->getAllTypes);
$getTypes->execute();

$allTypes = $getTypes->fetchAll();