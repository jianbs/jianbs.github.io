<?php namespace app\home\controller;

class Entry  extends Common {

    protected $systemConfig = [];
    public function __init()
    {
        //获取站点配置
        $this->systemConfig = Db::table('webset')->lists('name,value');
    }
	public function index()
    {
	    //获得首页轮播图
        $reincarnationImg =  Db::table('index_img')->get();
        //p($reincarnationImg);
        View::with('reincarnationImg',$reincarnationImg);
        //分配公共数据
        $headConf = [
            'title'=>$this->systemConfig['webName'],
            'keywords'=> $this->systemConfig['Keywords'],
            'description'=> $this->systemConfig['Describe'],
        ];
        View::with('headConf',$headConf);
        //配置分页
        $page = $this->getPage(8);
        View::With('page',$page);
        
        //获得文章内容
        $articleData = Db::table('article')
            ->join('category','category_cid','=','cid')
            ->field('aid,title,sendtime,author,digest,thumb,cid,cname')
            ->where('is_recycle',0)
            ->orderBy('aid','DESC')->limit(Page::limit())->get();
        foreach($articleData as $k=>$v)
        {
            $articleData[$k]['tag']=Db::table('tag')
                ->join('article_tag','tid','=','tag_tid')
                ->where('article_aid',$v['aid'])->lists('tid,tname');

        }
        View::With('articleData',$articleData);
        //p($articleData);
        //获取右侧分类信息
        $allCateData = $this->getAllCate();
        View::With('allCateData',$allCateData);
        //获得所有标签
        $allTagData = $this->gerAllTag();
        View::With('allTagData',$allTagData);
		return view();
	}

    /**
     * 获取右侧分类信息
     */
    public function getAllCate()
    {
        $data =  Db::table('category')->get();
        $data = Arr::tree($data,'cname');
        foreach ( $data as $k=>$v ) {
            $data[$k]['total'] = Db::table('article')->where('category_cid',$v['cid'])->count();
        }
        $data = Arr::tree($data,'cname');
        return $data;
    }

    /**
     * 获得所有标签
     */
    public function gerAllTag()
    {
        return Db::table('tag')->get();
    }

    /**
     * 获取分页
     */
    public function getPage($num,$is_recycle = 0)
    {
        //检测文章是否处在回收站
        $count = Db::table('article')->where('is_recycle',$is_recycle)->count();
        //配置分页
         $page = Page::row($num)->make($count);
        return $page= Page::desc(['pre'=>'', 'next'=>'','first'=>'首页','end'=>'尾页','unit'=>'个'])->make($count,$num);
    }
}