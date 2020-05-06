<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Base;

class Index extends Base
{

    //后台首页
    public function index(){
        return  $this->fetch();
    }


}
