<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
    <meta charset="utf-8"/>
    <title>钟剑博客管理系统登陆-Powered By JianBs</title>
    <meta name="description"content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link href="./resource/admin/bootstrap-3.3.0-dist/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./resource/admin/admin.ui/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="./resource/admin/admin.ui/css/app.css" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="./resource/admin/admin.ui/js/ie/html5shiv.js"></script>
    <script src="./resource/admin/admin.ui/js/ie/respond.min.js"></script>
    <script src="./resource/admin/admin.ui/js/ie/excanvas.js"></script>
    <![endif]-->
</head>
<body class="">
<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
    <div class="container aside-xxl">
        <a class="navbar-brand block" href="">JianBs Blog Cms</a>
        <section class="panel panel-default bg-white m-t-lg">
            <header class="panel-heading text-center">
                <strong>管理员登陆</strong>
            </header>
            <form method="post" action="" class="panel-body wrapper-lg">
                <div class="form-group">
                    <label class="control-label">用户名</label>
                    <input  type="text" class="form-control input-lg" name="username">
                </div>
                <div class="form-group">
                    <label class="control-label">密 码</label>
                    <input  type="password"  class="form-control input-lg" name="password">
                </div>
                <div class="form-group">
                    <label class="control-label">验证码</label>
                    <input type="text"  class="form-control input-lg col-md-6" name="code">
                    <img style="margin-bottom: 10px;border: 1px solid #ccc;" src="{{u('admin.login.code')}}" onclick="this.src=this.src+'&'+Math.random()">
                </div>
                <button style="margin-top: 10px;" type="submit" class="btn btn-primary">登陆后台</button>
            </form>
        </section>
    </div>
</section>
<!-- footer -->
<footer id="footer">
    <div class="text-center padder">
        <p>
            <small>Powered By dqdl.net and jianbs<br> copyright &copy; 2011-2017版权所有</small>
        </p>
    </div>
</footer>
<script src="./resource/admin/admin.ui/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="./resource/admin/admin.ui/js/bootstrap.js"></script>
<!-- App -->
<script src="./resource/admin/admin.ui/js/app.js"></script>
<script src="./resource/admin/admin.ui/js/slimscroll/jquery.slimscroll.min.js"></script>
<script src="./resource/admin/admin.ui/js/app.plugin.js"></script>
</body>
</html>