<?php
/**
 * Created by PhpStorm.
 * User: jianbs
 * Date: 2017/2/16
 * Time: 下午8:00
 */

namespace app\admin\controller;

//加载回台函数库
require "vendor/jianbs/jianbs_fun.php";
class common
{
    public function __construct()
    {
        //检测用户是否登录
        if(!Session::get('uid'))
        {
            go(u('admin.login.index'));
        }
        //检测子类中是否有 构造方法
        if(method_exists($this,'__init'))
        {
            $this->__init();
        }
    }
}