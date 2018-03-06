<?php /*%%SmartyHeaderCode:67335a712403cd4743-41266824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '148653b37bce510e43f7a0d6fa0393d48218294b' => 
    array (
      0 => 'E:/wamp/www/Home/View\\Income\\promotmoney.html',
      1 => 1517449307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67335a712403cd4743-41266824',
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a74057398b39',
  'variables' => 
  array (
    'username' => 0,
    'totalmoney' => 0,
    'infos' => 0,
    'info' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a74057398b39')) {function content_5a74057398b39($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <li>
            <a class="member_icon" href="/index.php/home/member/toMembers/">会员管理</a>
        </li>
        <li  class="checked">
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
        <ul class="withdraw_ul">
            <li class="withdraw_box">
                <form action="">
                    <div class="wbox_left">
                        <div class="wbox_lmain">
                            <span>套餐类型：</span>
                            <select>
                                <option>请选择</option>
                               
                            </select>
                        </div>
                        <div class="wbox_lmain">
                            <span>收益日期：</span>
                            <input type="text"/>
                        </div>
                    </div>
                    <div class="wbox_right">
                        <input type="button" value="查询"/>
                        <a href="javascript:void(0)">清空条件</a>
                    </div>
                </form>
            </li>
            <li>
                <span class="title">历史收益<em>截止至今日0点</em></span>
                <span class="money">￥<font>133116.8</font></span>
            </li>
        </ul>
        <table id="withdraw_table" class="admin_table">
            <tr class="admin_title">
                <th width="35%">时间</th>
                <th width="35%">套餐类型</th>
                <th width="30%">收益</th>
            </tr>
            
				  <tr>
			<td>2018-01-26</td>
						<td>普通套餐</td>
					   <td>256</td>
		  </tr>
				  <tr>
			<td>2018-01-26</td>
					    <td>高级套餐</td>
		    		   <td>888</td>
		  </tr>
				  <tr>
			<td>2018-01-26</td>
					    <td>高级套餐</td>
		    		   <td>23976</td>
		  </tr>
				  <tr>
			<td>2018-01-26</td>
						<td>钻石套餐</td>
					   <td>1540.8</td>
		  </tr>
				  <tr>
			<td>2018-01-26</td>
			            <td>自定义DNS套餐</td>
		    		   <td>300</td>
		  </tr>
				  <tr>
			<td>2018-01-26</td>
						<td>VIP套餐</td>
					   <td>4526.4</td>
		  </tr>
				  <tr>
			<td>2018-01-26</td>
						<td>普通套餐</td>
					   <td>1792</td>
		  </tr>
				  <tr>
			<td>2018-01-26</td>
						<td>普通套餐</td>
					   <td>256</td>
		  </tr>
		        </table>
		&nbsp;&nbsp;共有<b>14</b>个记录&nbsp;&nbsp;&nbsp;&nbsp;每页显示<b>8</b>条，本页<b>1-8</b>条&nbsp;&nbsp;&nbsp;&nbsp;<b>1/2</b>页&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;<a href='/index.php/home/income/promoteMoney/?&page=2'>2</a>&nbsp;&nbsp;&nbsp;<a href='/index.php/home/income/promoteMoney/?&page=2'>下一页</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='/index.php/home/income/promoteMoney/?&page=2'>尾 页</a>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" onkeydown="javascript:if(event.keyCode==13){var page=(this.value>2)?2:this.value;location='/index.php/home/income/promoteMoney/?&page='+page+''}" value="1" style="width:25px"><input type="button" value="GO" onclick="javascript:var page=(this.previousSibling.value>2)?2:this.previousSibling.value;location='/index.php/home/income/promoteMoney/?&page='+page+''">&nbsp;&nbsp;
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