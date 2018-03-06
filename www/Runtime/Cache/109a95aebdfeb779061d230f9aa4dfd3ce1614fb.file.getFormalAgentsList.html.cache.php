<?php /* Smarty version Smarty-3.1.6, created on 2018-02-02 14:55:08
         compiled from "E:/wamp/www/Admin/View\Agent\getFormalAgentsList.html" */ ?>
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
  'unifunc' => 'content_5a740b4d15e00',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a740b4d15e00')) {function content_5a740b4d15e00($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\wamp\\www\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
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
        <li>
            <a class="mycenter_icon" href="<?php echo @__MODULE__;?>
/cash/showWithdraw/?pass=0">提现审核</a>
        </li>
        <li class="checked">
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
				  <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
				<tr>
				   <td><?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>
</td>
				   <td><?php echo $_smarty_tpl->tpl_vars['info']->value['totalmoney'];?>
</td>   
				   <td><?php echo $_smarty_tpl->tpl_vars['info']->value['billed'];?>
</td>
				   <td><?php echo $_smarty_tpl->tpl_vars['info']->value['balance'];?>
</td>   
				   <td><?php echo $_smarty_tpl->tpl_vars['info']->value['password'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['info']->value['paypassword'];?>
</td>
				   <td>冻结/解冻</td>
				   <td><?php echo $_smarty_tpl->tpl_vars['info']->value['promocode'];?>
</td>
				   <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['info']->value['createtime'],"%Y-%m-%d %H:%M");?>
</td>
				   <td><a href='<?php echo @__CONTROLLER__;?>
/getFormalAgentUser/?promocode=<?php echo $_smarty_tpl->tpl_vars['info']->value['promocode'];?>
'>详情</a></td>
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
<script src="<?php echo @JS_URL;?>
common.js"></script>
</html><?php }} ?>