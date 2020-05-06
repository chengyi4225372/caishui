<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/6 0006
 * Time: 13:29
 * 基础数据控制器
 */
namespace app\index\controller;

use think\Controller;
use app\index\controller\Base;

class Nomal extends Base
{

    //后台首页
    public function index(){
        return  $this->fetch();
    }


}
