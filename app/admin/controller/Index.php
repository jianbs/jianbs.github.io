<?php namespace app\admin\controller;
/**
 * Created by PhpStorm.
 * User: jianbs
 * Date: 2017/2/16
 * Time: 下午7:53
 */
class Index extends Common
{
    public function index()
    {
        $bool = oss_upload('./attachment/2017/07/06/20591499315838.jpg');
        if($bool)
        {
            bs('上传成功');
        }else{
            bs('上传失败');
        }
        //获取右侧分类信息
        $allCateData = $this->getAllCate();
        View::With('allCateData',$allCateData);
        return view();
    }
    /**
     * 获取分类信息
     */
    public function getAllCate()
    {
        $data =  Db::table('category')->get();

        foreach ( $data as $k=>$v ) {
            $data[$k]['total'] = Db::table('article')->where('category_cid',$v['cid'])->count();
        }
        return $data;
    }
}