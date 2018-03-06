<?php 

  namespace Component;
  
  class Filters{
	  
	  //对入库的字段进行过滤
	  public function strFilter($str){
		  
			$str = str_replace('`', '', $str);
			$str = str_replace('·', '', $str);
			$str = str_replace('~', '', $str);
			$str = str_replace('!', '', $str);
			$str = str_replace('！', '', $str);
			$str = str_replace('@', '', $str);
			$str = str_replace('#', '', $str);
			$str = str_replace('$', '', $str);
			$str = str_replace('￥', '', $str);
			$str = str_replace('%', '', $str);
			$str = str_replace('^', '', $str);
			$str = str_replace('……', '', $str);
			$str = str_replace('&', '', $str);
			$str = str_replace('*', '', $str);
			$str = str_replace('(', '', $str);
			$str = str_replace(')', '', $str);
			$str = str_replace('（', '', $str);
			$str = str_replace('）', '', $str);
			$str = str_replace('_', '', $str);
			$str = str_replace('——', '', $str);
			$str = str_replace('=', '', $str);
			$str = str_replace('|', '', $str);
			$str = str_replace('\\', '', $str);
			$str = str_replace('[', '', $str);
			$str = str_replace(']', '', $str);
			$str = str_replace('【', '', $str);
			$str = str_replace('】', '', $str);
			$str = str_replace('{', '', $str);
			$str = str_replace('}', '', $str);
			$str = str_replace(';', '', $str);
			$str = str_replace('；', '', $str);
			$str = str_replace(':', '', $str);
			$str = str_replace('：', '', $str);
			$str = str_replace('\'', '', $str);
			$str = str_replace('"', '', $str);
			$str = str_replace('“', '', $str);
			$str = str_replace('”', '', $str);
			$str = str_replace(',', '', $str);
			$str = str_replace('，', '', $str);
			$str = str_replace('<', '', $str);
			$str = str_replace('>', '', $str);
			$str = str_replace('《', '', $str);
			$str = str_replace('》', '', $str);
			$str = str_replace('.', '', $str);
			$str = str_replace('。', '', $str);
			$str = str_replace('/', '', $str);
			$str = str_replace('、', '', $str);
			$str = str_replace('?', '', $str);
			$str = str_replace('？', '', $str);
			return trim($str);
		  
	  }
	  
	  
  }