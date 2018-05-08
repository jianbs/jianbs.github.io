<?php namespace app\wap\controller;

class Entry  extends Common {
	public function index() {
	    //获得首页轮播图
        $reincarnationImg =  Db::table('index_img')->get();
        //p($reincarnationImg);
        View::with('reincarnationImg',$reincarnationImg);
        //获得文章内容
        $articleData = Db::table('article')
            ->join('category','category_cid','=','cid')
            ->field('aid,title,sendtime,author,digest,thumb,cid,cname')
            ->where('is_recycle',0)
            ->orderBy('aid','DESC')->get();
        foreach($articleData as $k=>$v)
        {
            $articleData[$k]['tag']=Db::table('tag')
                ->join('article_tag','tid','=','tag_tid')
                ->where('article_aid',$v['aid'])->lists('tid,tname');

        }
        View::With('articleData',$articleData);
        //p($articleData);
		return view();
	}
}