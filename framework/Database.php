<?php

class Database extends PDO {
    
    private $dsn = 'mysql:host=localhost;dbname=database_name';
    private $username = 'root';
    private $passwd = '';
    
    public function __construct() {
        parent::__construct($this->dsn, $this->username, $this->passwd);
    }
    
}