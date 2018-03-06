<?php /* Smarty version Smarty-3.1.6, created on 2018-02-01 14:47:51
         compiled from "E:/wamp/www/Admin/View\Sheet\adminsheet.html" */ ?>
<?php /*%%SmartyHeaderCode:85225a72b8172b00c3-78142553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7b6e584904768d8ed4be39fa3240fcd15c87b84' => 
    array (
      0 => 'E:/wamp/www/Admin/View\\Sheet\\adminsheet.html',
      1 => 1517467646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85225a72b8172b00c3-78142553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'infos' => 0,
    'info' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a72b81751175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a72b81751175')) {function content_5a72b81751175($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\wamp\\www\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <li >
            <a class="myindex_icon" href="<?php echo @__MODULE__;?>
">我的概况</a>
        </li>
        <li>
            <a class="member_icon" href="<?php echo @__MODULE__;?>
/Agent/getApplayAgentInfos">申请审核</a>
        </li>
        <li>
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
        <li class="checked">
            <a class="money_icon" href="<?php echo @__MODULE__;?>
/Sheet/getDatas">财务报表</a>
        </li>
    </ul>
</div>
<div class="main">
    <div class="main_top">
        <p>欢迎登录郡安云CDN代理商管理系统</p>
        <div class="mtop_right">
            <a href="" class="userinfo">
                <img src="<?php echo @PUBLIC_URL;?>
images/tx.jpg" alt=""/>
                <span><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>
            </a>
            <a class="mtop_link kf" href="javascript:void(0)">客服</a>
            <!--<a class="mtop_link" href="">消息</a>-->
            <a class="mtop_link" href="<?php echo @__MODULE__;?>
/Index/logout">登出</a>
        </div>
    </div>
    <div class="myindex">

		<table cellpadding='10' cellspacing='0' class="admin_table">
		<tr>
		  <td>时间</td>
		  <td>项目</td>
		  <td>金额</td>
		  <td>套餐</td>
		  <td>状态</td>
		  <td>操作用户</td>
		</tr>

		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
		<tr>
		  <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['info']->value['time'],'%Y-%m-%d %H:%M');?>
</td>
		  <td><?php echo $_smarty_tpl->tpl_vars['info']->value['project'];?>
</td>
		  <td><?php echo $_smarty_tpl->tpl_vars['info']->value['money'];?>
</td>
		  <td><?php echo $_smarty_tpl->tpl_vars['info']->value['product'];?>
</td>
		  <td><?php echo $_smarty_tpl->tpl_vars['info']->value['state'];?>
</td>
		  <td><?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>
</td>
		</tr>
		<?php } ?>
		<tr>
		  <td>起时间:<input class="laydate-icon" id="demo" value=""> </td><td>止时间:<input class="laydate-icon" id="demo2" value=""> </td> <td><a onclick="tosheet()" href="#">导出表格</a></td>
		</tr>
		</table>
    </div>
	<?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

</div>
</body>
<script src="<?php echo @PUBLIC_URL;?>
js/jquery-1.11.3.min.js"></script>
<script src="<?php echo @PUBLIC_URL;?>
layer/layer.js"></script>
<script src="<?php echo @PUBLIC_URL;?>
js/common.js"></script>
<script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
js/member.js" ></script>
<script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
js/laydate.js"></script>
<script>

function tosheet(){
 var starttime =  $("#demo").val();
 var endtime =  $("#demo2").val();

 if(starttime==''||endtime==''){
 
    alert("请输入正确时间");
	
	return;
 }
 
 window.location.href="<?php echo @__MODULE__;?>
/sheet/exportSheet/?starttime="+starttime+"&endtime="+endtime;

}

</script>
<script type="text/javascript">
!function(){

	laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库

	laydate({elem: '#demo'});//绑定元素
	laydate({elem: '#demo2'});//绑定元素

}();

</script>
</html><?php }} ?>