<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/6 0006
 * Time: 13:30
 * 分红管理 控制器
 */
namespace app\index\controller;

use think\Controller;
use app\index\controller\Base;

class Feng extends Base
{

    //后台首页
    public function index(){
        return  $this->fetch();
    }


}
