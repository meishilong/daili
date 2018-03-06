<?php /* Smarty version Smarty-3.1.6, created on 2018-02-01 15:31:32
         compiled from "E:/wamp/www/Admin/View\Agent\applyAgent.html" */ ?>
<?php /*%%SmartyHeaderCode:24105a6ae951623cd6-32221174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c84a2dbcfced2fca5afb07a2b9b2c8a90cbec644' => 
    array (
      0 => 'E:/wamp/www/Admin/View\\Agent\\applyAgent.html',
      1 => 1517469193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24105a6ae951623cd6-32221174',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a6ae9517874a',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6ae9517874a')) {function content_5a6ae9517874a($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
</head>
<body>
<div class="apply_top">
    <p>欢迎登陆郡安云CDN代理商管理系统</p>
    <div>
        <a href="">客服</a>
        <a href="">帮助</a>
    </div>
</div>
<div class="apply">
    <h1>郡安云CDN代理商入驻申请表</h1>
    <!--<?php echo @__SELF__;?>
-->
    <form action="" class="" id="apply_form" method="post">
        <ul class="apply_ul">
           <li class="apply_li">
               <span class="title">用户名：</span>
               <input type="text"  name="username" class="username"/>
               <span class="apply_hint">4-12位英文数字、+、-、_</span>
               <div class="apply_success"></div>
               <div class="apply_warn">请输入4-12位英文数字、+、-、_</div>
           </li>
            <li class="apply_li">
                <span class="title">登陆密码：</span>
                <input type="password" name="password" class="password"/>
                <span class="apply_hint">请输入6到12位数字、字母</span>
                <div class="apply_warn">请输入6到12位数字、字母</div>
                <div class="apply_success"></div>
            </li>
            <li class="apply_li">
                <span class="title">请确认登陆密码：</span>
                <input type="password" class="password1" disabled/>
                <div class="apply_warn">登陆密码不一致</div>
                <div class="apply_success"></div>
            </li>
            <li class="apply_li">
                <span class="title">支付密码：</span>
                <input type="password" name="paypassword" class="paypsd"/>
                <span class="apply_hint">密码只能是6位数字且不同于登录密码</span>
                <div class="apply_warn">密码只能是6位数字且不同于登录密码</div>
                <div class="apply_success"></div>
            </li>
            <li class="apply_li">
                <span class="title">请确认支付密码：</span>
                <input type="password" disabled class="paypsd1"/>
                <div class="apply_warn">支付密码不一致</div>
                <div class="apply_success"></div>
            </li>
            <li class="apply_li">
                <span class="title">绑定手机号：</span>
                <div class="select_country">
                    <div class="select_show">
                        <span class="country_name">+86</span>
                        <span class="contry_icon"></span>
                    </div>
                    <ul class="country_num">
                        <li>
                            <img class="country_gq" src="<?php echo @IMG_URL;?>
/country/china.png"/>
                            <span class="country_name">中国</span>
                            <span class="country_font">+86</span>
                        </li>
                        <li>
                            <img class="country_gq" src="<?php echo @IMG_URL;?>
/country/china.png"/>
                            <span class="country_name">中国台湾</span>
                            <span class="country_font">+886</span>
                        </li>
                        <li>
                            <img class="country_gq" src="<?php echo @IMG_URL;?>
/country/china.png"/>
                            <span class="country_name">中国香港</span>
                            <span class="country_font">+852</span>
                        </li>
                        <li>
                            <img class="country_gq" src="<?php echo @IMG_URL;?>
/country/jpz.png"/>
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
/country/mg.png"/>
                            <span class="country_name">美国</span>
                            <span class="country_font">+1</span>
                        </li>
                        <li>
                            <img class="country_gq" src="<?php echo @IMG_URL;?>
/country/flb.png"/>
                            <span class="country_name">菲律宾</span>
                            <span class="country_font">+63</span>
                        </li>
                        <li>
                            <img class="country_gq" src="<?php echo @IMG_URL;?>
/country/mlxy.png"/>
                            <span class="country_name">马来西亚</span>
                            <span class="country_font">+60</span>
                        </li>
                        <li>
                            <img class="country_gq" src="<?php echo @IMG_URL;?>
/country/md.png"/>
                            <span class="country_name">缅甸</span>
                            <span class="country_font">+95</span>
                        </li>
                        <li>
                            <img class="country_gq" src="<?php echo @IMG_URL;?>
/country/tg.png"/>
                            <span class="country_name">泰国</span>
                            <span class="country_font">+66</span>
                        </li>
                        <li>
                            <img class="country_gq" src="<?php echo @IMG_URL;?>
/country/lw.png"/>
                            <span class="country_name">老挝</span>
                            <span class="country_font">+856</span>
                        </li>
                        <li>
                            <img class="country_gq" src="<?php echo @IMG_URL;?>
/country/yn.png"/>
                            <span class="country_name">印度尼西亚</span>
                            <span class="country_font">+62</span>
                        </li>
                        <li>
                            <img class="country_gq" src="<?php echo @IMG_URL;?>
/country/yd.png"/>
                            <span class="country_name">印度</span>
                            <span class="country_font">+91</span>
                        </li>
                        <li>
                            <img class="country_gq" src="<?php echo @IMG_URL;?>
/country/yuenan.png"/>
                            <span class="country_name">越南</span>
                            <span class="country_font">+84</span>
                        </li>
                    </ul>
                </div>

                <input type="text" name="phone" class="tel"/>
                <div class="apply_warn">手机号格式不对</div>
                <div class="apply_success"></div>
            </li>
            <li class="apply_li">
                <span class="title">验证码：</span>
                <input class="yzm telyzm_input" type="text"  name="yzm"/>
                <input onclick="sendYZM();" type="button" id="code_send" value="发送"/>
            </li>
            <li class="apply_li">
                <span class="title">绑定邮箱：</span>
                <input type="text" class="email"/>
                <div class="apply_warn">邮箱格式不对</div>
                <div class="apply_success"></div>
            </li>
            <li class="apply_li">
                <span class="title">绑定银行卡：</span>
                <input type="text"  name="bankaccountnumber" class="banknum"/>
                <div class="apply_warn">银行卡格式错误</div>
                <div class="apply_success"></div>
            </li>
            <li class="apply_li">
                <span class="title">银行名：</span>
                <select name="bank" class="bank">
                    <option value="中国银行">中国银行</option>
                    <option value="华夏银行">华夏银行</option>
                    <option value="中国建设银行">中国建设银行</option>
                    <option value="中国工商银行">中国工商银行</option>
                    <option value="中国农业银行">中国农业银行</option>
					
                </select>
            </li>
            <li class="apply_li">
                <span class="title">银行卡开户名：</span>
                <input type="text" name="accountbankname" class="khname"/>
                <div class="apply_warn">开户名格式错误</div>
                <div class="apply_success"></div>
            </li>
        </ul>
        <div class="apply_done">
            <button class="apply_btn" onClick="tj()" type="button">提&nbsp;交</button>
            <a href="javascript:void(0)" class="apply_clean" onClick="tj()">重&nbsp;置</a>
        </div>
    </form>
</div>

</body>
<script src="<?php echo @JS_URL;?>
jquery-1.11.3.min.js"></script>
<script src="<?php echo @PUBLIC_URL;?>
layer/layer.js"></script>
<script src="<?php echo @JS_URL;?>
apply.js"></script>

</html><?php }} ?>