<?php
$method = $_SERVER['REQUEST_METHOD'];
$request = explode("/", substr(@$_SERVER['PATH_INFO'], 1));

switch ($method) { 
  case 'POST': 
    include 'sample1.insert.php';
    break;
  case 'GET':
     break;
  default:
    rest_error($request);  
    break;

}
?>