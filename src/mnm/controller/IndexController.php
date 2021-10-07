<?php

class IndexController extends Controller 
{
    public function  __construct(){
       
    }
    public function __call($isim, $parametreler)
    {
        echo "$isim   there is nothing for  to bring ";
    }
    public function mainPage()
    {
      $this->view("mainPage");
      $this->model("IndexModel");
      
    }
    public function dataLists()
    {
       
       $dataModel =$this->model("IndexModel");
      $data=$dataModel->dataList();
       $dataview="DataList";
       $this->view($dataview,$data);
    }
}




?>