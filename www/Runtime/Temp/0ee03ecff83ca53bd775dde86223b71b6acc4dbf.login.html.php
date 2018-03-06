<?php /*%%SmartyHeaderCode:137965a7122aa93f713-15653829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ee03ecff83ca53bd775dde86223b71b6acc4dbf' => 
    array (
      0 => 'E:/wamp/www/Home/View\\Index\\login.html',
      1 => 1516948168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137965a7122aa93f713-15653829',
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a74118437e3a',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a74118437e3a')) {function content_5a74118437e3a($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-CN">
<head>
    <title></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://localhost/Public/css/common.css" rel="stylesheet">
    <link href="http://localhost/Public/css/login.css" rel="stylesheet">
</head>
<body>
<div class="login">
    <img class="login_img" src="http://localhost/Public/images//login/login_bk.png" alt=""/>
    <div class="main">
        <h1>郡安云CDN代理商管理系统</h1>
        <form action="/index.php/home/index" id="login_form">
            <div class="form_list">
                <div class="form_input">
                    <span class="username"></span>
                    <input class="username_input" type="name"  name="username" placeholder="请输入用户名" />
                </div>
                <!--隐藏提示框-->
                <div class="form_warin">用户名错误</div>
            </div>
            <div class="form_list">
                <div class="form_input">
                    <span class="password"></span>
                    <input type="password" class="password_input" name="password" placeholder="请输入密码"/>
                </div>
                <!--隐藏提示框-->
                <div class="form_warin">密码错误</div>
            </div>
            <div class="form_list">
                <div class="form_input w220">
                    <span class="yzm"></span>
                    <input class="yzm_input" name="verifycode" placeholder="请输入验证码"/>
                </div>
                <div class="yzm_pic" onclick="getPic();"><img  id="codePic" src="/index.php/home/index/Verify" ></div>
                <!--验证码-->
                <div></div>
                <!--隐藏提示框-->
                <div class="form_warin">验证码错误</div>
            </div>
            <input class="form_btn" type="button" value="登&nbsp;录"/>
            <div class="login_done">
                <a href="http://localhost/index.php/admin/agent/applyAgent">申请为代理商</a>
                <span>忘记密码请联系客服</span>
            </div>
        </form>
    </div>
</div>
</body>
<script src="http://localhost/Public/js/jquery-1.11.3.min.js"></script>

<script>

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
		    $.post("/index.php/home/index/checklogin",{"username":username_input,"password":password_input
			,"verifycode":yzm_input} , function(data){
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
				   if(data==3){
					  window.location.href="http://localhost/index.php/Home/Index/index"; 
				  }

				    
				
			});
			//$("#login_form").submit();
		}
		
	});
});

</script>
<script type="text/javascript">  
     //刷新验证码
     function getPic(){   
           $("#codePic").attr("src","/index.php/home/index/Verify?flag="+Math.random());   
      };  
</script> 
</html><?php }} ?>