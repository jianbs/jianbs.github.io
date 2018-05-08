<?php namespace app\home\controller;

use system\model\Category;

class Search extends Common
{
    public function index()
    {
        if (IS_POST)
        {
            //p($_POST);
            if($str = $_POST['search'])
            {
                $allSearch = Db::query("select * from blog_article where title like  '%" . $str . "%' and is_recycle = 0");
                $allSearchcount['total'] = count($allSearch);

                //p($allSearch);
                $postContent = $_POST['search'];
                View::With('str', $str);
                View::With('postContent', $postContent);
                View::With('allSearch', $allSearch);
                View::With('allSearchcount', $allSearchcount);

            }
        }
        //随机获取数据
        $rand = Db::query("select * from blog_article where is_recycle = 0 order by rand() limit 2");
        $rand_2 = Db::query("select * from blog_article where is_recycle = 0 order by rand() limit 7");
        $rand_3 = Db::query("select * from blog_article where is_recycle = 0 order by rand() limit 7");
        //分配数据
        View::With('rand', $rand);
        View::With('rand_2', $rand_2);
        View::With('rand_3', $rand_3);
        //p($rand_2);
       return view();
    }
}