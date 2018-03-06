<?php /* Smarty version Smarty-3.1.6, created on 2018-01-31 10:04:07
         compiled from "E:/wamp/www/Home/View\Member\getMembersList.html" */ ?>
<?php /*%%SmartyHeaderCode:227865a712417919269-09351581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '338149d088ec3a924001f0f07a20111ce6ca5bea' => 
    array (
      0 => 'E:/wamp/www/Home/View\\Member\\getMembersList.html',
      1 => 1516671024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227865a712417919269-09351581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a712417b1750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a712417b1750')) {function content_5a712417b1750($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <li class="checked">
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

        <table id="testtable">
            <thead><tr>
                <th width="20%">用户名</th>
                <th width="20%">邮箱</th>
                <th width="20%">手机号</th>
                <th width="20%">账户余额</th>
                <th width="10%">模式</th>
            </tr></thead>
            <tbody>

            </tbody>
        </table>
    </div>
	
</div>
</body>
<script src="<?php echo @PUBLIC_URL;?>
js/jquery-1.11.3.min.js"></script>
<script src="<?php echo @PUBLIC_URL;?>
layer/layer.js"></script>
<!--表格插件-->
<script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
YhhDataTable/js/jquery.paginate.js" ></script>
<script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
YhhDataTable/js/jquery.yhhDataTable.js" ></script>

<script src="<?php echo @PUBLIC_URL;?>
js/common.js"></script>
<script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
js/member.js" ></script>
</html><?php }} ?>