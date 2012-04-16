<?php

class Library {
    
    public function load($library){
        global $config;
        
        include $config['path']['base'] . $config['path']['libraries'] . $library . '.php';
        
        return new $library;
    }
    
}