<extend file="resource/view/home">
    <block name="content">
        <!-- START WRAPPER SECTION -->
        <div id="wrapper">

            <div id="separator">
                <div class="center-block">
                    <h3>BLOG</h3>
                    <span>:&nbsp;&nbsp;<a href="">本博客时常分享网站技巧，各类源码模板、设计素材，请记住本站网址 www.dqdl.net </a></span>
                    <!-- SEARCH -->
                    <div class="widget" style="float: right; margin-top: 15px;">
                        <form method="post" id="searchform" action="{{u('home/search/index')}}">
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
                            <a href="article_{{$rand[0]['aid']}}.html">
                                <h4 style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">{{$rand[0]['title']}}</h4></a>
                            <p style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">{{$rand[0]['digest']}}</p>

                            <!-- CarouFredSel - Recent Projects -->
                            <div class="projects_carousel">
                                <div id="rp-carousel">
                                    <!-- start recent project block -->
                                    <foreach from="$rand_2" key="$k" value="$v">
                                        <div class="rp-block rp-bg">
                                            <div class="rp-bg-white">
                                                <img src="{{$v['thumb']}}" width="200" height="145" alt="{{$v['title']}}" />
                                                <div class="mask">
                                                    <a href="article_{{$v['aid']}}.html" class="view-icon" data-rel="zoom-img"></a>
                                                    <a href="article_{{$v['aid']}}.html" class="link-icon"></a>
                                                </div><!-- .mask -->
                                                <div class="rp-arrow-up"></div>
                                                <div class="rp-content">
                                                    <h6 style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><a href="article_{{$v['aid']}}.html">{{$v['title']}}</a></h6>
                                                    <p style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">{{$v['digest']}}</p>
                                                </div><!-- .rp-content -->
                                            </div><!-- .rp-bg-white -->
                                        </div><!-- .rp-block -->
                                    </foreach>

                                </div><!-- #rp-carousel -->
                                <div class="clearfix"></div>
                                <a class="prev" id="rp-carousel_prev" href="#"><span>prev</span></a>
                                <a class="next" id="rp-carousel_next" href="#"><span>next</span></a>
                            </div><!-- .projects_carousel -->
                            <div class="clear"></div>

                        </div><!-- .rp-block-main -->

                        <!-- start recent articles block -->
                        <div class="ra-block-main">
                            <a href="article_{{$rand[1]['aid']}}.html">
                                <h4 style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">{{$rand[1]['title']}}</h4></a>
                            <p style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">{{$rand[1]['digest']}}</p>

                            <!-- CarouFredSel - Recent Articles -->
                            <div class="articles_carousel">
                                <div id="ra-carousel">
                                    <!-- start recent articles block -->
                                    <foreach from="$rand_3" key="$k" value="$v">
                                        <div class="ra-block ra-bg">
                                            <div class="ra-bg-white">
                                                <img src="{{$v['thumb']}}" width="200" height="145" alt="{{$v['title']}}" />
                                                <div class="mask">
                                                    <a href="article_{{$v['aid']}}.html" class="link-icon"></a>
                                                </div><!-- .mask -->
                                                <div class="ra-arrow-up"></div>
                                                <div class="ra-content">
                                                    <h6 style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><a href="article_{{$v['aid']}}.html">{{$v['title']}}</a></h6>
                                                    <p style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">{{$v['digest']}}</p>
                                                </div><!-- .ra-content -->
                                            </div><!-- .ra-bg-white -->
                                        </div><!-- .ra-block -->
                                    </foreach>
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

    </block>