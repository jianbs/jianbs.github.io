<?php
/**
 * Created by PhpStorm.
 * User: jianbs
 * Date: 2017/2/19
 * Time: 下午3:22
 */

namespace system\model;
use houdunwang\model\Model;

class Category extends Model
{
    //数据表
    protected $table = "category";

    //允许填充字段
    protected $allowFill = ['*' ];

    //自动验证
    protected $validate=[
        //['字段名','验证方法','提示信息',验证条件,验证时间]
        ['cname','isnull','分类名称不能为空',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['ctitle','isnull','分类标题不能为空',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['cdes','isnull','分类描述不能为空',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['ckeywords','isnull','分类关键字不能为空',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['csort','isnull','分类排序不能为空',self::MUST_VALIDATE,self::MODEL_BOTH],
    ];

    //添加一级，二级 分类
    public function store()
    {
        return $this->save($_POST);
    }

    //处理所属分类数据，不能包含子级和自己的子级分类
    public function getCateData($cid)
    {
        //1.找到自己的子级
            //获得所有数据
        $data = Db::table('category')->get();
            //执行方法，传入旧数据及当前编辑的cid
        $cids = $this->getSon($data,$cid);
        //2.把自己追加进去
        $cids[] =$cid;
        //3.找到除了自己和子级之外的数据
        $data = $this->whereNotIn('cid',$cids)->get()->toArray();
        return Arr::tree($data,'cname');
    }

    /**
     * 找自己
     * @param $data	数组数据
     * @param $cid	寻找哪一个分类的自己，当前分类cid
     */
    public function getSon($data,$cid)
    {
        static $temp = [];
        foreach ($data as $k=>$v)
        {
            if($v['pid']==$cid)
            {
                $temp[] = $v['cid'];
                $this->getSon($data,$v['cid']);
            }
        }
        return $temp;
    }

    //编辑分类
    public function edit()
    {
        //方式二，采用这种方式
        $model = $this->find($_POST['cid']); // 查找主键为1的数据
        $model->cname = $_POST['cname'];
        $model->ctitle = $_POST['ctitle'];
        $model->cdes = $_POST['cdes'];
        $model->ckeywords = $_POST['ckeywords'];
        $model->csort = $_POST['csort'];
        $model->pid = $_POST['pid'];
        return $model->save(); // 保存当前数据对象
    }

    //删除方法
    public function del($cid)
    {
        //获得所有数据
        $data = Db::table('category')->get();
        //检测当前下级是否有分类
        $bool = $cids = $this->getSon($data,$cid);
        if (!$bool)
        {
           return Db::table('category')->where('cid',$cid)->delete();
            //return ['valid'=>true,'message'=>'删除成功'];
        }
        //return ['valid'=>false,'message'=>'删除失败，请先删除当前下级分类'];

    }

}