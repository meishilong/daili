$(document).ready(function(){
	$(".wbox_right input").click(function(){
		var txMoney = $(".txmoney").val();
		var moneypsd = $(".moneypsd").val();
		var applyusername = $(".applyusername").val();
		var applyuserid = $(".applyuserid").val();
		
		if(parseInt(txMoney)<50000){
			
			layer.alert("提现金额不得小于50000");
			
			return false;
		}
		
		 $.post("{$smarty.const.__self__}",{"withdrawmoney":txMoney,"paypassword":moneypsd,"username":applyusername,"userid":applyuserid}, function(data){
				 
				  var warnMsg = data;
				  layer.alert(warnMsg, function(index){history.go(0)});  

				  
			});
			
	});
	$(".wbox_right a").click(function(){
		
		  $(".txmoney").val("");  
		  $(".moneypsd").val("");
		  
		  return false;
	});
});