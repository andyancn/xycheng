$(function(){
	// 初始化
	$("#main_carousel .carousel_right .carousel_right_out ul li").first().show();
	$("#main_carousel .carousel_right .carousel_right_num ul li").first().addClass("active");

	//手动淡出淡入
	$("#main_carousel .carousel_right .carousel_right_num ul li").hover(function(){
		$(this).addClass("active").siblings("li").removeClass("active");
		var index=$(this).index();
		i=index;
		$("#main_carousel .carousel_right .carousel_right_out ul li").eq(index).fadeIn().siblings().fadeOut();
	},function(){});

	//自动淡出淡入
	var i=0;
	function move(){		
		i++;
		if(i==4){
			i=0;
		}
		$("#main_carousel .carousel_right .carousel_right_num ul li").eq(i).addClass("active").siblings().removeClass("active");
		$("#main_carousel .carousel_right .carousel_right_out ul li").eq(i).fadeIn().siblings().fadeOut();	
	};
	var t=setInterval(move,2000);

	//鼠标移入OUT元素的时候，停掉正在运行的动画
	$("#main_carousel .carousel_right .carousel_right_out").hover(function(){
		clearInterval(t);

	},
	function(){
		t=setInterval(move,2000);
	});

})
