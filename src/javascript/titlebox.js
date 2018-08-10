$(function () {
		  $('#article').tooltip();
		  
		  
		  $("#clickmenu").on("click",function(){
		  	$("#mainContent").toggleClass("active");
		  });
		  
		  /*
		   2. html5的触屏事件
				   1) 事件类型
				   touchstart：触摸开始的时候触发
				   touchmove：手指在屏幕上滑动的时候触发
				   touchend：触摸结束的时候触发 
				   
				   2) 如何确定手指滑动的距离
				        使用event事件源对象，changedTouches数组列表，第0个元素里面就包含了客户端的位置信息
				    clientX: 37 横坐标
				    clientY:88  纵坐标
					pageX:37
					pageY:88 
		   * */
		  //获取横向滑动距离
		  var startX;
		  //触摸开始
		  $("body").on("touchstart",function(e){
		  	startX=e.originalEvent.changedTouches[0].clientX;
		  	 //console.log(startX);
		  });
		  //触摸结束事件
		  $("body").on("touchend",function(e){
		  	var endX=e.originalEvent.changedTouches[0].clientX;
		  	
		  	//滑动距离判断
		  	var distance=endX-startX;
		  	if(distance>=50){
		  		$("#mainContent").removeClass("active");
		  	}else if(distance<=50){
		  		$("#mainContent").addClass("active");
		  	}
		  });
		  
})