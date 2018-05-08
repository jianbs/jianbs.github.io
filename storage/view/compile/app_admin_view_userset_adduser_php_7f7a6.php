<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>钟剑博客后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="resource/admin/bootstrap-3.3.0-dist/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="resource/admin/css/site.css" rel="stylesheet">
    <link href="resource/admin/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="resource/admin/js/jquery.min.js"></script>
    <script src="resource/admin/bootstrap-3.3.0-dist/dist/js/bootstrap.min.js"></script>
    <script>
        var hdjs = {
         //框架目录
        'base': '/resource/hdjs',
               'uploader': "http://www.dqdl.net/index.php?s=system/component/uploader",
               'filesLists': "http://www.dqdl.net/index.php?s=system/component/filesLists",
               'removeImage': "http://www.dqdl.net/index.php?s=system/component/removeImage"
           };
    </script>
    <script src="resource/hdjs/app/util.js"></script>
    <script src="resource/hdjs/require.js"></script>
    <script src="resource/hdjs/app/config.js"></script>
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        if (navigator.appName == 'Microsoft Internet Explorer') {
            if (navigator.userAgent.indexOf("MSIE 5.0") > 0 || navigator.userAgent.indexOf("MSIE 6.0") > 0 || navigator.userAgent.indexOf("MSIE 7.0") > 0) {
                alert('您使用的 IE 浏览器版本过低, 推荐使用 Chrome 浏览器或 IE8 及以上版本浏览器.');
            }
        }
    </script>
    <style>
        i {
            color: #337ab7;
        }
    </style>
</head>
<body>
<div class="container-fluid admin-top">
    <!--导航-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <h4 style="display: inline;line-height: 50px;float: left;margin: 0px"><a href="http://www.dqdl.net/index.php?s=admin/index/index" style="color: white;margin-left: -14px">JianBs Blog Cms</a>
                </h4>
                <div class="navbar-header">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="./" target="_blank"><i class="fa fa-w fa-home""></i>
                                博客首页</a>
                        </li>
                        <li>
                            <a href="http://fontawesome.dashgame.com/" target="_blank"><i
                                        class="fa fa-w fa-bar-chart"></i> 查看统计</a>
                        </li>
                        <li>
                            <a href="http://www.dqdl.net/index.php?s=admin/article/store" ><i class="fa fa-w fa-pencil"></i> 发布文章</a>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="fa fa-w fa-user"></i>
                            admin                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li role="separator" class="divider"></li>
                            <li><a href="http://www.dqdl.net/index.php?s=admin/userset/index">设置</a></li>
                            <li><a href="http://www.dqdl.net/index.php?s=admin/userset/out">退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--导航end-->
</div>
<!--主体-->
<div class="container-fluid admin_menu">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-lg-2 left-menu">
            <div class="panel panel-default" id="menus">
                <!--分类管理-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample"
                     aria-expanded="false" aria-controls="collapseExample"
                     style="border-top: 1px solid #ddd;border-radius: 0%">
                    <h4 class="panel-title">分类管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample">
                    <a href="http://www.dqdl.net/index.php?s=admin/category/index" class="list-group-item">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        分类列表
                    </a>
                </ul>
                <!--分类管理结束 end-->

                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample2"
                     aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">标签管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample2" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample2">
                    <a href="http://www.dqdl.net/index.php?s=admin/tag/index" class="list-group-item">
                        <i class="fa fa-tags" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        标签列表
                    </a>

                </ul>

                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample3"
                     aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">文章管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample3" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample3">
                    <a href="http://www.dqdl.net/index.php?s=admin/article/index" class="list-group-item">
                        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        文章列表
                    </a>
                    <a href="http://www.dqdl.net/index.php?s=admin/article/recycleIndex" class="list-group-item">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        回收站
                    </a>
                </ul>

                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample3"
                     aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">友情链接管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample3" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample3">
                    <a href="http://www.dqdl.net/index.php?s=admin/link/index" class="list-group-item">
                        <i class="fa fa-link" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        友链列表
                    </a>
                </ul>

                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample3"
                     aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">网站配置管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample3" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample3">
                    <a href="http://www.dqdl.net/index.php?s=admin/webset/index" class="list-group-item">
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        站点配置
                    </a>
                    <a href="http://www.dqdl.net/index.php?s=admin/userset/index" class="list-group-item">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        用户配置
                    </a>
                </ul>
            </div>
        </div>
        <!--右侧主体区域部分 start-->
        <div class="col-xs-12 col-sm-9 col-lg-10">

            
    <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
        <li>
            <a href=""><i class="fa fa-cogs"></i>
                用户配置</a>
        </li>
        <li>
            <a href="">
                添加管理员</a>
        </li>

    </ol>
    <ul class="nav nav-tabs" role="tablist">
        <li class=""><a href="<?php echo u('index')?>">用户配置</a></li>
        <li class="active"><a href="">添加管理员</a></li>
    </ul>
    <form class="form-horizontal" id="form" action="" method="post" onsubmit="return add()" >
<input type='hidden' name='csrf_token' value=''/>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"style="display: inline">新增管理员</h3>
                <span style="float: right;font-size: 12px;color: #428BCA;">（新添加的管理员拥有相同权限，请谨慎操作）</span>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">用户名<span style="color: red;">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" name="lname"  class="form-control" placeholder="输入添加的管理员用户名">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">新用户密码<span style="color: red;">*</span></label>
                    <div class="col-sm-9">
                        <input type="password" name="url"  class="form-control" placeholder="填写需要修改的密码">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">新用户密码 <span style="color: red;">*</span></label>
                    <div class="col-sm-9">
                        <input type="password" name="sort"  class="form-control" placeholder="填写再次需要修改的密码">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">您的密码<span style="color: red;">*</span></label>
                    <div class="col-sm-9">
                        <input type="password" name="oldPassword"  class="form-control" placeholder="输入您当前密码才能执行添加">
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">确定</button>
    </form>




        </div>
    </div>
    <!--右侧主体区域部分结束 end-->
</div>
</div>
<div class="master-footer" style="margin-top: 150px">
    <a href="http://www.d8tu.com">大白兔社区</a>
    <a href="http://www.dqdl.net">dq动力</a>
    <a href="http://bbs.houdunwang.com">后盾论坛</a>
    <br>
    Powered by jianbs v1.2 © 2011-2017 www.dqdl.net
</div>
</body>
</html>



<script>
    //上传图片
    function upImage(obj) {
        require(['util'], function (util) {
            options = {
                multiple: false,//是否允许多图上传
                //data是向后台服务器提交的POST数据
                data:{name:'后盾人',year:2099},
            };
            util.image(function (images) {          //上传成功的图片，数组类型 
                $("[name='logo']").val(images[0]);
                $(".img-thumbnail").attr('src', images[0]);
            }, options)
        });
    }

    //移除图片
    function removeImg(obj) {
        var data= $(obj).parent().prev().find('input').val();
        $(obj).prev('img').attr('src', 'resource/images/nopic.jpg');
        $(obj).parent().prev().find('input').val('');
        //删除后台图片文件
        $.post("<?php echo u('admin/Webset/delImg')?>",{data:data},function(res){
            //res:{valid:1,message:'响应信息'}

        },'json')
    }
</script>