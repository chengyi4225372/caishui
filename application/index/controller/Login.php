<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/6
 * Time: 9:38
 * 登录控制器
 */

namespace app\index\controller;

use think\Controller;
class login extends controller
{

    public function login(){
        return  $this->fetch();
    }
    

    public function loinout(){
        return $this->fetch();
    }


}