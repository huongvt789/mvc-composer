<?php
/**
 * Created by PhpStorm.
 * User: BEHUONG
 * Date: 3/20/2018
 * Time: 2:49 PM
 */
namespace app\Config;
class Config
{
    public static function get($path=null){
        if($path){
            $paths=explode('/',$path);
            $config=$GLOBALS['config'];
            foreach ($paths as $bit){
                if(isset($config[$bit])){
                    $config=$config[$bit];
                }
            }
            return $config;
        }
        else{
            return new Exception("....");
        }
    }
}
$GLOBALS['config']=array(
    'mysql'=>array(
        'database'=>'thuctapphp',
        'username'=>'root',
        'password'=>''
    )
);

