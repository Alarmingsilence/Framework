<?php

class Error {
    
    private $error = array(
        1 => 'Controller not found!'
    );
    
    public function __construct($error_code){
        echo $this->error[$error_code];
    }
    
}