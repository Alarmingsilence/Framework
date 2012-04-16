<?php

class Framework {
    
    public function __construct(){
        global $config;
        
        // If the URL GET data is set, trim and explode the string
        if(isset($_GET['url'])) $url = explode('/', rtrim($_GET['url'], '/'));
        
        // Make use of some pretty variables instead
        $controller = isset($url) ? $url[0] : $config['main_controller'];
        $method = isset($url[1]) ? $url[1] : null;
        $parameter = isset($url[2]) ? $url[2] : null;
        
        // Check if the controller exists
        if(file_exists($config['path']['controllers'] . $controller . '.php')){
            
            // Import the controller
            require $config['path']['controllers'] . $controller . '.php';
            $controller = new $controller;
            
            // Load the correct method
            if($method){
                if($parameter)
                    $controller->{$method}($parameter); // Load both method and parameter
                else
                    $controller->{$method}(); // Load method
            } else
                $controller->index(); // If none of the above is set, load the controller index method
        } else
            new Error(1); // Controller not found
    }
    
}