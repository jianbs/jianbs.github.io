<extend file="resource/view/home">
    <block name="content">
        <!-- START WRAPPER SECTION -->
        <div id="wrapper">

            <div id="separator">
                <div class="center-block">
                    <h3> {{$header['value']}}:</h3>
                    <span>{{$header['name']}}：共 {{$header['count']}} 篇文章</span>
                </div>
            </div>

            <!-- START CONTENT -->
            <div class="center-block">
                <div class="left-content">
                    <!-- POST #2 -->
                    <foreach from="$articleData" key="$k" value="$v">
                    <div class="post-block-style2 post-bg">
                        <div class="post-bg-white">
                            <div class="post-meta clearfix">
                                <div class="post-category">
                                    <ul>
                                        <li class="standard" style="width: 60px;height: 60px;"><a href="article_{{$v['aid']}}.html"></a></li>
                                        <li class="tag"><a href="#" title="Category - Development">{{date('d',$v['sendtime'])}}</a></li>
                                        <li class="tag"><a href="#" title="Category - Design">{{date('m月',$v['sendtime'])}}</a></li>
                                    </ul>
                                </div><!-- .post-category -->
                                <h4><a href="article_{{$v['aid']}}.html" class="title">{{$v['title']}}</a></h4>
                                <div class="meta">

                                    <span class="author">by <a href="#">{{$v['author']}}</a></span>
                                    <a href="#" class="comments" title="Comments">14</a>
                                </div><!-- .meta -->
                            </div><!-- .post-meta -->
                            <div class="thumb">
                                <img src="{{$v['thumb']}}" alt="文章缩略图" title="{{$v['title']}}" />
                                <div class="thumb-arrow-up"></div>
                            </div><!-- .thumb -->
                            <div class="text">
                                <p>{{$v['title']}}</p>
                                <p>{{$v['digest']}}</p>
                                <div class="go-to readmore no-margin-bottom">
                                    <a href="article_{{$v['aid']}}.html">Read more</a>
                                    <span></span>
                                </div><!-- .go-to -->
                            </div><!-- .text -->
                        </div><!-- .post-bg-white -->
                    </div><!-- .post-block-style2 -->
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
                            <foreach from="$allCateData" key="$kk" value="$vv">
                            <li><a href="category_{{$vv['cid']}}.html" title="{{$vv['ctitle']}}">{{$vv['_cname']}}</a></li>
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

                    <!-- RECENT POSTS -->
                    <div class="widget">
                        <h5>Recent Articles</h5>
                        <ul class="list text">
                            <foreach from="$newArtData" key="$k" value="$v">
                            <li style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><a href="article_{{$v['aid']}}.html">{{$v['title']}}</a></li>
                            </foreach>
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

    </block>