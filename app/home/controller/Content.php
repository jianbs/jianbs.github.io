<?php namespace app\home\controller;

class Content extends Common {
    protected $systemConfig = [];
    public function __init()
    {
        //获取站点配置
        $this->systemConfig = Db::table('webset')->lists('name,value');
    }
    //动作
    public function index($aid = null){
        //$aid = q('get.aid');
        $articleData = Db::table('article')
            ->join('article_data','aid','=','article_aid')
            ->join('category','cid','=','category_cid')
            ->field('aid,title,sendtime,author,digest,thumb,cid,cname,content')
            ->where('aid',$aid)->first();
        $articleData['tag'] = Db::table('article_tag')
            ->join('tag','tag_tid','=','tid')
            ->where('article_aid',$aid)->lists('tid,tname');
        //p($articleData);
        View::With('articleData',$articleData);
        //分配公共数据
        $headConf = [
            'title'=>$articleData['title'].'-dq动力资源小站',
            'keywords'=> $this->systemConfig['Keywords'],
            'description'=> $articleData['digest'],
        ];
        View::with('headConf',$headConf);
        //p($articleData);

        //获取十条最新文章
        $newArtData = $this->getNewAre();
        //p($newArtData);
        View::With('newArtData',$newArtData);
        //获取右侧分类信息
        $allCateData = $this->getAllCate();
        View::With('allCateData',$allCateData);
        View::With('aid',$aid);
        //p($allCateData);
        return view();
    }

    /**
     *获取最新文章
     */
    public function getNewAre()
    {
        return Db::table('article')->where('is_recycle',0)->orderBy('sendtime','DESC')->limit(10)->field('title,sendtime,category_cid,thumb,digest,aid')->get();
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
        return $data;
    }
    /**
     * 关于我
     */
    public function aboutMe()
    {
        //分配公共数据
        $headConf = [
            'title'=>"关于我-{$this->systemConfig['webName']}",
            'keywords'=> $this->systemConfig['Keywords'],
            'description'=> $this->systemConfig['Describe'],
        ];
        View::with('headConf',$headConf);
        return view();
    }

}
