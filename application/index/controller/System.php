<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/6 0006
 * Time: 13:26
 * 系统初始化
 */
namespace app\index\controller;

use think\Controller;
use app\index\controller\Base;

class System extends Base
{

    //系统首页
    public function index(){
        return  $this->fetch();
    }


}
