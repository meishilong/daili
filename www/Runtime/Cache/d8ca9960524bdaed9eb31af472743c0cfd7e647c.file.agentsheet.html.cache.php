<?php /* Smarty version Smarty-3.1.6, created on 2018-01-31 10:06:36
         compiled from "E:/wamp/www/Home/View\Sheet\agentsheet.html" */ ?>
<?php /*%%SmartyHeaderCode:42395a7124ac9ca936-76926972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8ca9960524bdaed9eb31af472743c0cfd7e647c' => 
    array (
      0 => 'E:/wamp/www/Home/View\\Sheet\\agentsheet.html',
      1 => 1516696736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42395a7124ac9ca936-76926972',
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
  'unifunc' => 'content_5a7124acc073e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7124acc073e')) {function content_5a7124acc073e($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\wamp\\www\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
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
        <li>
            <a class="myindex_icon" href="<?php echo @__MODULE__;?>
">我的概况</a>
        </li>
        <li >
            <a class="member_icon" href="<?php echo @__MODULE__;?>
/member/toMembers/">会员管理</a>
        </li>
        <li >
            <a class="earnings_icon" href="<?php echo @__MODULE__;?>
/income/promoteMoney/">推广收益</a>
        </li>
        <li>
            <a class="withdraw_icon" href="<?php echo @__MODULE__;?>
/cash/showWithdraw/">提现管理</a>
        </li>
        <li class="checked">
            <a class="money_icon" href="<?php echo @__MODULE__;?>
/sheet/getDatas/">财务报表</a>
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
		   <td><a href="<?php echo @__MODULE__;?>
/sheet/exportSheet/">导出表格</a></td>
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
</html><?php }} ?>