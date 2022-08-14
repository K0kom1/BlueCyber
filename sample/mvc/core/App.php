<?php
class App{
    protected $controller = "Home";
    protected $action="SayHi";
    protected $params=[];

    function __construct(){
        $arr = $this->UrlProcess();
        // print_r($arr);

        // Xu li Controller
        if (file_exists("./mvc/controllers/".$arr[0].".php")){
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./mvc/controllers/".$this->controller.".php" ;
        $this->controller = new $this->controller;
    
        // Xu li Action
        if (isset($arr[1])){
            if (method_exists($this->controller, $arr[1])){
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
        // echo $this->action;

        // Xu li param
        $this->params = $arr?array_values($arr):[];
        // print_r($this->params);

        //chạy hàm action thuộc lớp controlller với tham số là param
        call_user_func_array([$this->controller, $this->action], array($this->params));
        // call_user_func_array(__NAMESPACE__.'Home::SayHi', array('d'));
        // call_user_func_array(callable($this->controller, $this->action),array($this->params));
        
        // cho $this->controller."<br/>";
        // echo $this->action."<br/>";
        // print_r($this->params);

    }
    function UrlProcess(){
        if (isset($_GET["url"])){
            return explode("/",filter_var(trim($_GET["url"], "/")));
        }
    }
}
?>