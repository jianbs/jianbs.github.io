<extend file="resource/view/home">
    <block name="content">
        <!-- START SLIDER -->
        <div id="slider-wrapper" class="camera_wrapper">
            <!-- START CTA BLOCK -->
            <div id="cta-block">
                <div class="center-block">
                    <div class="slogan">
                        <h3 class="darkgray">欢迎您访问 <a href="http://www.dqdl.net" class="firebrick">钟剑的博客</a></h3>
                        <h5 class="darkgray">当你为错过太阳而哭泣的时候，你也要再错过群星了。</h5>
                    </div>
                </div>
            </div>
            <!-- END CTA BLOCK -->

            <div class="camera_wrap camera_burgundy_skin clearfix" id="camera_wrap_1">
                <div data-thumb="./resource/home/images/sliders/ei-slider/thumb/slide01.jpg" data-src="./resource/home/images/sliders/ei-slider/slide01.jpg">
                    <div class="camera_caption fadeFromBottom">
                        Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
                    </div>
                </div>
                <div data-thumb="./resource/home/images/sliders/ei-slider/thumb/slide02.jpg" data-src="./resource/home/images/sliders/ei-slider/slide02.jpg">
                    <div class="camera_caption fadeFromBottom">
                        It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
                    </div>
                </div>
                <div data-thumb="./resource/home/images/sliders/ei-slider/thumb/slide03.jpg" data-src="./resource/home/images/sliders/ei-slider/slide03.jpg">
                    <div class="camera_caption fadeFromBottom">
                        <em>It's completely free</em> (even if a donation is appreciated)
                    </div>
                </div>
                <div data-thumb="./resource/home/images/sliders/ei-slider/thumb/slide04.jpg" data-src="./resource/home/images/sliders/ei-slider/slide04.jpg">
                    <div class="camera_caption fadeFromBottom">
                        Camera slideshow provides many options <em>to customize your project</em> as more as possible
                    </div>
                </div>
                <div data-thumb="./resource/home/images/sliders/ei-slider/thumb/slide05.jpg" data-src="./resource/home/images/sliders/ei-slider/slide05.jpg">
                    <div class="camera_caption fadeFromBottom">
                        It supports captions, HTML elements and videos and <em>it's validated in HTML5</em> (<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.pixedelic.com%2Fplugins%2Fcamera%2F&amp;charset=%28detect+automatically%29&amp;doctype=Inline&amp;group=0&amp;user-agent=W3C_Validator%2F1.2" target="_blank">have a look</a>)
                    </div>
                </div>
                <div data-thumb="./resource/home/images/sliders/ei-slider/thumb/slide06.jpg" data-src="./resource/home/images/sliders/ei-slider/slide06.jpg">
                    <div class="camera_caption fadeFromBottom">
                        Different color skins and layouts available, <em>fullscreen ready too</em>
                    </div>
                </div>
            </div><!-- #camera_wrap_1 -->
        </div><!-- end slider-wrapper -->
        <!-- END SLIDER -->

        <!-- 博客部分开始 -->
        <div id="wrapper">

            <div id="separator">
                <div class="center-block">
                    <h3>BLOG</h3>
                    <span>:&nbsp;&nbsp;<a href="">本博客时常分享网站技巧，各类源码模板、设计素材，请记住本站网址 www.dqdl.net </a></span>
                </div>
            </div>

            <!-- START CONTENT -->
            <div class="center-block">
                <div class="left-content">
                    <!-- POST #2 -->
                    <foreach from="$articleData" key="$k" value="$v">
                    <div class="post-block-style1 post-bg">
                        <div class="post-bg-white">
                            <div class="thumb">
                                <img src="{{$v['thumb']}}" alt="" />
                                <div class="thumb-arrow-up"></div>
                            </div><!-- .thumb -->
                            <div class="post-meta clearfix">
                                <div class="meta-arrow-up"></div>
                                <div class="date">
                                    <h4>{{date('d',$v['sendtime'])}}</h4>
                                    <h6>{{date('m月',$v['sendtime'])}}</h6>
                                </div>
                                <h4><a style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;" href="article_{{$v['aid']}}.html" class="title" title="{{$v['title']}}">{{$v['title']}}</a></h4>
                                <span class="meta-info author">Author:{{$v['author']}}</span>
                                <span class="meta-info category">Category: <a href="category_{{$v['cid']}}.html">{{$v['cname']}}</a></span>
                            </div><!-- .post-meta -->
                            <div class="text">
                                <p>{{$v['digest']}}</p>
                                <div class="go-to readmore no-margin-bottom">
                                    <a href="article_{{$v['aid']}}.html">Read more</a>
                                    <span></span>
                                </div><!-- .go-to -->
                            </div><!-- .text -->
                        </div><!-- .post-bg-white -->
                    </div><!-- .post-block-style1 -->
                    </foreach>
                    <!-- END POST #2 -->

                    <!-- START PAGINATION-->
                    <div id="nav-pagination">
                        <style>
                            .pagination li:first-child{ background: url(./resource/home/images/icons/icons.png) 3px -760px no-repeat; margin-right:10px;}
                            .pagination li:last-of-type span { padding: 5px 12px;background: url(./resource/home/images/icons/icons.png) 3px -741px no-repeat;}
                        </style>
                        {{$page}}
                    </div>
                    <!-- END PAGINATION-->
                </div><!-- .left-content -->

                <div class="right-sidebar">
                    <!-- SEARCH -->
                    <div class="widget">
                        <h5>Search</h5>
                        <form method="post" id="searchform" action="{{u('home/search/index')}}">
                            <fieldset>
                                <input type="text" name="search" id="s" placeholder="简短输入您需要搜索的内容" >
                            </fieldset>
                        </form>
                    </div><!-- end .widget -->

                    <!-- CATEGORIES -->
                    <div class="widget">
                        <h5>Categories</h5>
                        <ul class="list play">
                            <foreach from="$allCateData" key="$k" value="$v">
                            <li><a href="category_{{$v['cid']}}.html" title="Post With Gallery">{{$v['_cname']}} ({{$v['total']}})</a></li>
                            </foreach>
                        </ul>
                    </div><!-- end .widget -->
                    <!-- RECENT POSTS -->
                    <div class="widget">
                        <h5>Recent Articles</h5>
                        <ul class="list text">
                            <foreach from="$newArtData" key="$kkk" value="$vvv">
                                <li style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><a href="article_{{$vvv['aid']}}.html">{{$vvv['title']}}</a></li>
                            </foreach>
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
                            <foreach from="$allTagData" key="$kk" value="$vv">
                            <a href="tag_{{$vv['tid']}}.html" class="tagc1">{{$vv['tname']}}</a>
                            </foreach>
                        </div>
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

    </block>