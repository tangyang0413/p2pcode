<?php
	session_start();//开启session
	//判断session写入是否成功,判断登录的用户名是否存在session中
	if(isset($_SESSION["username"])){
		$result=["isSuccess"=>true,"msg"=>"登录成功！","username"=>$_SESSION["username"]];
		echo json_encode($result);
	}
	else{
		$result=["isSuccess"=>false,"msg"=>"登录失败！"];
		echo json_encode($result);
	}
?>