<?php

class App{

	protected $controller = 'Home'; //sesuaikan nama controllernya 
	protected $method = 'index'; //sesuaikan nama methodnya 
	protected $params = []; //untuk nampung parameter

    public function __construct()
    {
       $url = $this->parseURL();
       // var_dump($url);
        
        // controller
        if ( file_exists('../app/controllers/' . ucwords($url[0]) . '.php') ) {
            $this->controller = $url[0];
            // var_dump($url);
            unset($url[0]);
        }

        require_once '../app/controllers/' . ucwords($this->controller) . '.php';
        $this->controller = new $this->controller;

        // // method
        if ( isset($url[1]) ) {
        	if ( method_exists($this->controller, $url[1]) ) {
        		$this->method = $url[1];
        		// var_dump($url);
                unset($url[1]);
        	}
        }

        // // params
        if (!empty($url)) {
            // var_dump($url);
        	$this->params = array_values($url);
        }

        // // jalankan controller & method, serta kirimkan params jika ada

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
    	if ( isset($_GET['url']) ) {
    		$url = rtrim($_GET['url'], '/');
    		$url = filter_var($url, FILTER_SANITIZE_URL);
    		$url = explode('/', $url);
    		return $url;
    	}
    }
}