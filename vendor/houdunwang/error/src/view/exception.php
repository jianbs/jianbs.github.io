<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<title>钟剑的博客温馨提示</title>
	<style type="text/css">
		div.main {
			font-family: "Microsoft Yahei", "Helvetica Neue", Helvetica, Arial, sans-serif;
			padding: 10px;
			margin-left: 30px;
			color: #333;
		}

		div.pic {
			padding-bottom: 10px;
			font-size: 128px;
		}

		div.msg {
			font-size: 35px;
			margin-bottom: 30px;
			font-weight: bold;
		}

		div.info {
			font-size: 30px;
			margin-bottom: 10px;
		}

		div.info div.title, div.trace div.title {
			font-size: 18px;
			font-weight: bold;;
		}

		div.info div.path {
			font-size: 16px;
			line-height: 1.5em;
		}

		div.copyright {
			font-family: "Microsoft Yahei", "Helvetica Neue", Helvetica, Arial, sans-serif;
			padding: 10px 45px;
			color: #aaaaaa;
			text-align: left;
		}

		div.copyright b {
			font-size: 20px;
		}

		div.copyright a {
			color: #000;
			text-decoration: none;
			font-size: 20px;
		}

		div.copyright a.hdphp {
			font-size: 14px;
			color: #aaaaaa;
		}
	</style>
</head>
<body>
<div class="main">
	<div class="pic">
		:(
	</div>
	<div class="msg">
		<?php echo $e->getMessage(); ?>
	</div>
	<div class="info">
		<div class="title">
			File:
		</div>
		<div class="path">
			<?php echo 'File:' . $e->getFile() . '  Line:' . $e->getLine(); ?>
		</div>
	</div>
	<div class="info">
		<div class="title">
			Trace
		</div>
		<div class="path">
			<?php echo nl2br( $e->__toString() ); ?>
		</div>
	</div>
</div>
<?php if ( defined( 'HDPHP_VERSION' ) ) { ?>
	<div class="copyright">
        <a href="http://www.dqdl.net" title="DQ动力">
            <b>返回首页</b>
		</a>
		[ <a href="http://www.dqdl.net" class='hdphp' title="hdphp" target="_blank">DQ动力-来自江西赣州钟剑的博客 </a>]
	</div>
<?php } ?>
</body>
</html>