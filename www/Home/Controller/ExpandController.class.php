<?php


//代理商推广页面 管理

namespace Home\Controller;

use Think\Controller;

class  ExpandController extends Controller{
	
    //生成静态推广页面
     public function build(){
           
        //日志记录
		$log = new \Component\Logs(); 
        $log->writelog("生成静态推广页面,QQ:".$_POST['qq'].",手机号:".$_POST['phone'],$_SESSION['agentusername']);
		  
		$contents =  file_get_contents("./Public/expand.html");//获取共同资源文件
		
		$re = str_replace(array("{qqnum}","{phonenum}","{promocode}"),array($_POST['qq'],$_POST['phone'],$_POST['promocode']),$contents);
		
	    file_put_contents("./Home/View/Expand/".$_POST['promocode'].".html",$re);
		
		//保存推广链接到数据表
		$formalagent =  M('formalagent');
		
		$link = "http://localhost/index.php/Home/expand/tohtml?promocode=".$_POST['promocode'];
		$array=array(
		 
		  "promolink"=>$link
		);
		
	 	$formalagent->where( "promocode='".$_POST['promocode']."'")->save($array);
		

		$this->redirect("Index/index");
		
		
    }
	
	//到静态页面
	public function tohtml($promocode){
		
		$this->display($promocode);
		
	}
	
}

