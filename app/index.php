<?php

use app\Classes\Test;

ini_set('display_erros',1);

$GLOBALS['config']=array(
    'mysql'=>array(
        'username'=>'root',
        'password'=>'',
        'database'=>'thuctaphp',
        'host'=>'localhost'
    )
);
require_once ('../vendor/autoload.php');
require_once ('./Loader.php');
require_once ('smarty/Smarty.class.php');
$expected_controllers=array('index','home');
if(!empty($_GET)){
    if(in_array($_GET['controller'],$expected_controllers)){
        $controller=new Loader($_GET);
        $controller=$controller->createController();
        $controller->executeAction();
    }
}