<?php

class App{

    protected $controller='Home';
    protected $method ='index';
    protected $params=[];

    public function __construct(){
        $url =  $this->parseURL();
        //ada gak sebuah file didalem controller
        if(file_exists('../app/controllers/' . $url[0] . '.php')){
            $this->controller = $url[0];
            unset($url[0]);
            
            //menghapus kontroller ke0

        }
        require_once '../app/controllers/'.$this->controller .'.php';

        $this->controller = new $this->controller;
     

        //method
        if (isset ($url[1] )){
            if(method_exists($this->controller,$url[1])){
                $this->method =  $url[1];
                unset($url[1]);
              
            }
        }

        if(!empty($url)){
            $this->params = array_values($url);
        }
        //jalankan kontroller & dan kirimkan params jika ada

        call_user_func_array([$this->controller,$this->method], $this->params);
    }
    public function parseURL(){
        if( isset($_GET['url'])){
            //menghapus / diakhir
            $url = rtrim($_GET['url'],'/');
            //bershikan url dari karakterk ngaco
            $url = filter_var($url,FILTER_SANITIZE_URL);
            //PECAH URL
            $url = explode('/',$url);
            return $url; 

        }
    }

}