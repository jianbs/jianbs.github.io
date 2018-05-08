<extend file="resource/view/master"/>
<block name="content" >
    <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
        <li>
            <a href=""><i class="fa fa-cogs"></i>
                友链管理</a>
        </li>
        <li class="active">
            <a href="">编辑友链</a>
        </li>

    </ol>
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="{{u('index')}}">友链首页</a></li>
        <li class="active"><a href="">编辑友链</a></li>
    </ul>
    <form class="form-horizontal" id="form" action="" method="post" onsubmit="return add()">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">编辑</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">友链名称</label>
                    <div class="col-sm-9">
                        <input type="text" name="lname"  class="form-control" value="{{$oldData['lname']}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">友链logo</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control" name="logo" readonly="" value="{{$oldData['logo']}}">
                            <div class="input-group-btn">
                                <button onclick="upImage(this)" class="btn btn-default" type="button">选择图片</button>
                            </div>
                        </div>
                        <div class="input-group" style="margin-top:5px;">
                            <img src="resource/images/nopic.jpg" class="img-responsive img-thumbnail" width="150">
                            <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">url地址</label>
                    <div class="col-sm-9">
                        <input type="url" name="url"  class="form-control" placeholder="" value="{{$oldData['url']}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">排序</label>
                    <div class="col-sm-9">
                        <input type="number" name="sort"  class="form-control" placeholder="" value="{{$oldData['sort']}}">
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">确定</button>
    </form>
</block>

<script>
    //上传图片
    function upImage(obj) {
        require(['util'], function (util) {
            options = {
                multiple: false,//是否允许多图上传
                //data是向后台服务器提交的POST数据
                data:{name:'后盾人',year:2099},
            };
            util.image(function (images) {          //上传成功的图片，数组类型 
                $("[name='logo']").val(images[0]);
                $(".img-thumbnail").attr('src', images[0]);
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