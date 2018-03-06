<?php 

namespace Home\Controller;
use Think\Controller;

class  CenterController extends Controller{
	
	//到代理商个人中心
	public function tomycenter(){
		
		$agentname = $_SESSION['agentusername'];
		
		
		$applayagent = M('applyagent');
		
		$info = $applayagent->WHERE("username = '".$agentname."'")->find();
		
		$this->assign('emain',$info['mail']);
		$this->assign('phone',$info['phone']);
		$this->assign('applytime',$info['applytime']);
		$this->assign('agentusername',$agentname);
		
		$this->display('mycenter');
	}
	
	
	
	
	//到支付密码
	public function topaypassword(){
		$agentname = $_SESSION['agentusername'];
		if(IS_POST){
			$formalagent = M('formalagent');
			
			$arr = array(
			  'paypassword'=>$_POST['pwd1']
			);
			
			$formalagent->WHERE("username = '".$agentname."'")->save($arr);
			
			$this->tomycenter();
		}
		
		$this->assign('agentusername',$agentname);
		$this->display('changePayPsd');
	}
	
	//到登录密码
	public function tologinpassword(){
		$agentname = $_SESSION['agentusername'];
		if(IS_POST){
			$formalagent = M('formalagent');
			
			$arr = array(
			  'password'=>$_POST['pwd1']
			);
			
			$formalagent->WHERE("username = '".$agentname."'")->save($arr);
			
			$this->tomycenter();
		}
		
		$this->assign('agentusername',$agentname);
		
		$this->display('changeLoginPsd');
	}
	
	//到手机绑定
	public function tophone(){
		$agentname = $_SESSION['agentusername'];
		
		$applayagent = M('applyagent');
		
		$info = $applayagent->WHERE("username = '".$agentname."'")->find();
		
		
		$this->assign('phone',substr_replace($info['phone'],'****',6,4));
		$this->assign('fullphone',$info['phone']);
		$this->display('changeTel');
	}
	
	//到邮箱绑定
	public function tomail(){
		$agentname = $_SESSION['agentusername'];
		$applayagent = M('applyagent');
		
		if(IS_POST){
	        
			$arr = array(
			   'mail'=>$_POST['mail']
			);
			
			$applayagent->WHERE("username = '".$agentname."' AND pass=1 ")->save($arr);
			
			$this->tomycenter();
		}
		$info = $applayagent->WHERE("username = '".$agentname."' AND pass=1 ")->find();
		$this->assign('mail',$info['mail']);
		$this->display('changeEmail');
	}
	
	//到银行卡绑定
	public function tobanknum(){
		
		$agentname = $_SESSION['agentusername'];
		$applayagent = M('applyagent');
		
		if(IS_POST){
			$arr = array(
			   "bankaccountnumber"=>$_POST['bankaccountnumber'],
			   "accountbankname"=>$_POST['accountbankname'],
			   "bank"=>$_POST['bank']
			);
			
			$applayagent->WHERE("username = '".$agentname."' AND pass=1 ")->save($arr);
			
			$this->tomycenter();
			
		}
		$info = $applayagent->WHERE("username = '".$agentname."' AND pass=1 ")->find();
		$this->assign('bankaccountnumber',substr_replace($info['bankaccountnumber'],'***********',4,12));
		$this->assign('bank',$info['bank']);
		
		$this->display('changeBank');
		
	}
	
}