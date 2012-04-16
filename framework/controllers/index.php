<?php

class Index extends Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $data['title'] = 'Page title goes here';
        $this->view->render('outside', 'index', $data);
    }
    
}