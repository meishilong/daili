<?php /* Smarty version Smarty-3.1.6, created on 2018-02-01 15:03:40
         compiled from "E:/wamp/www/Admin/View\Income\incomeset.html" */ ?>
<?php /*%%SmartyHeaderCode:151755a6af6c4062c70-17092215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '151755a6af6c4062c70-17092215',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a6af6c42b490',
  'variables' => 
  array (
    'adminname' => 0,
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6af6c42b490')) {function content_5a6af6c42b490($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-CN">
<head>
    <title></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo @CSS_URL;?>
common.css" rel="stylesheet">
    <link href="<?php echo @CSS_URL;?>
login.css" rel="stylesheet">
    <link href="<?php echo @CSS_URL;?>
myindex.css" rel="stylesheet">
</head>
<body>
<!--左侧导航-->
<div class="nav">
    <img src="<?php echo @PUBLIC_URL;?>
images/logo.png" alt=""/>
    <ul class="nav_ul">
        <li>
            <a class="myindex_icon" href="<?php echo @__MODULE__;?>
">我的概况</a>
        </li>
        <li>
            <a class="member_icon" href="<?php echo @__MODULE__;?>
/Agent/getApplayAgentInfos">申请审核</a>
        </li>
        <li class="checked">
            <a class="earnings_icon" href="<?php echo @__MODULE__;?>
/Income/incomeSet">收益配置</a>
        <li>
            <a class="mycenter_icon" href="<?php echo @__MODULE__;?>
/cash/showWithdraw/?pass=0">提现审核</a>
        </li>
        <li>
            <a class="money_icon" href="<?php echo @__MODULE__;?>
/Agent/getFormalAgentList">代理商管理</a>
        </li>
        <li >
            <a class="money_icon" href="<?php echo @__MODULE__;?>
/Sheet/getDatas">财务报表</a>
        </li>
    </ul>
</div>
<!--右侧内容-->
<div class="main">
    <div class="main_top">
        <p>欢迎登录郡安云CDN代理商管理系统</p>
        <div class="mtop_right">
            <a href="" class="userinfo">
                <img src="<?php echo @PUBLIC_URL;?>
images/tx.jpg" alt=""/>
                <span><?php echo $_smarty_tpl->tpl_vars['adminname']->value;?>
</span>
            </a>
            <a class="mtop_link kf" href="javascript:void(0)">客服</a>
            <!--<a class="mtop_link" href="">消息</a>-->
            <a class="mtop_link" href="<?php echo @__MODULE__;?>
/index/logout">登出</a>
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
    
	  
       <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
	      
		  <tr>
		   <form action='<?php echo @__CONTROLLER__;?>
/updateIncomeSet' method='post'>
		    <td><?php echo $_smarty_tpl->tpl_vars['info']->value['productname'];?>
</td>
			<?php if ($_smarty_tpl->tpl_vars['info']->value['setting']==1){?>
			<td>
			   <select name='setting' class="set_select">
			    <option value='1'>百分比</option>
			    <option value='2'>固定金额</option>
			   </select>
			</td>  
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['info']->value['setting']==2){?>
			<td>
			   <select name='setting' class="set_select">
			    <option value='2'>固定金额</option>
			    <option value='1'>百分比</option>
			   </select>
			</td>  
			<?php }?>

			<td><input class="setting" type='text' name='settingnum' value="<?php echo $_smarty_tpl->tpl_vars['info']->value['settingnum'];?>
"></td>		
			<input class="set_id" type='hidden' name='id' value='<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
'> 
			<!--<td><button type='submit'>修改</button></td>-->
			<td><a href="javascript:void(0)" class="admin_apply config_xg">修改</a></td>
			</form>	
		  </tr>

	   <?php } ?>
	   
   </table>
   
</center>
</div>
</body>
<script src="<?php echo @JS_URL;?>
jquery-1.11.3.min.js"></script>
<script src="<?php echo @PUBLIC_URL;?>
layer/layer.js"></script>
<script src="<?php echo @JS_URL;?>
common.js"></script>
<script>
$(function(){
		
	//收益配置
$(".config_xg").click(function(){
	var  setting = $(this).parent().parent().children().children(".set_select").val();
	var id = $(this).parent().parent().children(".set_id").val();
	var settingnum = $(this).parent().parent().children().children(".setting").val();
	
		console.log(settingnum,id,setting);
	    $.post("<?php echo @__CONTROLLER__;?>
/updateIncomeSet",{"settingnum":settingnum,"id":id,"setting":setting},function(data){
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