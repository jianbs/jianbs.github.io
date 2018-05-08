<?php namespace app\wap\controller;

class Content extends Common {
    //动作
    public function index($aid=null){
        //$aid = q('get.aid');
        $articleData = Db::table('article')
            ->join('article_data','aid','=','article_aid')->where('aid',$aid)->first();
        $articleData['tag'] = Db::table('article_tag')
            ->join('tag','tag_tid','=','tid')
            ->where('article_aid',$aid)->lists('tid,tname');
        //p($articleData);
        View::With('articleData',$articleData);
        //1.公共头部数据
        $headConf = ['title'=>$articleData['title']];
        View::with('headConf',$headConf);
        View::with('aid',$aid);
        return view();
    }
}
