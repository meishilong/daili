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
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a73fede3c3fe',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73fede3c3fe')) {function content_5a73fede3c3fe($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-CN">
<head>
    <title></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--表格插件-->
    <link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/Public/YhhDataTable/css/jquery.paginate.css" />
    <link rel="stylesheet" href="http://localhost/Public/YhhDataTable/css/jquery.yhhDataTable.css" />
	

    <link href="http://localhost/Public/css/common.css" rel="stylesheet">
    <link href="http://localhost/Public/css/login.css" rel="stylesheet">
    <link href="http://localhost/Public/css/myindex.css" rel="stylesheet">
</head>
<body>
<!--左侧导航-->
<div class="nav">
    <img src="http://localhost/Public/images/logo.png" alt=""/>
    <ul class="nav_ul">
        <li>
            <a class="myindex_icon" href="/index.php/home">我的概况</a>
        </li>
        <li class="checked">
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
                <img src="http://localhost/Public/images/tx.jpg" alt=""/>
                <span>meishilong</span>
            </a>
            <a class="mtop_link kf" href="javascript:void(0)">客服</a>
            <!--<a class="mtop_link" href="">消息</a>-->
            <a class="mtop_link" href="/index.php/home/Index/logout">登出</a>
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
<script src="http://localhost/Public/js/jquery-1.11.3.min.js"></script>
<script src="http://localhost/Public/layer/layer.js"></script>
<!--表格插件-->
<script type="text/javascript" src="http://localhost/Public/YhhDataTable/js/jquery.paginate.js" ></script>
<script type="text/javascript" src="http://localhost/Public/YhhDataTable/js/jquery.yhhDataTable.js" ></script>

<script src="http://localhost/Public/js/common.js"></script>
<script type="text/javascript" src="http://localhost/Public/js/member.js" ></script>
</html><?php }} ?>