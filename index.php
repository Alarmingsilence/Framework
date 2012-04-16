<?php

/**
 * Framework
 * 
 * Long description {@link http://www.google.se/ This is a link} or whatever.
 * Updated : 2012/03/22
 * 
 * @author Johan Hjerpe <hello.johan@live.se>
 * @version 1.0
 * 
 */

// Report all PHP errors
error_reporting(E_ALL);

// Configurations
include 'framework/config/config.php';

// Framework classes
include 'framework/Framework.php';
include 'framework/Controller.php';
include 'framework/Model.php';
include 'framework/View.php';
include 'framework/Error.php';
include 'framework/Database.php';

// Initiate framework
new Framework();