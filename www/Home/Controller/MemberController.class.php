<?php 

namespace Home\Controller;
use Think\Controller;

//会员控制模块

class MemberController extends Controller{
	
	//获取该代理商下的会员列表  通过POST请求到后端服务器数据库 
	public function  getMembers(){

		$promocode = $_SESSION['agentpromocode']; 
	   
		$url  = "http://api.jxjunan.com:8000/agent/getMembersList/?promocode=".$promocode;
		$data = file_get_contents($url);
		$this->ajaxReturn ($data,'JSON');
		
	}
	
	public function toMembers(){

          //日志记录
		  $log = new \Component\Logs(); 
          $log->writelog("进行代理商下级用户查看",$_SESSION['agentusername']);
		  
		 if($_SESSION['agentusername']){
				
            $this->assign('username',$_SESSION['agentusername']);
		    $this->display('getMembersList');
			
		 }else{
			
			$this->redirect("Index/login");
			
		 }
		

		
	}
	
	
	
}