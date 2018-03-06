<?php /* Smarty version Smarty-3.1.6, created on 2018-02-02 15:23:17
         compiled from "E:/wamp/www/Admin/View\Cash\withdraw.html" */ ?>
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
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adminname' => 0,
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a7411e60d8de',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7411e60d8de')) {function content_5a7411e60d8de($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\wamp\\www\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <li >
            <a class="myindex_icon" href="<?php echo @__MODULE__;?>
">我的概况</a>
        </li>
        <li>
            <a class="member_icon" href="<?php echo @__MODULE__;?>
/Agent/getApplayAgentInfos">申请审核</a>
        </li>
        <li>
            <a class="earnings_icon" href="<?php echo @__MODULE__;?>
/Income/incomeSet">收益配置</a>
        <li class="checked">
            <a class="mycenter_icon" href="<?php echo @__MODULE__;?>
/cash/showWithdraw/?pass=0">提现审核</a>
        </li>
        <li>
            <a class="money_icon" href="<?php echo @__MODULE__;?>
/Agent/getFormalAgentList">代理商管理</a>
        </li>
        <li >
            <a class="money_icon" href="<?php echo @__MODULE__;?>
/Sheet/getDatas">财务报表</a>
        </li>
    </ul>
</div>
<!--右侧内容-->
<div class="main">
    <div class="main_top">
        <p>欢迎登录郡安云CDN代理商管理系统</p>
        <div class="mtop_right">
            <a href="" class="userinfo">
                <img src="<?php echo @PUBLIC_URL;?>
images/tx.jpg" alt=""/>
                <span><?php echo $_smarty_tpl->tpl_vars['adminname']->value;?>
</span>
            </a>
            <a class="mtop_link kf" href="javascript:void(0)">客服</a>
            <!--<a class="mtop_link" href="">消息</a>-->
            <a class="mtop_link" href="<?php echo @__MODULE__;?>
/index/logout">登出</a>
        </div>
    </div>
    <!--我的概况-->
    <div class="myindex">
        <div class="admin_select">
            <a href="<?php echo @__MODULE__;?>
/cash/showWithdraw/?pass=0"" class="checked">待审核用户</a>
            <a href="<?php echo @__MODULE__;?>
/cash/showWithdraw/?pass=1">已审核用户</a>
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
					<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
					  <tr>
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['info']->value['applytime'],"%Y-%m-%d %H:%M");?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['info']->value['withdrawmoney'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['info']->value['agentname'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['info']->value['bank'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['info']->value['bankaccountnumber'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['info']->value['accountbankname'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['info']->value['phone'];?>
</td>
						
						<?php if ($_smarty_tpl->tpl_vars['info']->value['state']==1){?>
						<td><font color="green">通过</font></td>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['info']->value['state']==2){?>
						<td><font color='red'>不通过</font></td>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['info']->value['state']==0){?>
						<td ><input class="btn btn-default admin_apply" value="审核"/>
					    <input class="hide_id" type='hidden' name='uid' value='<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
'></td>
						<?php }?>	
						<td><?php echo $_smarty_tpl->tpl_vars['info']->value['message'];?>
</td>		
					  </tr>
					<?php } ?> 
            </table>

        </div>

        <div class="page">

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
common.js"></script>
<script src="<?php echo @JS_URL;?>
adminApply.js"></script>

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
				$.post("<?php echo @__SELF__;?>
",{"id":uid,"state":1,"message":message},function(data){
				
				//console.log(data);
				//layer.msg(data);
				location.reload();
				});
			});
			btn1.click(function(){
				var message = $(".textarea_msg").val();
				console.log(2);
			
			    $.post("<?php echo @__SELF__;?>
",{"id":uid,"state":2,"message":message},function(data){
		
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