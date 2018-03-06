<?php /*%%SmartyHeaderCode:280975a7122df33b4a5-13987341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55ea18ad5e6277f98ea13674c8aa9670c223028b' => 
    array (
      0 => 'E:/wamp/www/Home/View\\Index\\index.html',
      1 => 1517448718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280975a7122df33b4a5-13987341',
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a73fea73cdc8',
  'variables' => 
  array (
    'user' => 0,
    'yestodymoney' => 0,
  ),
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73fea73cdc8')) {function content_5a73fea73cdc8($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <li class="checked">
            <a class="myindex_icon" href="/index.php/home">我的概况</a>
        </li>
        <li>
            <a class="member_icon" href="/index.php/home/member/toMembers/">会员管理</a>
        </li>
        <li >
            <a class="earnings_icon" href="/index.php/home/income/promoteMoney/">推广收益</a>
        </li>
        <li>
            <a class="withdraw_icon" href="/index.php/home/cash/showWithdraw/">提现管理</a>
        </li>
        <li>
            <a class="money_icon" href="/index.php/home/sheet/getDatas/">财务报表</a>
        </li>
    </ul>
</div>
<!--右侧内容-->
<div class="main">
    <div class="main_top">
        <p>欢迎登录郡安云CDN代理商管理系统</p>
        <div class="mtop_right">
            <a href="" class="userinfo">
                <img src="http://localhost/Public/images//tx.jpg" alt=""/>
                <span>meishilong</span>
            </a>
            <a class="mtop_link kf" href="javascript:void(0)">客服</a>
            <!--<a class="mtop_link" href="">消息</a>-->
            <a class="mtop_link" href="/index.php/home/index/logout">登出</a>
        </div>
    </div>
    <!--我的概况-->
    <div class="myindex">
        <ul class="myindex_ul">
            <li>
                <span class="title">昨日收益</span>
                <span class="money">￥<font>0</font></span>
            </li>
            <li>
                <span class="title">账户余额</span>
                <span class="money">￥<font>78916</font></span>
                <a href="/index.php/home/cash/showWithdraw/" class="txbtn">我要提现</a>
            </li>
			 <li class="tg">
                <p class="tg_title">我的推广链接</p>
				
				                <div class="tg_main">
                    <span></span>
                    <input id="foo" value="http://localhost/index.php/Home/expand/tohtml?promocode=user" />
                </div>
                <p class="tg_p">您可以直接复制当前页面的推广代码，将代码粘贴到QQ群、论坛、博客、微博等地方，或通过QQ、MSN和邮箱发给好友。</p>
                <button class="btn" data-clipboard-target="#foo" data-clipboard-action="copy">一键分享</button>
			 	            </li>
        </ul>
        <div id="myindex" class="myindex_echarts">

        </div>
    </div>
</div>
</body>
<script src="http://localhost/Public/js/jquery-1.11.3.min.js"></script>
<script src="http://localhost/Public/layer/layer.js"></script>
<script src="http://localhost/Public/echarts.js"></script>
<script src="http://localhost/Public/js/clipboard.min.js"></script>
<script src="http://localhost/Public/js/common.js"></script>
<script src="http://localhost/Public/js/myindex.js"></script>
        
        
        <?php }} ?>