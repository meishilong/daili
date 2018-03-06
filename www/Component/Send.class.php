<?php 

//发送短信类

    namespace Component;
	
	class Send{
		
		//验证码类
		public function  Sendcode($phone){
			$send_mobile = $phone;

			$code = rand(100000,999999);
			
			if(strstr($send_mobile,'+86')){
				
				$tpl_content = "【郡安云】您的验证码是".$code."。如非本人操作，请忽略本短信";
			}else{
				
				$tpl_content = "【JunAn】Your verification  code is  ".$code."";
			}

			

			
			//验证码入库
			$yzm = M("yzmcode");
			
			$re =  $yzm->where("phone=".$send_mobile)->find();
			
			if($re==null){
				$array = array(
				   "phone"=>$send_mobile,
				   "yzm"=>$code
				);
				$yzm->add($array);
			}else{
				$array = array(
				   "yzm"=>$code
				);
				$yzm->where("phone=".$send_mobile)->save($array);
			}
			
			$this->Send($tpl_content,$send_mobile);
			
		}
		
		//通知类
		public function  Notify($bj,$send_mobile,$time=0,$money=0,$username='',$tel=0){
			
			//代理申请通过
			if($bj=="agentpass"){
				$tpl_content = "【郡安云】尊敬的用户，您申请入驻郡安云代理商已通过审核，可登录郡安云代理端平台进行管理，如有疑问请联系客服。";
			}
			//代理申请不通过
			if($bj=="agentnopass"){
				$tpl_content = "【郡安云】尊敬的用户，您申请入驻郡安云代理商未通过审核，原因可能是提交信息有误，请审核信息，重新提交，如有疑问请联系客服。";
			}
			//提现申请通过
			if($bj=="withdrawpass"){
				$tpl_content = "【郡安云】尊敬的用户，您于".$time."提交申请提现".$money."元，已经通过审核，请留意银行到账信息。";
			}
			//提现申请不通过
			if($bj=="withdrawnopass"){
				$tpl_content = "【郡安云】尊敬的用户，您于".$time."提交申请提现".$money."元，未能通过审核，请登录郡安云代理端平台查看原因，如有疑问请联系客服。";
			}  
			
		    //有提现短信提现boss
			if($bj=="toboss"){
				$tpl_content = "【郡安云】提现申请：申请时间：".$time."，代理商：".$username."， 提现金额：".$money." , 手机号：".$tel." , 请尽快处理。";
			} 
			
			
			//国际版短信
			
			//代理申请通过
			if($bj=="agentpassEn"){
				$tpl_content = "【JunAn】Dear users, you have applied for the approval of the JunAn  is passed, and can be managed by JunAn agent platform. If you have any questions, please contact the customer service.";
			}
			
			//代理申请不通过
			if($bj=="agentnopassEn"){
				$tpl_content = "【JunAn】Dear users, you have not passed the audit for the application for the JunAn agent in the county. The reason may be that the information submitted is incorrect. Please review the information and resubmit it. If you have any questions, please contact the customer service.";
			}
			
			
			$this->Send($tpl_content,$send_mobile);
			
		}
		
		
		
		
		//私有方法
		protected function Send($tpl_content,$send_mobile){
			  
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
	}
