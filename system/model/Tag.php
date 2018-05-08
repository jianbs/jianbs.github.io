<?php namespace system\model;
use houdunwang\model\Model;
class Tag extends Model{
	//数据表
	protected $table = "tag";

	//允许填充字段
	protected $allowFill = [ ];

	//禁止填充字段
	protected $denyFill = [ ];

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
	];

	//自动完成
	protected $auto=[
		//['字段名','处理方法','方法类型',验证条件,验证时机]
	];

	//自动过滤
    protected $filter=[
        //[表单字段名,过滤条件,处理时间]
    ];

    /**
     * 添加标签
     */
    public function store()
    {
        if(strlen($_POST['tname'])==0)
        {
            return ['valid'=>0,'message'=>'请填写标签内容'];
        }
        $tags = explode('|',$_POST['tname']);
        //p($tags);
        foreach ($tags as $k => $v)
        {
            //新增并获得主键
            $this-> insertGetId(['tname'=>$v]);
        }
        return ['valid'=>1,'message'=>'添加成功'];
    }

    /**
     * 编辑标签
     */
    public function edit($tid)
    {
        if(strlen($_POST['tname'])==0)
        {
            return ['valid'=>0,'message'=>'请填写标签内容'];
        }
        Db::table('tag')->where("tid",$tid)->update(['tname'=>$_POST['tname']]);
        return ['valid'=>1,'message'=>'修改成功'];
    }

    /**
     * 删除标签
     */
    public function del($tid)
    {
       return Db::table('tag')->where('tid',$tid)->delete();

    }

}