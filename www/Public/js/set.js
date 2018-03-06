$(function(){
		
	//收益配置
$(".config_xg").click(function(){
	var settingnum = $(this).parent().parent().children().children(".set_select").val();
	var id = $(this).parent().parent().children(".set_id").val();
	var setting = $(this).parent().parent().children().children(".setting").val();
	
		console.log(settingnum,id,setting);
	    $.post("{$smarty.const.__CONTROLLER__}/updateIncomeSet",{literal}{"settingnum":settingnum,"id":id,"setting":setting}{/literal},function(data){
     
		console.log(data);
		
		});
	
});
});