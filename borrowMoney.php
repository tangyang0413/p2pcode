<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>我要借钱</title>
	<!--视口: 兼容移动端-->
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<!--引入bootstarp样式-->
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css" />
	<!--引入自定义样式-->
	<link rel="stylesheet" type="text/css" href="dist/css/min/userRegLogin.min.css" />

	<link rel="stylesheet" type="text/css" href="dist/css/min/borrowMoney.min.css" />
	<!--引入图标字体-->
	<link rel="stylesheet" type="text/css" href="lib/font-awesome/css/font-awesome.min.css" />
	<!--兼容低版本的浏览器-->
	<!--[if lt IE 9]>
	      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
</head>

<body>
	<!--页头-->
	 	<?php
	include_once("./header.html");
	?>
		 

	<!--模板内容开始-->
	<div class="container" id="box1">
		<div class="panel panel-default col-lg-4 col-md-4 col-xs-12">
			<div class="panel-heading">
				<h2>信用贷</h2>
			</div>
			<div class="panel-body">
				<h4>可借金额 ¥ 2,000.00</h4>
				<p>
					<a href="#">申请条件</a>
				</p>
				<p>仅限成都地区</p>
				<ul>
					<li>填写基本资料</li>
					<li>身份认证</li>
					<li>视频认证</li>
				</ul>
				
				<button class="but"><a href="#">立刻申请</a></button>
			</div>
		</div>


		<div class="panel panel-default col-lg-4 col-md-4 col-xs-12">
			<div class="panel-heading">
				<h2>车用贷</h2>
			</div>
			<div class="panel-body">
				<h4>可借金额 ¥ 2,000.00</h4>
				<p>
					<a href="#">申请条件</a>
				</p>
				<p>仅限成都地区</p>
				<ul>
					<li>填写基本资料</li>
					<li>身份认证</li>
					<li>视频认证</li>
				</ul>
				<button class="but"><a href="#">立刻申请</a></button>

			</div>
		</div>



		<div class="panel panel-default col-lg-4 col-md-4 col-xs-12">
			<div class="panel-heading">
				<h2>房用贷</h2>
			</div>
			<div class="panel-body">
				<h4>可借金额 ¥ 2,000.00</h4>
				<p>
					<a href="#">申请条件</a>
				</p>
				<p>仅限成都地区</p>
				<ul>
					<li>填写基本资料</li>
					<li>身份认证</li>
					<li>视频认证</li>
				</ul>
				<button class="but"><a href="#">立刻申请</a></button>

			</div>
		</div>
	</div>




	<!--页脚-->
	 <?php
	include_once("./footer.html");
	?> 
</body>
<!--引入jQuery-->
<script src="lib/jquery/jquery-1.11.0.js"></script>
<!--引入bootstrap  js文件-->
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<!--引入提示框的js文件-->
<script src="src/javascript/titlebox.js"></script>

</html>