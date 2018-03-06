<?php /*%%SmartyHeaderCode:191275a7411e5d25431-40911054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c332d41ab69b56a951a945cb686037bdb78dc9e7' => 
    array (
      0 => 'E:/wamp/www/Admin/View\\Cash\\withdraw.html',
      1 => 1517468602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191275a7411e5d25431-40911054',
  'variables' => 
  array (
    'adminname' => 0,
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a7411e60e87e',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7411e60e87e')) {function content_5a7411e60e87e($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <li class="checked">
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
                <span>admin</span>
            </a>
            <a class="mtop_link kf" href="javascript:void(0)">客服</a>
            <!--<a class="mtop_link" href="">消息</a>-->
            <a class="mtop_link" href="/index.php/admin/index/logout">登出</a>
        </div>
    </div>
    <!--我的概况-->
    <div class="myindex">
        <div class="admin_select">
            <a href="/index.php/admin/cash/showWithdraw/?pass=0"" class="checked">待审核用户</a>
            <a href="/index.php/admin/cash/showWithdraw/?pass=1">已审核用户</a>
        </div>
        <div class="tables">
            <table class="admin_table">
				<tr class="admin_title">
					<th>提现申请时间</th>
					<th>申请金额</th>
					<th>申请人</th>
					<th>开户银行</th>
					<th>银行卡号</th>
					<th>开户名</th>			
					<th>手机</th>			
					<th>状态</th>
					<th>消息</th>
				</tr>
										  <tr>
						<td>2018-01-04 15:43</td>
						<td>20</td>
						<td>meishilong</td>
						<td>中国建行</td>
						<td>6217002020031745</td>
						<td>梅仕龙</td>
						<td>13247008581</td>
						
												
												
												<td ><input class="btn btn-default admin_apply" value="审核"/>
					    <input class="hide_id" type='hidden' name='uid' value='6'></td>
							
						<td>555</td>		
					  </tr>
										  <tr>
						<td>2018-01-18 14:53</td>
						<td>0</td>
						<td>meishilong</td>
						<td>中国建行</td>
						<td>6217002020031745</td>
						<td>梅仕龙</td>
						<td>13247008581</td>
						
												
												
												<td ><input class="btn btn-default admin_apply" value="审核"/>
					    <input class="hide_id" type='hidden' name='uid' value='12'></td>
							
						<td>444</td>		
					  </tr>
										  <tr>
						<td>2018-01-26 16:18</td>
						<td>1000</td>
						<td>meishilong</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						
												
												
												<td ><input class="btn btn-default admin_apply" value="审核"/>
					    <input class="hide_id" type='hidden' name='uid' value='20'></td>
							
						<td></td>		
					  </tr>
										  <tr>
						<td>2018-01-26 16:56</td>
						<td>2000</td>
						<td>meishilong</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						
												
												
												<td ><input class="btn btn-default admin_apply" value="审核"/>
					    <input class="hide_id" type='hidden' name='uid' value='21'></td>
							
						<td></td>		
					  </tr>
										  <tr>
						<td>2018-01-26 17:00</td>
						<td>1200</td>
						<td>meishilong</td>
						<td>中国建行</td>
						<td>6217002020031745</td>
						<td>梅仕龙</td>
						<td>13247008581</td>
						
												
												
												<td ><input class="btn btn-default admin_apply" value="审核"/>
					    <input class="hide_id" type='hidden' name='uid' value='22'></td>
							
						<td></td>		
					  </tr>
										  <tr>
						<td>2018-01-26 17:35</td>
						<td>20000</td>
						<td>meishilong</td>
						<td>中国建行</td>
						<td>6217002020031745</td>
						<td>梅仕龙</td>
						<td>13247008581</td>
						
												
												
												<td ><input class="btn btn-default admin_apply" value="审核"/>
					    <input class="hide_id" type='hidden' name='uid' value='26'></td>
							
						<td></td>		
					  </tr>
										  <tr>
						<td>2018-01-31 14:07</td>
						<td>2000</td>
						<td>meishilong</td>
						<td>中国建行</td>
						<td>6217002020031745</td>
						<td>梅仕龙</td>
						<td>13247008581</td>
						
												
												
												<td ><input class="btn btn-default admin_apply" value="审核"/>
					    <input class="hide_id" type='hidden' name='uid' value='27'></td>
							
						<td></td>		
					  </tr>
										  <tr>
						<td>2018-02-01 14:34</td>
						<td>2000</td>
						<td>meishilong</td>
						<td>中国建行</td>
						<td>6217002020031745</td>
						<td>梅仕龙</td>
						<td>13247008581</td>
						
												
												
												<td ><input class="btn btn-default admin_apply" value="审核"/>
					    <input class="hide_id" type='hidden' name='uid' value='28'></td>
							
						<td></td>		
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
<script src="http://localhost/Public/echarts.js"></script>
<script src="http://localhost/Public/js/common.js"></script>
<script src="http://localhost/Public/js/adminApply.js"></script>

<script>
$(function(){
		
	//提现审核
	$(".admin_apply").click(function(){
		var uid = $(this).next(".hide_id").val();
		layer.open({
		type: 1,
		title: "审核" ,//不显示标题栏   title : false/标题
		closeBtn: true,
		area: '400px;',
		shade: 0.8,
		id: 'LAY_layuipro' ,//设定一个id，防止重复弹出
		resize: false,btn: ['通过', '不通过'],
		btnAlign: 'c',
		moveType: 1, //拖拽模式，0或者1
		content: '<div><textarea placeholder="添加备注" class="textarea_msg" style="display:block;margin:0 auto;padding:4px;width:300px;height:40px;margin-top:20px;font-size:12px;line-height:14px;"></textarea></div>',
		success: function(layero){
			var btn = layero.find('.layui-layer-btn0');
			var btn1 = layero.find('.layui-layer-btn1');
			btn.click(function(){
				var message = $(".textarea_msg").val();
				$.post("/index.php/admin/cash/showWithdraw/?pass=0",{"id":uid,"state":1,"message":message},function(data){
				
				//console.log(data);
				//layer.msg(data);
				location.reload();
				});
			});
			btn1.click(function(){
				var message = $(".textarea_msg").val();
				console.log(2);
			
			    $.post("/index.php/admin/cash/showWithdraw/?pass=0",{"id":uid,"state":2,"message":message},function(data){
		
				//layer.msg(data);
				location.reload();
				});
			});
     }
 });
	});
});
</script>
</html><?php }} ?>