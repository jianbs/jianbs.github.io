<extend file="resource/view/home_wap">
    <block name="content">
        <article>
            <div class="_head wap_category_title">
                <h2>
                    {{$header['name']}}：
                    <!--分类：-->
                    {{$header['value']}}
                </h2>
                <span>
									共 {{$header['count']}} 篇文章
								</span>
            </div>
        </article>
        <foreach from="$articleData" key="$k" value="$v">
            <article>
                <div class="_head">
                    <h1>{{$v['title']}}</h1>
                    <span>
								作者：
								{{$v['author']}}
								</span>
                    •
                    <!--pubdate表⽰示发布⽇日期-->
                    <time pubdate="pubdate" datetime="{{date('Y-m-d',$v['sendtime'])}}">{{date('Y-m-d',$v['sendtime'])}}</time>
                    •
                    分类：
                    <a href="wap_category_{{$v['cid']}}.html">{{$v['cname']}}</a>
                </div>
                <div class="_digest">
                    <img src="{{$v['thumb']}}"  class="img-responsive"/>
                    <p>
                        {{$v['digest']}}
                    </p>
                </div>
                <div class="_more">
                    <a href="wap_article_{{$v['aid']}}.html" class="btn btn-default">阅读全文</a>
                </div>
                <div class="_footer">
                    <i class="glyphicon glyphicon-tags"></i>
                    <foreach from="$v['tag']" key="$kk" value="$vv">
                        <a href="wap_tag_{{$kk}}.html">{{$vv}}</a>、
                    </foreach>
                </div>
            </article>
        </foreach>
    </block>