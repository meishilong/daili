#encoding=utf-8

import json
import time
import requests
import MySQLdb as mdb
from datetime import datetime
from time import sleep 


#连接数据库 

def getData():
	conn = mdb.connect(host='127.0.0.1',port=3306,user='root',passwd='123456',db='api_cdn_v2')
	cursor = conn.cursor()
	sql = 'SELECT auth_user.invitecode,sum(user_order.money),count(*) FROM auth_user,user_order where auth_user.id = user_order.owner_id AND unix_timestamp(settime)>unix_timestamp(now())-300*24*3600 group by  invitecode'
	cursor.execute(sql)
	r = cursor.fetchall()
	data = ''
	#设置一二三级代理条件,账户余额和订单数量到一定条件 
	for i in r:
		if  i[1]<70000:
			data+=str(i[0])+","+"3"+'|'
		if  70000<=i[1] and i[1]<100000 and 15<i[2]:
			data+=str(i[0])+","+"2"+'|'
		if  100000<=i[1] and  20<i[2]:
			data+=str(i[0])+","+"1"+'|'
	d = data[:-1]
	url = "http://localhost/index.php/Admin/income/getAgentDegree"
	result = requests.post(url,data=d)
	print result
	time.sleep(10)
	#time.sleep(60)
	
def  doSend(d=1):
	while True:
		while True:
			now = datetime.now()
			#if now.day == 1 and now.hour ==1 and now.minute == 1:
			if now.second == 15:
				break
			print time.strftime('%Y/%m%d %H%M%S')
			time.sleep(1)
			
		getData()
	
if __name__ == "__main__":
	doSend()
	

	