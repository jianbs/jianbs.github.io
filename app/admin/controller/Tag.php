<?php namespace app\admin\controller;

use houdunwang\view\View;

class Tag extends Common {
    protected $db;

    public function __init()
    {
        $this->db = new \system\model\Tag();
    }
    //动作
    public function index(){
        $data = Db::table('tag')->get();
        //分配变量
        View::with('data',$data);
        return view();
    }

    /**
     * 添加标签
     */
    public function store()
    {
        if (IS_POST){
            $res = $this->db->store();
            if ($res['valid'])
            {
                //添加成功
                message($res['message'],u('index'),'success');
            }
            message($res['message'],'back','error');
        }

        return view();
    }

    /**
     * 编辑标签
     */
    public function edit()
    {
        $tid = $_GET['tid'];
        if (IS_POST)
        {
            $res = $this->db->edit($tid);
            if ($res['valid'])
            {
                //添加成功
                message($res['message'],u('index'),'success');
            }
            message($res['message'],'back','error');
        }

        $oldData = Db::table('tag')->find($tid);
        View::with('oldData',$oldData);
        return view();
    }

    /**
     * 删除标签
     */
    public function del()
    {
        $tid = $_GET['tid'];
        if ( $this->db->del($tid))
        {
            message('删除成功',u('index'),'success');
        }
        message('删除失败','back','error');
    }
}
