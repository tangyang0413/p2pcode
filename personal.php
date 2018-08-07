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
	<link rel="stylesheet" type="text/css" href="dist/css/min/realAuth.min.css" />
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
	<div class="container">
		<div id="row">
			<!-- //个人中心左侧 -->
			<!--导航菜单-->
			<div class="left_box">
				<ul class="nav nav-pills nav-stacked">
					<li class="color_t">
						<a href="">投资项目</a>
					</li>
				</ul>
				<ul class="nav nav-pills nav-stacked">
					<li class="color_t">
						<a href="#">借款项目</a>
					</li>
					<li class="">
						<a href="#">借款项目</a>
					</li>
					<li class="">
						<a href="#">还款明细</a>
					</li>
				</ul>
				<ul class="nav nav-pills nav-stacked">
					<li class="color_t">
						<a href="#">我的账户</a>
					</li>
					<li class="active">
						<a href="#">账户信息</a>
					</li>
					<li class="">
						<a href="realAuth.php">实名认证</a>
					</li>
					<li class="">
						<a href="#">银行卡管理</a>
					</li>
					<li class="">
						<a href="#">登录记录</a>
					</li>
				</ul>
				<ul class="nav nav-pills nav-stacked">
					<li class="color_t">
						<a href="#">资产详情</a>
					</li>
					<li class="">
						<a href="#">账户流水</a>
					</li>
					<li class="">
						<a href="#">充值明细</a>
					</li>
					<li class="">
						<a href="#">提现记录</a>
					</li>
					<li class="">
						<a href="#">收款明细</a>
					</li>
				</ul>
				<ul class="nav nav-pills nav-stacked">
					<li class="color_t">
						<a href="userInfo.php">个人资料</a>
					</li>
				</ul>
			</div>

			
			<!-- 右边内容 -->

			<div class="col-sm-9">
					<div class="panel panel-default">
						<div class="panel-body el-account">
							<div class="el-account-info">
								<div class="pull-left el-head-img">
									<img class="icon" src="static/images/head_icon.jpg" />
								</div>
								<div class="pull-left el-head">
									<p>昵&emsp;称：源代码老王</p>
									<p>用户名：小强</p>
									<p>最后登录时间：2016-10-25 15:30:10</p>
								</div>
								<div class="clearfix"></div>
							</div>
							
							<div style="margin: 10px 2px;" class="row h4">
								<div class="col-sm-4">
									总金额：<span class="text-primary">10000元</span>
								</div>
								<div class="col-sm-4">
									可用金额：<span class="text-primary">8000元</span>
								</div>
								<div class="col-sm-4">
									冻结金额：<span class="text-primary">2000元</span>
								</div>
							</div>
							
							<div style="text-align: center;width: 400px;margin:30px auto 0px auto;">
								<a class="btn btn-primary btn-lg" href="#">账户充值</a>
								<a class="btn btn-danger btn-lg" href="#">账户提现</a>
							</div>
							
							<div class="el-account-info">
								<div class="row">
									<div class="col-sm-4">
										<div class="el-accoun-auth">
											<div class="el-accoun-auth-left">
												<img src="static/images/shiming.png" />
											</div>
											<div class="el-accoun-auth-right">
												<h5>实名认证</h5>
												<p>
													<!--
														已认证
														<a href="realAuth.html">查看</a>
													-->
														未认证
														<a href="#">马上认证</a>

												</p>
											</div>
											<div class="clearfix"></div>
											<p class="info">实名认证之后才能在平台投资</p>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="el-accoun-auth">
											<div class="el-accoun-auth-left">
												<img src="static/images/shouji.jpg" />
											</div>
											<div class="el-accoun-auth-right">
												<h5>手机认证</h5>
												<p>
													已认证
													<a href="#">查看</a>
												</p>
											</div>
											<div class="clearfix"></div>
											<p class="info">可以收到系统操作信息,并增加使用安全性</p>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="el-accoun-auth">
											<div class="el-accoun-auth-left">
												<img src="static/images/youxiang.jpg" />
											</div>
											<div class="el-accoun-auth-right">
												<h5>邮箱认证</h5>
												<p>
													已认证
													<a href="#">查看</a>
												</p>
											</div>
											<div class="clearfix"></div>
											<p class="info">您可以设置邮箱来接收重要信息</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="el-accoun-auth">
											<div class="el-accoun-auth-left">
												<img src="static/images/baozhan.jpg" />
											</div>
											<div class="el-accoun-auth-right">
												<h5>VIP会员</h5>
												<p>
													普通用户
													<a href="#">查看</a>
												</p>
											</div>
											<div class="clearfix"></div>
											<p class="info">VIP会员，让你更快捷的投资</p>
										</div>
									</div>
								</div>
							</div>
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
<script src="src/javascript/realAuth.js"></script>

</html>