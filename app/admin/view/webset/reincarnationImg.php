<extend file="resource/view/master">
    <block name="content">
        <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
            <li>
                <a href=""><i class="fa fa-cogs"></i>
                    站点配置管理</a>
            </li>
            <li>
                <a href="">
                    首页轮播图</a>
            </li>

        </ol>
        <ul class="nav nav-tabs" role="tablist">
            <li ><a href="{{u('index')}}">站点配置</a></li>
            <li class="active"><a href="">设置轮播图</a></li>
        </ul>
        <form class="form-horizontal" id="form" action="" method="post" onsubmit="return add()">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" style="display: inline">设置轮播图</h3>
                    <span style="float: right;font-size: 12px;color: #428BCA;">（建议最低图片尺寸700*330，或更大的同比例尺寸）</span>
                </div>
                <div class="panel-body">

                    <div class="form-group" style="margin-top: 30px;">
                        <span style="color: red;font-size: 12px;margin-left: 15px;">*第一张必须上传</span>
                        <label for="" class="col-sm-2 control-label">图片1</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" name="imgaes1" readonly="" value="{{$data[0]['imgurl']}}">
                                <div class="input-group-btn">
                                    <button onclick="upImage1(this)" class="btn btn-default" type="button">选择图片</button>
                                </div>
                            </div>
                            <div class="input-group" style="margin-top:5px;">
                                <img src="<if value="$data[0]['imgurl']">
                                {{$data[0]['imgurl']}}
                                <else/>
                                resource/images/nopic.jpg
                                </if>" class="img-responsive img-thumbnail1 img-thumbnail" width="150">
                                <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">图片2</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" name="imgaes2" readonly="" value="{{$data[1]['imgurl']}}">
                                <div class="input-group-btn">
                                    <button onclick="upImage2(this)" class="btn btn-default" type="button">选择图片</button>
                                </div>
                            </div>
                            <div class="input-group" style="margin-top:5px;">
                                <img src="<if value="$data[1]['imgurl']">
                                {{$data[1]['imgurl']}}
                                <else/>
                                resource/images/nopic.jpg
                                </if>" class="img-responsive img-thumbnail2 img-thumbnail" width="150">
                                <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">图片3</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" name="imgaes3" readonly="" value="{{$data[2]['imgurl']}}">
                                <div class="input-group-btn">
                                    <button onclick="upImage3(this)" class="btn btn-default" type="button">选择图片</button>
                                </div>
                            </div>
                            <div class="input-group" style="margin-top:5px;">
                                <img src="<if value="$data[2]['imgurl']">
                                {{$data[2]['imgurl']}}
                                <else/>
                                resource/images/nopic.jpg
                                </if>" class="img-responsive img-thumbnail3 img-thumbnail" width="150">
                                <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">图片4</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" name="imgaes4" readonly="" value="{{$data[3]['imgurl']}}">
                                <div class="input-group-btn">
                                    <button onclick="upImage4(this)" class="btn btn-default" type="button">选择图片</button>
                                </div>
                            </div>
                            <div class="input-group" style="margin-top:5px;">
                                <img src="<if value="$data[3]['imgurl']">
                                {{$data[3]['imgurl']}}
                                <else/>
                                resource/images/nopic.jpg
                                </if>" class="img-responsive img-thumbnail4 img-thumbnail" width="150">
                                <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">图片5</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" name="imgaes5" readonly="" value="{{$data[4]['imgurl']}}">
                                <div class="input-group-btn">
                                    <button onclick="upImage5(this)" class="btn btn-default" type="button">选择图片</button>
                                </div>
                            </div>
                            <div class="input-group" style="margin-top:5px;">
                                <img src="<if value="$data[4]['imgurl']">
                                {{$data[4]['imgurl']}}
                                <else/>
                                resource/images/nopic.jpg
                                </if>" class="img-responsive img-thumbnail5 img-thumbnail" width="150">
                                <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button class="btn btn-primary" type="submit">确定</button>
        </form>
    </block>

    <script>
        //上传图片
        function upImage1(obj) {
            require(['util'], function (util) {
                options = {
                    multiple: false,//是否允许多图上传
                    //data是向后台服务器提交的POST数据
                    data:{name:'后盾人',year:2099},
                };
                util.image(function (images) {          //上传成功的图片，数组类型 
                    $("[name='imgaes1']").val(images[0]);
                    $(".img-thumbnail1").attr('src', images[0]);
                }, options)
            });
        }

    </script>

    <script>
        //上传图片
        function upImage2(obj) {
            require(['util'], function (util) {
                options = {
                    multiple: false,//是否允许多图上传
                    //data是向后台服务器提交的POST数据
                    data:{name:'后盾人',year:2099},
                };
                util.image(function (images) {          //上传成功的图片，数组类型 
                    $("[name='imgaes2']").val(images[0]);
                    $(".img-thumbnail2").attr('src', images[0]);
                }, options)
            });
        }

    </script>

    <script>
        //上传图片
        function upImage3(obj) {
            require(['util'], function (util) {
                options = {
                    multiple: false,//是否允许多图上传
                    //data是向后台服务器提交的POST数据
                    data:{name:'后盾人',year:2099},
                };
                util.image(function (images) {          //上传成功的图片，数组类型 
                    $("[name='imgaes3']").val(images[0]);
                    $(".img-thumbnail3").attr('src', images[0]);
                }, options)
            });
        }

    </script>

    <script>
        //上传图片
        function upImage4(obj) {
            require(['util'], function (util) {
                options = {
                    multiple: false,//是否允许多图上传
                    //data是向后台服务器提交的POST数据
                    data:{name:'后盾人',year:2099},
                };
                util.image(function (images) {          //上传成功的图片，数组类型 
                    $("[name='imgaes4']").val(images[0]);
                    $(".img-thumbnail4").attr('src', images[0]);
                }, options)
            });
        }

    </script>

    <script>
        //上传图片
        function upImage5(obj) {
            require(['util'], function (util) {
                options = {
                    multiple: false,//是否允许多图上传
                    //data是向后台服务器提交的POST数据
                    data:{name:'后盾人',year:2099},
                };
                util.image(function (images) {          //上传成功的图片，数组类型 
                    $("[name='imgaes5']").val(images[0]);
                    $(".img-thumbnail5").attr('src', images[0]);
                }, options)
            });
        }

        //移除图片
        function removeImg(obj) {
            var data= $(obj).parent().prev().find('input').val();
            $(obj).prev('img').attr('src', 'resource/images/nopic.jpg');
            $(obj).parent().prev().find('input').val('');
            //删除后台图片文件
            $.post("{{u('admin/Webset/delImg')}}",{data:data},function(res){
                //res:{valid:1,message:'响应信息'}

            },'json')
        }
    </script>