<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>p2p金融借贷平台————首页</title>
		<!--视口: 兼容移动端-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<!--引入bootstarp样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css"/>
		<!--引入自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/index.min.css"/>
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
		
		
		
		<!--轮播图-->
		<div id="carousel">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			  </ol>
			
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="static/images/banner02.jpg" alt="广告01">
			      
			    </div>
			    <div class="item">
			      <img src="static/images/banner01.jpg" alt="广告02">
			      
			    </div>
			  </div>
			
			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
		
		
		
		
		
		
		<!--三大图标-->
		<div class="container" id="feature">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<h4>投资理财</h4>
					<p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<h4>投资理财</h4>
					<p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<h4>投资理财</h4>
					<p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
				</div>
			</div>
		</div>
		
		
		
		
		
		
		<!--进行借款列表-->
		<div class="container"  id="invest">
			<div class="panel panel-default">
				<!--标题-->
			  <div class="panel-heading">
			  	<h1>进行中借款</h1>
			  	<p><a href="#">进入投资列表</a></p>
			  </div>
			  <!--内容-->
			  <div class="bs-example" data-example-id="hoverable-table">
			    <table class="table table-hover">
			      <thead>
			        <tr>
			          <th>借款人</th>
			          <th class="width620">借款标题</th>
			          <th>年利率</th>
			          <th>金额</th>
			          <th class="width620">还款方式</th>
			          <th>进度</th>
			          <th>操作</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <th scope="row">张三</th>
			          <td class="width620">给我2000度过难关</td>
			          <td>10.00%</td>
			          <td>2,000.00</td>
			          <td class="width620">按月分期还款</td>
			          <td>78.00%</td>
			          <td><button type="button" class="btn btn-sm btn-danger">查看</button></td>
			        </tr>
			        <tr>
			          <th scope="row">张三</th>
			          <td class="width620">给我2000度过难关</td>
			          <td>10.00%</td>
			          <td>2,000.00</td>
			          <td class="width620">按月分期还款</td>
			          <td>78.00%</td>
			          <td><button type="button" class="btn btn-sm btn-danger">查看</button></td>
			        </tr>
			        <tr>
			          <th scope="row">张三</th>
			          <td class="width620">给我2000度过难关</td>
			          <td>10.00%</td>
			          <td>2,000.00</td>
			          <td class="width620">按月分期还款</td>
			          <td>78.00%</td>
			          <td><button type="button" class="btn btn-sm btn-danger">查看</button></td>
			        </tr>
			      </tbody>
			    </table>
			  </div>
			</div>
		</div>
		
		
		
		
		
		
		<!--资讯-->
		<div class="container" id="article">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12">
					<!--面板的结构-->
					<div class="panel panel-default">
					  <!--标题-->
					  <div class="panel-heading">
					  	<h1>企业最新资讯</h1>
					  	<p><a href="#">更多资讯</a></p>
					  </div>
					  <div class="panel-body">
					     <ul>
					     	<li><a href="#">我是隔壁的泰山</a> <span>发表日期：2018-08-04</span></li>
					     	<li><a href="#">我是隔壁的泰山</a> <span>发表日期：2018-08-04</span></li>
					     	<li><a href="#">我是隔壁的泰山</a> <span>发表日期：2018-08-04</span></li>
					     	<li><a href="#">我是隔壁的泰山</a> <span>发表日期：2018-08-04</span></li>
					     </ul>
					  </div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<!--面板的结构-->
					<div class="panel panel-default">
					  <!--标题-->
					  <div class="panel-heading">
					  	<h1>用户反馈</h1>
					  	<p><a href="#">更多资讯</a></p>
					  </div>
					  <div class="panel-body">
					     <ul>
					     	<li><a href="#">我是隔壁的泰山</a> <span>发表日期：2018-08-04</span></li>
					     	<li><a href="#">我是隔壁的泰山</a> <span>发表日期：2018-08-04</span></li>
					     	<li><a href="#">我是隔壁的泰山</a> <span>发表日期：2018-08-04</span></li>
					     	<li><a href="#">我是隔壁的泰山</a> <span>发表日期：2018-08-04</span></li>
					     </ul>
					  </div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<!--面板的结构-->
					<div class="panel panel-default">
					  <!--标题-->
					  <div class="panel-heading">
					  	<h1>理财经验</h1>
					  	<p><a href="#">更多资讯</a></p>
					  </div>
					  <div class="panel-body">
					     <ul>
					     	<li><a href="#">我是隔壁的泰山</a> <span>发表日期：2018-08-04</span></li>
					     	<li><a href="#">我是隔壁的泰山</a> <span>发表日期：2018-08-04</span></li>
					     	<li><a href="#">我是隔壁的泰山</a> <span>发表日期：2018-08-04</span></li>
					     	<li><a href="#">我是隔壁的泰山</a> <span>发表日期：2018-08-04</span></li>
					     </ul>
					  </div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<!--面板的结构-->
					<div class="panel panel-default">
					  <!--标题-->
					  <div class="panel-heading">
					  	<h1>活动分享</h1>
					  	<p><a href="#">更多资讯</a></p>
					  </div>
					  <div class="panel-body">
					     <ul>
					     	<li><a href="#">我是隔壁的泰山</a> <span>发表日期：2018-08-04</span></li>
					     	<li><a href="#">我是隔壁的泰山</a> <span>发表日期：2018-08-04</span></li>
					     	<li><a href="#">我是隔壁的泰山</a> <span>发表日期：2018-08-04</span></li>
					     	<li><a href="#">我是隔壁的泰山</a> <span>发表日期：2018-08-04</span></li>
					     </ul>
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