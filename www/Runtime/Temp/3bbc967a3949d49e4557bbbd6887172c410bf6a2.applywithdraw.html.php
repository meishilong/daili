<?php /*%%SmartyHeaderCode:178385a7121fee0a924-94720266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bbc967a3949d49e4557bbbd6887172c410bf6a2' => 
    array (
      0 => 'E:/wamp/www/Home/View\\Cash\\applywithdraw.html',
      1 => 1516950381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178385a7121fee0a924-94720266',
  'variables' => 
  array (
    'username' => 0,
    'user' => 0,
    'historylist' => 0,
    'history' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a7121ff4e2d7',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7121ff4e2d7')) {function content_5a7121ff4e2d7($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <li >
            <a class="earnings_icon" href="/index.php/home/income/promoteMoney/">推广收益</a>
        </li>
        <li class="checked">
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
                <form action="__self__"  method="post" >
                    <div class="wbox_left">
                        <div class="wbox_lmain">
                            <span>提现金额：</span>
                            <input type="text" name="withdrawmoney" class="txmoney"/>
                        </div>
                        <div class="wbox_lmain">
                            <span>支付密码：</span>
                            <input type="password" name="paypassword" class="moneypsd"/>
                        </div>
                    </div>
                    <div class="wbox_right">
                        <input type="button" value="提交"/>
                        <a href="javascript:void(0)">重置</a>
                    </div>
				<input type='hidden' name='username' value="meishilong" class="applyusername">
                <input type='hidden' name='userid' value="2" class="applyuserid">	
                </form>
            </li>
            <li>
                <span class="title">可提现金额</span>
                <span class="money">￥<font>85916</font></span>
            </li>
            <li>
                <span class="title">今日客户实时购买总金额</span>
                <span class="money">￥<font id="promocode"></font></span>
            </li>
            <li>
                <span class="title">历史已结算金额</span>
                <span class="money">￥<font>23000</font></span>
            </li>
        </ul>

<table cellpadding="10" cellspacing="0" class="admin_table">
  <tr class="admin_title"> 
    <th>申请时间</th>
    <th>申请提现金额</th>
	<th>开户银行</th>
	<th>银行卡号</th>
	<th>开户名</th>	
    <th>状态</th>	
	<th>消息</th>
  </tr>
    <tr>
     <td>2018-01-26</td>
	 <td>20000元</td>
	 <td>中国建行</td>
	 <td>6217002020031745</td>
	 <td>梅仕龙</td>


	 	   <td><font color='green'>申请中</font></td>
	   <td>无</td>
	 	 	 	 
	 
  </tr>
  
    <tr>
     <td>2018-01-26</td>
	 <td>8000元</td>
	 <td>中国建行</td>
	 <td>6217002020031745</td>
	 <td>梅仕龙</td>


	 	 	 	   <td><font color='red'>被驳回</font></td>
	   <td><font color='red'>不通</font></td>
	 	 
	 
  </tr>
  
    <tr>
     <td>2018-01-26</td>
	 <td>3000元</td>
	 <td>中国建行</td>
	 <td>6217002020031745</td>
	 <td>梅仕龙</td>


	 	 	   <td><font color='green'>已成功</font></td>
	   <td><font color='green'>申请提现成功，请留意银行卡收款</font></td>	   
	 	 	 
	 
  </tr>
  
    <tr>
     <td>2018-01-26</td>
	 <td>20000元</td>
	 <td>中国建行</td>
	 <td>6217002020031745</td>
	 <td>梅仕龙</td>


	 	 	   <td><font color='green'>已成功</font></td>
	   <td><font color='green'>申请提现成功，请留意银行卡收款</font></td>	   
	 	 	 
	 
  </tr>
  
    <tr>
     <td>2018-01-26</td>
	 <td>1200元</td>
	 <td>中国建行</td>
	 <td>6217002020031745</td>
	 <td>梅仕龙</td>


	 	   <td><font color='green'>申请中</font></td>
	   <td>无</td>
	 	 	 	 
	 
  </tr>
  
    <tr>
     <td>2018-01-26</td>
	 <td>2000元</td>
	 <td></td>
	 <td></td>
	 <td></td>


	 	   <td><font color='green'>申请中</font></td>
	   <td>无</td>
	 	 	 	 
	 
  </tr>
  
    <tr>
     <td>2018-01-26</td>
	 <td>1000元</td>
	 <td></td>
	 <td></td>
	 <td></td>


	 	   <td><font color='green'>申请中</font></td>
	   <td>无</td>
	 	 	 	 
	 
  </tr>
  
    <tr>
     <td>2018-01-23</td>
	 <td>1000元</td>
	 <td>中国建行</td>
	 <td>6217002020031745</td>
	 <td>梅仕龙</td>


	 	 	   <td><font color='green'>已成功</font></td>
	   <td><font color='green'>申请提现成功，请留意银行卡收款</font></td>	   
	 	 	 
	 
  </tr>
  
    
</table>	
&nbsp;&nbsp;共有<b>21</b>个记录&nbsp;&nbsp;&nbsp;&nbsp;每页显示<b>8</b>条，本页<b>1-8</b>条&nbsp;&nbsp;&nbsp;&nbsp;<b>1/3</b>页&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;<a href='/index.php/Home/cash/showWithdraw/?&page=2'>2</a>&nbsp;&nbsp;<a href='/index.php/Home/cash/showWithdraw/?&page=3'>3</a>&nbsp;&nbsp;&nbsp;<a href='/index.php/Home/cash/showWithdraw/?&page=2'>下一页</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='/index.php/Home/cash/showWithdraw/?&page=3'>尾 页</a>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" onkeydown="javascript:if(event.keyCode==13){var page=(this.value>3)?3:this.value;location='/index.php/Home/cash/showWithdraw/?&page='+page+''}" value="1" style="width:25px"><input type="button" value="GO" onclick="javascript:var page=(this.previousSibling.value>3)?3:this.previousSibling.value;location='/index.php/Home/cash/showWithdraw/?&page='+page+''">&nbsp;&nbsp;	
    </div>
</div>
</body>
<script src="http://localhost/Public/js/jquery-1.11.3.min.js"></script>
<script>

$.ajaxSetup({   
            async : false  
        }); 
var promomoney = 0;
$.post("http://localhost/index.php/home/cash/getNowMoney","",function(data){
   promomoney = data;
});

$("#promocode").text(promomoney );

</script>
<script src="http://localhost/Public/layer/layer.js"></script>
<script src="http://localhost/Public/js/common.js"></script>
<script src="http://localhost/Public/js/withdraw.js"></script>
</html><?php }} ?>