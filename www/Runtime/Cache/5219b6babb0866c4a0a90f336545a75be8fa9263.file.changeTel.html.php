<?php /* Smarty version Smarty-3.1.6, created on 2018-02-09 10:45:07
         compiled from "E:/wamp/www/Home/View\Center\changeTel.html" */ ?>
<?php /*%%SmartyHeaderCode:120095a7bf133ed2d83-30503693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5219b6babb0866c4a0a90f336545a75be8fa9263' => 
    array (
      0 => 'E:/wamp/www/Home/View\\Center\\changeTel.html',
      1 => 1518144256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120095a7bf133ed2d83-30503693',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a7bf13439fb8',
  'variables' => 
  array (
    'phone' => 0,
    'fullphone' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7bf13439fb8')) {function content_5a7bf13439fb8($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
myindex.css" rel="stylesheet">
    <link href="<?php echo @CSS_URL;?>
login.css" rel="stylesheet">

</head>
<body>
<!--左侧导航-->
<div class="nav">
    <img src="<?php echo @IMG_URL;?>
logo.png" alt=""/>
    <ul class="nav_ul">
        <li>
            <a class="myindex_icon" href="<?php echo @__MODULE__;?>
">我的概况</a>
        </li>
        <li>
            <a class="member_icon" href="<?php echo @__MODULE__;?>
/member/toMembers/">会员管理</a>
        </li>
        <li >
            <a class="earnings_icon" href="<?php echo @__MODULE__;?>
/income/promoteMoney/">推广收益</a>
        </li>
        <li >
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
                <img src="<?php echo @IMG_URL;?>
tx.jpg" alt=""/>
                <span>dwewer</span>
            </a>
            <a class="mtop_link kf" href="javascript:void(0)">客服</a>
            <!--<a class="mtop_link" href="">消息</a>-->
            <a class="mtop_link" href="">登出</a>
        </div>
    </div>
    <div class="myindex">
        <div class="change_top">
            <a href="">个人中心&gt;</a>
            <span>更换号码</span>
        </div>
        <div class="changepsd">
            <form class="user_form" method="post">
                <div class="form-group">
                    <label class="pwd_left control-label">现已绑定：</label>
                    <div class="pwd_r">
                        <div class="hidden_control">
                            <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>

                        </div>
						<input type='hidden' class='tel' value="<?php echo $_smarty_tpl->tpl_vars['fullphone']->value;?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="pwd_left control-label">请输入手机号：</label>
                    <div class="pwd_r">
                        <div class="hidden_control">
                            <div class="select_country">
                                <div class="select_show">
                                    <span class="country_name">+86</span>
                                    <span class="contry_icon"></span>
                                </div>
                                <ul class="country_num">
                                    <li>
                                        <img class="country_gq" src="<?php echo @IMG_URL;?>
country/china.png"/>
                                        <span class="country_name">中国</span>
                                        <span class="country_font">+86</span>
                                    </li>
                                    <li>
                                        <img class="country_gq" src="<?php echo @IMG_URL;?>
country/china.png"/>
                                        <span class="country_name">中国台湾</span>
                                        <span class="country_font">+886</span>
                                    </li>
                                    <li>
                                        <img class="country_gq" src="<?php echo @IMG_URL;?>
country/china.png"/>
                                        <span class="country_name">中国香港</span>
                                        <span class="country_font">+852</span>
                                    </li>
                                    <li>
                                        <img class="country_gq" src="<?php echo @IMG_URL;?>
country/jpz.png"/>
                                        <span class="country_name">柬埔寨</span>
                                        <span class="country_font">+855</span>
                                    </li>
                                    <li>
                                        <img class="country_gq" src="<?php echo @IMG_URL;?>
/country/xjb.png"/>
                                        <span class="country_name">新加坡</span>
                                        <span class="country_font">+65</span>
                                    </li>
                                    <li>
                                        <img class="country_gq" src="<?php echo @IMG_URL;?>
/country/hg.png"/>
                                        <span class="country_name">韩国</span>
                                        <span class="country_font">+82</span>
                                    </li>
                                    <li>
                                        <img class="country_gq" src="<?php echo @IMG_URL;?>
country/mg.png"/>
                                        <span class="country_name">美国</span>
                                        <span class="country_font">+1</span>
                                    </li>
                                    <li>
                                        <img class="country_gq" src="<?php echo @IMG_URL;?>
country/flb.png"/>
                                        <span class="country_name">菲律宾</span>
                                        <span class="country_font">+63</span>
                                    </li>
                                    <li>
                                        <img class="country_gq" src="<?php echo @IMG_URL;?>
country/mlxy.png"/>
                                        <span class="country_name">马来西亚</span>
                                        <span class="country_font">+60</span>
                                    </li>
                                    <li>
                                        <img class="country_gq" src="<?php echo @IMG_URL;?>
country/md.png"/>
                                        <span class="country_name">缅甸</span>
                                        <span class="country_font">+95</span>
                                    </li>
                                    <li>
                                        <img class="country_gq" src="<?php echo @IMG_URL;?>
country/tg.png"/>
                                        <span class="country_name">泰国</span>
                                        <span class="country_font">+66</span>
                                    </li>
                                    <li>
                                        <img class="country_gq" src="<?php echo @IMG_URL;?>
country/lw.png"/>
                                        <span class="country_name">老挝</span>
                                        <span class="country_font">+856</span>
                                    </li>
                                    <li>
                                        <img class="country_gq" src="<?php echo @IMG_URL;?>
country/yn.png"/>
                                        <span class="country_name">印度尼西亚</span>
                                        <span class="country_font">+62</span>
                                    </li>
                                    <li>
                                        <img class="country_gq" src="<?php echo @IMG_URL;?>
country/yd.png"/>
                                        <span class="country_name">印度</span>
                                        <span class="country_font">+91</span>
                                    </li>
                                    <li>
                                        <img class="country_gq" src="<?php echo @IMG_URL;?>
country/yuenan.png"/>
                                        <span class="country_name">越南</span>
                                        <span class="country_font">+84</span>
                                    </li>
                                </ul>
                            </div>
                            <input type="password" name="pwd1" class="form-control change_telinput" value="">
                        </div>
                    </div>
                </div>
				
                <div class="form-group">
                    <label class="pwd_left">请输入验证码：</label>
                    <div class="pwd_r">
                        <div class="hidden_control">
                            <input type="text" name="pwd2" class="form-control change_yzm yzm" value="">
                            <input onclick="sendYZM();" type="button" id="code_send" value="获取验证码"/>
                        </div>
                    </div>
                </div>
                <div class="form_submit">
                    <div class="btnmain">
                        <button class="subbtn">修&nbsp;改</button>
                        <a class="subbtn resetbtn" href="javascript:void(0)">重&nbsp;置</a>
                    </div>
                </div>
            </form>
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
<script src="<?php echo @JS_URL;?>
change.js"></script>

<script>
var wait=60;

function time() {
    var code = document.getElementById('code_send');
    if (wait == 0) {
        code.removeAttribute("disabled");
        code.value="获取验证码";
        wait = 60;
    } else {
        code.setAttribute("disabled", true);
        code.value="重新发送(" + wait + ")";
        wait--;
        setTimeout(function() {
                time()
            },
            1000)
    }
}
function sendYZM(){
    var regphone = /^\d{5,}$/;
    var phone = $(".tel").val();
    //var totalPhone = $(".select_show .country_name").text() + $(".tel").val();
     $.post("http://localhost/index.php/Admin/agent/SendSms",{"phone":phone},function(result){
        console.log(result);
       });
       time();
    
}
//校验验证码
$(".yzm").blur(function(){
    //var phone = $(".tel").val();
    var yzmcode = $(".yzm").val();
    var totalPhone = $(".select_show .country_name").text() + $(".tel").val();
    $.post("http://localhost/index.php/Admin/agent/checkRegister",{"bj":"yzm","phone":totalPhone,"yzmcode":yzmcode},function(result){
        if(result == 1){
            layer.msg("验证码错误");
            telYzm = false;
        }else{
            telYzm = true;
        }
    });

});
$(".country_num").hide();
$(".select_show").click(function(){
    $(".country_num").show();
});
$(".country_num li").click(function(){
    $(".country_num").hide();
    var checkedNum = $(this).children(".country_font").text();
    $(".select_show").children(".country_name").html(checkedNum);
});
</script>

</html><?php }} ?>