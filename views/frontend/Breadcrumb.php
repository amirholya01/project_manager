<?php

/* checks if we just refreshed */
if($pageName != $_SESSION["prevpage"]){
    $_SESSION["prevpage"] = $pageName;

    $levelCheck = false;

    /* could just check for the last field instead of looping (would need failsafe if empty) */
    if(count($_SESSION['breadcrumbsLevels']) > 0){
        foreach($_SESSION['breadcrumbsLevels'] as $level){
            if($pageLevel <= $level){
                $levelCheck = true;
            }
        }
    }

    /* Checks if the page is already in the breadcrumbs */
    if (in_array($pageName, $_SESSION['breadcrumbs'])){
        /* Gets the index of page in breadcrumbs */
        $index = array_search($pageName, $_SESSION['breadcrumbs']);
        /* Cuts breadcrumbs right after page */
        $_SESSION['breadcrumbs'] = array_slice($_SESSION['breadcrumbs'], 0, $index + 1);
        $_SESSION['breadcrumbsLinks'] = array_slice($_SESSION['breadcrumbsLinks'], 0, $index + 1);
        $_SESSION['breadcrumbsLevels'] = array_slice($_SESSION['breadcrumbsLevels'], 0, $index + 1);
    } elseif ($levelCheck) {
        /* 
            Checks if there is a page of a higher level in breadcrumbs
            and removed it if there is
        */

        /* Place holder arrays for filtering */
        $newBreadcrumbs = array();
        $newBreadcrumbsLinks = array();
        $newBreadcrumbsLevels = array();
        
        /* Loops through breadcrumbsLevels and checks for higher levels than $pageLevel */
        for($i = 0; $i < count($_SESSION['breadcrumbsLevels']); $i++){
            /* Adds all pages that are lower level than $pageLevel */
            if($pageLevel > $_SESSION['breadcrumbsLevels'][$i]){
                array_push($newBreadcrumbs, $_SESSION['breadcrumbs'][$i]);
                array_push($newBreadcrumbsLinks, $_SESSION['breadcrumbsLinks'][$i]);
                array_push($newBreadcrumbsLevels, $_SESSION['breadcrumbsLevels'][$i]);
            }
        }
        /* Sets the sessions to the filtered arrays */
        $_SESSION['breadcrumbs'] = $newBreadcrumbs;
        $_SESSION['breadcrumbsLinks'] = $newBreadcrumbsLinks;
        $_SESSION['breadcrumbsLevels'] = $newBreadcrumbsLevels;

        /* adds page to breadcrumbs */
        array_push($_SESSION['breadcrumbs'], $pageName);
        array_push($_SESSION['breadcrumbsLinks'], $pageLink);
        array_push($_SESSION['breadcrumbsLevels'], $pageLevel);
    } else {
        /* adds page to breadcrumbs */
        array_push($_SESSION['breadcrumbs'], $pageName);
        array_push($_SESSION['breadcrumbsLinks'], $pageLink);
        array_push($_SESSION['breadcrumbsLevels'], $pageLevel);
    }
}



