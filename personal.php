<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>p2p金融借贷平台————账户信息</title>
	<!--视口: 兼容移动端-->
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<!--引入bootstarp样式-->
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css" />
	<!--引入自定义样式-->
	<!--<link rel="stylesheet" type="text/css" href="dist/css/min/realAuth.min.css" />-->
	<link rel="stylesheet" type="text/css" href="dist/css/min/personal.min.css">
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
	<div class="container" id="mainContent">
        	<div class="row">
        		<!--左侧菜单-->
        		<div class="col-sm-3 col-xs-6" id="leftmenu">
        			<?php
        				include_once("./leftMunetree.html");
        				?>
        		</div>
        		
        		
        		<!--右侧内容-->
        		<div class="col-sm-9 col-xs-12" id="rightCon">

        			<div class="panel panel-default">
        			  <button type="button" class="btn btn-primary btn-xs" id="clickmenu">切换菜单</button>
        				
					  <div class="panel-body">
					    <div class="row">
	        				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	        					<img class="img-thumbnail" src="static/images/head_icon.jpg"/>
	        				</div>
	        				<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
	        				    <p>昵 称：源代码教育</p>
	        				    <p>用户名：<span id="username"> ${result.username}</span></p>
	        				    <p>最后登录：2016-10-25 15:30:10</p>
	        				</div>
	        			</div>
	        			<div class="row">
	        				<div class="col-md-4 col-xs-12">
	        					总金额：<span class="text-primary">10000</span>元
	        				</div>
	        				<div class="col-md-4 col-xs-12">
	        					可用金额：<span class="text-primary">8000</span>元
	        				</div>
	        				<div class="col-md-4 col-xs-12">
	        					冻结金额：<span class="text-primary">2000</span>元
	        				</div>
	        			</div>
	        			<div class="row text-center">
	        				<button type="button" class="btn btn-primary btn-lg">账号充值</button>
                            <button type="button" class="btn btn-danger btn-lg">账号提现</button>
	        			</div>
	        			<div class="row">
	        				<div class="col-md-6 col-xs-12">
	        					<div class="authIcon">
	        						<p>实名认证</p>
	        						<p>未认证 <a href="#">马上认证</a></p>
	        					</div>
	        					<div>实名认证之后才能在平台投资</div>
	        				</div>
	        				<div class="col-md-6 col-xs-12">
	        					<div class="authIcon2">
	        						<p>实名认证</p>
	        						<p>未认证 <a href="#">马上认证</a></p>
	        					</div>
	        					<div>实名认证之后才能在平台投资</div>
	        				</div>
	        				<div class="col-md-6 col-xs-12">
	        					<div class="authIcon3">
	        						<p>实名认证</p>
	        						<p>未认证 <a href="#">马上认证</a></p>
	        					</div>
	        					<div>实名认证之后才能在平台投资</div>
	        				</div>
	        				<div class="col-md-6 col-xs-12">
	        					<div class="authIcon4">
	        						<p>实名认证</p>
	        						<p>未认证 <a href="#">马上认证</a></p>
	        					</div>
	        					<div>实名认证之后才能在平台投资</div>
	        				</div>
	        			</div>
					  </div>
					</div>
        			
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
<!--session验证登录验证状态-->
<script src="src/javascript/checklogin.js"></script>

</html>