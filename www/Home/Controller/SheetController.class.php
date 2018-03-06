<?php 

//代理端财务报表

namespace Home\Controller;

use Think\Controller;

class SheetController extends Controller{
	
	  //获取所有财务信息  推广码是唯一的 所以选择通过推广码作为唯一标示
	  public function getDatas(){
		  
		  
		 if($_SESSION['agentusername']){
				
		        //$formalagent = M('formalagent');
			   //实例化数据表
			   $agentsheet = M('agentsheet');
			   
			   $promocode = $_SESSION['agentpromocode'];
			   
			   $count = $agentsheet->where("promocode='".$promocode."'")->count();
			   
			    //分页
				//每页显示条数
				$pr = 8 ;
				
				$page =new \Component\Page($count,$pr);
				
				$sql = "select * from  mana_agentsheet where promocode='".$promocode."' ".$page->limit;
			
				$infos = $agentsheet->query($sql);
				 
				 $pagelist = $page -> fpage();	
				 $this->assign('pagelist',$pagelist);
				 $this->assign("infos",$infos);
				 $this->assign('username',$_SESSION['agentusername']);
				 $this->display('agentsheet');
			
		 }else{
			$this->redirect("Index/login");
			
		 }

	  }
	  
	  //导出表格
	  public function exportSheet(){
		    //获得日期
			//$starttime =  strtotime($_GET['starttime']);
			//$endtime =  strtotime($_GET['endtime']);
		  
            //日志记录
		    $log = new \Component\Logs(); 
            $log->writelog("财务表格导出",$_SESSION['agentusername']);
			
			$filename = '提现记录'.date('YmdHis');  
			$header = array('时间','项目','金额','套餐','状态','操作用户');  
			$index = array('time','project','money','product','state','username');  
			
			//实例化代理数据
			$agentsheet = M('agentsheet');
			//获取推广码
			$promocode = $_SESSION['agentpromocode'];
			
			$list = $agentsheet->field('time,project,money,product,state,username')->where("promocode='".$promocode."' AND  time  between  unix_timestamp( '".$_GET['starttime']."') and unix_timestamp( '".$_GET['endtime']."' )  ")->select();
			
			if($list==null){
				exit('无数据');
			}
			
			$arrays = array();
			foreach($list as $li){
			
			   $li['time'] = date("Y/m/d",$li['time']);
			   if($li['state']==0){
				   $li['state'] = "申请中";
			   }else if($li['state']==1){
				   $li['state'] = "已提现";
			   }else{
				   $li['state'] = "被驳回";
			   }
			   
               $arrays[] = $li;   
			}
			
			$this->createtable($arrays,$filename,$header,$index);  
	  }
	  
	  //表格方法
	  protected function createtable($list,$filename,$header=array(),$index = array()){    
		header("Content-type:application/vnd.ms-excel");    
		header("Content-Disposition:filename=".$filename.".xls");    
		$teble_header = implode("\t",$header);  
		$strexport = $teble_header."\r";  
		foreach ($list as $row){    
			foreach($index as $val){  
				$strexport.=$row[$val]."\t";     
			}  
			$strexport.="\r";   
	  
		}    
		$strexport=iconv('UTF-8',"GB2312//IGNORE",$strexport);    
		exit($strexport);       
   }
	
}
        