<?php

//后台代理商管理模块

namespace Admin\Controller;

use  Think\Controller;

class AgentController extends  Controller{

	
	//申请代理页面 并提交数据库
	
	public function applyAgent(){

		if(IS_POST){

			$applyagent = M('applyagent');
			
			$filters = new \Component\Filters();
			
			
			
            $arr = array(
			  'username'=>$filters->strFilter($_POST['username']),
			  'password'=>$filters->strFilter($_POST['password']),
			  'paypassword'=>$filters->strFilter($_POST['paypassword']),
			  'bankaccountnumber'=>$filters->strFilter($_POST['bankaccountnumber']),
			  'accountbankname'=>$filters->strFilter($_POST['accountbankname']),
			  'bank'=>$filters->strFilter($_POST['bank']),
			  'phone'=>$filters->strFilter($_POST['phone']),
			  'main'=>$_POST['email'],
			  'applytime'=>time(),
			  'state'=>0,
			  'pass'=>0,
			);
			
			
			$result = $applyagent->add($arr);
			
			if($result!='null'){
				//echo "<center><font color='green' size='60px'>已经提交申请，请耐心等待审核</font></center>";
			}else{
				//echo "提交失败，请重新提交";
			}

		}else{
		    $this->assign('adminname',$_SESSION['adminname']);
			$this->display('applyAgent');
		}
		
	}


	//用户在正式提交申请表单前 对一些关键字段进行审核判断

	public  function checkRegister(){
		 $bj = $_POST['bj'];

		 //判断验证码
		 if($bj=='yzm'){
			 $phone = $_POST['phone'];
			 $yzmcode = $_POST['yzmcode'];

			 $yzm = M('yzmcode');

			 $re =  $yzm->where("phone='".$phone."' AND yzm = '".$yzmcode."'")->find();

			 if($re==null){
				  exit(json_encode(1));
			 }else{
				  exit(json_encode(2));
			 }
		 }

		 //判读用户名
		 if($bj=='username'){
			 $username = $_POST['username'];
			 $applyagent = M('applyagent');

			 $re = $applyagent->where("username='".$username."'")->find();
			 if($re!=null){
				  exit(json_encode(1));
			 }else{
				  exit(json_encode(2));
			 }
		 }
		 //判断手机
		 if($bj=='phone'){
			 $phone = $_POST['phone'];

			 $applyagent = M('applyagent');

			 $re = $applyagent->where("phone='".$phone."' AND pass=1 ")->find();
			 if($re!=null){
				 exit(json_encode(1));
			 }else{
				 exit(json_encode(2));
			 }
		 }


	}
	
	
	//代理页面功能  获取代理申请  该功能为后台管理者所有 
	
	public  function getApplayAgentInfos($state=0){
		
			$applyagent = M('applyagent');
			
			$infos = $applyagent->where('state='.$state)->select();
			
			$this->assign('infos',$infos);
		    $this->assign('adminname',$_SESSION['adminname']);
			$this->display('ApplayAgentList');
		
	}
	
	//入驻审核
   public function check(){
        $msg =  new \Component\Send(); 
		 
		$applyagent = M('applyagent');   
		  
		//审核结果入库
		if(IS_POST){
			
			$arr = array(
			  
			  'state'=>1,
			  'pass'=>$_POST['result'],
			  'message'=>$_POST['message']
			);
			
			$applyagent->where('id='.$_POST['uid'])->save($arr);
		    
			//如果$_POST['result'] 为 1 则表明审核通过 ，那么就在正式代理商表中插入该条记录
			$applys = $applyagent->where('id='.$_POST['uid'])->find();
			if($_POST['result']==1){
			    
				$promocode = substr($applys['phone'],7,4).rand(1000,9999);
				
				$arr = array(
				   'username'=>$applys['username'],
				   'totalmoney'=>0,
				   'billed'=>0,
				   'balance'=>0,
				   'password'=>$applys['password'],
				   'paypassword'=>$applys['paypassword'],
				   'freeze'=>0,
				   'promocode'=>$promocode,
				   'createtime'=>time()
				);
				
				
			   	$formalagent =  M('formalagent');
				$formalagent->add($arr);
				
				$msg->Notify('agentpass',$applys['phone']);
				
			}else{
				
				$msg->Notify('agentnopass',$applys['phone']);
			}
			
            $this->ajaxReturn("提交审核成功"); 
		}
  
   }
      ///正式代理商的管理方法  
      
	  //获取所有正式代理商列表
     public function getFormalAgentList(){
		 
			   $formalagents =  M('formalagent');
			   
			   $infos = $formalagents->select();
			   
			   $this->assign('infos',$infos);
			   
			   $this->assign('adminname',$_SESSION['adminname']);
			   $this->display('getFormalAgentsList');
	 }


	//获取该代理商下的会员列表  通过POST请求到后端服务器数据库 
	public function  getMembers(){
		$promocode = $_POST['promocode'];
		$url  = "http://api.jxjunan.com:8000/agent/getMembersList/?promocode=".$promocode;
		$data = file_get_contents($url);
		
		$this->ajaxReturn ($data,'JSON');
      
		
	}
	
	public function getFormalAgentUser($promocode){
		
		$this->assign('promocode',$promocode);
		$this->display('getMembersList');
		
	}
	
	//发送短信验证码
	public function SendSms(){
		
		$phone =  $_POST['phone'];
		
		$msg =  new \Component\Send(); 
		
		$msg->Sendcode($phone);
	
    }
   
   
   
   
   




	
	
}
        