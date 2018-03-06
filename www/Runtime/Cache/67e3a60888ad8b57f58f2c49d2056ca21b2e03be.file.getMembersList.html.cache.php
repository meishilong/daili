<?php /* Smarty version Smarty-3.1.6, created on 2018-02-02 14:55:12
         compiled from "E:/wamp/www/Admin/View\Agent\getMembersList.html" */ ?>
<?php /*%%SmartyHeaderCode:156225a740b507e0822-36876673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67e3a60888ad8b57f58f2c49d2056ca21b2e03be' => 
    array (
      0 => 'E:/wamp/www/Admin/View\\Agent\\getMembersList.html',
      1 => 1517468569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156225a740b507e0822-36876673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adminname' => 0,
    'promocode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a740b509f2ff',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a740b509f2ff')) {function content_5a740b509f2ff($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['promocode']->value;?>
"  class='promo'>
    <!--我的概况-->
    <div class="myindex">
        <div class="change_top">
            <a href="">代理商管理&gt;</a>
            <span>下级用户数据</span>
        </div>
        <div class="tables mt30">
            <table class="admin_table" id="testtable">
			<thead>
				<tr>
				   <th>用户名</th>
				   <th>电子邮箱</th> 
				   <th>手机号码</th>
				   <th>账户金额</th>
				   <th>模式</th>

				</tr>
			</thead>
			
			<tbody>
			</tbody>
            </table>
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
<!--表格插件-->
<script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
YhhDataTable/js/jquery.paginate.js" ></script>
<script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
YhhDataTable/js/jquery.yhhDataTable.js" ></script>
<script src="<?php echo @JS_URL;?>
common.js"></script>


<script>
$(document).ready(function(){
    var promocode = $(".promo").val();
	var newData = new Array(); ;
	function tableData(){
		$.post("http://localhost/index.php/admin/Agent/getMembers/",{'promocode':promocode},function(data){
     
			//newData = data.split('":');
			//newData = JSON.parse(data);
			 newData = JSON.parse(data);
		     console.log(data);
			 $('#testtable').yhhDataTable({
				'paginate':{
					'changeDisplayLen':true,
					'type':'updown',
					'visibleGo': true
				},
				'tbodyRow':{
					'zebra':true
				},
				'tbodyData':{
					'enabled':true,  /*是否传入表格数据*/
					'source':newData /*传入的表格数据*/
				}
			});
		});
	}
	
	
  
		tableData();
   



    /*更新表格*/
    var refreshTable = function(data,page){
        if ($.isEmptyObject(data)) data = {};
        var toData = {
            'ajaxParam':{'data':data}
        }
        if (!$.isEmptyObject(page)){
            toData.paginate = {};
            toData.paginate.currentPage = page;
        }
        var $table = $page.find('.result-list');
        $table.yhhDataTable('refresh',toData);
    }
});
</script>

</html><?php }} ?>