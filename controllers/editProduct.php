<?php

// Checks if there is an edit field send with the form
if(isset($_POST['editProduct'])){
    $id = $_POST['editId'];
    $name = $_POST['editName'];
    $description = $_POST['editDescription'];
    $price = $_POST['editPrice'];
    $type = $_POST['editType'];
    $colors = null;
    if(isset($_POST['editColors'])){
        $colors = $_POST['editColors'];
    }

    try {
        $pdo->beginTransaction();

        //Deletes the colors that was previously assigned to the product
        $deletePeviouslyAssignedColors = $pdo->prepare($Products->createProductColor);
        $deletePeviouslyAssignedColors->bindParam(':id', $id);
        $deletePeviouslyAssignedColors->execute();
    
        //Uploads every a new relation for each color that was selected
        if($colors != [] && $colors != null){
            foreach ($colors as $color) {
                $assignColorToProduct = $pdo->prepare($Products->deleteProductColorByProductId);
                $assignColorToProduct->bindParam(':product_id', $id);
                $assignColorToProduct->bindParam(':color_id', $color);
                $assignColorToProduct->execute();
    
            }
        }

        //Uploads the remaining user data
        $editUser = $pdo->prepare($Products->updateProductById);
        
        $editUser->bindParam(':id', $id);
        $editUser->bindParam(':name', $name);
        $editUser->bindParam(':description', $description);
        $editUser->bindParam(':price', $price);
        $editUser->bindParam(':type', $type);
        $editUser->execute();

        $pdo->commit();
    } catch (Throwable $error) {
        echo $error;
        $pdo->rollBack();
        throw $error;
    }
}