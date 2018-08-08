$(function(){
	$.get("api/checkstate.php",function(result){
		console.log("登陆的结果",result);
		//成功tangyang
		if(result.isSuccess){
			
		}else{
			location.href="login.php";
		}
	},'json')
})
