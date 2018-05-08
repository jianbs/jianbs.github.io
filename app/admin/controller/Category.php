<?php
/**
 * Created by PhpStorm.
 * User: jianbs
 * Date: 2017/2/19
 * Time: 下午2:51
 */
namespace app\admin\controller;

class Category extends Common
{
    //接收数据库信息
    protected $db;
    public function __init()
    {
        $this->db = new \system\model\Category();
    }
    public function index()
    {
        //获得数据表中的数据
        $data = Db::table('category')->get();
        //数组增强
        $data = Arr::tree($data,'cname');
        //分配变量
        View::with('data',$data);
        //输出模板
        return view();
    }
    /**
     * 添加顶级分类
     */
    public function store()
    {
        if (IS_POST)
        {
            if ($this->db->store())
            {
                message('顶级分类添加成功',u('index'),'success');
            }
            message('添加失败','back','error');
        }
        return view();
    }
    /**
     * 添加子级分类
     */
    public function addSon()
    {
        if (IS_POST)
        {
            if ($this->db->store())
            {
                message('子集分类添加成功',u('index'),'success');
        }
        message('添加失败','back','error');
        }
        //获取旧数据
        $cid = $_GET['cid'];
        $cateData = Db::table('category')->find($cid);
        //分配变量
        View::with('cateData',$cateData);
        return view();
    }
    /**
     * 编辑分类
     */
    public function edit()
    {
        if (IS_POST)
        {
            if($this->db->edit()){
                message('分类编辑成功',u('index'),'success');
            }
            message('编辑失败','back','error');
        }
        //获取旧数据
        $cid = $_GET['cid'];
        $oldData = Db::table('category')->find($cid);
        //分配变量
        View::with('oldData',$oldData);
        //2.处理所属分类数据，【不能包含自己以及自己的子集】
        $cateData = $this->db->getCateData($cid);
        View::with('cateData',$cateData);
        return view();
    }
    /**
     * 删除分类
     */
    public function del()
    {

        $cid = $_GET['cid'];
        //判断当前分类是否有下级分类
        if($this->db->del($cid))
        {
            message('删除成功',u('index'),'success');
        }

        message('删除失败，请先删除当前下级分类','back','error');
    }
}