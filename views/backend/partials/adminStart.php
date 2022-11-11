<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require $rootPath . "dbconn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <aside>
        <nav>
            <ul>
                <li>
                    <a href="/adminProducts">Products</a>
                </li>
                <li>
                    <a href="/adminUsers">Users</a>
                </li>
            </ul>
        </nav>
    </aside>