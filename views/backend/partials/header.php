<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="<?php echo $rootPath ?>views/backend/partials/css/style.css">
</head>
<body>

<div class="Top-nav">
    <div class="Login-info-div">
        <div class="Nav-admin-name">
            <div class="Nav-icon">
                <img src="assets/icons/user.png" alt="">
            </div>
            <?php
                if(isset($_SESSION['name'])){
            ?>
                <p>
                    <?php echo $_SESSION['name']; ?>
                    &nbsp;
                </p>
        </div>
            

            <a class="Logout" href="/logoutFunction">Log out</a>

        <?php
            }
        ?>
    </div>
</div>


<div class="Admin-main-section">
    <aside>
        <nav>
            <ul>
                <li>
                    <div class="Nav-icon link-icon">
                        <img src="assets/icons/home.png" alt="">
                    </div>
                    <a href="/adminfrontpage">Homepage</a>
                </li>
                <li>
                    <div class="Nav-icon link-icon">
                        <img src="assets/icons/box.png" alt="">
                    </div>
                    <a href="/adminProducts">Products</a>
                </li>
                <li>
                    <div class="Nav-icon link-icon">
                        <img src="assets/icons/group.png" alt="">
                    </div>
                    <a href="/adminUsers">Users</a>
                </li>
                <li>
                    <div class="Nav-icon link-icon">
                        <img src="assets/icons/insert-picture-icon.png" alt="">
                    </div>
                    <a href="/adminMedia">Media</a>
                </li>
                <li>
                    <div class="Nav-icon link-icon">
                        <img src="assets/icons/news.png" alt="">
                    </div>
                    <a href="/adminNews">News</a>
                </li>
            </ul>
        </nav>
    </aside>