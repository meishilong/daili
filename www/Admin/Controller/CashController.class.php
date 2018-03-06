<?php 

//总管理端对提现操作管理

namespace Admin\Controller;

use Think\Controller;


class CashController extends Controller{
	
	//到代理申请提现页面 
	public  function showWithdraw($pass){
		 if(!$_SESSION['adminname']){
			  
			 $this->redirect("Index/login");
		  }
		
		
		$cash = M('cash');
		$formalagent = M('formalagent');
		
		//代理页面提交的审核信息
		if(!empty($_POST)){
			 
			$msg =  new \Component\Send(); 
		   
		    $arr = array(
			  "pass"=>1,
			  "state"=>$_POST['state'],
			  "id"=>$_POST['id'],
			  "message"=>$_POST['message']
			);
			
			$result = $cash->save($arr);
			
			//实例化财务报表
			$agentsheet = M('agentsheet');
			
			//短信通知审核结果
			$re =  $cash->where('id='.$_POST['id'])->find();
			if($_POST['state']==1){
                
				 
				//已结账数据更新
				$agentuser = $formalagent->where("username='".$re['agentname']."'")->find();
				
				$billed =$agentuser['billed'] + intval($re['withdrawmoney']);
				
				$array = array(
				   "billed"=>$billed
				);
				$formalagent->where("username='".$re['agentname']."'")->save($array);
				
				
				//更新财务报表

				$agentsheet -> state = 1;
				$agentsheet->where("time = '".$re['applytime']."'")->save();
				 
				
				$msg->Notify('withdrawpass',$re['phone'],date("Y-m-d H:i",$re['applytime']),$re['withdrawmoney']);
			}else{
				
				//审核不通过，用户余额还原
				$agentuser = $formalagent->where("username='".$re['agentname']."'")->find();
				$balance =(float)$agentuser['balance'] + (float)$re['withdrawmoney'];
				$array = array(
				   "balance"=>$balance
				);
				$formalagent->where("username='".$re['agentname']."'")->save($array);
				
				//更新财务报表 

				$agentsheet -> state = 2;
				$agentsheet->where("time = '".$re['applytime']."'")->save();
				
				
				$msg->Notify('withdrawnopass',$re['phone'],date("Y-m-d H:i",$re['applytime']),$re['withdrawmoney']);
			}
			
			
			if($result){
				echo "已提交";
			}else{
				echo "no";
			}
              
			
		}else{
                   
				/*

       		    $whereinfo ="pass=".$pass;
				
				$infos = $cash->where($whereinfo)->select();
				
				$this->assign('infos',$infos);
		        $this->assign('adminname',$_SESSION['adminname']);
				$moban = "withdraw".$pass;
				$this->display($moban);
				
				*/
				$whereinfo = "pass=".$pass;
				
				$count = $cash->WHERE($whereinfo)->count();
				
				$pr = 8;
				
				$page = new \Component\Page($count,$pr);
				
				$pagelist = $page -> fpage();
				
				$sql = "SELECT * FROM mana_cash WHERE pass=".$pass." ".$page->limit;
				
				$infos = $cash->query($sql);
				
				
				$this->assign('infos',$infos);
				
		        $this->assign('adminname',$_SESSION['adminname']);
				
				$this->assign('pagelist',$pagelist);
				
				$moban = "withdraw".$pass;
				
				$this->display($moban);
				
				
				
				
		}
	}
	
}

  

        
        
        
        