<?php

switch(basename($_SERVER["PHP_SELF"])) {
    case 'home.php':
        break;

        default:
        echo '<li><a href="home.php">Home</a></li>';
        break;
}
?>