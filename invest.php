
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>p2p金融借贷平台————投资</title>
		<!--视口: 兼容移动端-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<!--引入bootstarp样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css"/>
		<!--引入自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/invest.min.css"/>
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
		
		
		<!--模板内容的开始-->
	<div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>投资列表</h4>
                <div class="btn-group clearfix" role="group" aria-label="...">
                    <span calss="pull-left">标的状态</span>
                    <button type="button" class="btn btn-default active">全部</button>
                    <button type="button" class="btn btn-default">招标中</button>
                    <button type="button" class="btn btn-default">还款中</button>
                    
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>

                        <th>借款人</th>
                        <th class="hide620">借款标题</th>
                        <th>年利率</th>
                        <th>金额</th>
                        <th class="hide620">还款方式</th>
                        <th>进度</th>
                        <th class="t1">操作</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">张三</th>
                        <td class="hide620">给我2000度过难关</td>
                        <td>10.00%</td>
                        <td>2,000.00</td>
                        <td class="hide620">按月分期还款</td>
                        <td>78.00%</td>
                        <td class="t1">
                            <button type="button" class="btn btn-sm btn-danger">查看</button>
                        </td>
                    </tr>
                </tbody>
            </table>
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