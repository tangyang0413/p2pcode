<?php
	//引入公共连接数据库
	include_once("conn.php");
	
	//2. 构造sql语句
   $sqlStr="select * from userinfo";
   
   //执行sql语句返回的结果集
   $rs=mysqli_query($conn,$sqlStr);
   
   //4.二维数组本就是一个对象数组['博士', '硕士', '本科', '大专', '高中/中专','初中','小学']
   $eduDataJson=[
   		["name"=>"博士","value"=>0],
   		["name"=>"硕士","value"=>0],
   		["name"=>"本科","value"=>0],
   		["name"=>"大专","value"=>0],
   		["name"=>"高中/中专","value"=>0],
   		["name"=>"初中","value"=>0],
   		["name"=>"小学","value"=>0]
   ];
   
   //5.根据获取的结果处理返回json前端
   //mysqli_fetch_assoc(;返回结果集中的行的关联数组，没有则返回null)
   while ($row=mysqli_fetch_assoc($rs)) {
   		if($row["education"]=="博士"){
   			$eduDataJson[0]["value"]+=1;
   		}
		else if($row["education"]=="硕士"){
	   	  	$eduDataJson[1]["value"]+=1;
	   	}
		else if($row["education"]=="本科"){
	   	  	$eduDataJson[2]["value"]+=1;
	   	}
		else if($row["education"]=="大专"){
	   	  	$eduDataJson[3]["value"]+=1;
	   	}
		else if($row["education"]=="高中/中专"){
	   	  	$eduDataJson[4]["value"]+=1;
	   	}
		else if($row["education"]=="初中"){
	   	  	$eduDataJson[5]["value"]+=1;
	   	}
		else if($row["education"]=="小学"){
	   	  	$eduDataJson[6]["value"]+=1;
	   	}
   };
   
   //把二维数组转换为一个对象数组返回给前端
   echo json_encode($eduDataJson);
   
?>