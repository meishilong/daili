<?php
namespace Home\Controller;
use Think\Controller;

// 代理端登录模块 

class IndexController extends Controller {

	/* 到代理端首页 */
	public function index(){
		//判断用户是否已经登录 并且时间没有过期
		 if($_SESSION['agentusername']){
			 
			//日志记录
			$log = new \Component\Logs();
			
			$log->loginlog($_SERVER['REMOTE_ADDR'],$_SESSION['agentusername']);
				
			//获取昨天收益
            $yestodymoney = $this->getUserYestodymoney($_SESSION['agentpromocode']);
					
		    session('yestodymoney', $yestodymoney);
				
			//正式代理商表
			
		    $formalagent = M('formalagent');
			//获取收益表
			$promotemoney = M('promotemoney');
			
			
			//获取当前代理商用户信息
			$whereinfos = "username='".$_SESSION['agentusername']."'";
			
			$user = $formalagent->where($whereinfos)->find();
			//获取当前代理商收益信息
			$infos = $promotemoney->where('userid='.$_SESSION['id'])->select();
			
		    $this->assign('yestodymoney',$yestodymoney);
			$this->assign('user',$user);
			$this->assign('infos',$infos);
			
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
			$formalagent = M('formalagent');
			
			//先查看表里有无该用户名
			$whereinfos = "username='".$_POST['username']."'";
			
			$user = $formalagent->where($whereinfos)->select();

			if($user==null){
				$data =array(
				  "0"
				); 
				$this->ajaxReturn($data,'JSON'); 
			}else if($user[0]['password']==$_POST['password']){
					session('agentusername',$user[0]['username']);
					session('agentpromocode',$user[0]['promocode']);
					session('id',$user[0]['id']);
					
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
	
	//得到用户昨日收益
	protected function getUserYestodymoney($promocode){

		
		//昨天收益
		$yestodymoney = 0;
		//获取用户昨日收益
		$promotemoney = M('promotemoney');
					
		$res = $promotemoney->where("userid='".$promocode."' AND  time = '".date("Y-m-d",strtotime("-1 day"))."'")->select();
		
        if($res!=null){
			foreach($res as $re){
				$yestodymoney += $re['money'];
			}
		}
		
		return $yestodymoney;
	}
	
	//得到用户昨天具体收益细节，提供给圆饼图用
	public function getXj(){
		
		$promotemoney = M('promotemoney');
			
        $promocode = $_SESSION['agentpromocode'];		
		
		$res = $promotemoney->where("userid='".$promocode."' AND  time = '".date("Y-m-d",strtotime("-1 day"))."'")->select();
		
		$newarraylist = array();
        if($res!=null){
			foreach($res as $re){
				$newarray = [];
				switch($re['product']){
					case 'B':
						$newarray['value'] =  intval($re['money']);
						$newarray['name'] = "普通套餐";
						break;
					case 'C':
						$newarray['value'] = intval($re['money']);
						$newarray['name'] = "高级套餐";
						break;
					case 'D':
						$newarray['value'] = intval($re['money']);
						$newarray['name'] = "VIP套餐";
						break;
					case 'E':
						$newarray['value'] = intval($re['money']);
						$newarray['name'] = "钻石套餐";
						break;
					case 'F':
						$newarray['value'] = intval($re['money']);
						$newarray['name'] = "超级VIP套餐";
						break;
					case 'G':
						$newarray['value'] = intval($re['money']);
						$newarray['name'] = "尊贵专享套餐A";
						break;
					case 'H':
						$newarray['value'] = intval($re['money']);
						$newarray['name'] = "尊贵专享套餐B";
						break;
					case 'I':
						$newarray['value'] = intval($re['money']);
						$newarray['name'] = "尊贵专享套餐C";
						break;
					case 'DNS':
						$newarray['value'] = intval($re['money']);
						$newarray['name'] = "DNS套餐";
						break;
					
				}
                  				
				array_push($newarraylist,$newarray);
			}
		}
		//var_dump();
		//echo json_encode($);
		$this->ajaxReturn($newarraylist);
	}
	
	
		
}