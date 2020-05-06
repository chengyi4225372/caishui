<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/6 0006
 * Time: 13:32
 * 订单控制器
 */
namespace app\index\controller;

use think\Controller;
use app\index\controller\Base;

class Order extends Base
{

    //后台首页
    public function index(){
        return  $this->fetch();
    }


}
