<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>注册页面</title>
		<!--视口: 兼容移动端-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<!--引入bootstarp样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css"/>
		<!--引入自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/register.min.css"/>
		<!--引入图标字体-->
		<link rel="stylesheet" type="text/css" href="lib/font-awesome/css/font-awesome.min.css"/>
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
		<div class="container" id="register">
			<!--框-->
			<div class="panel panel-default">
				<!--标题-->
				<div class="panel-heading">用户注册</div>
				
				<div class="panel-body">
					<p>请填写注册信息，点击“提交注册”即可完成注册！</p>
					<form id="registerform">
						  <div class="form-group">
						    <label for="username">用户账号</label>
						    <input type="text" class="form-control" name="username" id="username" placeholder="请输入用户名">
						  </div>
						  <div class="form-group">
						    <label for="password1">登录密码</label>
						    <input type="password" class="form-control" name="password1" id="password1" placeholder="">
						  </div>
						   <div class="form-group">
						    <label for="password2">确认密码</label>
						    <input type="password" class="form-control" name="password2" id="password2" placeholder="">
						  </div>
						  <div class="form-group">
						    <label for="realname">真实姓名</label>
						    <input type="text" class="form-control" name="realname" id="realname" placeholder="请输入姓名">
						  </div>
						  <div class="form-group">
						    <label for="mobile">手机号码</label>
						    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="请输入手机号码">
						  </div>
						  <div class="form-group">
						    <label>用户性别</label>
						    <label class="radio-inline">
							  <input type="radio" name="sex" value="男">男
							</label>
							<label class="radio-inline">
							  <input type="radio" name="sex" value="女">女
							</label>
						  </div>
						  <div class="checkbox">
						    <label>
						      <input type="checkbox">同意注册协议
						    </label>
						  </div>
						  <button type="submit" class="btn btn-danger">立即注册</button>
					</form>
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