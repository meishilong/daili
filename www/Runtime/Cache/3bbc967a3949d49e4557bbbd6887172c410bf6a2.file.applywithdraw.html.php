<?php /* Smarty version Smarty-3.1.6, created on 2018-01-26 15:06:22
         compiled from "E:/wamp/www/Home/View\Cash\applywithdraw.html" */ ?>
<?php /*%%SmartyHeaderCode:7275a6accfb8144b1-74428174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bbc967a3949d49e4557bbbd6887172c410bf6a2' => 
    array (
      0 => 'E:/wamp/www/Home/View\\Cash\\applywithdraw.html',
      1 => 1516950381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7275a6accfb8144b1-74428174',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a6accfbaeae5',
  'variables' => 
  array (
    'username' => 0,
    'user' => 0,
    'historylist' => 0,
    'history' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6accfbaeae5')) {function content_5a6accfbaeae5($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\wamp\\www\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-CN">
<head>
    <title></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--表格插件-->
    <link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo @PUBLIC_URL;?>
YhhDataTable/css/jquery.paginate.css" />
    <link rel="stylesheet" href="<?php echo @PUBLIC_URL;?>
YhhDataTable/css/jquery.yhhDataTable.css" />
    <link href="<?php echo @CSS_URL;?>
common.css" rel="stylesheet">
    <link href="<?php echo @CSS_URL;?>
myindex.css" rel="stylesheet">
</head>
<body>
<!--左侧导航-->
<div class="nav">
    <img src="<?php echo @IMG_URL;?>
logo.png" alt=""/>
    <ul class="nav_ul">
        <li>
            <a class="myindex_icon" href="<?php echo @__MODULE__;?>
">我的概况</a>
        </li>
        <li>
            <a class="member_icon" href="<?php echo @__MODULE__;?>
/member/toMembers/">会员管理</a>
        </li>
        <li >
            <a class="earnings_icon" href="<?php echo @__MODULE__;?>
/income/promoteMoney/">推广收益</a>
        </li>
        <li class="checked">
            <a class="withdraw_icon" href="<?php echo @__MODULE__;?>
/cash/showWithdraw/">提现管理</a>
        </li>
        <li>
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
                <img src="<?php echo @IMG_URL;?>
tx.jpg" alt=""/>
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
        <ul class="withdraw_ul">
            <li class="withdraw_box">
                <form action="<?php echo @__self__;?>
"  method="post" >
                    <div class="wbox_left">
                        <div class="wbox_lmain">
                            <span>提现金额：</span>
                            <input type="text" name="withdrawmoney" class="txmoney"/>
                        </div>
                        <div class="wbox_lmain">
                            <span>支付密码：</span>
                            <input type="password" name="paypassword" class="moneypsd"/>
                        </div>
                    </div>
                    <div class="wbox_right">
                        <input type="button" value="提交"/>
                        <a href="javascript:void(0)">重置</a>
                    </div>
				<input type='hidden' name='username' value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" class="applyusername">
                <input type='hidden' name='userid' value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="applyuserid">	
                </form>
            </li>
            <li>
                <span class="title">可提现金额</span>
                <span class="money">￥<font><?php echo $_smarty_tpl->tpl_vars['user']->value['balance'];?>
</font></span>
            </li>
            <li>
                <span class="title">今日客户实时购买总金额</span>
                <span class="money">￥<font id="promocode"></font></span>
            </li>
            <li>
                <span class="title">历史已结算金额</span>
                <span class="money">￥<font><?php echo $_smarty_tpl->tpl_vars['user']->value['billed'];?>
</font></span>
            </li>
        </ul>

<table cellpadding="10" cellspacing="0" class="admin_table">
  <tr class="admin_title"> 
    <th>申请时间</th>
    <th>申请提现金额</th>
	<th>开户银行</th>
	<th>银行卡号</th>
	<th>开户名</th>	
    <th>状态</th>	
	<th>消息</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['history'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['history']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['historylist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['history']->key => $_smarty_tpl->tpl_vars['history']->value){
$_smarty_tpl->tpl_vars['history']->_loop = true;
?>
  <tr>
     <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['history']->value['applytime'],"%Y-%m-%d");?>
</td>
	 <td><?php echo $_smarty_tpl->tpl_vars['history']->value['withdrawmoney'];?>
元</td>
	 <td><?php echo $_smarty_tpl->tpl_vars['history']->value['bank'];?>
</td>
	 <td><?php echo $_smarty_tpl->tpl_vars['history']->value['bankaccountnumber'];?>
</td>
	 <td><?php echo $_smarty_tpl->tpl_vars['history']->value['accountbankname'];?>
</td>


	 <?php if ($_smarty_tpl->tpl_vars['history']->value['state']==0){?>
	   <td><font color='green'>申请中</font></td>
	   <td>无</td>
	 <?php }?>
	 <?php if ($_smarty_tpl->tpl_vars['history']->value['state']==1){?>
	   <td><font color='green'>已成功</font></td>
	   <td><font color='green'>申请提现成功，请留意银行卡收款</font></td>	   
	 <?php }?>
	 <?php if ($_smarty_tpl->tpl_vars['history']->value['state']==2){?>
	   <td><font color='red'>被驳回</font></td>
	   <td><font color='red'><?php echo $_smarty_tpl->tpl_vars['history']->value['message'];?>
</font></td>
	 <?php }?>	 
	 
  </tr>
  
  <?php } ?>
  
</table>	
<?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
	
    </div>
</div>
</body>
<script src="<?php echo @JS_URL;?>
jquery-1.11.3.min.js"></script>
<script>

$.ajaxSetup({   
            async : false  
        }); 
var promomoney = 0;
$.post("http://localhost/index.php/home/cash/getNowMoney","",function(data){
   promomoney = data;
});

$("#promocode").text(promomoney );

</script>
<script src="<?php echo @PUBLIC_URL;?>
layer/layer.js"></script>
<script src="<?php echo @JS_URL;?>
common.js"></script>
<script src="<?php echo @JS_URL;?>
withdraw.js"></script>
</html><?php }} ?>