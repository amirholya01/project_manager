<?php

$sql = "SELECT * FROM products"; /* <-- Model  |  needs joins on the fks */

$data = $pdo->query($sql)->fetchAll();

