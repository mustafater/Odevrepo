<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>1 week 2 exam</title>
</head>
<body>

<!--bootstrap form -->
<div class="container">
<form class="row g-5 mt-3" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Number</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Dİzi elemanı giriniz">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Number</label>
    <input type="text" class="form-control" id="inputNumber"  name="number" placeholder="Lütfen Sayı giriniz...">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Submit</button>
  </div>
</form>
   <div class="row">
  
  <?php
    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["number"])){
      //base validation  
      function validat($result){
          $result=trim($result);
          $result=stripslashes($result);
          $result=htmlspecialchars($result);
          $result = (int)$result;
          return $result;
      }
      $number= validat($_POST["number"]);
      $dizi = array();
      array_push($dizi,$number);
      $myCookieTime=time()+86400;
      setcookie("diziSakla" ,json_encode($dizi),$myCookieTime);
      /*
      setcookie("diziSakla"," ", time()-60);
      */ 
      $numberArray=json_decode($_COOKIE["diziSakla"],true);

     // $enKucuk=min($numberArray);
     $enKucuk =$numberArray[0];
     $diziSayısı=count($numberArray);     
      for($i=0;$i<$diziSayısı;$i++){
          if($numberArray[$i]<$enKucuk){
            $enKucuk=$numberArray[$i];
          }

      }
     if(isset($enKucuk)){
      echo ' <div class="col-auto mt-2">
      <label id="input"  class="form-control-plaintext">En kucuk deger '.$enKucuk.'</label>
      </div>' ;
     }
    
    
    }else{
      header("/");
    }

  ?> 
  
     
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">

</script>  
</body>
</html>






