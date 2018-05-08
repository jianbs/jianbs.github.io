<?php namespace system\model;
use houdunwang\model\Model;
class Article extends Model{
	//数据表
	protected $table = "article";

	//允许填充字段
	protected $allowFill = [ ];

	//禁止填充字段
	protected $denyFill = [ ];

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
        //title、sendtime、thumb、digest、author、
		//keywords、user_uid、category_cid
        ['title','isnull','请填写标题',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['thumb','isnull','请上传缩略图',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['digest','isnull','请填写文章摘要',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['author','isnull','请填写文章作者',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['keywords','isnull','请填写关键字',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['category_cid','isnull','请选择文章分类',self::MUST_VALIDATE,self::MODEL_BOTH],
	];

	//自动完成
	protected $auto=[
		//['字段名','处理方法','方法类型',验证条件,验证时机]
        ['sendtime','time','function',self::MUST_AUTO,self::MODEL_INSERT],
        //自动执行吧getUid方法
        ['user_uid','getUid','method',self::MUST_AUTO,self::MODEL_BOTH],
	];
	//获得用户UIDgetUid
    public function getUid($val,$data)
    {
        return Session::get('uid');
    }

	//自动过滤
    protected $filter=[
        //[表单字段名,过滤条件,处理时间]
    ];

	//时间操作,需要表中存在created_at,updated_at字段
	protected $timestamps=false;

    /**
     * 获得所有分类
     * @return mixed
     */
    public function getCateData()
    {
        return Arr::tree(Db::table('category')->get(),'cname');
    }

    /**
     * 获得所有标签
     */
    public function getTagData()
    {
        return Db::table('tag')->get();
    }

    /**
     * 获得首页文章数据
     */
    public function getAllData($num,$is_recycle)
    {
        //检测文章是否处在回收站
        $count = Db::table('article')->where('is_recycle',$is_recycle)->count();
        //配置分页
        $page = Page::row($num)->make($count);
        $page= Page::desc(['pre'=>'<', 'next'=>'>','first'=>'首页','end'=>'尾页','unit'=>'个'])->make($count,$num);
//        echo Page::all($page);die;
        //获取数据
        $data = Db::table('article')
            ->join('category','article.category_cid','=','category.cid')
            ->where('is_recycle',$is_recycle)->orderBy('aid','DESC')->limit(Page::limit())
            ->get();
        //返回结果
        return ['page'=>$page,'data'=>$data];
    }

    /**
     * 获取需要编辑的文章旧数据
     */
    public function gerOldData($aid)
    {
        return Db::table('article')
            ->join('article_data','article.aid','=','article_data.article_aid')
            ->where('article.is_recycle',0)->where('article.aid','=',$aid)->first();
    }

    /**
     * 添加文章
     */
    public function store()
    {
        //检测标签不能为空
        if (!isset($_POST['tag']))
        {
            return ['valid'=>0,'message'=>'请选择标签'];
        }
        //添加文章表
        $this->title = $_POST['title'];
        $this->author = $_POST['author'];
        $this->category_cid = $_POST['category_cid'];
        $this->thumb = $_POST['thumb'];
        $this->digest = $_POST['digest'];
        $this->keywords = $_POST['keywords'];
        $aid = $this->save();

        //添加文章数据表
        $artitleDataModel = new ArticleData();
        $artitleDataModel->des = $_POST['des'];
        $artitleDataModel->content = $_POST['content'];
        $artitleDataModel->article_aid = $aid;
        $artitleDataModel->save();

        //添加文章标签中间表、添加前先验证不为空
        $articleTagModel = new ArticleTag();
        foreach ($_POST['tag'] as $v)
        {
            $articleTagModel->article_aid = $aid;
            $articleTagModel->tag_tid = $v;
            $articleTagModel->save();
        }
        return ['valid'=>1,'message'=>'操作成功'];

    }

    /**
     * 编辑文章
     */
    public function edit()
    {
        //判断标签不能为空
        if(!isset($_POST['tag'])){
            return ['valid'=>0,'message'=>'请选择标签'];
        }
        //获得需要编辑的文章aid
        $aid = $_POST['aid'];
        //1.文章修改
        $articleModel = $this->find($aid);
        $articleModel->title = $_POST['title'];
        $articleModel->author = $_POST['author'];
        $articleModel->category_cid = $_POST['category_cid'];
        $articleModel->thumb = $_POST['thumb'];
        $articleModel->digest = $_POST['digest'];
        $articleModel->keywords = $_POST['keywords'];
        $articleModel->save();

        //2.文章数据表修改
        //根据当前编辑文章的ID获取文章数据表对应的主键ad_id
        $ad_id = Db::table('article_data')->where("article_aid",$aid)->pluck('ad_id');
        //根据主键找到文章数据表 并执行写入
        $articleDataModel = ArticleData::find($ad_id);
        $articleDataModel->des = $_POST['des'];
        $articleDataModel->content = $_POST['content'];
        $articleDataModel->article_aid = $aid;
        $articleDataModel->save();

        //3.文章中间表修改
        $articleTagModel = new ArticleTag();
            //1.删除当前编辑文章的原有相关数据
        $articleTagModel->where('article_aid',$aid)->delete();
            //2.重新写入
        //做判断，验证文章标签必须得选择,判断放在最上面
        //循环写入数据
        foreach($_POST['tag'] as $v)
        {
            $articleTagModel->article_aid = $aid;
            $articleTagModel->tag_tid = $v;
            $articleTagModel->save();
        }
        //输出写入成功提示
        return ['valid'=>1,'message'=>'操作成功'];
    }

    /**
     * 回收站彻底删除文章
     */
    public function del($aid)
    {
        //1.删除文章表
        $this->where('aid',$aid)->delete();
        //2.删除文章数据表
        (new ArticleData())->where('article_aid',$aid)->delete();
        //3.删除文章标签中间表
        (new ArticleTag())->where('article_aid',$aid)->delete();
        return true;
    }














}