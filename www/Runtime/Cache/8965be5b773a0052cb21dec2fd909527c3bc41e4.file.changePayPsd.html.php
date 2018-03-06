<?php /* Smarty version Smarty-3.1.6, created on 2018-02-08 14:20:37
         compiled from "E:/wamp/www/Home/View\Center\changePayPsd.html" */ ?>
<?php /*%%SmartyHeaderCode:273495a7bc4988772c5-90153385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8965be5b773a0052cb21dec2fd909527c3bc41e4' => 
    array (
      0 => 'E:/wamp/www/Home/View\\Center\\changePayPsd.html',
      1 => 1518070498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273495a7bc4988772c5-90153385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a7bc49898c88',
  'variables' => 
  array (
    'agentusername' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7bc49898c88')) {function content_5a7bc49898c88($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
            <a href="<?php echo @__MODULE__;?>
/center/tomycenter/" class="userinfo">
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
        <div class="change_top">
            <a href="">个人中心&gt;</a>
            <span>支付密码</span>
        </div>
        <div class="changepsd">
            <form class="user_form" method="post" action="__SELF__">
                <div class="form-group">
                    <label class="pwd_left control-label">请输入新密码：</label>
                    <div class="pwd_r">
                        <div class="hidden_control">
                            <input type="password" name="pwd1" class="form-control change_paypsd" value="">
                        </div>
                    </div>
                </div>
                <div class="pwdwarn">
                    <label class="pwd_left"></label>
                    <div class="warn">
                        <p>如何设置一个高强度密码：</p>
                        <p>同时使用大小写字符</p>
                        <!--<p>至少使用括一个符号 (# $ ! % & etc...)</p>-->
                        <p>不要用连续性文本</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="pwd_left">请确认新密码：</label>
                    <div class="pwd_r">
                        <div class="hidden_control">
                            <input type="password" name="pwd2" class="form-control change_paypsd1" value="">
                        </div>
                    </div>
                </div>
                <div class="form_submit">
                    <div class="btnmain">
                        <input class="subbtn paypsd" type="button" value="修&nbsp;改"/>
                        <a class="subbtn resetbtn" href="javascript:void(0)">重&nbsp;置</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<script src="<?php echo @JS_URL;?>
jquery-1.11.3.min.js"></script>
<script src="<?php echo @PUBLIC_URL;?>
layer/layer.js"></script>
<script src="<?php echo @JS_URL;?>
common.js"></script>
<script src="<?php echo @JS_URL;?>
change.js"></script>
</html><?php }} ?>