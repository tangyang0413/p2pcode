<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>p2p金融借贷平台———个人资料</title>
		<!--视口: 兼容移动端-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<!--引入bootstarp样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css"/>
		<!--引入自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/userInfo.min.css"/>
		<!--引入图标字体-->
		<link rel="stylesheet" type="text/css" href="lib/font-awesome/css/font-awesome.min.css"/>
		<!--兼容低版本的浏览器-->
		<!--[if lt IE 9]>
	      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    <!--引入jQuery-->
		<script src="lib/jquery/jquery-1.11.0.js"></script>
		<script src="dist/js/min/checklogin.min.js" type="text/javascript" charset="utf-8"></script>
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
						<li class="color_t"><a href="">投资项目</a></li>
					</ul>
					<ul class="nav nav-pills nav-stacked">
						<li class="color_t">
							<a href="#">借款项目</a>
						</li>
						<li class="">
							<a href="request_list.php">借款项目</a>
						</li>
						<li class="">
							<a href="#">还款明细</a>
						</li>
					</ul>
					<ul class="nav nav-pills nav-stacked">
						<li class="color_t">
							<a href="#">我的账户</a>
						</li>
						<li class="">
							<a href="#">账户信息</a>
						</li>
						<li class="" >
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
						<li class="color_t active"><a href="userInfo.php">个人资料</a></li>
					</ul>
				</div>

				<!-- 右侧功能页面 -->
                <!-- 功能页面 -->
				<div class="col-sm-9" style="padding-right: 0px;">
					<div class="panel panel-default"  >
						<div class="panel-heading">
							个人资料
						</div>
						<form id="userInfoForm" class="form-horizontal" action="/userInfo_save.html" method="post"
							style="width: 700px;">
							<div class="form-group">
								<label class="col-sm-4 control-label">
									用户名
								</label>
								<div class="col-sm-8">
									<p class="form-control-static">xiaoq</p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">
									真实姓名
								</label>
								<div class="col-sm-8">
									<p class="form-control-static">


										小强

									</p>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label">
									证件号码
								</label>
								<div class="col-sm-8">
									<p class="form-control-static">
										{{&123}}
									</p>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label">
									手机号码
								</label>
								<div class="col-sm-8">
									<input type="text" name="phone" style="width: 250px;" class="form-control" value=""/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label">
									联系电话
								</label>
								<div class="col-sm-8">
									<input type="text" name="tel" style="width: 250px;" class="form-control" value=""/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label">
									个人学历
								</label>
								<div class="col-sm-8">
									<select class="form-control" name="edu" style="width: 180px">
										<option value="1">初中</option>
										<option value="2">中专/高中</option>
										<option value="3">专科</option>
										<option value="4">本科</option>
										<option value="5">硕士研究生</option>
										<option value="6">博士研究生</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label">
									个人收入
								</label>
								<div class="col-sm-8">

									<select class="form-control" name="salaryLevel" style="width: 180px">
										<option value="1">1000元以下</option>
										<option value="2">1000元-1999元</option>
										<option value="3">2000元-2999元</option>
										<option value="4">3000-4999</option>
										<option value="5">5000-8999</option>
										<option value="6">10000以上</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label">
									联系地址
								</label>
								<div class="col-sm-8">
									<input type="text" name="address" class="form-control" value=""/>
								</div>
							</div>

							<div class="form-group">
								<button id="submitBtn" type="submit" class="btn btn-primary col-sm-offset-5"
										data-loading-text="数据保存中。。。">
									保存数据
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		<!--页脚-->
		<?php
			include_once("./footer.html");	
		?>
	</body>
	
	<!--引入bootstrap  js文件-->
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<!--引入提示框的js文件-->
	<script src="src/javascript/realAuth.js"></script>
</html>