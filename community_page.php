<?include 'jump.php';?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/css/css.css" />
    <title>星巴克华东区</title>
    <script type="text/javascript" src="/js/jquery.pack.js"></script>
	<script type="text/javascript" src="/js/jQuery.blockUI.js"></script>
	<script type="text/javascript" src="/js/jquery.SuperSlide.js"></script>
    <link rel="shortcut icon" type="image/ico" href="images/s_icon.ico">
    <style>
	    h1,h2{color: #506e00}
	    h2{margin-top: 20px;margin-bottom: 12px;}
	    .center{text-align: center}
	    .right{text-align: right}
	    .ink p.text{margin-bottom:6px}
    </style>
    </head>
<body>
<!--公共头部-->
<script type="text/javascript" src="/js/head.js?v=4"></script>
<div class="pub_title">
	<div class="r">
		您现在的位置：首页 > 星意 > 社区公益
	</div>
</div>

<div class="pub_panel ovf">
	<script type="text/javascript" src="/js/about_head.js?v=3"></script>
</div>

<div class="ink">
	<? 
		$id = isset($_GET['id'])?$_GET['id']:'0';

		$path = $_SERVER['DOCUMENT_ROOT']."/community/{$id}.php";
		if(file_exists($path)){
			include $path;
		}
		
	?>
</div>
<!--关于-->
<script type="text/javascript" src="/js/foot_nav.js"></script>
<!-- <script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_r.js?btn=r4.gif" charset="utf-8"></script> -->
<!--公共页尾-->
<script type="text/javascript" src="/js/foot_title.js"></script>
<script>
	$(".ovf a:contains('社区公益')").addClass('tag');
</script>
</body>
</html>