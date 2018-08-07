<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>p2p金融借贷平台————实名认证</title>
		<!--视口: 兼容移动端-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<!--引入bootstarp样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css"/>
		<!--引入自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/realAuth.min.css"/>
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
							<a href="">账户信息</a>
						</li>
						<li class="active" >
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
						<li class="color_t"><a href="userInfo.php">个人资料</a></li>
					</ul>
				</div>

				
                


				<!-- 功能页面 -->
				<div class="col-sm-9">
					<div class="panel panel-default">
						<div class="panel-heading">
							实名认证
						</div>
						<form class="form-horizontal" id="realAuthForm" method="post" action="realAuth_save.html" novalidate="novalidate">
							<fieldset>
								<div class="form-group">
									<p class="text-center text-danger">为保护您账户安全，实名认证成功之后不能修改信息，请认真填写！</p>
								</div>
								<div class="form-group">
						        	<label class="col-sm-4 control-label ">用户名</label>
					        		<div class="col-sm-8">
						        		<p class="form-control-static">小强</p>
						        	</div>
						        </div>
								<div class="form-group">
						        	<label class="col-sm-4 control-label" for="realName">姓名</label>
					        		<div class="col-sm-8">
						        		<input id="realName" name="realName" class="form-control" type="text" value="">
						        	</div>
						        </div>
						        <div class="form-group">
						        	<label class="col-sm-4  control-label" for="sex">性别</label>
					        		<div class="col-sm-8">
						        		<select id="sex" class="form-control" name="sex" size="1">
											<option value="0">男</option>
											<option value="1">女</option>
										</select>
						        	</div>
						        </div>
						        <div class="form-group">
						        	<label class="col-sm-4  control-label" for="idtype">证件类型</label>
					        		<div class="col-sm-8">
						        		<select id="idType" class="form-control" name="idtype" class="select_common" size="1">
											<option value="0">身份证</option>
											<option value="1">驾驶证</option>
											<option value="2">军官证</option>
										</select>
						        	</div>
						        </div>
						        <div class="form-group">
						        	<label class="col-sm-4  control-label" for="idnumber">证件号码</label>
					        		<div class="col-sm-8">
						        		<input id="idNumber" class="form-control" name="idnumber"  type="text" value="">
						        	</div>
						        </div>
						        <div class="form-group">
						        	<label class="col-sm-4  control-label" for="birthdate">出生日期</label>
					        		<div class="col-sm-8">
						        		<input id="birthDate"  class="form-control" name="birthdate" type="text">
						        	</div>
						        </div>
						        <div class="form-group">
						        	<label class="col-sm-4  control-label" for="address">证件地址</label>
					        		<div class="col-sm-8">
						        		<input id="address" class="form-control" name="address"  type="text" style="max-width: 100%;width:500px;">
						        	</div>
						        </div>
						        <div class="form-group myimg">
						        	<label class="col-sm-4  control-label" for="address">身份证照片</label>
					        		<div class="col-sm-8">
					        			<p class="text-help text-primary">请点击“选择图片”,选择证件的正反两面照片。</p>
					        			<a href="javascript:;" id="viewExample" data-html="true" data-toggle="tooltip"  data-placement="top" title="hahahahahaha" data-template="">查看样板</a>


					        			<div class="idCardItem">
					        				<div>
					        					<a href="javascript:;" id="uploa""dBtn1" >上传正面</a>
					        				</div>
					        				<img alt="" src="" class="uploadImg" id="uploadImg1" />
					        				<input type="hidden" value="" name="papersimg01" />
					        			</div>
					        			<div class="idCardItem">
					        				<div>
					        					<a href="javascript:;" id="uploadBtn2" >上传反面</a>
					        				</div>
					        				<img alt="" src="" class="uploadImg" id="uploadImg2"/>
					        				<input type="hidden" value="" name="papersimg02" />
					        			</div>
					        			<div class="clearfix"></div>
						        	</div>
						        </div>
						        <div class="form-group">
						        	<button type="submit" id="asubmit" class="btn btn-primary col-sm-offset-4" data-loading-text="正在提交"><i class="icon-ok"></i> 提交认证</button>
						        </div>
							</fieldset>
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
	<!--引入jQuery-->
	<script src="lib/jquery/jquery-1.11.0.js"></script>
	<!--引入bootstrap  js文件-->
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<!--引入提示框的js文件-->
	<script src="src/javascript/realAuth.js"></script>
</html>