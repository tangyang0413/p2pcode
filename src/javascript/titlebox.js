$(function () {
		  $('#article').tooltip();
		  
		  
		  $("#clickmenu").on("click",function(){
		  	$("#mainContent").toggleClass("active");
		  });
		  
		  
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