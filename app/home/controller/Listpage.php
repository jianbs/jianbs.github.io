<?php namespace app\home\controller;
use system\model\Category;
class Listpage extends Common {
    protected $systemConfig = [];
    public function __init()
    {
        //获取站点配置
        $this->systemConfig = Db::table('webset')->lists('name,value');
    }

    //动作
    public function index($cid=null,$tid=null){
        //$cid = q('get.cid');
        //$tid = q('get.tid');
        View::with('cid',$cid);

        if($cid)
        {
            //通过分类进入
            //获得当前分类所有子级数据（含自己）
            $cids = (new Category())->getSon(Db::table('category')->get(),$cid);
            $cids[] = $cid;//将自己追加进去
            //页头 标签：分类或者标签名称
            $header = [
                'name'=>'分类',
                'value'=>Db::table('category')->where('cid',$cid)->pluck('cname'),
                'count'=>Db::table('article')->whereIn('category_cid',$cids)->where('is_recycle',0)->count(),
            ];
            //分配公共数据
            $headConf = [
                'title'=>"{$header['value']}-{$this->systemConfig['webName']}",
                'keywords'=> $this->systemConfig['Keywords'],
                'description'=> $this->systemConfig['Describe'],
            ];
            View::with('headConf',$headConf);
            if ($header['count'] == 0)
            {
                header("Location:./common.html");exit;
            }
            //配置分页
            $page = $this->getPage(8,$header['count']);
            View::With('page',$page);
            $articleData = Db::table('article')
                ->join('category','category_cid','=','cid')
                ->whereIn('category_cid',$cids)
                ->where('is_recycle',0)
                ->field('aid,title,sendtime,author,digest,thumb,cid,cname')
                ->orderBy('aid','DESC')
                ->limit(Page::limit())
                ->get();
            foreach($articleData as $k=>$v)
            {
                $articleData[$k]['tag'] = Db::table('tag')
                    ->join('article_tag','tid','=','tag_tid')
                    ->where('article_aid',$v['aid'])->lists('tid,tname');
            }
        }
        if($tid)
        {
            //说明点击标签过来的
            $header = [
                'name'=>'标签',
                'value'=>Db::table('tag')->where('tid',$tid)->pluck('tname'),
                'count'=>Db::table('article_tag')
                    ->join('article','aid','=','article_aid')
                    ->where('tag_tid',$tid)->andwhere('is_recycle',0)->count(),
            ];
            //分配公共数据
            $headConf = [
                'title'=>"{$header['value']}-{$this->systemConfig['webName']}",
                'keywords'=> $this->systemConfig['Keywords'],
                'description'=> $this->systemConfig['Describe'],
            ];
            View::with('headConf',$headConf);
            if ($header['count'] == 0)
            {
                header("Location:./common.html");exit;
            }
            //配置分页
            $page = $this->getPage(8,$header['count']);
            View::With('page',$page);
            $articleData = Db::table('category')
                ->join('article','cid','=','category_cid')
                ->join('article_tag','aid','=','article_aid')
                ->where('tag_tid',$tid)->where('is_recycle',0)
                ->orderBy('aid','DESC')->limit(Page::limit())->get();
            foreach($articleData as $k=>$v)
            {
                $articleData[$k]['tag']=Db::table('tag')
                    ->join('article_tag','tid','=','tag_tid')
                    ->where('article_aid',$v['aid'])->lists('tid,tname');
            }
        }
        View::with('articleData',$articleData);
        //p($articleData);
        View::with('header',$header);
        //获取十条最新文章
        $newArtData = $this->getNewAre();
        //p($newArtData);
        View::With('newArtData',$newArtData);
        $allCateData = $this->getAllCate();
        View::With('allCateData',$allCateData);
        //p($allCateData);
        //获得所有标签
        $allTagData = $this->gerAllTag();
        View::With('allTagData',$allTagData);
        //p($allTagData);
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
     * 获得所有标签
     */
    public function gerAllTag()
    {
        return Db::table('tag')->get();
    }
    /**
     * 获取分页
     */
    public function getPage($num,$count)
    {
        //配置分页
        $page = Page::row($num)->make($count);
        return $page= Page::desc(['pre'=>'', 'next'=>'','first'=>'首页','end'=>'尾页','unit'=>'个'])->make($count,$num);
    }

    //暂无文章页
    public function common()
    {
        //随机获取数据
        $rand = Db::query("select * from blog_article where is_recycle = 0 order by rand() limit 2");
        $rand_2 = Db::query("select * from blog_article where is_recycle = 0 order by rand() limit 7");
        $rand_3 = Db::query("select * from blog_article where is_recycle = 0 order by rand() limit 7");
        //分配数据
        View::With('rand', $rand);
        View::With('rand_2', $rand_2);
        View::With('rand_3', $rand_3);
        //分配公共数据
        $headConf = [
            'title'=>"当前暂无内容-". $this->systemConfig['webName'],
            'keywords'=> $this->systemConfig['Keywords'],
            'description'=> $this->systemConfig['Describe'],
        ];
        View::with('headConf',$headConf);
        return view();
    }
}
