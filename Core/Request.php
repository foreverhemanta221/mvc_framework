<?php 
namespace app\Core;

class Request{
    public function getPath(){
        $path = $_SERVER['PATH_INFO'] ?? "/";
        return $path;
    }

    public function getMethod(){

    }
}



?>