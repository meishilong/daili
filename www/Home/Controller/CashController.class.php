<?php 

//代理端对提现操作管理

namespace Home\Controller;

use Think\Controller;


class CashController extends Controller{
	
	//实时获取代理商用户推广情况
	public function  getNowMoney(){
		$promocode = $_SESSION['agentpromocode']; 
	    $url  = "http://api.jxjunan.com:8000/agent/getNowMoney/?promocode=".$promocode;
		$datas = file_get_contents($url);
	    $arrs =  explode('|',$datas);
		
		$num = 0;
		foreach($arrs as $arr){
			$arr =  explode(',',$arr);
			$num +=$arr[1];
		}
		echo $num;
	}

	public  function showWithdraw(){
		  //过滤
		  $filters = new \Component\Filters();
		  
		
		  //日志记录
         $log = new \Component\Logs();		  
		
		 if(!$_SESSION['agentusername']){
			 $this->redirect("Index/login");
		 }

		$formalagent = M('formalagent');
		$cash = M("cash");
        $applyagent = M('applyagent');
		
		//到申请提现页面
		if(empty($_POST)){
			
			//日志记录
			$log->writelog("到申请提现页面",$_SESSION['agentusername']);
			
			
			
			//获取代理商信息
			$whereinfo = "id=".$_SESSION['id'];
			$user = $formalagent->where($whereinfo)->find();
			
			//获取提交的历史提现信息
			$cashwhere = "agentname="."'".$user['username']."'";
			//分页
			$count = $cash->where($cashwhere)->count();
			$pr = 8 ;
			
			$page =new \Component\Page($count,$pr);
			
			$sql = "select * from  mana_cash  where ".$cashwhere." ORDER BY id desc ".$page->limit;
			
			$historycashapply = $cash->query($sql);
			$pagelist = $page -> fpage();
			$this->assign('pagelist',$pagelist);
			
			//获取代理商银行信息

			$applywhere = "username="."'".$user['username']."' AND pass=1";
			$bankinfo = $applyagent->where($applywhere)->find();

			$this->assign('bank',$bankinfo);
			
			$this->assign('historylist',$historycashapply);
			
			$this->assign('user',$user);
            $this->assign('username',$_SESSION['agentusername']);
			$this->display('applywithdraw');
			
			
		}else{
		    //提交提现申请后  进行判断  在进行入库
			//获取POST
			$userid = $filters->strFilter($_POST['userid']);
			$paypassword = $filters->strFilter($_POST['paypassword']);
			$withdrawmoney = $filters->strFilter($_POST['withdrawmoney']);
			$username = $filters->strFilter($_POST['username']);
			$message = $filters->strFilter($_POST['message']);
			
			//提现金额限制 一级:5w 比例:10%   二级:7w 比例:15%   三级:10w 比例:20%

			if(50000<=$withdrawmoney and $withdrawmoney<70000){
				$withdrawmoney = (float)$withdrawmoney*0.1;
			}
			if(70000<=$withdrawmoney and $withdrawmoney<100000){
				$withdrawmoney = (float)$withdrawmoney*0.15;
			}
			if($withdrawmoney>=100000){
				$withdrawmoney = (float)$withdrawmoney*0.2;
			}
			
			
			//判断支付密码是否正确
			$whereinfo = "id=".$userid." AND paypassword="."'".$paypassword."'";
			 
			$user = $formalagent->where($whereinfo)->find(); 
			
			//日志记录
			$log->writelog("进行提现操作,申请提现金额:".$_POST['withdrawmoney'],$_SESSION['agentusername']);
			
			if($user){
			//密码正确 判断余额是否充足
				if((float)$withdrawmoney > (float)$user['balance']){
					$this->ajaxReturn ("可提现金额不足",'JSON');
					
				}else{
			//同一时间
            $time = time();			
			//财务报表数据
              $agentsheet = M('agentsheet');	
              $sheeetarr = array(
			      'time'=>$time,
				  'project'=>"提现",
				  'money'=>$withdrawmoney,
				  'product'=>'-',
				  'state'=>'0',
				  'username'=>$username,
				  'promocode'=>$_SESSION['agentpromocode']
				  
				 
			  );			  
					
			//密码正确 获取银行信息
					$applywhere = "username="."'".$username."' AND pass=1";
					$bankinfo = $applyagent->where($applywhere)->find();
					
					$arr = array(
					   "applytime"=>$time,
					   "withdrawmoney"=>$withdrawmoney,
					   "agentname"=>$username,
					   "bank"=>$bankinfo['bank'],
					   "accountbankname"=>$bankinfo['accountbankname'],
					   "bankaccountnumber"=>$bankinfo['bankaccountnumber'],
					   "phone"=>$bankinfo['phone'],
					   "message"=>$message,
					   "state"=>0,
					   "pass"=>0
					);
					//申请入库
					$cash->add($arr);	
					//财务入库
					$agentsheet->add($sheeetarr);
					//更新代理商余额字段
					$balance = intval($user['balance']) - intval($withdrawmoney);
					$formalagent->balance = $balance;
					$formalagent->where("id=".$_SESSION['id'])->save();
					//发送短信给boss
					$send = new \Component\Send();
					$send->Notify('toboss',BOSS_PHONE,date('Y-m-d H:i',time()),$withdrawmoney,$username,$bankinfo['phone']);
					
					$this->ajaxReturn ("提交成功，请等待审核",'JSON');
					
				}

			}else{
				 $this->ajaxReturn ("支付密码错误",'JSON');
			}

		}
	
	}

}

  

        