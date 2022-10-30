<?php

class Router{
    private $request;
    public function __construct($requestPara){ /* Auto run when file is loaded */
        $this->request = $requestPara;
    }
    public function get($route, $file){
        $uri = trim($this->request, "/");

        /* $params = explode("?", $uri);
        $params = $params[1];
        
        $params = explode("&", $params);
        for($i = 0; $i < count($params); $i++){
            $params[$i] = explode("=", $params[$i]);
        } */

        $uri = explode("/", $uri);

        if($uri[0] == trim($route, "/")){
            array_shift($uri);
            $args = $uri;
            require $file . ".php";
        }
    }
}