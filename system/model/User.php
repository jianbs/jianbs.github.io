<?php namespace system\model;
use houdunwang\model\Model;

class User extends Model
{
    //数据表
    protected $table = "user";

    /**
     * 登录
     */
    public function login()
    {

        Validate::make( [
            [ 'username', 'isnull', '用户名不能为空', 3 ],
            [ 'password', 'isnull', '密码不能为空', 3 ],
            //[ 'code', 'captcha', '验证码不正确', 3 ],
        ] );
        if(!$data = User::where('username',$_POST['username'])->where('password',Crypt::encrypt($_POST['password']))->first())
        {
            //返回结果
            return ['valid'=>false,'message'=>'账号或密码错误'];
        }
        $data = $data->toArray();

        Session::set('uid',$data['uid']);
        Session::set('username',$data['username']);
        //返回结果
        return ['valid'=>true,'message'=>'登录成功'];
    }
}