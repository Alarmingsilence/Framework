<?php

class Model {
    
    public function __construct(){
        //$this->db = new Database();
    }
    
    public function load($model){
        global $config;
        
        include $config['path']['models'] . $model . '.php';
    }
    
}