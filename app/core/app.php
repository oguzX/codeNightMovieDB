<?php
/**
 * User: OguzOzer
 * Date: 11/20/2018
 * Time: 10:34 PM
 */

class app
{
    public $action,$controller,$params;
    public function __construct()
    {
        $url = isset($_GET['url']) && !empty($_GET['url']) ? trim($_GET['url'],'/') : 'index/index';
        $url = explode('/',$url);
        $this->controller = isset($url[0]) ? $url['0'].'Controller' : 'indexController';
        $this->action = isset($url[1]) ? $url['1'].'Action' : 'indexAction';
        array_shift($url);
        array_shift($url);
        $this->params = $url;
    }
    public function run(){
            if (file_exists($file = CDIR."/{$this->controller}.php")){
                require_once $file;
                if(class_exists($this->controller)){
                    $controller = new $this->controller;
                    if(method_exists($controller,$this->action)){
                        call_user_func([$controller,$this->action],$this->params);
                    }else{
                        exit("<b class='err'>{$this->controller}.php</b> Action not found");
                    }
                }else{
                    exit("<b class='err'>{$this->controller}.php</b> Class not found");
                }
            }else{
                exit("<b class='err'>".$this->controller.".php</b> controller not found ");
            }
    }
}