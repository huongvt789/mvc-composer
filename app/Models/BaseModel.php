<?php
/**
 * Created by PhpStorm.
 * User: BEHUONG
 * Date: 3/20/2018
 * Time: 3:09 PM
 */
namespace app\Models;
use app\Classes\Database;
abstract class BaseModel
{
    protected $db;
    function __construct()
    {
        $this->db=Database::connect()->database;
    }
}