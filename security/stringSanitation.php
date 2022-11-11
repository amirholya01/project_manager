<?php

class stringSanitation {

    function sanitice ($string){
        $originalString = $string;
        $string = htmlspecialchars($string);

        if($originalString == $string){
            header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
        }

        return $string;
    }

}

$stringSanitation = new stringSanitation();