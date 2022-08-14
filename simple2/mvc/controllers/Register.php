<?php
class Register extends Controller{

    public $CategoryModel;
    public $AdsModel;

    public function __construct(){
        //Model
        $this->CategoryModel = $this->model("CategoryModel");
        $this->Adsmodel = $this->model("AdsModel"); 
    }
    public function SayHi(){
        $this->view("master1",[
            "page"=>"register",
            "categories"=> $this->CategoryModel->ListAll(),
            "ads"=> $this->AdsModel->ListAll()
        ]);
    }
}
?>