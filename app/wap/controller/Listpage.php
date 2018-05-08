<?php namespace app\wap\controller;
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
            $articleData = Db::table('article')
                ->join('category','category_cid','=','cid')
                ->whereIn('category_cid',$cids)
                ->field('aid,title,sendtime,author,digest,thumb,cid,cname')
                ->where('is_recycle',0)
                ->orderBy('aid','DESC')
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

            $articleData = Db::table('category')
                ->join('article','cid','=','category_cid')
                ->join('article_tag','aid','=','article_aid')
                ->where('tag_tid',$tid)
                ->where('is_recycle',0)
                ->orderBy('aid','DESC')->get();
            foreach($articleData as $k=>$v)
            {
                $articleData[$k]['tag']=Db::table('tag')
                    ->join('article_tag','tid','=','tag_tid')
                    ->where('article_aid',$v['aid'])->lists('tid,tname');

            }
            
        }
        View::with('articleData',$articleData);
        View::with('header',$header);
        return view();
    }
}
