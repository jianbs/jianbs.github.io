<?php namespace app\wap\controller;

class Common{
    public function __construct()
    {
        //获取配置数据
        $webSetData = $this->getWebSet();
        //p($webSetData);
        View::with('webSetData',$webSetData);
        //获得导航分类数据
        $cateData = $this->getCateData();
        //p($cateData);
        View::with('cateData',$cateData);
        //获取右侧分类信息
        $allCateData = $this->getAllCate();
        View::With('allCateData',$allCateData);
        //获得所有标签
        $allTagData = $this->gerAllTag();
        View::With('allTagData',$allTagData);
        //p($allTagData);
        //获得所有友情链接
        $allLinkData = $this->gerAllLink();
        //p($allLinkData);
        View::With('allLinkData',$allLinkData);
        //获取两条最新文章
        $newArtData = $this->getNewAre();
        //p($newArtData);
        View::With('newArtData',$newArtData);
        //检测子类中是否有 构造方法
        if(method_exists($this,'__init'))
        {
            $this->__init();
        }
    }

    //动作
    public function index(){
    //此处书写代码...
    }

    /**
     *获取最新文章
     */
    public function getNewAre()
    {
        return Db::table('article')->orderBy('sendtime')->limit(2)->field('title,sendtime,aid')->get();
    }

    /**
     * 获得所有友情链接
     */
    public  function gerAllLink()
    {
        return Db::table('link')->get();
    }

    /**
     * 获得所有标签
     */
    public function gerAllTag()
    {
       return Db::table('tag')->get();
    }
    /**
     * 获取右侧分类信息
     */
    public function getAllCate()
    {
        $data =  Db::table('category')->get();

        foreach ( $data as $k=>$v ) {
            $data[$k]['total'] = Db::table('article')->where('category_cid',$v['cid'])->count();
        }
        return $data;
    }

    /**
     * 获得导航分类数据
     */
    public function getCateData()
    {
        return Db::table('category')->where('pid',0)->limit(5)->get();
    }

    /**
     * 获取网站配置信息
     */
    public function getWebSet()
    {
       return Db::table('webset')->lists('name,value');
    }
}
