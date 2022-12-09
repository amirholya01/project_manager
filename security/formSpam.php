<?php

$validated = false;

/* 
    it means that when we send in an form it should have a hidden input
    called "validate", if this input is send in it will trigger this file
*/
if(isset($_POST['validate'])){
    if( isset($_SESSION['name']) ){
        $name = $_SESSION['name'];
        
        $securityData = $UsersHandler->getSecurityData();
        
        if($name == $securityData['name']){
            $startTime = new DateTime($securityData['time']);
            $endTime = new DateTime();

            $time = $startTime->diff($endTime);

            $dbTimeUpdate = date("y-m-d h:i:s");

            $UsersHandler->updateSecurityData($name, $dbTimeUpdate);

            if($time->y == 0 && $time->m == 0 && $time->d == 0 && $time->h == 0 && $time->i == 0 && $time->s < 2){
                header("location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
            }else{
                $validated = true;
            }
        }else{
            $validated = true;
        }
    }
}