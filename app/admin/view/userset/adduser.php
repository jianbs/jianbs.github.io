<extend file="resource/view/master"/>
<block name="content" >
    <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
        <li>
            <a href=""><i class="fa fa-cogs"></i>
                用户配置</a>
        </li>
        <li>
            <a href="">
                添加管理员</a>
        </li>

    </ol>
    <ul class="nav nav-tabs" role="tablist">
        <li class=""><a href="{{u('index')}}">用户配置</a></li>
        <li class="active"><a href="">添加管理员</a></li>
    </ul>
    <form class="form-horizontal" id="form" action="" method="post" onsubmit="return add()">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"style="display: inline">新增管理员</h3>
                <span style="float: right;font-size: 12px;color: #428BCA;">（新添加的管理员拥有相同权限，请谨慎操作）</span>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">用户名<span style="color: red;">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" name="lname"  class="form-control" placeholder="输入添加的管理员用户名">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">新用户密码<span style="color: red;">*</span></label>
                    <div class="col-sm-9">
                        <input type="password" name="url"  class="form-control" placeholder="填写需要修改的密码">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">新用户密码 <span style="color: red;">*</span></label>
                    <div class="col-sm-9">
                        <input type="password" name="sort"  class="form-control" placeholder="填写再次需要修改的密码">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">您的密码<span style="color: red;">*</span></label>
                    <div class="col-sm-9">
                        <input type="password" name="oldPassword"  class="form-control" placeholder="输入您当前密码才能执行添加">
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