<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>华尔街p2p金融借贷平台————账户信息</title>
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
</head>

<body>
	<!--页头-->
	<?php
			include_once("./header.html");	
		?>


	<!--模板内容开始-->
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
        			  <button type="button" class="btn btn-primary btn-xs" id="clickmenu">切换菜单</button>
        				
        				<h1>用户学历统计表</h1>
        				
					  	<!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    					<div id="echartsMain" style="height:400px;width: 100%;"></div>
					  	
					  	
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
<!--session验证登录验证状态-->
<script src="src/javascript/checklogin.js"></script>
<!--引入echarts文件-->
<script src="lib/echarts/echarts-all.js"></script>



<script type="text/javascript">
	 // 基于准备好的dom，初始化echarts图表
     var myChart = echarts.init(document.getElementById('echartsMain')); 
     
     
       //指定图表的配置项和数据
		var option = {
			//标题文字
			title: {
				text: '用户学历统计情况',
				subtext: '华尔街唐阳罗强阳俊峰p2p平台',
				x: 'center'
			},
			//工具提示
			tooltip: {
				trigger: 'item',
				formatter: "{a} <br/>{b} : {c} ({d}%)"
			},
			//数据的分类
			legend: {
				orient: 'vertical',
				x: 'left',
				data: ['博士', '硕士', '本科', '大专', '高中/中专','初中','小学']
			},
			//定制工具箱
			toolbox: {
				show: true, //是否显示工具箱
				feature: {
					mark: {
						show: false
					},
					dataView: {
						show: false,
						readOnly: false
					},
					magicType: {
						show: false,
						type: ['pie', 'funnel'],
						option: {
							funnel: {
								x: '25%',
								width: '50%',
								funnelAlign: 'left',
								max: 1548
							}
						}
					},
					restore: {
						show: false
					},
					saveAsImage: {
						show: true
					}
				}
			},
			//重新计算
			calculable: true,
			//数据系列
			series: [{
				name: '访问来源',
				type: 'pie', //图表类型
				radius: '55%', //半径
				center: ['50%', '60%'], //位置
				
				//具体数据
				data: []
			}]
		};
                
        // 为echarts对象加载数据 
        myChart.setOption(option);
        
        //发起get请求
        $.get("api/getUserEdu.php",function(edudata){
        	console.log("后台获取的学历数据",edudata);
        	//从后台拿到数据后渲染到具体数据data中
        	option.series[0].data=edudata;
        	// 为echarts对象加载数据 
        	myChart.setOption(option);
        	//隐藏默认的loading动画
            myChart.hideLoading();
        },"json");
</script>
</html>