<?php /*%%SmartyHeaderCode:107125a740b4b467997-90878270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9c1608d45f20dd20a766ab90f5752eaba163218' => 
    array (
      0 => 'E:/wamp/www/Admin/View\\Index\\index.html',
      1 => 1517467661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107125a740b4b467997-90878270',
  'variables' => 
  array (
    'adminname' => 0,
    'agentnum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a740b4b5e02b',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a740b4b5e02b')) {function content_5a740b4b5e02b($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
            <a class="myindex_icon" href="/index.php/admin">我的概况</a>
        </li>
        <li>
            <a class="member_icon" href="/index.php/admin/Agent/getApplayAgentInfos">申请审核</a>
        </li>
        <li>
            <a class="earnings_icon" href="/index.php/admin/Income/incomeSet">收益配置</a>
        <li>
            <a class="mycenter_icon" href="/index.php/admin/cash/showWithdraw/?pass=0">提现审核</a>
        </li>
        <li>
            <a class="money_icon" href="/index.php/admin/Agent/getFormalAgentList">代理商管理</a>
        </li>
        <li >
            <a class="money_icon" href="/index.php/admin/Sheet/getDatas">财务报表</a>
        </li>
    </ul>
</div>
<!--右侧内容-->
<div class="main">
    <div class="main_top">
        <p>欢迎登录郡安云CDN代理商管理系统</p>
        <div class="mtop_right">
            <a href="" class="userinfo">
                <img src="http://localhost/Public/images/tx.jpg" alt=""/>
                <span></span>
            </a>
            <a class="mtop_link kf" href="javascript:void(0)">客服</a>
            <!--<a class="mtop_link" href="">消息</a>-->
            <a class="mtop_link" href="/index.php/admin/index/logout">登出</a>
        </div>
    </div>
    <!--我的概况-->
    <div class="myindex">
        <ul class="myindex_ul">
            <li>
                <span class="title">代理商数量</span>
                <span class="money"><font>4</font>位</span>
                <a href="/index.php/admin/Agent/getFormalAgentList" class="txbtn">管理</a>
            </li>
        </ul>
    </div>
</div>
</body>
<script src="http://localhost/Public/js/jquery-1.11.3.min.js"></script>
<script src="http://localhost/Public/layer/layer.js"></script>
<script src="http://localhost/Public/echarts.js"></script>
<script src="http://localhost/Public/js/common.js"></script>
<script src="http://localhost/Public/js/myindex.js"></script>
</html><?php }} ?>