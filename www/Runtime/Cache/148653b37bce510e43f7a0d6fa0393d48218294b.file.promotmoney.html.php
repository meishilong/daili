<?php /* Smarty version Smarty-3.1.6, created on 2018-02-01 09:41:50
         compiled from "E:/wamp/www/Home/View\Income\promotmoney.html" */ ?>
<?php /*%%SmartyHeaderCode:93295a6accee4b20f0-33535452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '93295a6accee4b20f0-33535452',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a6accee6f81f',
  'variables' => 
  array (
    'username' => 0,
    'totalmoney' => 0,
    'infos' => 0,
    'info' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6accee6f81f')) {function content_5a6accee6f81f($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\wamp\\www\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-CN">
<head>
    <title></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--表格插件-->
    <link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo @PUBLIC_URL;?>
YhhDataTable/css/jquery.paginate.css" />
    <link rel="stylesheet" href="<?php echo @PUBLIC_URL;?>
YhhDataTable/css/jquery.yhhDataTable.css" />

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
        <li>
            <a class="myindex_icon" href="<?php echo @__MODULE__;?>
">我的概况</a>
        </li>
        <li>
            <a class="member_icon" href="<?php echo @__MODULE__;?>
/member/toMembers/">会员管理</a>
        </li>
        <li  class="checked">
            <a class="earnings_icon" href="<?php echo @__MODULE__;?>
/income/promoteMoney/">推广收益</a>
        </li>
        <li>
            <a class="withdraw_icon" href="<?php echo @__MODULE__;?>
/cash/showWithdraw/">提现管理</a>
        </li>
        <li>
            <a class="money_icon" href="<?php echo @__MODULE__;?>
/sheet/getDatas/">财务报表</a>
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
                <span><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>
            </a>
            <a class="mtop_link kf" href="javascript:void(0)">客服</a>
            <!--<a class="mtop_link" href="">消息</a>-->
            <a class="mtop_link" href="<?php echo @__MODULE__;?>
/Index/logout">登出</a>
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
                <span class="money">￥<font><?php echo $_smarty_tpl->tpl_vars['totalmoney']->value;?>
</font></span>
            </li>
        </ul>
        <table id="withdraw_table" class="admin_table">
            <tr class="admin_title">
                <th width="35%">时间</th>
                <th width="35%">套餐类型</th>
                <th width="30%">收益</th>
            </tr>
            
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
		  <tr>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['info']->value['time'],'%Y-%m-%d');?>
</td>
			<?php if ($_smarty_tpl->tpl_vars['info']->value['product']=='B'){?>
			<td>普通套餐</td>
			<?php }elseif($_smarty_tpl->tpl_vars['info']->value['product']=='C'){?>
		    <td>高级套餐</td>
		    <?php }elseif($_smarty_tpl->tpl_vars['info']->value['product']=='D'){?>
			<td>VIP套餐</td>
			<?php }elseif($_smarty_tpl->tpl_vars['info']->value['product']=='E'){?>
			<td>钻石套餐</td>
			<?php }elseif($_smarty_tpl->tpl_vars['info']->value['product']=='F'){?>
			<td>超级VIP套餐</td>
			<?php }elseif($_smarty_tpl->tpl_vars['info']->value['product']=='H'){?>
			<td>尊贵专享套餐A  </td>
			<?php }elseif($_smarty_tpl->tpl_vars['info']->value['product']=='I'){?>
			<td> 尊贵专享套餐B</td>
			<?php }elseif($_smarty_tpl->tpl_vars['info']->value['product']=='J'){?>
			<td>尊贵专享套餐C   </td>
			<?php }else{ ?>
            <td>自定义DNS套餐</td>
		    <?php }?>
		   <td><?php echo $_smarty_tpl->tpl_vars['info']->value['money'];?>
</td>
		  </tr>
		<?php } ?>
        </table>
		<?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

    </div>
</div>
</body>
<script src="<?php echo @PUBLIC_URL;?>
js/jquery-1.11.3.min.js"></script>
<script src="<?php echo @PUBLIC_URL;?>
layer/layer.js"></script>
<!--表格插件-->
<script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
YhhDataTable/js/jquery.paginate.js" ></script>
<script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
YhhDataTable/js/jquery.yhhDataTable.js" ></script>

<script src="<?php echo @PUBLIC_URL;?>
js/common.js"></script>
<script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
js/member.js" ></script>
</html><?php }} ?>