<?php

/* Check if there is sent a post */
if( isset( $_POST['editSale'] ) ){
    /* Gets all the values from the post request */

    $id = $inputSanitation->numberSanitice($_POST['sale_id']);
    $title = $inputSanitation->sanitice($_POST['title']);
    $description = $inputSanitation->sanitice($_POST['description']);
    $start = $inputSanitation->dateSanitice($_POST['start']);
    $end = $inputSanitation->dateSanitice($_POST['end']);


    /* Checks if all the strings pass validation */
    $validStrings = $inputSanitation->getValidationStatus();

    /* Disables the data from being send to the database - used for testing*/
    //$validStrings = false;
    
    if($validStrings == true){
        $product_ids = $inputSanitation->numberArraySanitice($_POST['product_ids']); /* 🔥 sanitize arrays */
        $sales = $inputSanitation->numberArraySanitice($_POST['sales']);
        $saleTypes = $inputSanitation->saletypeArraySanitice($_POST['saleTypes']);
        /* if($start <= $end){

        } */
        if((count($product_ids) + count($sales)) / 2 == count($saleTypes)){
            $ProductsHandler->updateSale($id, $title, $description, $start, $end, $product_ids, $sales, $saleTypes);
        } else {
            echo "Ehhh somethings burning!";
        }
    }
}