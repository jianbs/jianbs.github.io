<?php namespace system\model;
use houdunwang\model\Model;
class Link extends Model{
	//数据表
	protected $table = "link";

	//允许填充字段
	protected $allowFill = [ '*'];

	//禁止填充字段
	protected $denyFill = [ ];

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
        ['lname','isnull','请填写友情链接名称',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['url','http','请填写正确的链接地址',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['sort','num:1,9999','排序必须为数字',self::MUST_VALIDATE,self::MODEL_BOTH],
	];

	//自动完成
	protected $auto=[
		//['字段名','处理方法','方法类型',验证条件,验证时机]
        ['addtime','time','function',self::MUST_AUTO,self::MODEL_BOTH],
	];

    /**
     * 添加链接
     * @return bool
     */
	public function store()
    {
        return $this->save($_POST);
    }

    /**
     * 编辑友情链接
     */
    public function edit($lid)
    {
        $linkData = $this->find($lid);
        $linkData->lname = $_POST['lname'];
        $linkData->logo = $_POST['logo'];
        $linkData->url = $_POST['url'];
        $linkData->sort = $_POST['sort'];
        $linkData->save();
        return true;
    }
}