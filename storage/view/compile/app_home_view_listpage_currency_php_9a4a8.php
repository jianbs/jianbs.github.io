<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>当前暂无内容-DQ动力资源小站-来自江西赣州钟剑的博客</title>
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
                                <li><a href="category_1.html">新闻</a></li>
                                <li><a href="category_20.html">测试一下</a></li>
                                <li><a href="category_19.html">你好</a></li>
                
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
                    <h3>Tabs, Tables etc.</h3>
                    <span>: Sample Tabs, Tables, Collapse etc.</span>
                    <!-- SEARCH -->
                    <div class="widget" style="float: right; margin-top: 15px;">
                        <form method="post" id="searchform" action="<?php echo u('home/search/index')?>" >
<input type='hidden' name='csrf_token' value=''/>

                            <fieldset>
                                <input type="text" name="search" id="s" placeholder="简短输入您需要搜索的内容" >
                            </fieldset>
                        </form>
                    </div><!-- end .widget -->
                </div>
            </div>

            <!-- START CONTENT -->
            <div class="center-block-page clearfix">

                <div class="clear"></div>

                <div class="three_fourth">
                            <h4>当前分类或标签下暂时没内容！</h4>
                </div> <!-- end .three_fourth -->
            </div><!-- .center-block-page -->

                <div class="divider-2px"></div>

                <!-- START RECENT PROJECTS -->
                <div id="recent-projects">
                    <div class="center-block">

                        <!-- start recent project block -->
                        <div class="rp-block-main">
                            <a href="article_<?php echo $rand[0]['aid']?>.html">
                                <h4 style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><?php echo $rand[0]['title']?></h4></a>
                            <p style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><?php echo $rand[0]['digest']?></p>

                            <!-- CarouFredSel - Recent Projects -->
                            <div class="projects_carousel">
                                <div id="rp-carousel">
                                    <!-- start recent project block -->
                                    <?php if(is_array($rand_2) || is_object($rand_2)){foreach ($rand_2 as $k=>$v){?>
                                        <div class="rp-block rp-bg">
                                            <div class="rp-bg-white">
                                                <img src="<?php echo $v['thumb']?>" width="200" height="145" alt="<?php echo $v['title']?>" />
                                                <div class="mask">
                                                    <a href="article_<?php echo $v['aid']?>.html" class="view-icon" data-rel="zoom-img"></a>
                                                    <a href="article_<?php echo $v['aid']?>.html" class="link-icon"></a>
                                                </div><!-- .mask -->
                                                <div class="rp-arrow-up"></div>
                                                <div class="rp-content">
                                                    <h6 style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><a href="article_<?php echo $v['aid']?>.html"><?php echo $v['title']?></a></h6>
                                                    <p style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><?php echo $v['digest']?></p>
                                                </div><!-- .rp-content -->
                                            </div><!-- .rp-bg-white -->
                                        </div><!-- .rp-block -->
                                    <?php }}?>

                                </div><!-- #rp-carousel -->
                                <div class="clearfix"></div>
                                <a class="prev" id="rp-carousel_prev" href="#"><span>prev</span></a>
                                <a class="next" id="rp-carousel_next" href="#"><span>next</span></a>
                            </div><!-- .projects_carousel -->
                            <div class="clear"></div>

                        </div><!-- .rp-block-main -->

                        <!-- start recent articles block -->
                        <div class="ra-block-main">
                            <a href="article_<?php echo $rand[1]['aid']?>.html">
                                <h4 style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><?php echo $rand[1]['title']?></h4></a>
                            <p style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><?php echo $rand[1]['digest']?></p>

                            <!-- CarouFredSel - Recent Articles -->
                            <div class="articles_carousel">
                                <div id="ra-carousel">
                                    <!-- start recent articles block -->
                                    <?php if(is_array($rand_3) || is_object($rand_3)){foreach ($rand_3 as $k=>$v){?>
                                        <div class="ra-block ra-bg">
                                            <div class="ra-bg-white">
                                                <img src="<?php echo $v['thumb']?>" width="200" height="145" alt="<?php echo $v['title']?>" />
                                                <div class="mask">
                                                    <a href="article_<?php echo $v['aid']?>.html" class="link-icon"></a>
                                                </div><!-- .mask -->
                                                <div class="ra-arrow-up"></div>
                                                <div class="ra-content">
                                                    <h6 style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><a href="article_<?php echo $v['aid']?>.html"><?php echo $v['title']?></a></h6>
                                                    <p style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><?php echo $v['digest']?></p>
                                                </div><!-- .ra-content -->
                                            </div><!-- .ra-bg-white -->
                                        </div><!-- .ra-block -->
                                    <?php }}?>
                                </div><!-- #ra-carousel -->
                                <div class="clearfix"></div>
                                <a class="prev" id="ra-carousel_prev" href="#"><span>prev</span></a>
                                <a class="next" id="ra-carousel_next" href="#"><span>next</span></a>
                            </div><!-- .articles_carousel -->
                            <div class="clear"></div>

                        </div><!-- .ra-block-main -->
                        <div class="clear"></div>

                    </div><!-- .center-block -->
                    <div class="clear"></div>
                </div><!-- #recent-projects -->
                <!-- END RECENT PROJECTS -->

                <div class="divider-2px"></div>

            <!-- END CONTENT -->
        </div><!-- #wrapper -->

        <!-- END WRAPPER -->

    

<!-- START FOOTER -->
<div class="divider-100-2px"></div>
<div id="footer">
    <div class="center-block">
        <div class="widget">
            <h6>Contact Info</h6>
            <p>LinkUp is an American multinational compane that designs
                and markets consumer electronics, computer software, and personal computers.
            </p>
            <div>
                <span class="location">江西赣州</span>
                <span class="phone">phone: +1 (44)  123-45-67</span>
                <span class="email"><a href="mailto:web@d8tu.com">web@d8tu.com</a></span>
            </div>
        </div><!-- .widget -->

        <div class="widget">
            <h6>Twitter Feed</h6>

        </div><!-- .widget -->

        <div class="widget">
            <h6>Flickr Photos</h6>

        </div><!-- .widget -->

        <div class="widget">
            <img src="./resource/home/images/logo-mini.png" alt="Logo Mini" class="logo" />
            <p>We are a group of designers combining our skills to create traditional
                and new creative websites for your communicational issues.</p>
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
                        <li><a href="http://sohu.com">搜狐</a></li>
            
        </ul>
        <div class="copyright">©️jianbs版权所有</div>
        <div class="clear"></div>
    </div><!-- .center-block -->
    <div class="clear"></div>
</div><!-- #footer-menu -->
<!-- END FOOTER MENU  -->

</body>
</html>
    