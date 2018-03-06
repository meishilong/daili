<?php /* Smarty version Smarty-3.1.6, created on 2018-02-09 09:52:36
         compiled from "E:/wamp/www/Home/View\Center\mycenter.html" */ ?>
<?php /*%%SmartyHeaderCode:148385a7bb36fd00b92-33703171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '567344a95a56f9e34c1f3827ac1f5c7adcdddf28' => 
    array (
      0 => 'E:/wamp/www/Home/View\\Center\\mycenter.html',
      1 => 1518141153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148385a7bb36fd00b92-33703171',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a7bb36fdd794',
  'variables' => 
  array (
    'agentusername' => 0,
    'emain' => 0,
    'phone' => 0,
    'applytime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7bb36fdd794')) {function content_5a7bb36fdd794($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\wamp\\www\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
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
myindex.css" rel="stylesheet">
</head>
<body>
<!--左侧导航-->
<div class="nav">
    <img src="<?php echo @IMG_URL;?>
logo.png" alt=""/>
    <ul class="nav_ul">
        <li>
            <a class="myindex_icon" href="myindex.html">我的概况</a>
        </li>
        <li>
            <a class="member_icon" href="myindex.html">会员管理</a>
        </li>
        <li>
            <a class="earnings_icon" href="myindex.html">推广收益</a>
        </li>
        <li>
            <a class="withdraw_icon" href="myindex.html">提现管理</a>
        </li>
        <li>
            <a class="money_icon" href="myindex.html">财务报表</a>
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
                <span><?php echo $_smarty_tpl->tpl_vars['agentusername']->value;?>
</span>
            </a>
            <a class="mtop_link kf" href="javascript:void(0)">客服</a>
            <!--<a class="mtop_link" href="">消息</a>-->
            <a class="mtop_link" href="">登出</a>
        </div>
    </div>
    <div class="myindex">
        <div class="mycenter_top">
            <img src="<?php echo @IMG_URL;?>
tx.jpg" alt=""/>
            <div class="mycenter_info">
                <div class="mycenter_username">
                    <p><?php echo $_smarty_tpl->tpl_vars['agentusername']->value;?>
</p>
                    <span></span>
                </div>
                <span class="mycenter_kind">普通用户</span>
            </div>
            <ul class="mycenter_ul">
               <li>邮箱账号：<?php echo $_smarty_tpl->tpl_vars['emain']->value;?>
</li>
               <li>电话号码：<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</li>
			   <li>申请时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['applytime']->value,'%Y-%m-%d');?>
</li>
               
            </ul>
        </div>
        <div class="mycenter">
            <ul class="mycenter_done">
                <li>
                    <span>支付密码</span>
                    <p>安全性高的密码能使您的账号更加安全。建议您定期更换新的密码，设置一个包含字母，符号或数字至少两项长度超过6位的密码。</p>
                    <a href="<?php echo @__MODULE__;?>
/center/topaypassword/" target="_blank">修改</a>
                </li>
                <li>
                    <span>登陆密码</span>
                    <p>安全性高的密码能使您的账号更加安全。建议您定期更换新的密码，设置一个包含字母，符号或数字至少两项长度超过6位的密码。</p>
                    <a href="<?php echo @__MODULE__;?>
/center/tologinpassword/" target="_blank">修改</a>
                </li>
                <li>
                    <span class="mycenter_tel">手机绑定</span>
                    <p>您已绑定123****7596号码。绑定后，可找回密码、接收动态验证码与重要提醒信息。</p>
                    <a href="<?php echo @__MODULE__;?>
/center/tophone/" target="_blank">修改</a>
                </li>
                <li>
                    <span class="mycenter_email">邮箱绑定</span>
                    <p>您已绑定123456879@qq.com邮箱。绑定后，可找回密码、接受重要提醒信息。</p>
                    <a href="<?php echo @__MODULE__;?>
/center/tomail/" target="_blank">修改</a>
                </li>
                <li>
                    <span class="mycenter_bank">银行卡绑定</span>
                    <p>您已绑定123456879@qq.com银行卡号。绑定后，可直接提现至该卡。</p>
                    <a href="<?php echo @__MODULE__;?>
/center/tobanknum/" target="_blank">修改</a>
                </li>
            </ul>
        </div>
    </div>
</div>
</body>
<script src="<?php echo @PUBLIC_URL;?>
js/jquery-1.11.3.min.js"></script>
<script src="<?php echo @PUBLIC_URL;?>
layer/layer.js"></script>
<script src="<?php echo @PUBLIC_URL;?>
js/common.js"></script>
</html><?php }} ?>