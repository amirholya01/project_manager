<?php

class stringSanitation {

    public $validated = true;

    function sanitice ($string){
        $originalString = $string;
        $string = htmlspecialchars($string);

        if($originalString != $string){
            $this->validated = false;
            header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
        }

        return $string;
    }

    function getValidationStatus (){
        return $this->validated;
    }

}

$stringSanitation = new stringSanitation();