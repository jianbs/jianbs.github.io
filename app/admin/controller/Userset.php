<?php namespace app\admin\controller;

class Userset extends Common {
    //动作
    public function index(){

        return view();
    }

    /**
     *添加管理员
     */
    public function adduser()
    {
        return view();
    }

    /**
     * 退出登录
     */
    public function out()
    {
        //清楚登录信息
        Session::flush();
        message('退出登录成功',u('admin/login/index'),'success');
    }
}
