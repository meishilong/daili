<?php /*%%SmartyHeaderCode:207855a740b4ce22b81-85379433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '109a95aebdfeb779061d230f9aa4dfd3ce1614fb' => 
    array (
      0 => 'E:/wamp/www/Admin/View\\Agent\\getFormalAgentsList.html',
      1 => 1517468577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207855a740b4ce22b81-85379433',
  'variables' => 
  array (
    'adminname' => 0,
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a740b4d16da0',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a740b4d16da0')) {function content_5a740b4d16da0($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <li >
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
        <li class="checked">
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
                <span>admin</span>
            </a>
            <a class="mtop_link kf" href="javascript:void(0)">客服</a>
            <!--<a class="mtop_link" href="">消息</a>-->
            <a class="mtop_link" href="/index.php/admin/index/logout">登出</a>
        </div>
    </div>
    <!--我的概况-->
    <div class="myindex">
        <div class="tables">
            <table class="admin_table">
                <tr class="admin_title">
				   <th>用户名</th>
				   <th>总收入</th>
				   <th>已结帐</th>
				   <th>可结算</th>
				   <th>密码</th>
				   <th>支付密码</th>
				   <th>冻结/解冻</th>
				   <th>推广码</th>
				   <th>成为代理时间</th>
				   <th>下级用户数据</th>
                </tr>
				  				<tr>
				   <td>meishilong</td>
				   <td>133116.8</td>   
				   <td>26000</td>
				   <td>78916</td>   
				   <td>123456</td>
					<td>msl123456</td>
				   <td>冻结/解冻</td>
				   <td>user</td>
				   <td>2017-12-19 10:02</td>
				   <td><a href='/index.php/admin/agent/getFormalAgentUser/?promocode=user'>详情</a></td>
				</tr>
				  
				  				<tr>
				   <td>hello</td>
				   <td>139713.6</td>   
				   <td>0</td>
				   <td>139713.6</td>   
				   <td>123456</td>
					<td>123456</td>
				   <td>冻结/解冻</td>
				   <td>65658026</td>
				   <td>2018-01-08 11:36</td>
				   <td><a href='/index.php/admin/agent/getFormalAgentUser/?promocode=65658026'>详情</a></td>
				</tr>
				  
				  				<tr>
				   <td>kkai</td>
				   <td>0</td>   
				   <td>0</td>
				   <td>0</td>   
				   <td>222222</td>
					<td>252525</td>
				   <td>冻结/解冻</td>
				   <td>85855326</td>
				   <td>2018-01-23 11:33</td>
				   <td><a href='/index.php/admin/agent/getFormalAgentUser/?promocode=85855326'>详情</a></td>
				</tr>
				  
				  				<tr>
				   <td>python</td>
				   <td>0</td>   
				   <td>0</td>
				   <td>0</td>   
				   <td>123456</td>
					<td>232323</td>
				   <td>冻结/解冻</td>
				   <td>26505589</td>
				   <td>2018-01-31 13:50</td>
				   <td><a href='/index.php/admin/agent/getFormalAgentUser/?promocode=26505589'>详情</a></td>
				</tr>
				  
				              </table>
        </div>

        <div class="page">

        </div>

    </div>
</div>
</body>
<script src="http://localhost/Public/js/jquery-1.11.3.min.js"></script>
<script src="http://localhost/Public/layer/layer.js"></script>
<script src="http://localhost/Public/js/common.js"></script>
</html><?php }} ?>