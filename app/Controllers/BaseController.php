<?php
/**
 * Created by PhpStorm.
 * User: BEHUONG
 * Date: 3/20/2018
 * Time: 1:25 PM
 */

namespace app\Controllers;

use app\Config\Smarty\SmartyTemplate;

abstract class BaseController
{
    protected $url;
    protected $action;

    function __construct($url, $action)
    {
        $this->url = $url;
        $this->action = $action;
        $this->tpl = new SmartyTemplate;
    }

    function executeAction()
    {
        if (!empty($this->action)) return $this->{$this->action}();
    }

    function execView($viewName)
    {
        $view_file = __DIR__ . DIRECTORY_SEPARATOR . 'Views' . get_class($this) . DIRECTORY_SEPARATOR . $viewName;
        if (file_exists($view_file)) {
            require_once($view_file);
        } else {
            throw new \Exception('View not found');
        }
    }
}