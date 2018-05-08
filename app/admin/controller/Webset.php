<?php namespace app\admin\controller;

class Webset extends Common {
    //动作
    public function index(){
        //实例化配置表模型
        $webSetModel = new \system\model\Webset();
        if(IS_POST)
        {
            foreach ($_POST['value'] as $k=>$v)
            {
                if(!$v)
                {
                    //验证
                    //message($k . '不能为空','back','error');
                }
                $webSetModel->where('name',$k)->update(['value'=>$v]);
            }
            //输出提示
            message('操作成功',u('index'),'success');
        }
        //获取所有配置项数据
        $data = $webSetModel->get()->toArray();
        View::with('data',$data);
        return view();
    }

    /**
     * 轮播图配置
     */
    public function reincarnationImg()
    {
        if(IS_POST)
        {
            foreach ($_POST as $k=>$v)
            {
                if($v)
                {
                    Image::thumb($v,$v,700,335,6);
                }
                //写入轮播图表
                Db::table('index_img')->where('imgname',$k)->update(['imgurl'=>$v]);
            }
            message('操作成功',u('reincarnationImg'),'success');
        }
        //获取轮播图表所有数据
        $data =Db::table('index_img')->get();
        View::with('data',$data);
        return view();
    }

    /**
     * 删除图片文件
     */
    public function delImg()
    {
        if (IS_AJAX)
        {
            if ($_POST)
            {
                //删除图片
                unlink($_POST['data']);
                echo 1;exit;
            }
            echo 0;exit;
        }
    }
}
