<?php

 class App {
     private $controller;
     private $func = 'id';
     private $id = -1; 
     public function __construct() {
        $this->controller = new Controller();
        $this->parseURL();
     }
     private function parseURL() {
        if(isset($_GET[$this->func])) {
            $this->id=$_GET[$this->func];
        }
        if($this->id == -1) {
            $this->controller->all();
        }
        else {
            $this->controller->one($this->id);
        }
    }
}
?>