<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>{{$headConf['title']}}</title>
    <meta name="keywords" content="{{$headConf['keywords']}}" />
    <meta name="description" content="{{$headConf['description']}}" />
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
                <foreach from="$cateData" key="$k" value="$v">
                <li><a href="category_{{$v['cid']}}.html">{{$v['cname']}}</a></li>
                </foreach>
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
<blade name="content" />

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
                <span class="location">{{$webSetData['Address']}}</span>
                <span class="phone">4049896</span>
                <span class="email"><a href="mailto:{{$webSetData['adminEmail']}}">{{$webSetData['adminEmail']}}</a></span>
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
            <foreach from="$allLinkData" key="$k" value="$v">
            <li><a href="{{$v['url']}}">{{$v['lname']}}</a></li>
            </foreach>

        </ul>
        <div class="copyright">{{$webSetData['Copy']}} <a href="http://www.miitbeian.gov.cn/" target="_blank" style="color: white;">赣ICP备15007645号</a></div>
        <div class="clear"></div>
    </div><!-- .center-block -->
    <div class="clear"></div>
</div><!-- #footer-menu -->
<!-- END FOOTER MENU  -->

</body>
</html>