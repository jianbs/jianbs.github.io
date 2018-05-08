<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>武斌博客网后台管理系统</title>
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
               'uploader': "http://localhost/houdun/Jian_Blog/blog_two/index.php?s=system/component/uploader",
               'filesLists': "http://localhost/houdun/Jian_Blog/blog_two/index.php?s=system/component/filesLists",
               'removeImage': "http://localhost/houdun/Jian_Blog/blog_two/index.php?s=system/component/removeImage"
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
                <h4 style="display: inline;line-height: 50px;float: left;margin: 0px"><a href="index.html" style="color: white;margin-left: -14px">钟剑博客网后台管理系统</a>
                </h4>
                <div class="navbar-header">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="http://doc.hdphp.com" target="_blank"><i class="fa fa-w fa-file-code-o"></i>
                                在线文档</a>
                        </li>
                        <li>
                            <a href="http://fontawesome.dashgame.com/" target="_blank"><i
                                        class="fa fa-w fa-hand-o-right"></i> 图标库</a>
                        </li>
                        <li>
                            <a href="http://localhost/houdun/Jian_Blog/blog_two/index.php?s=admin/article/store" ><i class="fa fa-w fa-pencil"></i> 发布文章</a>
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
                            <li><a href="http://localhost/houdun/Jian_Blog/blog_two/index.php?s=admin/userset/index">设置</a></li>
                            <li><a href="http://localhost/houdun/Jian_Blog/blog_two/index.php?s=admin/userset/out">退出</a></li>
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
                    <a href="http://localhost/houdun/Jian_Blog/blog_two/index.php?s=admin/category/index" class="list-group-item">
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
                    <a href="http://localhost/houdun/Jian_Blog/blog_two/index.php?s=admin/tag/index" class="list-group-item">
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
                    <a href="http://localhost/houdun/Jian_Blog/blog_two/index.php?s=admin/article/index" class="list-group-item">
                        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        文章列表
                    </a>
                    <a href="http://localhost/houdun/Jian_Blog/blog_two/index.php?s=admin/article/recycleIndex" class="list-group-item">
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
                    <a href="http://localhost/houdun/Jian_Blog/blog_two/index.php?s=admin/link/index" class="list-group-item">
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
                    <a href="http://localhost/houdun/Jian_Blog/blog_two/index.php?s=admin/webset/index" class="list-group-item">
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        站点配置
                    </a>
                    <a href="http://localhost/houdun/Jian_Blog/blog_two/index.php?s=admin/userset/index" class="list-group-item">
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
                    站点配置管理</a>
            </li>
            <li>
                <a href="">
                    首页轮播图</a>
            </li>

        </ol>
        <ul class="nav nav-tabs" role="tablist">
            <li ><a href="<?php echo u('index')?>">站点配置</a></li>
            <li class="active"><a href="">设置轮播图</a></li>
        </ul>
        <form class="form-horizontal" id="form" action="" method="post" onsubmit="return add()" >
<input type='hidden' name='csrf_token' value=''/>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" style="display: inline">设置轮播图</h3>
                    <span style="float: right;font-size: 12px;color: #428BCA;">（建议最低图片尺寸700*330，或更大的同比例尺寸）</span>
                </div>
                <div class="panel-body">

                    <div class="form-group" style="margin-top: 30px;">
                        <span style="color: red;font-size: 12px;margin-left: 15px;">*第一张必须上传</span>
                        <label for="" class="col-sm-2 control-label">图片1</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" name="imgaes1" readonly="" value="<?php echo $data[0]['imgurl']?>">
                                <div class="input-group-btn">
                                    <button onclick="upImage1(this)" class="btn btn-default" type="button">选择图片</button>
                                </div>
                            </div>
                            <div class="input-group" style="margin-top:5px;">
                                <img src="<?php if($data[0]['imgurl']){?>
                
                                <?php echo $data[0]['imgurl']?>
                                <?php }else{?>
                                resource/images/nopic.jpg
                                
               <?php }?>" class="img-responsive img-thumbnail1 img-thumbnail" width="150">
                                <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">图片2</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" name="imgaes2" readonly="" value="<?php echo $data[1]['imgurl']?>">
                                <div class="input-group-btn">
                                    <button onclick="upImage2(this)" class="btn btn-default" type="button">选择图片</button>
                                </div>
                            </div>
                            <div class="input-group" style="margin-top:5px;">
                                <img src="<?php if($data[1]['imgurl']){?>
                
                                <?php echo $data[1]['imgurl']?>
                                <?php }else{?>
                                resource/images/nopic.jpg
                                
               <?php }?>" class="img-responsive img-thumbnail2 img-thumbnail" width="150">
                                <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">图片3</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" name="imgaes3" readonly="" value="<?php echo $data[2]['imgurl']?>">
                                <div class="input-group-btn">
                                    <button onclick="upImage3(this)" class="btn btn-default" type="button">选择图片</button>
                                </div>
                            </div>
                            <div class="input-group" style="margin-top:5px;">
                                <img src="<?php if($data[2]['imgurl']){?>
                
                                <?php echo $data[2]['imgurl']?>
                                <?php }else{?>
                                resource/images/nopic.jpg
                                
               <?php }?>" class="img-responsive img-thumbnail3 img-thumbnail" width="150">
                                <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">图片4</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" name="imgaes4" readonly="" value="<?php echo $data[3]['imgurl']?>">
                                <div class="input-group-btn">
                                    <button onclick="upImage4(this)" class="btn btn-default" type="button">选择图片</button>
                                </div>
                            </div>
                            <div class="input-group" style="margin-top:5px;">
                                <img src="<?php if($data[3]['imgurl']){?>
                
                                <?php echo $data[3]['imgurl']?>
                                <?php }else{?>
                                resource/images/nopic.jpg
                                
               <?php }?>" class="img-responsive img-thumbnail4 img-thumbnail" width="150">
                                <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">图片5</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" name="imgaes5" readonly="" value="<?php echo $data[4]['imgurl']?>">
                                <div class="input-group-btn">
                                    <button onclick="upImage5(this)" class="btn btn-default" type="button">选择图片</button>
                                </div>
                            </div>
                            <div class="input-group" style="margin-top:5px;">
                                <img src="<?php if($data[4]['imgurl']){?>
                
                                <?php echo $data[4]['imgurl']?>
                                <?php }else{?>
                                resource/images/nopic.jpg
                                
               <?php }?>" class="img-responsive img-thumbnail5 img-thumbnail" width="150">
                                <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                            </div>
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
    <a href="http://www.houdunwang.com">高端培训</a>
    <a href="http://www.hdphp.com">开源框架</a>
    <a href="http://bbs.houdunwang.com">后盾论坛</a>
    <br>
    Powered by hdphp v2.0 © 2016-2022 www.hdphp.com
</div>
</body>
</html>

    

    <script>
        //上传图片
        function upImage1(obj) {
            require(['util'], function (util) {
                options = {
                    multiple: false,//是否允许多图上传
                    //data是向后台服务器提交的POST数据
                    data:{name:'后盾人',year:2099},
                };
                util.image(function (images) {          //上传成功的图片，数组类型 
                    $("[name='imgaes1']").val(images[0]);
                    $(".img-thumbnail1").attr('src', images[0]);
                }, options)
            });
        }

    </script>

    <script>
        //上传图片
        function upImage2(obj) {
            require(['util'], function (util) {
                options = {
                    multiple: false,//是否允许多图上传
                    //data是向后台服务器提交的POST数据
                    data:{name:'后盾人',year:2099},
                };
                util.image(function (images) {          //上传成功的图片，数组类型 
                    $("[name='imgaes2']").val(images[0]);
                    $(".img-thumbnail2").attr('src', images[0]);
                }, options)
            });
        }

    </script>

    <script>
        //上传图片
        function upImage3(obj) {
            require(['util'], function (util) {
                options = {
                    multiple: false,//是否允许多图上传
                    //data是向后台服务器提交的POST数据
                    data:{name:'后盾人',year:2099},
                };
                util.image(function (images) {          //上传成功的图片，数组类型 
                    $("[name='imgaes3']").val(images[0]);
                    $(".img-thumbnail3").attr('src', images[0]);
                }, options)
            });
        }

    </script>

    <script>
        //上传图片
        function upImage4(obj) {
            require(['util'], function (util) {
                options = {
                    multiple: false,//是否允许多图上传
                    //data是向后台服务器提交的POST数据
                    data:{name:'后盾人',year:2099},
                };
                util.image(function (images) {          //上传成功的图片，数组类型 
                    $("[name='imgaes4']").val(images[0]);
                    $(".img-thumbnail4").attr('src', images[0]);
                }, options)
            });
        }

    </script>

    <script>
        //上传图片
        function upImage5(obj) {
            require(['util'], function (util) {
                options = {
                    multiple: false,//是否允许多图上传
                    //data是向后台服务器提交的POST数据
                    data:{name:'后盾人',year:2099},
                };
                util.image(function (images) {          //上传成功的图片，数组类型 
                    $("[name='imgaes5']").val(images[0]);
                    $(".img-thumbnail5").attr('src', images[0]);
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