<?PHP

if(!empty($_POST)){
     
	    function Send($tpl_content,$send_mobile){
			  
			$yunpian_appkey = '5d02aeea956ae2398366eeb4a2b68445';//云片账户appkey
			//初始化
			$ch       = curl_init();
			$data=array('text'=>$tpl_content,'apikey'=>$yunpian_appkey,'mobile'=>$send_mobile);
			curl_setopt ($ch, CURLOPT_URL, 'https://sms.yunpian.com/v2/sms/single_send.json');
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept:text/plain;charset=utf-8', 'Content-Type:application/x-www-form-urlencoded', 'charset=utf-8'));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_TIMEOUT, 10);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
			$send_data = curl_exec($ch);
			curl_close($ch);
			//解析返回结果（json格式字符串）
			$backmassage = json_decode($send_data,true);
			//echo '$backmassage ';
			//这里是写在了job里面所以记了个日志可忽略！
		   // Log::info('smsmessagelog: '.$send_data);
			//return [$backmassage,$send_data];
			
		}


        $tpl_content = "【郡安云】推广页反馈信息:    用户姓名:".$_POST['username'].",手机号:".$_POST['phone'].",邮箱:".$_POST['mail'].",QQ:".$_POST['qqnum']."";
		
		$ip = $_SERVER["REMOTE_ADDR"]."\r\n";

		$ips = file_get_contents("ips.txt");
		
		if(strstr($ips,$ip)){
			exit('该ip已经提交过了');
		}else{
			file_put_contents('ips.txt',$ip,FILE_APPEND);
			Send($tpl_content,13247008581);
		}
}

?>


<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--col-md-4 col-xs-4 col-sm-4-->
<!--头部-->
<div class="promote_one">
    <div class="promote_top">
        <a href="shu.jxjunan.com"></a>
        <span>400-606-6677</span>
    </div>
    <div class="pone_main">
        <h1>郡安云 专注网络安全</h1>
        <h2>COUNTRY ANN YUN    FOCUSED ON NETWORK SECURITY</h2>
		<form action='' id='form' method='POST'>
        <div class="pone_msg row">
            <ul class="col-xs-12 col-md-10 col-sm-10">
                <li><input class="username" type="text" name="username" placeholder="用户姓名"/></li>
                <li><input class="telphone" type="text" name="phone" placeholder="联系方式"/></li>
                <li><input class="email" type="text" name='mail' placeholder="邮箱地址"/></li>
                <li><input class="qq" type="text"  name='qqnum' placeholder="QQ号码"/></li>
            </ul>
            <div class="col-xs-12 col-md-2 col-sm-2">
               <a class="pone_btn"  href="javascript:void(0)"  onclick="$('#form').submit();">快捷注册</a>
            </div>

        </div>
		</form>
    </div>
</div>
<!--优势特点-->
<div class="promote_two">
    <div class="main">
        <h3>郡安云CDN&nbsp;优势特点</h3>
        <p class="produce">简单概述总结优势特点简单概述总结优势特点简单概述总结优势特点简单概述总结优势特点简单概述总结优势特点简单概述总结优势特点简单概述总结优势特点</p>
        <ul class="promote_ul">
            <li>
                <div class="pul_show">
                    <span class="pul_show_pic"></span>
                    <h3>安全可靠</h3>
                    <span class="detail">自主研发</span>
                    <div class="pul_p">
                        <p>自主研发的CDN架构嘟嘟</p>
                        <p>奇偶的骄傲飞机哦三等奖佛杀积分欧式金佛</p>
                        <p>奇偶的骄傲飞机哦三等</p>
                        <p>奇偶的骄傲飞机哦三等奖佛杀积分欧式金佛</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="pul_show">
                    <span class="pul_show_pic"></span>
                    <h3>安全可靠</h3>
                    <span class="detail">自主研发</span>
                    <div class="pul_p">
                        <p>自主研发的CDN架构嘟嘟</p>
                        <p>奇偶的骄傲飞机哦三等奖佛杀积分欧式金佛</p>
                        <p>奇偶的骄傲飞机哦三等</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="pul_show">
                    <span class="pul_show_pic"></span>
                    <h3>安全可靠</h3>
                    <span class="detail">自主研发</span>
                    <div class="pul_p">
                        <p>自主研发的CDN架构嘟嘟</p>
                        <p>奇偶的骄傲飞机哦三等奖佛杀积分欧式金佛</p>
                        <p>奇偶的骄傲飞机哦三等</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="pul_show">
                    <span class="pul_show_pic"></span>
                    <h3>安全可靠</h3>
                    <span class="detail">自主研发</span>
                    <div class="pul_p">
                        <p>自主研发的CDN架构嘟嘟</p>
                        <p>奇偶的骄傲飞机哦三等</p>
                        <p>奇偶的骄傲飞机哦三等奖佛杀积分欧式金佛</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--渠道合作-->
<div class="promote_two bk_white">
    <div class="main">
        <h3>郡安云CDN&nbsp;渠道合作</h3>
        <p class="produce">简单概述总结优势概述总结优势特点简单概述总结优势特点简单概述总结优势特点简单概述总结优势特点简单概述总结优势特点</p>
        <img class="promote_qdpic" src="images/qd.png">
    </div>
</div>
<!--自建节点 官方节点-->
<div class="promote_two relative">
    <div class="jiedian_pic"></div>
    <div class="main row">
        <div class="col-md-6 col-xs-12 col-sm-6 jiedian gf">
            <span>官方节点 优势特点</span>
            <p>用户能够自定义添加节点</p>
            <p>从而实现快速部署节点的目的</p>
            <p>该项服务本质上是对闲置资源的二次调度分配</p>
            <p>用户在利用自身闲置带宽资源的前提下</p>
            <p>通过郡安超级CDN平台自定义添加节点</p>
            <p></p>
            <p>用户端无需采购部署任何设备</p>
            <p>无需改动任何网络及服务器配置</p>
            <p>通过后台简单配置，解析CHAME即可快速接入</p>
            <img src="images/gf.png">
        </div>
        <div class="col-md-6 col-xs-12 col-sm-6 jiedian zj" >
            <img src="images/zj.png">
            <span>自建节点 优势特点</span>
            <p>高防CDN是由郡安云为网站用户</p>
            <p>推出应对DDoS攻击的增值付费服务</p>
            <p>用户在购买高防CDN后</p>
            <p>郡安超级CDN将屏蔽攻击流量</p>
            <p>并返回来源可靠的流量</p>
            <p></p>
            <p>用户端无需采购部署任何设备</p>
            <p>无需改动任何网络及服务器配置</p>
            <p>通过后台简单配置，解析CHAME即可快速接入</p>
        </div>
    </div>
</div>
<!--收益方式介绍-->
<div class="promote_two bk_white">
    <div class="main">
        <h3>郡安云CDN 代理收益方式介绍</h3>
        <p class="produce">34323</p>
        <div class="earnings">
            <span class="ear_right"></span>
            <div class="row earnings_list">
                <div class="col-md-2 col-sm-1"></div>
                <div class="col-md-2 col-sm-1"></div>
                <div class="col-md-7 col-xs-12 col-sm-9 earnings_show">
                    <span class="left one"></span>
                    <div class="right">
                        <span>一级代理</span>
                        <p>有效客户 （套餐销售量） 销售额10万元 20%，满足有效客户X个销售额10万元 即完成任务升级为高级代理。大哒哒哒哒哒大大大大哒哒哒啊大大哒哒哒哒哒哒哒哒啊大大哒哒哒哒哒哒 。</p>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1"></div>
            </div>
            <div class="row earnings_list">
                <div class="col-md-2 col-sm-1"></div>
                <div class="col-md-7 col-xs-12 col-sm-9 earnings_show">
                    <span class="left two"></span>
                    <div class="right">
                        <span>一级代理</span>
                        <p>有效客户 （套餐销售量） 销售额10万元 20%，满足有效客户X个销售额10万元 即完成任务升级为高级代理。大哒哒哒哒哒大大大大哒哒哒啊大大哒哒哒哒哒哒哒哒啊大大哒哒哒哒哒哒 。</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-1"></div>
                <div class="col-md-1 col-sm-1"></div>
            </div>
            <div class="row earnings_list">
                <div class="col-md-7 col-xs-12 col-sm-9 earnings_show">
                    <span class="left three"></span>
                    <div class="right">
                        <span>一级代理</span>
                        <p>有效客户 （套餐销售量） 销售额10万元 20%，满足有效客户X个销售额10万元 即完成任务升级为高级代理。哒哒哒哒哒大大大大哒哒哒啊大大哒哒哒哒哒哒哒哒啊大大哒哒哒哒哒哒 。</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-1"></div>
                <div class="col-md-2 col-sm-1"></div>
                <div class="col-md-1 col-sm-1"></div>
            </div>
        </div>
    </div>
</div>
<!--立即加入-->
<div class="promote_two join">
    <div class="main">
        <h3>加入成为郡安云CDN代理商</h3>
        <div class="join_main">
            <span class="one">提交申请</span>
            <p></p>
            <span class="two">等待审核</span>
            <p></p>
            <span class="three">签订协议</span>
            <p></p>
            <span class="four">开通服务</span>
        </div>
        <a href="" class="join_btn">申请加入</a>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="index.js"></script>

</body>
</html>