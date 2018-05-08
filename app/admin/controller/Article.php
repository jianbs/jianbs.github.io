<?php namespace app\admin\controller;

class Article extends Common {
    protected $db;
    public function __init()
    {
        $this->db = new \system\model\Article();
    }
    /**
     * 首页
     * @return mixed
     */
    public function index(){
        //获取旧数据（参数：每页显示条数，是否在回收站）
        $data = $this->db->getAllData(8,0);
        View::with('data',$data);
        return view();
    }

    /**
     * 添加文章
     */
    public function store()
    {

        if (IS_POST)
        {
            $res = $this->db->store();
            if ($res['valid'])
            {
                message($res['message'],u('index'),'success');
            }
            message($res['message'],'back','error');
        }
        //获取分类数据
        $cateData = $this->db->getCateData();
        View::with('cateData',$cateData);
        //获得所有标签
        $tagData = $this->db->getTagData();
        View::with('tagData',$tagData);
        return view();
    }

    /**
     * 编辑文章
     */
    public function edit()
    {
        if (IS_POST)
        {
            $res = $this->db->edit();
            if($res['valid'])
            {
                //ajax请求的时候会返回：{valid:1,message:'请求成功'}
                message($res['message'],u('index'),'success');
            }
            //{valid:0,message:''}
            message($res['message'],'back','error');
        }
        //获得需要编辑的文章aid
        $aid = q('get.aid');
        //1.获取所属分类数据
        $cateData = $this->db->getCateData();
        View::with('cateData',$cateData);
        //2.获取所有的标签数据
        $tagData = $this->db->getTagData();
        View::with('tagData',$tagData);
        //3.获取旧数据【关联文章表与文章数据表】
        $oldData = $this->db->gerOldData($aid);
        View::with('oldData',$oldData);
        //4.获得当前编辑文章的标签
        $oldTag = Db::table('article_tag')->where('article_aid',$aid)->lists('tag_tid');
        View::with('oldTag',$oldTag);
        return view();
    }

    /**
     * 删除文章进回收站
     */
    public function delToRecycle()
    {
        //获取需要删除的文章AID
        $aid = q('get.aid');
        $this->db->where('aid',$aid)->update(['is_recycle'=>1]);
        message('成功删除到回收站',u('index'),'success');
    }

    /**
     * 回收站首页
     */
    public function recycleIndex()
    {
        //获取回收站数据（参数：每页显示条数，是否在回收站）
        $data = $this->db->getAllData(8,1);
        View::with('data',$data);
        return view();
    }

    /**
     * 回收站恢复文章
     */
    public function OutToRecycle()
    {
        //获取需要恢复的文章AID
        $aid = q('get.aid');
        $this->db->where('aid',$aid)->update(['is_recycle'=>0]);
        message('文章恢复成功',u('recycleIndex'),'success');
    }

    /**
     * 回收站彻底删除文章
     */
    public function del()
    {
        //获取需要删除的文章AID
        $aid = q('get.aid');
        //获取需要删除的文章旧数据

        if ($this->db->del($aid))
        {
            message('删除成功',u('index'),'success');
        }
        message('删除失败','back','error');
    }
}
