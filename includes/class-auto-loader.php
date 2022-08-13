<?php

// Hide All Errors 
// error_reporting(0);
// ini_set('display_errors', 0);

// Show All Errors 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('Asia/Colombo');

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

spl_autoload_register('classAutoLoader');

function classAutoLoader($className)
{
  $path = dirname(__FILE__) . "/../class/" . str_replace('\\', '/', $className) . ".php";
  if (!file_exists($path)) return false;
  include_once($path);
}
