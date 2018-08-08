<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>p2p金融借贷平台————借款列表</title>
		<!--视口: 兼容移动端-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<!--引入bootstarp样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css"/>
		<!--引入自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/request_list.min.css"/>
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
						<li class="active">
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
							<a href="">账户信息</a>
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
						<li class="color_t"><a href="userInfo.php">个人资料</a></li>
					</ul>
				</div>

				<!-- 右侧功能页面 -->
                <!-- 功能页面 -->
				<div class="col-sm-9" style="padding-right: 0px;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            借款项目
                        </div>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>标题</th>
                                <th>时间</th>
                                <th>借款金额(元)	</th>
                                <th>期限	</th>
                                <th>利率	</th>
                                <th>状态</th>
                            </tr>
                            </thead>
                            <tbody>
                            <c:forEach var="data" items="${pageResult.datas}">
                                <tr>
                                    <td>
                                        <a target="_blank" href="borrow_info.html">江湖救急</a><span class="label label-primary">信</span>
                                    </td>
                                    <td>2016-01-02</td>
                                    <td>2000</td>
                                    <td>12月</td>
                                    <td><fmt:parseNumber value="${data.currentRate}"
                                                        var="fcurrentRate" /> 12%</td>

                                    <td>
                                        <label class="text-muted">待发布</label>
                                            <label class="text-success">招标中</label>
                                            <label class="text-success">满标未审核</label>
                                            <label class="text-success">还款中</label>
                                            <label class="text-danger">招标拒绝</label>
                                    </td>
                                </tr>
                            </c:forEach>
                            </tbody>
                        </table>
                        <div style="text-align: center;">
                            <ul id="pagination" class="pagination"></ul>
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
</html>