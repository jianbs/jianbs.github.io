<?php namespace app\admin\controller;

class Link extends Common {
    protected $db;
    public function __init()
    {
        $this->db = new \system\model\Link();
    }
    //动作
    public function index(){
        $data = $this->db->get()->toArray();
        View::with('data',$data);
        return view();
    }

    /**
     * 添加友情链接
     */
    public function store()
    {
        if (IS_POST)
        {
            if($this->db->store())
            {
                message('添加成功',u('index'),'success');
            }
        }
        return view();
    }

    /**
     * 编辑友情链接
     */
    public function edit()
    {
        //获取需要编辑的lid
        $lid = q('get.lid');
        if (IS_POST)
        {
            if($this->db->edit($lid))
            {
                message('编辑成功',u('index'),'success');
            }
        }
        //获取编辑数据
        $oldData = $this->db->find($lid)->toArray();
        View::with('oldData',$oldData);
        return view();
    }
}
