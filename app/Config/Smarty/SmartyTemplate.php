<?php
/**
 * Created by PhpStorm.
 * User: BEHUONG
 * Date: 3/20/2018
 * Time: 2:15 PM
 */

namespace app\Config\Smarty;


    class SmartyTemplate extends \Smarty
    {

        /**
         * SmartyTemplate constructor.
         */
        public function __construct()
        {
            parent::__construct();
            $smarty_path=dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR.'smarty'.DIRECTORY_SEPARATOR;
            $this->setTemplateDir($smarty_path.'template');
            $this->setCompileDir($smarty_path.'template');
            $this->setCacheDir($smarty_path.'cache');
            $this->setConfigDir($smarty_path.'config');
        }
    }
