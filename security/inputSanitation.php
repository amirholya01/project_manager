<?php

class inputSanitation {

    public $validated = true;

    function sanitice ($string){
        $originalString = $string;

        /* HTML Sanitation */
        $string = htmlspecialchars($string);

        if($originalString != $string){
            $this->validated = false;
            echo "String != Original string";
            //header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
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
                echo "Malicious stuff";
                //header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
            }
        }

        return $string;
    }

    function numberSanitice ($number){
        if(!intval($number)){
            $this->validated = false;
        }

        return $number;
    }

    
    function numberArraySanitice ($array){
        foreach($array as $number){
            if(!intval($number)){
                $this->validated = false;
            }
        }

        return $array;
    }

    function dateSanitice($date){
        if(!preg_match("/[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]/", $date)){
            $this->validated = false;
        }

        return $date;
    }


    function saletypeArraySanitice ($array){
        foreach($array as $saletype){
            if($saletype != "$" || $saletype != "%"){
                $this->validated = false;
            }
        }

        return $array;
    }

    function getValidationStatus (){
        return $this->validated;
    }
}

$inputSanitation = new inputSanitation();