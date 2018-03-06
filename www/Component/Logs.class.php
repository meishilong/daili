<?php 

  namespace Component;
  
  class Logs{
	  
	  //记录代理商操作日志
	  
	  public function writelog($action,$username){
		  
		 $contents = "操作时间:".date("Y/m/d H:i:s",time());
         $contents .="。操作:".$action;
     	 $contents .= "。用户名:".$username."\r\n";
		  
        file_put_contents("./Logs/actionlogs.txt",$contents,FILE_APPEND);		  
	  }
	  
	  
	  //登录日志
	  public function loginlog($ip,$username){
		  
		 $contents = "登录时间:".date("Y/m/d H:i:s",time());
         $contents .="。IP来源:".$ip;
     	 $contents .= "。用户名:".$username."\r\n";
		  
		 file_put_contents("./Logs/loginlogs.txt",$contents,FILE_APPEND);
		  
	  }
	  
	  //监控收益数据交互
	  public function incomelog($ip,$data){
		  
		 $contents = "交互时间:".date("Y/m/d H:i:s",time());
         $contents .="。IP来源:".$ip;
     	 $contents .= "。收益数据:".$data."\r\n";
		  
		 file_put_contents("./Logs/incomelogs.txt",$contents,FILE_APPEND);
		  
	  }
	  
  }