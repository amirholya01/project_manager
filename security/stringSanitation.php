<?php

class stringSanitation {

    public $validated = true;

    function sanitice ($string){
        $originalString = $string;

        /* HTML Sanitation */
        $string = htmlspecialchars($string);

        if($originalString != $string){
            $this->validated = false;
            header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
        }

        /* SQL Sanitation */
        $sqlCommands = array(
            'DELETE',
            'TRUNCATE',
            'DROP',
            'USE'
        );

        for($i = 0; $i < count($sqlCommands); $i++){
            if(strpos($originalString, $sqlCommands[$i]) !== false){
                $this->validated = false;
                header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
            }
        }

        return $string;
    }

    function getValidationStatus (){
        return $this->validated;
    }

}

$stringSanitation = new stringSanitation();