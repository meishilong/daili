$(document).ready(function(){

	var newData = new Array(); ;
	function tableData(){
		$.post("http://localhost/index.php/admin/Agent/getMembers/",{"promocode":{$info.promocode}},function(data){
     
			//newData = data.split('":');
			//newData = JSON.parse(data);
			 newData = JSON.parse(data);
		     console.log(data);
			 $('#testtable').yhhDataTable({
				'paginate':{
					'changeDisplayLen':true,
					'type':'updown',
					'visibleGo': true
				},
				'tbodyRow':{
					'zebra':true
				},
				'tbodyData':{
					'enabled':true,  /*是否传入表格数据*/
					'source':newData /*传入的表格数据*/
				}
			});
		});
	}
	
	
  
		tableData();
   



    /*更新表格*/
    var refreshTable = function(data,page){
        if ($.isEmptyObject(data)) data = {};
        var toData = {
            'ajaxParam':{'data':data}
        }
        if (!$.isEmptyObject(page)){
            toData.paginate = {};
            toData.paginate.currentPage = page;
        }
        var $table = $page.find('.result-list');
        $table.yhhDataTable('refresh',toData);
    }
});