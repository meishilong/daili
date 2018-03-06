<?php /* Smarty version Smarty-3.1.6, created on 2018-02-08 10:15:30
         compiled from "E:/wamp/www/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:87905a6accf6436d65-27645377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55ea18ad5e6277f98ea13674c8aa9670c223028b' => 
    array (
      0 => 'E:/wamp/www/Home/View\\Index\\index.html',
      1 => 1518056126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87905a6accf6436d65-27645377',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a6accf666d47',
  'variables' => 
  array (
    'user' => 0,
    'yestodymoney' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6accf666d47')) {function content_5a6accf666d47($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <li class="checked">
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
            <a href="<?php echo @__MODULE__;?>
/center/tomycenter/" class="userinfo">
                <img src="<?php echo @IMG_URL;?>
/tx.jpg" alt=""/>
                <span><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</span>
            </a>
            <a class="mtop_link kf" href="javascript:void(0)">客服</a>
            <!--<a class="mtop_link" href="">消息</a>-->
            <a class="mtop_link" href="<?php echo @__CONTROLLER__;?>
/logout">登出</a>
        </div>
    </div>
    <!--我的概况-->
    <div class="myindex">
        <ul class="myindex_ul">
            <li>
                <span class="title">昨日收益</span>
                <span class="money">￥<font><?php echo $_smarty_tpl->tpl_vars['yestodymoney']->value;?>
</font></span>
            </li>
            <li>
                <span class="title">账户余额</span>
                <span class="money">￥<font><?php echo $_smarty_tpl->tpl_vars['user']->value['balance'];?>
</font></span>
                <a href="<?php echo @__MODULE__;?>
/cash/showWithdraw/" class="txbtn">我要提现</a>
            </li>
			 <li class="tg">
                <p class="tg_title">我的推广链接</p>
				
				<?php if ($_smarty_tpl->tpl_vars['user']->value['promolink']=="None"){?>
                 <form method='post' action="<?php echo @__MODULE__;?>
/expand/build" id="tg_form">
                     <div class="tg_lists">
                         <span class="tg_qq"></span>
                         <input type="text" name="qq" value="" placeholder="请输入qq号码" class="tg_qqmain">
                     </div>
                     <div class="tg_lists">
                         <span class="tg_tel"></span>
                         <input type='text' name="phone" value='' placeholder="请输入电话号码" class="tg_telmain">
                     </div>
                     <p class="tg_warn">请您输入真实有效的qq号及联系电话，以便系统自动生成专属于您的推广链接，从而为您的产品推广提供便利。</p>
                     <input type="hidden" name="promocode" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['promocode'];?>
">
                     <input class="tg_btn" type="button" value="生成"/>
				</form>
				<?php }else{ ?>
                <div class="tg_main">
                    <span></span>
                    <input id="foo" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['promolink'];?>
" />
                </div>
                <p class="tg_p">您可以直接复制当前页面的推广代码，将代码粘贴到QQ群、论坛、博客、微博等地方，或通过QQ、MSN和邮箱发给好友。</p>
                <button class="btn" data-clipboard-target="#foo" data-clipboard-action="copy">一键分享</button>
			 	<?php }?>
            </li>
        </ul>
        <div id="myindex" class="myindex_echarts">

        </div>
    </div>
</div>
</body>
<script src="<?php echo @JS_URL;?>
jquery-1.11.3.min.js"></script>
<script src="<?php echo @PUBLIC_URL;?>
layer/layer.js"></script>
<script src="<?php echo @PUBLIC_URL;?>
echarts.js"></script>
<script src="<?php echo @JS_URL;?>
clipboard.min.js"></script>
<script src="<?php echo @JS_URL;?>
common.js"></script>
<script src="<?php echo @JS_URL;?>
myindex.js"></script>
        
        
        <?php }} ?>