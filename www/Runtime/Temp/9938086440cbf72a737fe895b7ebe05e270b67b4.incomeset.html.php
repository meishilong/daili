<?php /*%%SmartyHeaderCode:263345a7411ea087b92-19931692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9938086440cbf72a737fe895b7ebe05e270b67b4' => 
    array (
      0 => 'E:/wamp/www/Admin/View\\Income\\incomeset.html',
      1 => 1517468609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '263345a7411ea087b92-19931692',
  'variables' => 
  array (
    'adminname' => 0,
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a7411ea2d59a',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7411ea2d59a')) {function content_5a7411ea2d59a($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-CN">
<head>
    <title></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://localhost/Public/css/common.css" rel="stylesheet">
    <link href="http://localhost/Public/css/login.css" rel="stylesheet">
    <link href="http://localhost/Public/css/myindex.css" rel="stylesheet">
</head>
<body>
<!--左侧导航-->
<div class="nav">
    <img src="http://localhost/Public/images/logo.png" alt=""/>
    <ul class="nav_ul">
        <li>
            <a class="myindex_icon" href="/index.php/admin">我的概况</a>
        </li>
        <li>
            <a class="member_icon" href="/index.php/admin/Agent/getApplayAgentInfos">申请审核</a>
        </li>
        <li class="checked">
            <a class="earnings_icon" href="/index.php/admin/Income/incomeSet">收益配置</a>
        <li>
            <a class="mycenter_icon" href="/index.php/admin/cash/showWithdraw/?pass=0">提现审核</a>
        </li>
        <li>
            <a class="money_icon" href="/index.php/admin/Agent/getFormalAgentList">代理商管理</a>
        </li>
        <li >
            <a class="money_icon" href="/index.php/admin/Sheet/getDatas">财务报表</a>
        </li>
    </ul>
</div>
<!--右侧内容-->
<div class="main">
    <div class="main_top">
        <p>欢迎登录郡安云CDN代理商管理系统</p>
        <div class="mtop_right">
            <a href="" class="userinfo">
                <img src="http://localhost/Public/images/tx.jpg" alt=""/>
                <span>admin</span>
            </a>
            <a class="mtop_link kf" href="javascript:void(0)">客服</a>
            <!--<a class="mtop_link" href="">消息</a>-->
            <a class="mtop_link" href="/index.php/admin/index/logout">登出</a>
        </div>
    </div>
    <!--我的概况-->
<center>
   <table class="admin_table" cellpadding='10' cellspacing='0'>
       <tr class="admin_title">
	      <th>套餐名称</th>
		  <th>当前设置</th>
		  <th>设置值</th>
		  <th>操作</th>
	   </tr>
    
	  
       	      
		  <tr>
		   <form action='/index.php/admin/income/updateIncomeSet' method='post'>
		    <td>套餐一</td>
						<td>
			   <select name='setting' class="set_select">
			    <option value='1'>百分比</option>
			    <option value='2'>固定金额</option>
			   </select>
			</td>  
						
			<td><input class="setting" type='text' name='settingnum' value="50"></td>		
			<input class="set_id" type='hidden' name='id' value='1'> 
			<!--<td><button type='submit'>修改</button></td>-->
			<td><a href="javascript:void(0)" class="admin_apply config_xg">修改</a></td>
			</form>	
		  </tr>

	   	      
		  <tr>
		   <form action='/index.php/admin/income/updateIncomeSet' method='post'>
		    <td>套餐二</td>
									<td>
			   <select name='setting' class="set_select">
			    <option value='2'>固定金额</option>
			    <option value='1'>百分比</option>
			   </select>
			</td>  
			
			<td><input class="setting" type='text' name='settingnum' value="888"></td>		
			<input class="set_id" type='hidden' name='id' value='2'> 
			<!--<td><button type='submit'>修改</button></td>-->
			<td><a href="javascript:void(0)" class="admin_apply config_xg">修改</a></td>
			</form>	
		  </tr>

	   	      
		  <tr>
		   <form action='/index.php/admin/income/updateIncomeSet' method='post'>
		    <td>套餐三</td>
						<td>
			   <select name='setting' class="set_select">
			    <option value='1'>百分比</option>
			    <option value='2'>固定金额</option>
			   </select>
			</td>  
						
			<td><input class="setting" type='text' name='settingnum' value="69"></td>		
			<input class="set_id" type='hidden' name='id' value='3'> 
			<!--<td><button type='submit'>修改</button></td>-->
			<td><a href="javascript:void(0)" class="admin_apply config_xg">修改</a></td>
			</form>	
		  </tr>

	   	      
		  <tr>
		   <form action='/index.php/admin/income/updateIncomeSet' method='post'>
		    <td>套餐四</td>
						<td>
			   <select name='setting' class="set_select">
			    <option value='1'>百分比</option>
			    <option value='2'>固定金额</option>
			   </select>
			</td>  
						
			<td><input class="setting" type='text' name='settingnum' value="36"></td>		
			<input class="set_id" type='hidden' name='id' value='4'> 
			<!--<td><button type='submit'>修改</button></td>-->
			<td><a href="javascript:void(0)" class="admin_apply config_xg">修改</a></td>
			</form>	
		  </tr>

	   	      
		  <tr>
		   <form action='/index.php/admin/income/updateIncomeSet' method='post'>
		    <td>套餐五</td>
									<td>
			   <select name='setting' class="set_select">
			    <option value='2'>固定金额</option>
			    <option value='1'>百分比</option>
			   </select>
			</td>  
			
			<td><input class="setting" type='text' name='settingnum' value="999"></td>		
			<input class="set_id" type='hidden' name='id' value='5'> 
			<!--<td><button type='submit'>修改</button></td>-->
			<td><a href="javascript:void(0)" class="admin_apply config_xg">修改</a></td>
			</form>	
		  </tr>

	   	      
		  <tr>
		   <form action='/index.php/admin/income/updateIncomeSet' method='post'>
		    <td>套餐六</td>
									<td>
			   <select name='setting' class="set_select">
			    <option value='2'>固定金额</option>
			    <option value='1'>百分比</option>
			   </select>
			</td>  
			
			<td><input class="setting" type='text' name='settingnum' value="600"></td>		
			<input class="set_id" type='hidden' name='id' value='6'> 
			<!--<td><button type='submit'>修改</button></td>-->
			<td><a href="javascript:void(0)" class="admin_apply config_xg">修改</a></td>
			</form>	
		  </tr>

	   	      
		  <tr>
		   <form action='/index.php/admin/income/updateIncomeSet' method='post'>
		    <td>套餐七</td>
									<td>
			   <select name='setting' class="set_select">
			    <option value='2'>固定金额</option>
			    <option value='1'>百分比</option>
			   </select>
			</td>  
			
			<td><input class="setting" type='text' name='settingnum' value="600"></td>		
			<input class="set_id" type='hidden' name='id' value='7'> 
			<!--<td><button type='submit'>修改</button></td>-->
			<td><a href="javascript:void(0)" class="admin_apply config_xg">修改</a></td>
			</form>	
		  </tr>

	   	      
		  <tr>
		   <form action='/index.php/admin/income/updateIncomeSet' method='post'>
		    <td>套餐八</td>
									<td>
			   <select name='setting' class="set_select">
			    <option value='2'>固定金额</option>
			    <option value='1'>百分比</option>
			   </select>
			</td>  
			
			<td><input class="setting" type='text' name='settingnum' value="999"></td>		
			<input class="set_id" type='hidden' name='id' value='8'> 
			<!--<td><button type='submit'>修改</button></td>-->
			<td><a href="javascript:void(0)" class="admin_apply config_xg">修改</a></td>
			</form>	
		  </tr>

	   	      
		  <tr>
		   <form action='/index.php/admin/income/updateIncomeSet' method='post'>
		    <td>DNS</td>
									<td>
			   <select name='setting' class="set_select">
			    <option value='2'>固定金额</option>
			    <option value='1'>百分比</option>
			   </select>
			</td>  
			
			<td><input class="setting" type='text' name='settingnum' value="100"></td>		
			<input class="set_id" type='hidden' name='id' value='9'> 
			<!--<td><button type='submit'>修改</button></td>-->
			<td><a href="javascript:void(0)" class="admin_apply config_xg">修改</a></td>
			</form>	
		  </tr>

	   	   
   </table>
   
</center>
</div>
</body>
<script src="http://localhost/Public/js/jquery-1.11.3.min.js"></script>
<script src="http://localhost/Public/layer/layer.js"></script>
<script src="http://localhost/Public/js/common.js"></script>
<script>
$(function(){
		
	//收益配置
$(".config_xg").click(function(){
	var  setting = $(this).parent().parent().children().children(".set_select").val();
	var id = $(this).parent().parent().children(".set_id").val();
	var settingnum = $(this).parent().parent().children().children(".setting").val();
	
		console.log(settingnum,id,setting);
	    $.post("/index.php/admin/income/updateIncomeSet",{"settingnum":settingnum,"id":id,"setting":setting},function(data){
			layer.alert(data,{
				yes:function(){
					
			location.reload() 
				}
			});
		});
	
});
});
</script>
</html><?php }} ?>