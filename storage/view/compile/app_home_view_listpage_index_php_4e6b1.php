<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>PHP-dq动力资源小站-来自江西赣州钟剑的博客</title>
    <meta name="keywords" content="钟剑博客,DQ动力" />
    <meta name="description" content="DQ动力-来自江西赣州钟剑的博客" />
    <link rel="icon" type="image/png" href="./resource/home/images/favicon.png" />
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="./resource/home/css/ie-fix.css" />
    <![endif]-->
    <script>
        if (document.documentElement.clientWidth<1100){
            var str = window.location.pathname;
            surl = str.split("/");
            surl =surl[surl.length-1];
            spstr = str.split("");
            if (spstr[spstr.length-1] == '/'||str.substring(str.length-10,str.length) == 'index.html')
            {
                window.location.href="index.php?s=wap/entry/index";
            }
            if (surl.substr(0, 8) == 'category')
            {
                window.location.href="wap_"+surl;
            }
            if (surl.substr(0, 3) == 'tag')
            {
                window.location.href="wap_"+surl;
            }
            if (surl.substr(0, 7) == 'article')
            {
                window.location.href="wap_"+surl;
            }
        }
    </script>
    <link rel="stylesheet" type="text/css" href="./resource/home/css/reset.css" >
    <link rel="stylesheet" type="text/css" href="./resource/home/css/style.css" >
    <link rel="stylesheet" type="text/css" href="./resource/home/css/superfish.css" >
    <link rel="stylesheet" type="text/css" href="./resource/home/css/colorbox.css" />
    <link rel="stylesheet" type="text/css" href="./resource/home/css/camera.css" />
    <link rel="stylesheet" type="text/css" href="./resource/home/css/nav-pagination.css" />
    <script type="text/javascript" src="./resource/home/js/jquery.min.js"></script>
    <script type="text/javascript" src="./resource/home/js/superfish.js"></script>
    <script type="text/javascript" src="./resource/home/js/camera.min.js"></script>
    <script type="text/javascript" src="./resource/home/js/jquery.mobile.customized.min.js"></script>
    <script type="text/javascript" src="./resource/home/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="./resource/home/js/jquery.tweet.js"></script>
    <script type="text/javascript" src="./resource/home/js/jquery.colorbox-min.js"></script>
    <script type="text/javascript" src="./resource/home/js/jflickrfeed.min.js"></script>
    <script type="text/javascript" src="./resource/home/js/jquery.carouFredSel-5.5.0-packed.js"></script>
    <script type="text/javascript" src="./resource/home/js/scrolltopcontrol.js"></script>
    <script type="text/javascript" src="./resource/home/js/custom.js"></script><!-- Custom scripts -->
    <script type="text/javascript" src="./resource/home/js/custom-main.js"></script><!-- Only for home page -->
    <script type="text/javascript" src="./resource/home/js/tagscloud.js"></script>

    <script type="text/javascript">
        /***************************************************
         Camera Slider
         ***************************************************/
        jQuery.noConflict()(function($){
            $('#camera_wrap_1').camera({
                thumbnails: false,
                pagination: false,
                height: '400px'
            });
        });
    </script>

    <script type="text/javascript">
        /***************************************************
         Footer Testimonials CarouFredSel
         ***************************************************/
        jQuery.noConflict()(function($){

            $("#test-carousel").carouFredSel({
                auto        : true,
                width		: 220,
                height		: "auto",
                items		: 1,
                scroll		: {
                    items		: 1,
                    fx			: "fade"
                },
                auto		: {
                    delay		: 3000,
                    pauseDuration : 5000
                },
                pagination : {
                    container   : "#testimonials_pag",
                    keys        : true,
                    easing      : "easeInOutCubic",
                    duration    : 1000
                }

            });

        });
    </script>

</head>

<body>

<!-- START MENU SECTION -->
<div id="top-line"></div>
<div id="menu-bar">
    <div class="center-block clearfix">
        <!-- start menu -->
        <div id="menu" class="fix-fish-menu">
            <div class="white-fix-left"></div>
            <ul id="nav" class="sf-menu">
                <li><a href="./">Home</a></li>
                                <li><a href="category_1.html">技术相关</a></li>
                                <li><a href="category_20.html">源码插件</a></li>
                                <li><a href="category_19.html">设计素材</a></li>
                                <li><a href="aboutMe.html">关于我</a></li>
            </ul>  <!-- end #nav  -->
        </div>	<!-- end #menu  -->
    </div><!-- end .center-block  -->
</div><!-- end #menu-bar -->
<!-- END MENU SECTION -->


<!-- START LOGO SECTION -->
<div id="logo-bar">
    <div class="center-block clearfix">
        <div class="logo"><img src="./resource/home/images/logo.png" alt="Logo" /></div>
        <div class="ads"><a href="http://www.cssmoban.com/?books/freelance-confidential"><img src="./resource/home/images/468x60.png" title="Advertisement" alt="Ads" /></a></div>
    </div><!-- .center-block -->
</div><!-- #logo-bar -->
<!-- END LOGO SECTION -->
<!--继承模板-->

        <!-- START WRAPPER SECTION -->
        <div id="wrapper">

            <div id="separator">
                <div class="center-block">
                    <h3> <?php echo $header['value']?>:</h3>
                    <span><?php echo $header['name']?>：共 <?php echo $header['count']?> 篇文章</span>
                </div>
            </div>

            <!-- START CONTENT -->
            <div class="center-block">
                <div class="left-content">
                    <!-- POST #2 -->
                    <?php if(is_array($articleData) || is_object($articleData)){foreach ($articleData as $k=>$v){?>
                    <div class="post-block-style2 post-bg">
                        <div class="post-bg-white">
                            <div class="post-meta clearfix">
                                <div class="post-category">
                                    <ul>
                                        <li class="standard" style="width: 60px;height: 60px;"><a href="article_<?php echo $v['aid']?>.html"></a></li>
                                        <li class="tag"><a href="#" title="Category - Development"><?php echo date('d',$v['sendtime'])?></a></li>
                                        <li class="tag"><a href="#" title="Category - Design"><?php echo date('m月',$v['sendtime'])?></a></li>
                                    </ul>
                                </div><!-- .post-category -->
                                <h4><a href="article_<?php echo $v['aid']?>.html" class="title"><?php echo $v['title']?></a></h4>
                                <div class="meta">

                                    <span class="author">by <a href="#"><?php echo $v['author']?></a></span>
                                    <a href="#" class="comments" title="Comments">14</a>
                                </div><!-- .meta -->
                            </div><!-- .post-meta -->
                            <div class="thumb">
                                <img src="<?php echo $v['thumb']?>" alt="文章缩略图" title="<?php echo $v['title']?>" />
                                <div class="thumb-arrow-up"></div>
                            </div><!-- .thumb -->
                            <div class="text">
                                <p><?php echo $v['title']?></p>
                                <p><?php echo $v['digest']?></p>
                                <div class="go-to readmore no-margin-bottom">
                                    <a href="article_<?php echo $v['aid']?>.html">Read more</a>
                                    <span></span>
                                </div><!-- .go-to -->
                            </div><!-- .text -->
                        </div><!-- .post-bg-white -->
                    </div><!-- .post-block-style2 -->
                    <?php }}?>
                    <!-- END POST #2 -->

                    <!-- START PAGINATION-->
                    <div id="nav-pagination">
                        <style>
                            .pagination li:first-child{ background: url(./resource/home/images/icons/icons.png) 3px -760px no-repeat; margin-right:10px;}
                            .pagination li:last-of-type span { padding: 5px 12px;background: url(./resource/home/images/icons/icons.png) 3px -741px no-repeat;}
                        </style>
                        <?php echo $page?>
                    </div>
                    <!-- END PAGINATION-->
                </div><!-- .left-content -->



                <div class="right-sidebar">
                    <!-- SEARCH -->
                    <div class="widget">
                        <h5>Search</h5>
                        <form method="post" id="searchform" action="<?php echo u('home/search/index')?>" >
<input type='hidden' name='csrf_token' value=''/>

                            <fieldset>
                                <input type="text" name="search" id="s" placeholder="简短输入您需要搜索的内容" >
                            </fieldset>
                        </form>
                    </div><!-- end .widget -->

                    <!-- CATEGORIES -->
                    <div class="widget">
                        <h5>Categories</h5>
                        <ul class="list play">
                            <?php if(is_array($allCateData) || is_object($allCateData)){foreach ($allCateData as $kk=>$vv){?>
                            <li><a href="category_<?php echo $vv['cid']?>.html" title="<?php echo $vv['ctitle']?>"><?php echo $vv['_cname']?></a></li>
                            <?php }}?>

                        </ul>
                    </div><!-- end .widget -->

                    <!-- COMMENTS -->
                    <div class="widget">
                        <h5>Tags</h5>
                        <style type="text/css">
                            /* tagscloud */
                            #tagscloud{width:280px;height:240px;position:relative;font-size:12px;color:#333;text-align:center;position: relative;left: -40px;}

                            #tagscloud a{position:absolute;top:0px;left:0px;color:#333;font-family:Arial;text-decoration:none;margin:0 10px 15px 0;line-height:18px;text-align:center;font-size:12px;padding:1px 5px;display:inline-block;border-radius:3px;}

                            #tagscloud a.tagc1{background:#666;color:#fff;}

                            #tagscloud a:hover{color:#fff;background:#BF252F;}
                        </style>
                        <div id="tagscloud">
                            <?php if(is_array($allTagData) || is_object($allTagData)){foreach ($allTagData as $kk=>$vv){?>
                                <a href="tag_<?php echo $vv['tid']?>.html" class="tagc1"><?php echo $vv['tname']?></a>
                            <?php }}?>
                        </div>
                    </div><!-- end .widget -->

                    <!-- RECENT POSTS -->
                    <div class="widget">
                        <h5>Recent Articles</h5>
                        <ul class="list text">
                            <?php if(is_array($newArtData) || is_object($newArtData)){foreach ($newArtData as $k=>$v){?>
                            <li style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><a href="article_<?php echo $v['aid']?>.html"><?php echo $v['title']?></a></li>
                            <?php }}?>
                        </ul>

                    </div><!-- end .widget -->


                    <!-- ADVERTISING -->
                    <div class="widget advertising">
                        <h5>Advertising</h5>
                        <div class="ads">
                            <a href="#" class="advertising-link"><img src="./resource/home/images/ads/google.jpg" alt=""></a>
                            <a href="#" class="advertising-link"><img src="./resource/home/images/ads/freelance.jpg" alt=""></a>
                            <a href="#" class="advertising-link"><img src="./resource/home/images/ads/facebook.jpg" class="left margin-right-5px no-margin-bottom" alt=""></a>
                            <a href="#" class="advertising-link"><img src="./resource/home/images/ads/wordpress.jpg" class="no-margin-bottom" alt=""></a>
                        </div><!-- .ads -->
                    </div><!-- end .widget -->

                </div><!-- end .right-sidebar -->
                <div class="clear"></div>
                <!-- END SIDEBAR-->

            </div><!-- .center-block -->
            <div class="clear"></div>
            <!-- END CONTENT -->
            <div class="clear"></div>

        </div><!-- #wrapper -->
        <div class="clear"></div>
        <!-- END WRAPPER -->

    

<!-- START FOOTER -->
<div class="divider-100-2px"></div>
<div id="footer">
    <div class="center-block">
        <div class="widget">
            <h6>Explain</h6>
            <p>
                本站为个人技术分享博客，本站内容部分来源于网络，如诺本站发布了版权方不愿被转载或分享的内容，请联系管理员。
            </p>
            <div>
                <span class="location">江西赣州</span>
                <span class="phone">4049896</span>
                <span class="email"><a href="mailto:web@d8tu.com">web@d8tu.com</a></span>
            </div>
        </div><!-- .widget -->

        <div class="widget" style="float:right;">
            <img src="./resource/home/images/logo-mini.png" alt="Logo Mini" class="logo" />
            <p>历史的车轮，滚滚向前，如果历史上会记载互联网时代那些耀眼如星的网络风云人物时候，不知道这历史的车轮是否能记住他们的一些人，或者仅仅只能用两个字来在历史书上概括这个群体：站长。 </p>
            <ul id="footer-social">
                <li class="twitter"><a href="#"></a></li>
                <li class="dribbble"><a href="#"></a></li>
                <li class="facebook"><a href="#"></a></li>
                <li class="google"><a href="#"></a></li>
                <li class="linkedin"><a href="#"></a></li>
                <li class="behance"><a href="#"></a></li>
                <li class="rss"><a href="#"></a></li>
            </ul>
        </div><!-- .widget -->

        <div class="clear"></div>
    </div><!-- .center-block -->
    <div class="clear"></div>
</div><!-- #footer -->
<!-- END FOOTER -->
<!-- START FOOTER MENU  -->
<div id="footer-menu">
    <div class="center-block">
        <ul id="second-menu">
                        <li><a href="http://www.baidu.com">百度一下</a></li>
                        <li><a href="http://dqdl.net">dq动力</a></li>
            
        </ul>
        <div class="copyright">dqdl.net ©️ jianbs 2011-2017版权所有 <a href="http://www.miitbeian.gov.cn/" target="_blank" style="color: white;">赣ICP备15007645号</a></div>
        <div class="clear"></div>
    </div><!-- .center-block -->
    <div class="clear"></div>
</div><!-- #footer-menu -->
<!-- END FOOTER MENU  -->

</body>
</html>
    