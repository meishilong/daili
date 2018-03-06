<?php 

//代理端收入统计

namespace Home\Controller;

use Think\Controller;

class IncomeController extends Controller{
	
	//到推广收益统计页面 
	public function promoteMoney(){
		
        //日志记录
		$log = new \Component\Logs(); 
        $log->writelog("到推广收益统计页面 ",$_SESSION['agentusername']);
 
        //1判断是否登录成功
		if($_SESSION['agentusername']){
			
			//用户id 
			$id = $_SESSION['id'];
			
			//实例化代理商
			$formalagent = M("formalagent");
			
			$user = $formalagent->where('id = '.$id)->find();
			
			$promotemoney = M('promotemoney');
			
			//总数
			$count = $promotemoney->where("userid = '".$_SESSION['agentpromocode']."'")->count();
			
			
			//每页显示条数
			$pr = 8 ;
			
			$page =new \Component\Page($count,$pr);
			
			$sql = "select * from  mana_promotemoney  where userid = '".$_SESSION['agentpromocode']."' order by id desc ".$page->limit;
		
			$infos = $promotemoney->query($sql);
			
			//$infos = $promotemoney->where('userid='.$id)->select();
			$pagelist = $page -> fpage();
			
			$this->assign('pagelist',$pagelist);
			
			$this->assign('infos',$infos);
			$this->assign('username',$_SESSION['agentusername']);
			$this->assign('totalmoney',$user['totalmoney']);
			$this->display('promotmoney');
			
			
		}else{
			
			
		}
		 
		 
	}
	
	
}