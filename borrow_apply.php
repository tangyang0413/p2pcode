<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>p2p金融借贷平台————账户信息</title>
	<!--视口: 兼容移动端-->
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<!--引入bootstarp样式-->
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css" />
	<!--引入bootstrapvalidator插件的核心样式-->
	<link rel="stylesheet" type="text/css" href="lib/bootstrapvalidator/dist/css/bootstrapValidator.min.css"/>
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


	<!--申请借款表单开始-->
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
						<button type="button" id="clickmenu" class="btn btn-primary btn-xs">
						菜单切换
						</button>
						<div class="panel-body">
							<div class="row">
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
								<!--表单开始-->
								<form id="borrowForm" class="form-horizontal el-borrow-form" method="post">
									<div class="form-group">
										<label class="control-label">
											借款类型
										</label>
										<select class="form-control" name="borrowType">
											<option value="1">信用贷</option>
											<option value="2">车易贷</option>
											<option value="3">房易贷</option>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">
											借款金额
										</label>
										<div class="input-group">
											<input class="form-control" name="borrowAmount" />
											<span class="input-group-addon">元</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">
											借款利息
										</label>
										<div class="input-group">
											<input class="form-control" name="currentRate" />
											<span class="input-group-addon">%</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">
											借款期限
										</label>
										<div class="input-group">
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
										<label class="control-label">
											还款方式
										</label>
										<label class="radio-inline">
											<input type="radio" value="0" checked="checked" name="repayment" />
											按月分期
										</label>
										<label class="radio-inline">
											<input type="radio" value="1" name="repayment" />
											按月到期
										</label>
									</div>
					
									<div class="form-group">
										<label class="control-label">
											最小投标
										</label>
										<div class="input-group">
											<input class="form-control" name="minAmount" />
											<span class="input-group-addon">元</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">
											最大投标
										</label>
										<div class="input-group">
											<input class="form-control" name="maxAmount" />
											<span class="input-group-addon">元</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">
											投标奖金
										</label>
										<div class="input-group">
											<input class="form-control" name="rewardAmount" value="0" />
											<span class="input-group-addon">%</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label">
											招标天数
										</label>
										<div class="input-group">
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
										<label class="control-label">
											借款标题
										</label>
										<input name="borrowTitle" class="form-control" />
									</div>
									<div class="form-group">
										<label>
											借款描述
										</label>
										<textarea name="description" rows="4" class="form-control col-sm-6" style="resize: none;"></textarea>
									</div>
									<div class="form-group">
										<button class="btn btn-primary" type="submit" data-loading-text="提交">
											提交申请
										</button>
									</div>
								</form>
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
		
		
		
		
		
		
		<!--登录成功后弹出模态框-->
		<!-- Button trigger modal -->
			
			<!-- Modal -->
			<div class="modal fade" id="borrowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">标题</h4>
			      </div>
			      <div class="modal-body">
			        	内容
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>
	
</body>
<!--引入jQuery-->
<script src="lib/jquery/jquery-1.11.0.js"></script>
<!--引入bootstrap  js文件-->
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<!--引入bootstrapvalidator插件的核心js文件-->
<script src="lib/bootstrapvalidator/dist/js/bootstrapValidator.min.js"></script>
<!--引入自定义的表单验证js-->
<script src="src/javascript/register.js" type="text/javascript" charset="utf-8"></script>
<!--引入提示框的js文件-->
<script src="src/javascript/titlebox.js"></script>
<!--session验证登录验证状态-->
<script src="src/javascript/checklogin.js"></script>

</html>