<?php

if(!empty($_POST)){
    if( isset($_SESSION['name']) ){
        $name = $_SESSION['name'];

        $getSecurityData = $pdo->prepare("SELECT name, time FROM spam_prevention WHERE id = 1;");
        $getSecurityData->execute();

        $securityData = $getSecurityData->fetchAll()[0];

        if($name == $securityData['name']){
            $startTime = new DateTime($securityData['time']);
            $endTime = new DateTime();

            $time = $startTime->diff($endTime);

            if($time->y == 0 && $time->m == 0 && $time->d == 0 && $time->h == 0 && $time->i == 0 && $time->s < 3){
                header("location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
            }
        }

    }else{
        //✒️ You have to be logged in
    }
}