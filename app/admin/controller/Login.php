<?php
/**
 * Created by PhpStorm.
 * User: jianbs
 * Date: 2017/2/16
 * Time: 下午8:04
 */

namespace app\admin\controller;
use houdunwang\model\Model;
use system\model\User;

class Login
{
    public function index()
    {
        if(IS_POST)
        {
            $res = (new User())->login();
            if( $res['valid']){
                //说明执行成功
                message( $res['message'], u('admin.index.index'), $type = 'success', $timeout = 2 );
            }
            message( $res['message'], $redirect = 'back', $type = 'error', $timeout = 2 );
        }
        return view();
    }
    /**
     * 验证码
     */
    public function code()
    {
        Code::num(4)->make();
    }
}