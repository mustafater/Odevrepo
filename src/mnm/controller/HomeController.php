<?php

class HomeController extends Controller{

    public function __construct()
    {
        parent::__construct();
        
    }
    public function test($isim=null)
    {

        echo "selam ".$isim;
    }

    public function __call($isim, $parametreler)
    {
        header("Location:http://localhost/mnm/index.php/controller/homecontroller");
    }
}




?>