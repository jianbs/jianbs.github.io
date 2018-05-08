<extend file="resource/view/home">
    <block name="content">
        <!-- START WRAPPER SECTION -->
        <div id="wrapper">

            <div id="separator">
                <div class="center-block">
                    <h3><a style="font-size: 18px;" href="article_{{$aid}}.html" title="">{{$articleData['title']}}</a></h3>
                </div>
            </div>

            <!-- START CONTENT -->
            <div class="center-block">
                <div class="left-content">

                    <!-- SINGLE POST BLOCK -->
                    <div class="single-post-block post-bg">
                        <div class="post-bg-white">
                            <div class="thumb">
                                <img src="{{$articleData['thumb']}}" alt="" title="{{$articleData['title']}}"/>
                                <div class="thumb-arrow-up"></div>
                            </div><!-- .thumb -->
                            <div class="post-meta clearfix">
                                <div class="meta-arrow-up"></div>
                                <div class="date">
                                    <h4>23</h4>
                                    <h6>Mar</h6>
                                </div>
                                <h4>{{$articleData['title']}}</h4>
                                <span class="meta-info author">Author:{{$articleData['author']}}</span>
                                <span class="meta-info category">Category: <a href="category_{{$articleData['cid']}}.html">{{$articleData['cname']}}</a></span>
                            </div><!-- .post-meta -->
                            <style>
                                .text img {max-width:635px}
                            </style>
                            <div class="text">
                                {{$articleData['content']}}
                            </div><!-- .text -->
                            <div class="post-meta-tag">
                                <span class="tags">Tags:
                                      <foreach from="$articleData['tag']" key="$k" value="$v">
                                    <a href="tag_{{$k}}.html">{{$v}}</a>&nbsp;
                                      </foreach>
                                </span>
                                <!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style ">
                                    <!-- JiaThis Button BEGIN -->
                                    <div class="jiathis_style">
                                        <a class="jiathis_button_qzone"></a>
                                        <a class="jiathis_button_tsina"></a>
                                        <a class="jiathis_button_tqq"></a>
                                        <a class="jiathis_button_weixin"></a>
                                        <a class="jiathis_button_cqq"></a>
                                        <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank">更多</a>
                                    </div>
                                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=" charset="utf-8"></script>
                                    <!-- JiaThis Button END -->
                                </div>
                            </div><!-- .post-meta-tag -->
                        </div><!-- .post-bg-white -->
                    </div><!-- .single-post-block -->
                    <!-- END SINGLE POST BLOCK -->

                    <!-- INFO BLOCK -->
                    <div class="info-block info-bg">
                        <div class="info-bg-white clearfix">
                            <div class="one_half">
                                <div class="info-icon">
                                    <a href="article_{{$newArtData[0]['aid']}}.html"><img src="{{$newArtData[0]['thumb']}}"  width="135" height="190" alt="" /></a>
                                </div>
                                <div class="info-text">
                                    <h5>{{$newArtData[0]['title']}}</h5>
                                    <p style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">{{$newArtData[0]['digest']}}</p>
                                    <a href="article_{{$newArtData[0]['aid']}}.html">Find Out More</a>
                                </div>
                            </div><!-- .one_half -->
                            <div class="one_half column-last">
                                <div class="info-icon">
                                    <a href="article_{{$newArtData[1]['aid']}}.html"><img src="{{$newArtData[1]['thumb']}}" width="135" height="190" alt="" /></a>
                                </div>
                                <div class="info-text">
                                    <h5>{{$newArtData[1]['title']}}</h5>
                                    <p style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">{{$newArtData[1]['digest']}}</p>
                                    <a href="article_{{$newArtData[1]['aid']}}.html">Find Out More</a>
                                </div>
                            </div><!-- .one_half -->
                        </div><!-- .post-bg-white -->
                    </div><!-- .info-block -->
                    <!-- END INFO BLOCK -->


                    <!-- COMMENTS FORM -->
                    <div id="comments-form" class="post-bg">
                        <div class="post-bg-white">
                            <!-- UY BEGIN -->
                            <div id="uyan_frame"></div>
                            <script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js"></script>
                             <script type="text/javascript">
                                var uyan_config = {
                                                     'su':'{{$aid}}'
                                                };
                             </script>
                            <!-- UY END -->
                        </div><!-- .post-bg-white -->
                    </div><!-- #comments-form -->
                    <!-- END COMMENTS FORM -->
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

                    <!-- RECENT POSTS -->
                    <div class="widget">
                        <h5>Recent Articles</h5>
                        <ul class="list text">
                            <foreach from="$newArtData" key="$kkk" value="$vvv">
                            <li style="display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><a href="article_{{$vvv['aid']}}.html">{{$vvv['title']}}</a></li>
                            </foreach>
                        </ul>
                    </div><!-- end .widget -->


                    <!-- ADVERTISING -->
                    <div class="widget advertising">
                        <h5>Advertising</h5>
                        <div class="ads">
                            <a href="#"><img src="./resource/home/images/ads/google.jpg" alt=""></a>
                            <a href="#" class="advertising-link"><img src="./resource/home/images/ads/freelance.jpg" alt=""></a>
                            <a href="#"><img src="./resource/home/images/ads/facebook.jpg" class="left margin-right-5px no-margin-bottom" alt=""></a>
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