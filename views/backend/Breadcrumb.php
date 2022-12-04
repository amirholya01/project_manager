<?php


if($pageName != $_SESSION["prevpage"]){

    $_SESSION["prevpage"] = $pageName;
    if (in_array($pageName, $_SESSION['breadcrumbs'])){
        echo "if";
        $index = array_search($pageName, $_SESSION['breadcrumbs']);
    
        //$sliceValue = count($_SESSION['breadcrumbs']) - $index - 1;
        /* echo "<br>";
        echo "<br>";
        echo $index;
        echo "<br>";
        echo "<br>";
        echo $sliceValue;
        echo "<br>";
        echo "<br>"; */
    
        $_SESSION['breadcrumbs'] = array_slice($_SESSION['breadcrumbs'], 0, $index + 1);
        $_SESSION['breadcrumbsLinks'] = array_slice($_SESSION['breadcrumbsLinks'], 0, $index + 1);
    } else {
        echo "else";
        array_push($_SESSION['breadcrumbs'], $pageName);
        array_push($_SESSION['breadcrumbsLinks'], $pageLink);
    }
}
print_r($_SESSION['breadcrumbs']);



