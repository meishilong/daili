$(function(){
	$(".form_warin").hide();
	$(".form_btn").click(function(){
		var username_input = $(".username_input").val();
		var password_input = $(".password_input").val();
		var yzm_input = $(".yzm_input").val();
		if(username_input==""){
			$(".username_input").parent().parent().children(".form_warin").show();
		}
		if(password_input==""){
			$(".password_input").parent().parent().children(".form_warin").show();
		}
		if(yzm_input==""){
			$(".yzm_input").parent().parent().children(".form_warin").show();
		}
		if(username_input!==""&&password_input!==""&&yzm_input!==""){
		    $.get("localhost/index.php/home/index/checklogin",{"username":username_input,"password":password_input
			,"verifycode":yzm_input},function(data){
				console.log(data);
				  if(data==2){
					  $(".yzm_input").parent().parent().children(".form_warin").show();
				  }
				   if(data==1){
					  $(".password_input").parent().parent().children(".form_warin").show();
				  }
				   if(data==0){
					  $(".username_input").parent().parent().children(".form_warin").show();
				  }

				    
				
			});
			//$("#login_form").submit();
		}
		
	});
});