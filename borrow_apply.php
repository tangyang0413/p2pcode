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
	<link rel="stylesheet" type="text/css" href="dist/css/min/borrow_apply.min.css">
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
					<li class="">
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
					<li class="color_t active">
						<a href="userInfo.php">个人资料</a>
					</li>
				</ul>
			</div>


			<!-- 右边内容 -->
		<div class="col-sm-9">
			<div class="el-tip-info">
				<h3>信用借款</h3>
				<p>
					<span class="text-info">授信额度：</span><span class="text-danger">2000 </span> &emsp;&emsp;&emsp;
					<span class="text-info">可借金额：</span><span class="text-danger">2000</span>
				</p>
			</div>

			<div class="page-header lead">
				借款信息
				<label class="label label-primary">信用标</label>
			</div>
			<form class="form-horizontal el-borrow-form" novalidate="novalidate" method="post" action="${pageContext.request.contextPath}/borrow_normal.do">
				<div class="form-group">
					<label class="col-sm-3 control-label">
						借款金额
					</label>
					<div class="col-sm-3  input-group">
						<input class="form-control" name="bidRequestAmount" />
						<span class="input-group-addon">元</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">
						借款利息
					</label>
					<div class="col-sm-3  input-group">
						<input class="form-control" name="currentRate" />
						<span class="input-group-addon">%</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">
						借款期限
					</label>
					<div class="col-sm-3 input-group">
						<select class="form-control" name="monthes2Return">
							<option value="1">1</option>
							<option value="3">3</option>
							<option value="6">6</option>
							<option value="9">9</option>
							<option value="12">12</option>
							<option value="24">24</option>
						</select>
						<span class="input-group-addon">月</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">
						还款方式
					</label>
					<label class="radio-inline">
						<input type="radio" value="0" checked="checked" name="inlineRadioOptions" />
						按月分期
					</label>
					<label class="radio-inline">
						<input type="radio" value="1" name="inlineRadioOptions" />
						按月到期
					</label>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">
						最小投标
					</label>
					<div class="col-sm-3  input-group">
						<input class="form-control" name="minBidAmount" />
						<span class="input-group-addon">元</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">
						投标奖金
					</label>
					<div class="col-sm-3  input-group">
						<input class="form-control" name="totalRewardAmount" value="0" />
						<span class="input-group-addon">%</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">
						招标天数
					</label>
					<div class="col-sm-3 input-group">
						<select class="form-control" name="disableDays">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
						<span class="input-group-addon">天</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">
						借款标题
					</label>
					<div class="col-sm-6 input-group">
						<input name="title" class="form-control" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">
						借款描述
					</label>
					<div class="col-sm-6  input-group">
						<textarea name="description" rows="4" class="form-control" style="resize: none;"></textarea>
					</div>
				</div>
				<div class="form-group">
					<button class="btn btn-primary col-lg-offset-3" type="submit" data-loading-text="提交">
						提交申请
					</button>
				</div>

				<div class="el-borrow-form-tip">
					<h4>相关费用</h4>
					<p>
						<span class="text-info">利息</span>
						<span class="el-borrow-cost" id="cost01">--</span>
					</p>
					<p>
						<span class="text-info">奖金</span>
						<span class="el-borrow-cost" id="cost02">--</span>
					</p>
					<p>
						<span class="text-info">管理费</span>
						<span class="el-borrow-cost" id="cost03">--</span>
					</p>
				</div>
			</form>
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