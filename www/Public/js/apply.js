//注册页验证
var username,password,password1,paypsd,paypsd1;
var nameOk,psdOk,paypsdOk,emailOk,telOk,khnameOK,yhnumOk,telYzm;
function tj(){
    username = $(".username").val();
    password = $(".password").val();
    var paypassword = $(".paypsd").val();
    var phone = $(".tel").val();
    var email = $(".email").val();
    var bankaccountnumber = $(".banknum").val();
    var bank = $(".bank").val();
    var accountbankname = $(".khname").val();
    //这里判断了用户名的输入不能为空，且长度为6-16位
    var list = '<div>手机号：'+phone+'</div><div>银行卡号：'+bankaccountnumber+'</div><div>银行名：'+bank+'</div><div>开户名：'+accountbankname+'</div>';
    
    if(nameOk&&psdOk&&paypsdOk&&emailOk&&telOk&&khnameOK&&yhnumOk&&telYzm){
        layer.confirm(list, {
            btn: ['确定','取消'] //按钮
        }, function(){
            console.log(username,password,phone,paypassword,email,bankaccountnumber,bank,accountbankname);
            $.post("",{"username":username,"phone":phone,"paypassword":paypassword,"email":email,"bankaccountnumber":bankaccountnumber,"bank":bank,"accountbankname":accountbankname,"password":password},function(result){
                console.log(result);
            });
            layer.msg('发送申请成功', {icon: 1});
        });
    }else{
        layer.msg('请填写完用户信息');
    }
}

//用户名验证
$(".username").focus(function(){
    $(this).parent().children(".apply_hint").show();
    $(this).parent().children(".apply_success").hide();
    $(this).parent().children(".apply_warn").hide();
});
$(".username").blur(function(){
    username = $(this).val();
    var uPattern = /^[a-zA-Z0-9_-_+]{4,12}$/;
    var checkName =uPattern.test(username);
    if(checkName){
        $.post("http://localhost/index.php/Admin/agent/checkRegister",{"bj":"username","username":username},function(result){
            console.log(result);
            if(result == 1){
                $(".username").parent().children(".apply_hint").hide();
                $(".username").parent().children(".apply_success").hide();
                $(".username").parent().children(".apply_warn").show();
                $(".username").parent().children(".apply_warn").html("用户名已注册");
            }else{
                $(".username").parent().children(".apply_hint").hide();
                $(".username").parent().children(".apply_warn").hide();
                $(".username").parent().children(".apply_success").show();
                $(".username").parent().children(".apply_warn").html("4-12位英文数字、+、-、_");
                nameOk = true;
            }
        });
    }else{
        $(this).parent().children(".apply_hint").hide();
        $(this).parent().children(".apply_success").hide();
        $(this).parent().children(".apply_warn").show();
        $(".username").parent().children(".apply_warn").html("4-12位英文数字、+、-、_");
    }
});
//登陆密码验证 ^[0-9A-Za-z]{6,10}$
$(".password").blur(function(){
    password = $(this).val();
    var uPattern = /^[0-9A-Za-z]{6,12}$/;
    var checkPsd =uPattern.test(password);
    if(!checkPsd){
        $(this).parent().children(".apply_hint").hide();
        $(this).parent().children(".apply_success").hide();
        $(this).parent().children(".apply_warn").show();
        $(".password1").prop("disabled",true);
        psdOk = false;
        return false;
    }else{
        $(this).parent().children(".apply_hint").hide();
        $(this).parent().children(".apply_success").show();
        $(this).parent().children(".apply_warn").hide();
        $(".password1").prop("disabled",false);
    }
});

$(".password1").blur(function(){
    password = $(".password").val();
    password1 = $(this).val();
    if(password1!=password){
        $(this).parent().children(".apply_hint").hide();
        $(this).parent().children(".apply_warn").show();
        psdOk = false;
        return false;
    }else{
        $(this).parent().children(".apply_hint").hide();
        $(this).parent().children(".apply_success").show();
        $(this).parent().children(".apply_warn").hide();
        psdOk = true;
    }
});
//支付密码验证
$(".paypsd").blur(function(){
    paypsd = $(this).val();
    var uPattern = /^\d{6}$/;
    var checkPaypsd =uPattern.test(paypsd);
    if(!checkPaypsd|| paypsd == password){
        $(this).parent().children(".apply_hint").hide();
        $(this).parent().children(".apply_warn").show();
        $(".paypsd1").prop("disabled",true);
        paypsdOk = false;
        return false;
    }else{
        $(this).parent().children(".apply_hint").hide();
        $(this).parent().children(".apply_success").show();
        $(this).parent().children(".apply_warn").hide();
        $(".paypsd1").prop("disabled",false);
    }
});
$(".paypsd1").blur(function(){
    paypsd = $(".paypsd").val();
    paypsd1 = $(this).val();
    if(paypsd1!=paypsd){
        $(this).parent().children(".apply_hint").hide();
        $(this).parent().children(".apply_warn").show();
        paypsdOk = false;
        return false;
    }else{
        $(this).parent().children(".apply_hint").hide();
        $(this).parent().children(".apply_success").show();
        $(this).parent().children(".apply_warn").hide();
        paypsdOk = true;
    }
});
//手机号码格式验证 ^\d{n,}$
//柬埔寨 新加坡 中国台湾 香港 韩国 美国 菲律宾 马来西亚 缅甸  泰国 老挝 印度尼西亚  越南
$(".tel").blur(function(){
    var regphone = /^\d{5,}$/;
    var uphone = $(".tel").val();
    console.log(uphone,typeof (uphone));
    $("#userphone").css("background-color", "white");
    if (uphone.length <= 0 || !regphone.test(uphone)) {
        $(this).parent().children(".apply_hint").hide();
        $(this).parent().children(".apply_warn").show();
        telOk = false;
    } else {
        $(this).parent().children(".apply_hint").hide();
        $(this).parent().children(".apply_success").show();
        $(this).parent().children(".apply_warn").hide();
        telOk = true;
    }
});
//点击选择国家区号
$(".country_num").hide();
$(".select_show").click(function(){
    $(".country_num").show();
});
//$(".select_country").mouseleave(function(){
//    $(".country_num").toggle();
//});
$(".country_num li").click(function(){
    $(".country_num").hide();
    var checkedNum = $(this).children(".country_font").text();
    $(".select_show").children(".country_name").html(checkedNum);
});

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
    var totalPhone = $(".select_show .country_name").text() + $(".tel").val();
    if (phone.length <= 0 || !regphone.test(phone)) {
        layer.msg("请填写正确的手机号");
    } else {
        $.post("http://localhost/index.php/Admin/agent/checkRegister",{"bj":"phone","phone":totalPhone},function(result){
            if(result == 1){
                layer.msg("手机已注册");

            }else{
                $.post("http://localhost/index.php/Admin/agent/SendSms",{"phone":totalPhone},function(result){
                    console.log(result);
                  });
                time();
            }
        });
    }
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

//邮箱验证
$(".email").blur(function(){
    var regemail = /^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;
    var uemail = $(".email").val();
    if (uemail.length <= 0 || !regemail.test(uemail)) {
        $(this).parent().children(".apply_hint").hide();
        $(this).parent().children(".apply_warn").show();
        emailOk = false;
    } else {
        $(this).parent().children(".apply_hint").hide();
        $(this).parent().children(".apply_success").show();
        $(this).parent().children(".apply_warn").hide();
        emailOk = true;
    }
});

//银行卡号验证
//银行卡号Luhn校验算法
//luhn校验规则：16位银行卡号（19位通用）:
//1.将未带校验位的 15（或18）位卡号从右依次编号 1 到 15（18），位于奇数位号上的数字乘以 2。
//2.将奇位乘积的个十位全部相加，再加上所有偶数位上的数字。
//3.将加法和加上校验位能被 10 整除。
function luhnCheck(bankno){
    var lastNum=bankno.substr(bankno.length-1,1);//取出最后一位（与luhn进行比较）

    var first15Num=bankno.substr(0,bankno.length-1);//前15或18位
    var newArr=new Array();
    for(var i=first15Num.length-1;i>-1;i--){    //前15或18位倒序存进数组
        newArr.push(first15Num.substr(i,1));
    }
    var arrJiShu=new Array();  //奇数位*2的积 <9
    var arrJiShu2=new Array(); //奇数位*2的积 >9

    var arrOuShu=new Array();  //偶数位数组
    for(var j=0;j<newArr.length;j++){
        if((j+1)%2==1){//奇数位
            if(parseInt(newArr[j])*2<9)
                arrJiShu.push(parseInt(newArr[j])*2);
            else
                arrJiShu2.push(parseInt(newArr[j])*2);
        }
        else //偶数位
            arrOuShu.push(newArr[j]);
    }

    var jishu_child1=new Array();//奇数位*2 >9 的分割之后的数组个位数
    var jishu_child2=new Array();//奇数位*2 >9 的分割之后的数组十位数
    for(var h=0;h<arrJiShu2.length;h++){
        jishu_child1.push(parseInt(arrJiShu2[h])%10);
        jishu_child2.push(parseInt(arrJiShu2[h])/10);
    }

    var sumJiShu=0; //奇数位*2 < 9 的数组之和
    var sumOuShu=0; //偶数位数组之和
    var sumJiShuChild1=0; //奇数位*2 >9 的分割之后的数组个位数之和
    var sumJiShuChild2=0; //奇数位*2 >9 的分割之后的数组十位数之和
    var sumTotal=0;
    for(var m=0;m<arrJiShu.length;m++){
        sumJiShu=sumJiShu+parseInt(arrJiShu[m]);
    }

    for(var n=0;n<arrOuShu.length;n++){
        sumOuShu=sumOuShu+parseInt(arrOuShu[n]);
    }

    for(var p=0;p<jishu_child1.length;p++){
        sumJiShuChild1=sumJiShuChild1+parseInt(jishu_child1[p]);
        sumJiShuChild2=sumJiShuChild2+parseInt(jishu_child2[p]);
    }
    //计算总和
    sumTotal=parseInt(sumJiShu)+parseInt(sumOuShu)+parseInt(sumJiShuChild1)+parseInt(sumJiShuChild2);

    //计算luhn值
    var k= parseInt(sumTotal)%10==0?10:parseInt(sumTotal)%10;
    var luhn= 10-k;

    if(lastNum==luhn){

        $(".banknum").parent().children(".apply_hint").hide();
        $(".banknum").parent().children(".apply_success").show();
        $(".banknum").parent().children(".apply_warn").hide();
        yhnumOk = true;
        //console.log("验证通过");
        return true;
    }else{
        $(".banknum").parent().children(".apply_hint").hide();
        $(".banknum").parent().children(".apply_success").hide();
        $(".banknum").parent().children(".apply_warn").show();
        yhnumOk = false;
        return false;
    }
}

//检查银行卡号
function CheckBankNo(bankno) {
    var bankno = bankno.replace(/\s/g,'');
    if(bankno.length < 16 || bankno.length > 19) {
        $(".banknum").parent().children(".apply_hint").hide();
        $(".banknum").parent().children(".apply_success").hide();
        $(".banknum").parent().children(".apply_warn").show();
        yhnumOk = false;
        return false;
    }
    var num = /^\d*$/;//全数字
    if(!num.exec(bankno)) {
        $(".banknum").parent().children(".apply_hint").hide();
        $(".banknum").parent().children(".apply_success").hide();
        $(".banknum").parent().children(".apply_warn").show();
        yhnumOk = false;
        return false;
    }
    //开头6位
    var strBin = "10,18,30,35,37,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,58,60,62,65,68,69,84,87,88,94,95,98,99";
    if(strBin.indexOf(bankno.substring(0, 2)) == -1) {
        $(".banknum").parent().children(".apply_hint").hide();
        $(".banknum").parent().children(".apply_success").hide();
        $(".banknum").parent().children(".apply_warn").show();
        yhnumOk = false;
        return false;
    }
    //Luhn校验
    if(!luhnCheck(bankno)){
        yhnumOk = false;
        return false;
    }
    return true;
}
$(".banknum").blur(function(){
    var bankNum = $(this).val();
    CheckBankNo(bankNum);
});

//用户名验证
$(".khname").blur(function(){
    var khname=$(this).val().replace(/(^\s+)|(\s+$)/g, "");//去除前后的空格
    if (!khname.match(/^[\u4e00-\u9fa5]{2,4}$/)) {//我习惯用match
        $(".khname").parent().children(".apply_hint").hide();
        $(".khname").parent().children(".apply_warn").show();
        khnameOK = false;
        return false;
    }else{
        $(".khname").parent().children(".apply_hint").hide();
        $(".khname").parent().children(".apply_success").show();
        $(".khname").parent().children(".apply_warn").hide();
        khnameOK = true;
    }
});


        