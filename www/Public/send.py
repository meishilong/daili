#encoding:utf-8


import json
import time
import requests
import MySQLdb as mdb
import threading
from datetime import datetime, timedelta  
from time import sleep  

#每晚  24:00  定时执行 发送数据库任务 
SECONDS_PER_DAY = 24 * 60 * 60  

def  dosend():
	conn = mdb.connect(host='127.0.0.1', port=3306, user='root', passwd='123456', db='api_cdn_v2')
	cursor = conn.cursor()
	
	sql = "select auth_user.invitecode,productType,sum(money) from auth_user,user_order where auth_user.id = user_order.owner_id AND unix_timestamp(settime)>unix_timestamp(now())-60*24*3600 group by owner_id,productType"  #当天成交额度  当天 00.00-24.00 ，而该方法是在当天24：00时执行，所以客户端
	
	cursor.execute(sql)
	
	r = cursor.fetchall()
	
	dics = {}
	dic = ''
 	for i in r:
		#dic += '{"promocode":"'+i[0]+'","product":"'+i[1]+'","money":"'+str(i[2])+'"},'
		if i[1] != 'Money':
			dic += i[0]+","+i[1]+","+str(i[2])+"|"
	
	dic = dic[:-1]
	url = "http://localhost/index.php/Admin/income/getAllOrders"
	d = dic
	print d
	r = requests.post(url, data=d)
	print time.strftime("%Y/%m/%d %H:%M:%S")
	print "sending........."
	time.sleep(5)
	#time.sleep(70)

def main(h=23, m=55):
	'''h表示设定的小时，m为设定的分钟'''
	while True:	
		# 判断是否达到设定时间，例如0:00
		while True:
			now = datetime.now()
			# 到达设定时间，结束内循环
			#if now.hour==h and now.minute==m:
			if now.second==30 or now.second==7:
				break
			# 不到时间就等20秒之后再次检测
			print time.strftime("%Y/%m/%d %H:%M:%S")
			#time.sleep(30)
			time.sleep(2)
		# 做正事，一天做一次
		dosend()	
		
if __name__ == "__main__":  
	main()
	


	
	