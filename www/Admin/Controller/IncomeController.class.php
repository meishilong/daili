<?php 

//总控端进行推广者收益配置

namespace Admin\Controller;

use Think\Controller;


class IncomeController extends Controller{
	  
	  //到一级代理配置页面
	  public function incomeSet($degreenum=1){
		  
		  
		  if(!$_SESSION['adminname']){
			  
			 $this->redirect("Index/login");
		  }
		  /*
		  if(!isset($degreenum)){
			  $degreenum = 1;
		  }
		  */
  
		  //获取配置数据
		  $incomeset = M('incomeset');
		  
		  $infos =  $incomeset->where("mode=1 AND agentdegree=".$degreenum."")->select();
		  
		  $this->assign('infos',$infos);
		  
		  $this->assign('adminname',$_SESSION['adminname']);
		  
		  
		  $moban = "incomeset".$degreenum;
		  
		  $this->display($moban);
		  
	  }
	  
	  
	  
	  
	 //修改具体某一套餐收益配置
	 public  function updateIncomeSet(){
		 
		 
		 $incomeset = M('incomeset');
		 
		 $arr = array('setting'=>$_POST['setting'],'settingnum'=>$_POST['settingnum']);
		 
		 $result = $incomeset->where('id='.$_POST['id'])->save($arr);
		 
		 if($result==1){
			 
			// $this->incomeSet();
			$this->ajaxReturn ("更新成功",'JSON');
			 
		 }else{
			 
			 $this->ajaxReturn ("无数据更新",'JSON');
		 }
		 
		 
	 }
	 
	 
	 //每天定时接收来自服务器的POST请求，该请求带有当天网站全部会员购买套餐情况 形如 {'promocode':'user','product':'B','money':4560} 的json格式
	 //数据入库前 需要按照当天套餐配置比例 进行入库操作 
	 
	 public function getAllOrders(){
		 
        $promotemoney = M('promotemoney');
        $incomeset = M('incomeset');
        $formalagent =M('formalagent');
		
		 //一天只允许请求一次
		 
		 
		 $re =  $promotemoney->where("time  = '".date("Y-m-d",time())."'")->find();
         if($re!=null){
			 exit('已经执行了一次');
		 }
     
         //获取指定服务器数据
	
		 
        if($_SERVER["HTTP_X_FORWARDED_FOR"]=="47.92.77.100"){
		    $datas = file_get_contents("php://input"); //接受cdn订单数据
		}else{ 
			$logs =  new \Component\Logs();
			
			$logs ->incomelog($_SERVER["HTTP_X_FORWARDED_FOR"],'非法数据来源');
			exit("不是服务器来的数据");
		}		
		  
        
		 $datas = file_get_contents("php://input");
		
         $arrs =  explode('|',$datas); 
         
         $arrlist = array();
         
		 $logsdata = '';
		 
         foreach($arrs as $arr){
             $newarr =array();
             $arr =  explode(',',$arr);
			 //判断用户当前属于什么代理等级，更具等级来获取不同的提出比例
			
			 $user =  $formalagent->where("promocode='". $arr[0]."'")->find();
             $re = $incomeset->where("producttype='". $arr[1]."' AND agentdegree=".$user['agentdegree']." ")->find();
            
             
             //构造日志数据			 
			 $logsdata .=  $arr[0].','.$arr[1].','.$arr[2].'||'; 
			 
			 
             if($re['setting']==1){
                //百分比
                $arr[2] = ($arr[2]*$re['settingnum'])/100;
             }else{
                //固定金额
				
                 $arr[2] = ( $arr[2]/$re['productPrice'])*$re['settingnum']; 
				 
             }   	

			 
             $user['balance']  = (float)$user['balance'] + $arr[2];
			 $user['totalmoney']  = (float)$user['totalmoney'] + $arr[2];
             $userarr =array(
                 'id'=>$user['id'],
                 'balance'=>$user['balance'],
				 'totalmoney'=>$user['totalmoney']
             );
             
             $formalagent->save($userarr);
                
             $newarr['userid'] = $arr[0];
             $newarr['product'] = $arr[1];
             $newarr['money'] = $arr[2];
             $newarr['time'] = date("Y-m-d",time()); 
             
             $arrlist[] =  $newarr;
         }
		    //收益来源入库
		    $promotemoney->addAll($arrlist);
			
			//收益日志
			$logs =  new \Component\Logs();
			
			$logs ->incomelog($_SERVER["HTTP_X_FORWARDED_FOR"],$logsdata);
			
	
	 }
	 
	 //每个月接受来自CDN服务器post请求数据，根据该代理商上个月的业绩。 判断并修改代理商用户等级。每月1号1点1分执行
	 public function getAgentDegree(){
		 
		 $formalagent =M('formalagent');
		 
		 $datas = file_get_contents("php://input");
		 
		 /*
			if($_SERVER["HTTP_X_FORWARDED_FOR"]=="47.92.77.100"){
				$datas = file_get_contents("php://input"); //接受cdn订单数据
			}else{ 
				$logs =  new \Component\Logs();
				
				$logs ->incomelog($_SERVER["HTTP_X_FORWARDED_FOR"],'非法数据来源');
				exit("不是服务器来的数据");
			}
		 
		 */
		 
		 $arrs = explode('|',$datas);
		 
		 foreach($arrs as $arr){
			 $arr = explode(',',$arr);
			 $formalagent->agentdegree = $arr[1];
			 $formalagent->WHERE("promocode='".$arr[0]."'")->save();
	
		 } 
	 }
}