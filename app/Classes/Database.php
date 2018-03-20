<?php
/**
 * Created by PhpStorm.
 * User: BEHUONG
 * Date: 3/20/2018
 * Time: 2:47 PM
 */

namespace app\Classes;


use app\Config\Config;

class Database
{
    private $username=null,$password=null,$dsn=null;
    public $database;
    public $error;
    private static $dbInstance=null;
    private function __construct()
    {
        $this->username= Config::get('mysql/username');
        $this->password= Config::get('mysql/password');
        array(\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION);
        try{
            $this->database=new \PDO('mysql:host=localhost;dbname=thuctapphp','root','');
        }
        catch (\PDOException $ex){
            $this->errors=$ex;
        }
    }
    public static function connect(){
        if(!isset(self::$dbInstance)){
            self::$dbInstance=new self();
        }
        return self::$dbInstance;
    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}