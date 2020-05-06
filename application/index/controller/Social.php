<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/6 0006
 * Time: 13:34
 * 社务控制器
 */

namespace app\index\controller;

use think\Controller;
use app\index\controller\Base;

class Social extends Base
{

    //后台首页
    public function index(){
        return  $this->fetch();
    }


}