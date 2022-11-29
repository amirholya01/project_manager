<?php

class Router{
    private $request;
    public function __construct($requestPara){ /* Auto run when file is loaded */
        $this->request = $requestPara;
    }
    public function get($route, $file){
        $uri = trim($this->request, "/");
        $uri = explode("/", $uri);

        if($uri[0] == trim($route, "/")){
            array_shift($uri);
            $args = $uri;
            require_once $file . ".php";
        }
    }
}