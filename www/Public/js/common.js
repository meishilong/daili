$(function(){
    //根据浏览器宽度设置右侧内容宽度
	window.onresize = function(){
	//大布局自动适应宽度
		console.log(11);
		resize();
	};
	resize();
	function resize(){
		
		$(".main").attr('style','width:'+($(window).width()-240)+'px;');
		$(window).resize(function(){
			$('.main').attr('style','width:'+($(document.body).outerWidth(true)-240)+'px;');
			$(".main").show();
		});

		console.log(22);
		$(".main").show();
		//客服电话
		$(".kf").hover(function(){
			layer.tips('客服电话:400-606-6677', '.kf', {
				tips: 3
			});
		});
	}
   


    //密码显示隐藏切换
    $(".admin_eyes").click(function(){
        if($(this).attr("state") == "off"){
            $(this).parent().children("input").attr("type","password");
            $(this).attr("state","on");
            $(this).addClass("close_eye");
        }else{

            $(this).parent().children("input").attr("type","text");
            $(this).attr("state","off");
            $(this).removeClass("close_eye");
        }
    });
});