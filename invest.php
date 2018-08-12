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
	<!--<link rel="stylesheet" type="text/css" href="dist/css/min/realAuth.min.css" />-->
	<link rel="stylesheet" type="text/css" href="dist/css/min/personal.min.css">
	<!--引入图标字体-->
	<link rel="stylesheet" type="text/css" href="lib/font-awesome/css/font-awesome.min.css" />
	<!--兼容低版本的浏览器-->
	<!--[if lt IE 9]>
	      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	<!--引入分页插件核心样式-->
	<link rel="stylesheet" type="text/css" href="lib/JqueryPagination/jquery.pagination.css"/>
</head>

<body>
	<!--页头-->
	<?php
			include_once("./header.html");	
		?>


	<!--投资列表内容开始-->
	<div class="container">
        	<h1 class="page-title">投资列表</h1>
			<form action="invest_list.html" id="searchForm">
				<div style="margin: 20px 0px;">
					<span class="text-muted">标的状态</span>
				    <div style="margin-left: 30px" class="btn-group" data-toggle="buttons">
					  <label class="btn btn-default active">
					    <input type="radio" name="bidRequestState" value="-1" autocomplete="off" checked />&emsp;全部&emsp;
					  </label>
					  <label class="btn btn-default">
					    <input type="radio" name="bidRequestState" value="2" autocomplete="off" />&emsp;招标中&emsp;
					  </label>
					  <label class="btn btn-default">
					    <input type="radio" name="bidRequestState" value="8" autocomplete="off" />&emsp;还款中&emsp;
					  </label>
					</div>
				</div>
			</form>
			<table class="table el-table table-hover">
				<thead id="gridHead">
					<tr>
						<th>借款人</th>
						<th width="180px">借款标题</th>
						<th>年利率</th>
						<th>金额</th>
						<th>还款方式</th>
						<th>进度</th>
						<th width="80px">操作</th>
					</tr>
				</thead>
				<!--模板渲染要用到的盒子-->
				<tbody id="gridBody">
				
				</tbody>
			</table>
			<!--分页插件dom-->
			<div style="text-align: center;">
		        <div id="page" class="m-pagination"></div>
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
<!--session验证登录验证状态-->
<script src="src/javascript/checklogin.js"></script>
<!--引入jquery模版引擎-->
<script src="lib/jqueryTemplate/jquery.tmpl.js" type="text/javascript" charset="utf-8"></script>
<!--引入分页插件核心样式-->
<script src="lib/JqueryPagination/jquery.pagination-1.2.7.js" type="text/javascript" charset="utf-8"></script>
<!--定义模板引擎-->
<script id="investTmpl" type="text/html">
	<tr>
		<th>${userid}</th>
		<th>${borrowTitle}</th>
		<td class="text-info">${currentRate}%</td>
		<td class="text-info">${borrowAmount}</td>
		<td>${repayment}</td>
		<td>${(alreadyAmount/borrowAmount*100).toFixed(2)}%</td>
		<td><a class="btn btn-danger btn-sm" href="borrow_info.html?id=${borrowid}">查看</a></td>
	</tr>
</script>
<!--分页插件js-->
<script type="text/javascript">
	//分页插件的参数配置
    	$("#page").page({
            debug: false,
            showInfo: true,
            showJump: true,
            pageSize: 2, //自定义每页条数
            showPageSizes: true,
            //远程请求的地址配置
            remote: {
                url: 'api/investpager.php',
                success: function (data) {
                    //console.log(data);
                    //console.log("返回的数据，对象数组",data.list);
                    
                    //语法：$(模版选择器).tmpl(数据对象获取数组)
		    		var htmlStr=$("#investTmpl").tmpl(data.list);
		    		
		    		//把html更新到页面的dom盒子中
		    		$("#gridBody").html(htmlStr);
                }
            }
        });

        
        $("#page").on("pageClicked", function (event, pageIndex) {
            //单击页面的事件
            //$("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
        }).on('jumpClicked', function (event, pageIndex) {
            //跳转页面的事件
            //$("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
        }).on('pageSizeChanged', function (event, pageSize) {
            //修改每页大小的事件
            //$("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
        });
	
	
	
</script>
</html>