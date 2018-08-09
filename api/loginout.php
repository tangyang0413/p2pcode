<?php
	//响应头
	header("Content-Type:text/html;charset=utf-8");
	//开启session
	session_start();
	session_destroy();
	echo "<script>alert('退出成功！ 欢迎下次再来! '); location.href='/';</script>";
?>