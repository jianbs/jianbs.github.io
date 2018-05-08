<extend file="resource/view/home_wap">
    <block name="content">
        <style>
            img{
                max-width: 600px;
            }
        </style>
        <article>
            <div class="_head">
                <h1>{{$articleData['title']}}</h1>
                <span>
								作者：
								<a href="">{{$articleData['author']}}</a>
								</span>
                •
                <!--pubdate表⽰示发布⽇日期-->
                <time pubdate="pubdate" datetime="{{date('Y-m-d',$articleData['sendtime'])}}">{{date('Y-m-d',$articleData['sendtime'])}}</time>
            </div>
            <div class="_digest">
                {{$articleData['content']}}
            </div>
            <div class="_footer">
                <i class="glyphicon glyphicon-tags"></i>
                <foreach from="$articleData['tag']" key="$k" value="$v">
                    <a href="wap_tag_{{$k}}.html">{{$v}}</a>、
                </foreach>
            </div>
        </article>
        <!-- UY BEGIN -->
        <div id="uyan_frame"></div>
        <script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js"></script>
        <script type="text/javascript">var uyan_config = {'su':'{{$aid}}'};</script>
        <!-- UY END -->
    </block>