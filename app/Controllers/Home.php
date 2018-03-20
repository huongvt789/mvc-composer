<?php
/**
 * Created by PhpStorm.
 * User: BEHUONG
 * Date: 3/20/2018
 * Time: 1:40 PM
 */

namespace app\Controllers;


use app\Models\HomeModel;

class Home extends BaseController
{
    function index(){
        $model=new HomeModel();
        $name=$model->getNames();
        if($name){
            $this->tpl->assign('names',$name);
        }
        $this->tpl->display('smarty/templates/home/index.tpl');
//        $this->tpl->assign('header','Hello word');
//        $this->tpl->display('smarty/templates/home/index.tpl');
    }
}