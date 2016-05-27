<?php
//Start Session
session_start();

// include
include '../config/config.php';
include '../libraries/Database.php';


// Helpers
require_once('../helpers/system_helper.php');
require_once('../helpers/format_helper.php');
//require_once('helpers/db_helper.php');

//Autoload classes

 function __autoload($class_name){
  require_once('../libraries/'.$class_name.'.php');
}
