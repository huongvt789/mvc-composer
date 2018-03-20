<?php
/**
 * Created by PhpStorm.
 * User: BEHUONG
 * Date: 3/20/2018
 * Time: 1:20 PM
 */

class Loader
{
    private $url;
    private $controller;
    private $action;
    private $namespace="app\\Controllers\\";
    function __construct()
    {
        if(!empty($_GET)){
            $this->url=$_GET;
        }
        if(isset($this->url['controller'])){
            $this->controller=$this->namespace.$this->url['controller'];
        }
        else{
            $this->controller=$this->namespace.'home';
        }
        if(isset($this->url['action'])){
            $this->action=$this->url['action'];
        }
        else{
            $this->action='index';
        }
    }
    function createController(){
        if(class_exists($this->controller)){
            $parent=class_parents($this->controller);
            if (in_array($this->namespace.'BaseController',$parent)){
                if(method_exists($this->controller,$this->action)){
                    return new $this->controller($this->url,$this->action);
                }
                else{
                    throw new Exception("Method {$this->action} does not found");
                }
            }
            else{
                throw new Exception("BaseController{$this->controller} not foud");
            }
        }
        else{
            throw new Exception("Controller{$this->controller} not found");
        }
    }
}