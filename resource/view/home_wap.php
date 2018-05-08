<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>{{$headConf['title']}}</title>
    <!--描述和摘要-->
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
    <!--载入公共模板-->
    <script>
        if (document.documentElement.clientWidth>1100){
            var str = window.location.pathname;
            surl = str.split("/");
            surl = surl[surl.length-1];
            if(surl == 'index.php'||surl == 'index.html')
            {
                window.location.href="index.html";
            }
            if (surl.substr(4, 3) == 'tag')
            {
                window.location.href=surl.substr(4);
            }
            if (surl.substr(4, 8) == 'category')
            {
                window.location.href=surl.substr(4);
            }
            if (surl.substr(4, 7) == 'article')
            {
                window.location.href=surl.substr(4);
            }
        }
    </script>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="./resource/home_wap/org/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
    <script src="./resource/home_wap/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="./resource/home_wap/org/bootstrap-3.3.5-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="./resource/home_wap/css/index.css" />
    <link rel="stylesheet" type="text/css" href="./resource/home_wap/css/backTop.css"/>
    <link href="resource/admin/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{$webSetData['webName']}}</h1>
            </div>
        </div>
    </div>
</header>
<nav role="navigation" class="navbar navbar-default">
    <div class="container">
        <div class="row">
            <div class="col-sm-12" >

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">

                        <span class="sr-only">切换导航</span>

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>


                <div class="collapse navbar-collapse" id="example-navbar-collapse">
                    <ul class="_menu" >
                        <li <if value="CONTROLLER=='Entry'">class="_active"</if>><a href="./">首页</a></li>
                        <foreach from="$cateData" key="$k" value="$v">
                            <li <if value="$cid==$v['cid']">class="_active"</if> ><a href="wap_category_{{$v['cid']}}.html">{{$v['cname']}}</a></li>
                        </foreach>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<section>
    <div class="container">
        <div class="row">
            <!--标签规定文档的主要内容main-->
            <main class="col-md-8">
<!--                继承模板-->
                <blade name="content" />
            </main>
            <aside class="col-md-4 hidden-sm hidden-xs">
                <div class="_widget">
                    <h4>关于自己</h4>
                    <div class="_info">
                        <p>{{$webSetData['Own']}}</p>
                        <p>
                            <i class="glyphicon glyphicon-volume-down"></i>
                            {{$webSetData['Address']}}
                            <a href="{{$webSetData['Weibo']}}" target="_blank">weibo</a>
                        </p>
                    </div>
                </div>
                <div class="_widget">
                    <h4>分类列表</h4>
                    <div>
                        <foreach from="$allCateData" key="$k" value="$v">
                            <a href="wap_category_{{$v['cid']}}.html">{{$v['cname']}} ({{$v['total']}})</a>
                        </foreach>
                    </div>
                </div>
                <div class="_widget">
                    <h4>标签云</h4>
                    <div class="_tag">

                        <foreach from="$allTagData" key="$kk" value="$vv">
                            <a href="wap_tag_{{$vv['tid']}}.html">{{$vv['tname']}}</a>
                        </foreach>

                    </div>
                </div>

            </aside>
        </div>
    </div>
</section>
<footer class="hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4 class="_title">最新文章</h4>
                <foreach from="$newArtData" key="$kkkk" value="$vvvv">
                <div id="" class="_single">
                    <p><a href="wap_article_{{$vvvv['aid']}}.html">{{$vvvv['title']}}</a></p>
                    <time>{{date('Y年m月d日 H:i:s',$vvvv['sendtime'])}}</time>
                </div>
                </foreach>
            </div>
            <div class="col-sm-4 footer_tag">
                <div id="">
                    <h4 class="_title">标签云</h4>
                    <foreach from="$allTagData" key="$kk" value="$vv">
                        <a href="wap_tag_{{$vv['tid']}}.html">{{$vv['tname']}}</a>
                    </foreach>
                </div>
            </div>
            <div class="col-sm-4">
                <h4 class="_title">友情链接</h4>
                <div id="" class="_single">
                    <foreach from="$allLinkData" key="$kkk" value="$vvv">
                        <p><a href="{{$vvv['url']}}" target="_blank">{{$vvv['lname']}}</a></p>
                    </foreach>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href="">{{$webSetData['webName']}}</a>
                |
                <a href="">{{$webSetData['Copy']}}</a>
                |
                <a href="">{{$webSetData['adminEmail']}}</a>
                |
                {{$webSetData['Sum']}}
            </div>
        </div>
    </div>
</div>
<!--返回顶部自己写的插件-->
<script src="./resource/home_wap/js/backTop.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(function(){
        //插件使用
        $('.back_top').backTop({right:20});
    })
</script>
<div class="back_top">
    <i class="fa fa-chevron-up"></i>
</div>
</body>
</html>