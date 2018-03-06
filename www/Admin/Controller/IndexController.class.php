<?php 

//后台登录界面控制器  提供后台登录 登出 验证并跳转到后台index页面的方法

namespace Admin\Controller;

use  Think\Controller;

class IndexController extends Controller{
	
	/* 到后台首页 */
	public function index(){
		//判断用户是否已经登录 并且时间没有过期
		 if(!empty($_SESSION['adminname'])){
				
			$this->assign('adminname',$_SESSION['username']);
             
			$formalagent = M('formalagent');
			
			$agentnum = $formalagent->count();
			
			$this->assign('agentnum',$agentnum);
            			
			$this->display('index');
		 }else{
			 $this->login();
		 }
	}

	
	//判断登录是否通过
	public function checklogin(){
		
		if(!empty($_POST)){
		
		    $verifycode = $_POST['verifycode'];

		    //验证码
		    if($this->check($verifycode)){

			//判断账号登录密码是否正确
			$account = D('account');
			
			//先查看表里有无该用户名
			$whereinfos = "username='".$_POST['username']."'";
			
			$user = $account->where($whereinfos)->select();

			if($user==null){
				$data =array(
				  "0"
				); 
				$this->ajaxReturn($data,'JSON'); 
			}else if($user[0]['password']==$_POST['password']){
	  
                    session('adminname',$user[0]['username']);
				    $data =array(
						  "3"
						); 
					$this->ajaxReturn($data,'JSON'); 
			}else{
				$data =array(
				  "1"
				); 
				$this->ajaxReturn($data,'JSON'); 
			}

		 }else{
			$data =array(
			  "2"
			); 
			$this->ajaxReturn($data,'JSON'); 
		 }

		}
		
	}
	
	/* 到登录界面 */
	public function login(){

		$this->display('login');

	}
	

	
	/*  后台登出方法*/
	public function logout(){
	
	    session(null);
		
		$this->display('login');
           
	}
	/*  生成登录验证码 */
	public function Verify(){
		/* 验证码样式选项*/
		$config = array(
		   'useNoise' => FALSE,  //杂点
		   'length'  => 4,      //验证码字符数

		);
		
		
		$verify = new \Think\Verify($config);
		
		$verify->entry();
	}
	
	//验证码检测 
	
	public function check($code,$id=''){
		 
		$verify = new \Think\Verify();    
		
		return $verify->check($code, $id);
		
	}
	

	
	
	
	
}