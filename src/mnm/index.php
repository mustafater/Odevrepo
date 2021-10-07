<?php

include 'core/Controller.php';


//router
$uri = $_SERVER["REQUEST_URI"];


$new_uri = rtrim($uri,"/");
$new_uri = trim($new_uri,"/");
$new_uri = explode("/",$new_uri);


/*

//
https://dev.to/fadymr/php-create-your-own-php-router-4g0o
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

*/
//
//echo "mnm/controller/".$new_uri[3].".php";
$controllerlist= array();
array_push($controllerlist, "homecontroller");
array_push($controllerlist,"indexcontroller");

$say=Count( $controllerlist);

// make refactoring
// what's reflection xd
if(@isset($new_uri[3])){
    for($i=0;$i<$say;$i++){
        if(($controllerlist[$i]==$new_uri[3])){
         $reflection = true;   
        }
    }
if($reflection==false)header("Location:http://localhost/mnm/index.php");  

include 'controller/'.$new_uri[3].'.php';
$controlName=(string)$new_uri[3];

  $controllerClass = new $controlName;

  if(@isset($new_uri[4])){
    $method=(string)$new_uri[4];
    $controllerClass->$method();
    if(@isset($new_uri[5])){
       $name=(string)$new_uri[5];
       $controllerClass->$method($name);
    }
  }
}else{
    include 'controller/IndexController.php';
    $controllerClass= new IndexController;
    $controllerClass->mainPage();
  }










?>