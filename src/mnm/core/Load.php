<?php
class Load {

protected $autoLoad =array();

 public function __construct()
 {

 }
public function view($viewName, $autoLoad=null)
{
    
   return include "views/".$viewName.".view.php";
}
public function model($modelName)
{
    include "models/".$modelName.".php";
    return new $modelName;
}


}










?>