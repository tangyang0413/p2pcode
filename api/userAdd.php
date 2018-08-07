<?php
	//引入数据库连接的php
	include_once("./conn.php");
	
	//接收数据
	$username=$_POST["username"];
	$password=$_POST["password1"];
	$realname=$_POST["realname"];
	$mobile=$_POST["mobile"];
	$sex=$_POST["sex"];
	
	//构造sql语句
	$sqlStr="insert into userinfo(username,password,realname,mobile,sex) values('$username','$password','$realname','$mobile','$sex')";
	
	//执行sql语句
	$result=mysqli_query($conn, $sqlStr);
	
	//返回结果
	if($result){
		//成功唐阳
		//如果想直接返回json到前端，必须先定义关联数组，然后再使用json_encode(关联数组)
	   	  $jsonArray=["isSuccess"=>true,"msg"=>"用户注册成功!"];
		  echo json_encode($jsonArray);
	}
	else{
		//失败
		//如果想直接返回json到前端，必须先定义关联数组，然后再使用json_encode(关联数组)
	   	  $jsonArray=["isSuccess"=>false,"msg"=>"用户注册失败!"];
		  echo json_encode($jsonArray);
	}

?>