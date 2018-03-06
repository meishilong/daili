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
  'variables' => 
  array (
    'username' => 0,
    'infos' => 0,
    'info' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a7124acc267e',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7124acc267e')) {function content_5a7124acc267e($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <li>
            <a class="myindex_icon" href="/index.php/home">我的概况</a>
        </li>
        <li >
            <a class="member_icon" href="/index.php/home/member/toMembers/">会员管理</a>
        </li>
        <li >
            <a class="earnings_icon" href="/index.php/home/income/promoteMoney/">推广收益</a>
        </li>
        <li>
            <a class="withdraw_icon" href="/index.php/home/cash/showWithdraw/">提现管理</a>
        </li>
        <li class="checked">
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

		<table cellpadding='10' cellspacing='0' class="admin_table">
		<tr>
		  <td>时间</td>
		  <td>项目</td>
		  <td>金额</td>
		  <td>套餐</td>
		  <td>状态</td>
		  <td>操作用户</td>
		</tr>

				<tr>
		  <td>2018-01-10 11:18</td>
		  <td>提现</td>
		  <td>0</td>
		  <td>-</td>
		  <td>0</td>
		  <td>meishilong</td>
		</tr>
				<tr>
		  <td>2018-01-12 10:15</td>
		  <td>提现</td>
		  <td>0</td>
		  <td>-</td>
		  <td>0</td>
		  <td>meishilong</td>
		</tr>
				<tr>
		  <td>2018-01-18 14:45</td>
		  <td>提现</td>
		  <td>0</td>
		  <td>-</td>
		  <td>0</td>
		  <td>meishilong</td>
		</tr>
				<tr>
		  <td>2018-01-18 14:49</td>
		  <td>提现</td>
		  <td>0</td>
		  <td>-</td>
		  <td>0</td>
		  <td>meishilong</td>
		</tr>
				<tr>
		  <td>2018-01-18 14:53</td>
		  <td>提现</td>
		  <td>0</td>
		  <td>-</td>
		  <td>0</td>
		  <td>meishilong</td>
		</tr>
				<tr>
		  <td>2018-01-19 14:46</td>
		  <td>提现</td>
		  <td>9</td>
		  <td>-</td>
		  <td>0</td>
		  <td>meishilong</td>
		</tr>
				<tr>
		  <td>2018-01-23 15:31</td>
		  <td>提现</td>
		  <td>1000</td>
		  <td>-</td>
		  <td>0</td>
		  <td>meishilong</td>
		</tr>
				<tr>
		  <td>2018-01-23 15:34</td>
		  <td>提现</td>
		  <td>1000</td>
		  <td>-</td>
		  <td>0</td>
		  <td>meishilong</td>
		</tr>
				<tr>
		   <td><a href="/index.php/home/sheet/exportSheet/">导出表格</a></td>
		</tr>
		</table>
    </div>
	&nbsp;&nbsp;共有<b>19</b>个记录&nbsp;&nbsp;&nbsp;&nbsp;每页显示<b>8</b>条，本页<b>1-8</b>条&nbsp;&nbsp;&nbsp;&nbsp;<b>1/3</b>页&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;<a href='/index.php/home/sheet/getDatas/?&page=2'>2</a>&nbsp;&nbsp;<a href='/index.php/home/sheet/getDatas/?&page=3'>3</a>&nbsp;&nbsp;&nbsp;<a href='/index.php/home/sheet/getDatas/?&page=2'>下一页</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='/index.php/home/sheet/getDatas/?&page=3'>尾 页</a>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" onkeydown="javascript:if(event.keyCode==13){var page=(this.value>3)?3:this.value;location='/index.php/home/sheet/getDatas/?&page='+page+''}" value="1" style="width:25px"><input type="button" value="GO" onclick="javascript:var page=(this.previousSibling.value>3)?3:this.previousSibling.value;location='/index.php/home/sheet/getDatas/?&page='+page+''">&nbsp;&nbsp;
</div>
</body>
<script src="http://localhost/Public/js/jquery-1.11.3.min.js"></script>
<script src="http://localhost/Public/layer/layer.js"></script>

<script src="http://localhost/Public/js/common.js"></script>
<script type="text/javascript" src="http://localhost/Public/js/member.js" ></script>
</html><?php }} ?>