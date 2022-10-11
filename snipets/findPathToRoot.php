<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require $rootPath . "[PATH_TO_DESIRED_FILE_FROM_ROOT]";
?>