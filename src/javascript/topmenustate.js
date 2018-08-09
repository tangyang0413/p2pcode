$(function(){
	$.get("api/checkstate.php",function(result){
		var htmlstr;
		var navhtml;
		if(result.isSuccess){
			htmlstr=`
				<li><a href="personal.php"><span class="fa fa-user"></span> ${result.username}</a></li>
				<li><a href="#"><span class="fa fa-money"></span> 赶快充值</a></li>
				<li><a href="api/loginout.php"><span class="fa fa-sign-out"></span> 注销</a></li>
			`;
			navhtml=`
				<li><a href="invest.php?mid=1">我要投资</a></li>
				<li><a href="borrowMoney.php?mid=2">我要借款</a></li>
				<li><a href="personal.php?mid=3">个人中心</a></li>
			`;
		}
		else{
			htmlstr=`
				<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> 登录</a></li>
				<li><a href="register.php"><span class="fa fa-user"></span>立即注册</a></li>
			`;
			navhtml=`
				<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> 登录</a></li>
				<li><a href="register.php"><span class="fa fa-user"></span> 立即注册</a></li>
			`;
		};
		//把菜单的结果插入到首页后面oo
		$("#homepage").after(htmlstr);
		$("#navpage").after(navhtml);
		//tangy
	},'json');
	
	
	//主导航栏的点击效果改变样式
	var herfstr=location.href;
	var mid=herfstr.split("=")[1];
	console.log(mid);
	//索引对应的li添加active激活样式，其他兄弟li移出active
	$("#main_Menu ul li").eq(mid).addClass("active").siblings("li").removeClass("active");
})