<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>p2p金融借贷平台———借款详细信息</title>
		<!--视口: 兼容移动端-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<!--引入bootstarp样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css"/>
		<!--引入自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/borrow_info.min.css"/>
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
		<div class="container" id="cont">
			<div class="row">
				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							借款人
						</div>
						<div class="panel-body">
							<img class="el-userhead" src="static/images/head_icon.jpg" />
							<p class="text-center">
								<a class="text-info" href="#">zs</a>
							</p><br />
							<div>
								籍贯： 四川 - 成都
							</div>
							<div>
								专职客服：<a href="#">码妹妹</a>
							</div>
							<div>
								认证信息：

								<label class="label label-success">
									<span class="glyphicon glyphicon-user"></span>
								</label>

							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6">
					<h3 class="text-info" style="margin-top: 0px;">
						zs借款
						<small><label class="label label-primary">信</label></small>
					</h3>
					<div>
						<table width="100%" height="250px">
							<tr style="font-size: 16px;">
								<td class="muted" width="80px">借款金额</td>
								<td class="text-info" style="padding-left: 10px;">
									2,000.00
								</td>
							</tr>
							<tr style="font-size: 16px;">
								<td class="muted ">年化利率</td>
								<td class="text-info" style="padding-left: 10px;">
									10.00%

								</td>
							</tr>
							<tr style="font-size: 16px;">
								<td class="muted ">借款期限</td>
								<td class="text-info" style="padding-left: 10px;">
									3月
								</td>
							</tr>
							<tr style="font-size: 16px;">
								<td class="muted">投标奖励</td>
								<td class="text-info" style="padding-left: 10px;">
									0.00
								</td>
							</tr>
							<tr style="font-size: 16px;">
								<td class="muted">还款方式</td>
								<td class="text-info" style="padding-left: 10px;">
									<p class="form-control-static">

										按月分期还款



									</p>
								</td>
							</tr>
							<tr style="font-size: 16px;">
								<td class="muted">最小投标</td>
								<td class="text-info" style="padding-left: 10px;">
									20.00
								</td>
							</tr>

							<tr style="font-size: 16px;">
								<td class="muted">剩余时间</td>
								<td class="text-info" style="padding-left: 10px;">
									<div id="retroclockbox"></div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-sm-3">
					<table style="height:110px;width:230px;">
						<tr style="font-size: 16px;">
							<td  class="muted">投标总数</td><td class="text-info" style="padding-left: 10px;">
							2
						</td>
						</tr>
						<tr style="font-size: 16px;">
							<td  class="muted">还需金额</td><td class="text-info" style="padding-left: 10px;">
							0.00元
						</td>
						</tr>
						<tr>
							<td  class="muted" colspan="2">投标进度</td>
						</tr>
						<tr>
							<td colspan="2">
								<div style="margin-bottom: 10px;" class="progress">




									<div style="width: 100.00%" class="progress-bar progress-bar-info progress-bar-striped"></div>
								</div>
							</td>
						</tr>
					</table>
					<h4 class="text-primary">还款中</h4>
				</div>
			</div>


			<div class="panel panel-default">
				<div class="panel-heading">
					借款人信息
				</div>
				<div class="panel-body">
					<table>
						<tbody>
							<tr>
								<td class="muted text-right">注册时间</td>
								<td width="20%" style="padding-left: 10px;" class="text-info">
									2015-03-30
								</td>
								<td class="muted text-right">借款额度</td>
								<td width="20%" style="padding-left: 10px;" class="text-info">
									2000
								</td>
								<td class="muted text-right">性别</td>
								<td width="20%" style="padding-left: 10px;" class="text-info">
									男
								</td>
								<td class="muted text-right">年龄</td>
								<td width="20%" style="padding-left: 10px;" class="text-info">
									25
								</td>
							</tr>
							<tr>
								<td class="muted text-right">文化程度</td>
								<td width="20%" style="padding-left: 10px;" class="text-info">
									硕士研究生
								</td>
								<td class="muted text-right">每月收入</td>
								<td width="20%" style="padding-left: 10px;" class="text-info">
									3000-4999
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>


			<div class="panel panel-default">
				<div class="panel-heading">
					<div style="font-size: 16px;">审核认证信息</div>
				</div>
				<div class="panel-body">
					<table>
						<tbody><tr>
							<td class="muted text-right">认证时态度</td>
							<td width="10%" style="padding-left: 10px;" class="text-info">
								优
							</td>
							<td class="muted text-right">信贷知识掌握情况</td>
							<td width="10%" style="padding-left: 10px;" class="text-info">
								优
							</td>
							<td class="muted text-right">借款感言</td>
							<td width="50%" style="padding-left: 10px;" class="text-info">
								给我2000度过难关
							</td>
						</tr>
						<tr>
							<td class="muted text-right">审核员认证意见</td>
							<td width="150px" style="padding-left: 10px;" colspan="5" class="text-info">
								<div style="word-break:break-all;">
									啊啊啊啊啊
								</div>
							</td>
						</tr>
						</tbody></table>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<div style="font-size: 16px;">材料信息</div>
				</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
						<tr>
							<th style="font-size: 16px;">材料类型</th>
							<th style="font-size: 16px;">材料数量</th>
						</tr>
						</thead>
						<tbody>
						<tr style="cursor: pointer;" lid="2101" st="1" class="more">
							<th style="font-size: 16px;">本人身份证</th>
							<td style="font-size: 16px;">2</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<div style="font-size: 16px;">还款情况</div>
				</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead  style="font-size: 16px;">
						<tr>
							<th>还款状态</th>
							<th>最近一周</th>
							<th>最近1月</th>
							<th>最近6月</th>
							<th>6个月前</th>
							<th>总计[?]</th>
						</tr>
						</thead>
						<tbody  style="font-size: 16px;">
						<tr>
							<td>提前还款</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<td>准时还款</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<td>逾期已还</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<td>逾期未还</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<div style="font-size: 16px;">投标记录</div>
				</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead  style="font-size: 16px;">
						<tr>
							<th>投标人</th>
							<th>年利率 </th>
							<th>有效金额(¥)</th>
							<th>投标时间</th>
							<th>类型</th>
						</tr>
						</thead>
						<tbody style="font-size: 16px;">


						<tr>
							<td>si*****</td>
							<td>

								10%
							</td>
							<td style="padding-right:60px;" class="text-info">
								1,000.00
							</td>
							<td>
								2016-05-11 06:42:11
							</td>
							<td>手动投标</td>
						</tr>

						<tr>
							<td>xia*****</td>
							<td>

								10%
							</td>
							<td style="padding-right:60px;" class="text-info">
								1,000.00
							</td>
							<td>
								2016-05-12 13:44:01
							</td>
							<td>手动投标</td>
						</tr>
						</tbody>
					</table>
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