<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>2016年8分获奖剧情《我是布莱克》BD中英双字幕</title>
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
                <h1>dq动力资源小站-来自江西赣州钟剑的博客</h1>
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
                        <li ><a href="./">首页</a></li>
                                                    <li  ><a href="wap_category_1.html">技术相关</a></li>
                                                    <li  ><a href="wap_category_20.html">源码插件</a></li>
                                                    <li  ><a href="wap_category_19.html">设计素材</a></li>
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
                
        <style>
            img{
                max-width: 600px;
            }
        </style>
        <article>
            <div class="_head">
                <h1><?php echo $articleData['title']?></h1>
                <span>
								作者：
								<a href=""><?php echo $articleData['author']?></a>
								</span>
                •
                <!--pubdate表⽰示发布⽇日期-->
                <time pubdate="pubdate" datetime="<?php echo date('Y-m-d',$articleData['sendtime'])?>"><?php echo date('Y-m-d',$articleData['sendtime'])?></time>
            </div>
            <div class="_digest">
                <?php echo $articleData['content']?>
            </div>
            <div class="_footer">
                <i class="glyphicon glyphicon-tags"></i>
                <?php if(is_array($articleData['tag']) || is_object($articleData['tag'])){foreach ($articleData['tag'] as $k=>$v){?>
                    <a href="wap_tag_<?php echo $k?>.html"><?php echo $v?></a>、
                <?php }}?>
            </div>
        </article>
        <!-- UY BEGIN -->
        <div id="uyan_frame"></div>
        <script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js"></script>
        <script type="text/javascript">var uyan_config = {'su':'<?php echo $aid?>'};</script>
        <!-- UY END -->
    
            </main>
            <aside class="col-md-4 hidden-sm hidden-xs">
                <div class="_widget">
                    <h4>关于自己</h4>
                    <div class="_info">
                        <p>历史的车轮，滚滚向前，如果历史上会记载互联网时代那些耀眼如星的网络风云人物时候，不知道这历史的车轮是否能记住他们的一些人，或者仅仅只能用两个字来在历史书上概括这个群体：站长。</p>
                        <p>
                            <i class="glyphicon glyphicon-volume-down"></i>
                            江西赣州                            <a href="http://weibo.com/jianbs" target="_blank">weibo</a>
                        </p>
                    </div>
                </div>
                <div class="_widget">
                    <h4>分类列表</h4>
                    <div>
                                                    <a href="wap_category_1.html">技术相关 (4)</a>
                                                    <a href="wap_category_3.html">Linux (6)</a>
                                                    <a href="wap_category_16.html">前端开发 (0)</a>
                                                    <a href="wap_category_5.html">PHP (0)</a>
                                                    <a href="wap_category_20.html">源码插件 (2)</a>
                                                    <a href="wap_category_19.html">设计素材 (0)</a>
                                                    <a href="wap_category_21.html">心情杂文 (2)</a>
                                                    <a href="wap_category_22.html">Discuz模板插件 (0)</a>
                                            </div>
                </div>
                <div class="_widget">
                    <h4>标签云</h4>
                    <div class="_tag">

                                                    <a href="wap_tag_1.html">原创</a>
                                                    <a href="wap_tag_2.html">PHP</a>
                                                    <a href="wap_tag_3.html">MYSQL</a>
                                                    <a href="wap_tag_4.html">JavaScript</a>
                                                    <a href="wap_tag_7.html">discuz模板</a>
                                                    <a href="wap_tag_8.html">discuz插件</a>
                                                    <a href="wap_tag_9.html">前端代码</a>
                                                    <a href="wap_tag_10.html">小程序</a>
                                                    <a href="wap_tag_11.html">室内素材</a>
                                                    <a href="wap_tag_12.html">设计素材</a>
                                                    <a href="wap_tag_13.html">UI设计</a>
                                                    <a href="wap_tag_14.html">3D模型</a>
                        
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
                                <div id="" class="_single">
                    <p><a href="wap_article_6.html">测试下一文章</a></p>
                    <time>2017年02月22日 17:16:00</time>
                </div>
                                <div id="" class="_single">
                    <p><a href="wap_article_7.html">中国首辆布加迪威龙上牌，车牌太LOW,不符合身份?其实……</a></p>
                    <time>2017年02月24日 09:47:59</time>
                </div>
                            </div>
            <div class="col-sm-4 footer_tag">
                <div id="">
                    <h4 class="_title">标签云</h4>
                                            <a href="wap_tag_1.html">原创</a>
                                            <a href="wap_tag_2.html">PHP</a>
                                            <a href="wap_tag_3.html">MYSQL</a>
                                            <a href="wap_tag_4.html">JavaScript</a>
                                            <a href="wap_tag_7.html">discuz模板</a>
                                            <a href="wap_tag_8.html">discuz插件</a>
                                            <a href="wap_tag_9.html">前端代码</a>
                                            <a href="wap_tag_10.html">小程序</a>
                                            <a href="wap_tag_11.html">室内素材</a>
                                            <a href="wap_tag_12.html">设计素材</a>
                                            <a href="wap_tag_13.html">UI设计</a>
                                            <a href="wap_tag_14.html">3D模型</a>
                                    </div>
            </div>
            <div class="col-sm-4">
                <h4 class="_title">友情链接</h4>
                <div id="" class="_single">
                                            <p><a href="http://www.baidu.com" target="_blank">百度一下</a></p>
                                            <p><a href="http://dqdl.net" target="_blank">dq动力</a></p>
                                    </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href="">dq动力资源小站-来自江西赣州钟剑的博客</a>
                |
                <a href="">dqdl.net ©️ jianbs 2011-2017版权所有</a>
                |
                <a href="">web@d8tu.com</a>
                |
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
    