<?php
namespace app\Core;
class Application{
    public $router;
    public $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router();
     
    }

    public function run(){
       return $this->request->getPath();
    }
}
?>