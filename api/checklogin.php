<?php
	//引入数据库连接的php
	include_once("./conn.php");
	
	//接收数据
	$username=$_POST["username"];
	$password=$_POST["password1"];
	
	//构造sql语句
	$sqlStr="select * from userinfo where username='$username' and password='$password'";
	
	//执行sql语句
	$rs=mysqli_query($conn, $sqlStr);
	//5. 根据执行的结果返回json到前端
	$row=mysqli_fetch_assoc($rs);
	//返回结果
	if($row){
		//成功唐阳
		//如果想直接返回json到前端，必须先定义关联数组，然后再使用json_encode(关联数组)
	   	  $jsonArray=["isSuccess"=>true,"msg"=>"用户登陆成功!"];
		  echo json_encode($jsonArray);
		  
		  //登录成功后写入session
		  session_start();
		  $_SESSION["username"]=$row["username"];
		  $_SESSION["userid"]=$row["userid"];
	}
	else{
		//失败
		//如果想直接返回json到前端，必须先定义关联数组，然后再使用json_encode(关联数组)
	   	  $jsonArray=["isSuccess"=>false,"msg"=>"用户登陆失败!"];
		  echo json_encode($jsonArray);
	}

?>