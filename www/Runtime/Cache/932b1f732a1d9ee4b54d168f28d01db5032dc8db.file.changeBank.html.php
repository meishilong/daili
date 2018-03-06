<?php /* Smarty version Smarty-3.1.6, created on 2018-02-09 10:44:24
         compiled from "E:/wamp/www/Home/View\Center\changeBank.html" */ ?>
<?php /*%%SmartyHeaderCode:199905a7cfee652f503-82059255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '932b1f732a1d9ee4b54d168f28d01db5032dc8db' => 
    array (
      0 => 'E:/wamp/www/Home/View\\Center\\changeBank.html',
      1 => 1518144141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199905a7cfee652f503-82059255',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a7cfee671f6f',
  'variables' => 
  array (
    'bankaccountnumber' => 0,
    'bank' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7cfee671f6f')) {function content_5a7cfee671f6f($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <li >
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
                <span>dwewer</span>
            </a>
            <a class="mtop_link kf" href="javascript:void(0)">客服</a>
            <!--<a class="mtop_link" href="">消息</a>-->
            <a class="mtop_link" href="">登出</a>
        </div>
    </div>
    <div class="myindex">
        <div class="change_top">
            <a href="">个人中心&gt;</a>
            <span>银行卡更改</span>
        </div>
        <div class="changepsd">
            <form class="user_form" method="post" action="__SELF__">
                <div class="form-group">
                    <label class="pwd_left control-label">现已绑定：</label>
                    <div class="pwd_r">
                        <div class="hidden_control">
                            <span class="bank_num"><?php echo $_smarty_tpl->tpl_vars['bankaccountnumber']->value;?>
</span>
                            <div class="bank_g"><?php echo $_smarty_tpl->tpl_vars['bank']->value;?>
</div>
                        </div>
                    </div>
                </div>
				<div class="form-group">
					
					<label class="pwd_left">银行名：</label>
					<select name="bank" class="pwd_r">
						<option value="中国银行">中国银行</option>
						<option value="华夏银行">华夏银行</option>
						<option value="中国建设银行">中国建设银行</option>
						<option value="中国工商银行">中国工商银行</option>
						<option value="中国农业银行">中国农业银行</option>
						
					</select>
				</div>
                <div class="form-group">
                    <label class="pwd_left">请输入新卡号：</label>
                    <div class="pwd_r">
                        <div class="hidden_control">
                            <input type="text" name="bankaccountnumber" class="form-control banknum" value="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="pwd_left">请输入银行开户名：</label>
                    <div class="pwd_r">
                        <div class="hidden_control">
                            <input type="text" name="accountbankname" class="form-control change_kh" value="">
                        </div>
                    </div>
                </div>
                <div class="form_submit">
                    <div class="btnmain">
                        <button class="subbtn">修&nbsp;改</button>
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