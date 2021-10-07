<?php
class DataBase 
{
private $myHost="localhoast";
private $myUser="root";
private $myPass="";
private $myDb= "";
private $charSet="UTF8";
private $pdo=null;



public function __construct(){
    try{
      $this->pdo= new PDO("mysql:host=".$this->myHost.";dbname=".$this->myDb, $this->myUser, $this->myPass);

    }catch(PDOException $e){
        die("may not connet  to database".$e->getMessage());

    }finally{
       $this->pdo =null;
    }
    
}

}



?>