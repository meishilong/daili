$(function(){
    //推广链接
    var clipboard = new Clipboard(".btn");
    clipboard.on('success', function(e) {
        layer.msg("已复制到剪贴板");
    });
    //生成推广链接
    $(".tg_btn").click(function(){
        var regphone = /^(13[0-9]|15[0-9]|18[0-9]|16[0-9])\d{8}$/;
        var regqq = /^\d{5,}$/;
        var qqmain = $(".tg_qqmain").val();
        var telmain = $(".tg_telmain").val();
        if (telmain.length <= 0 || !regphone.test(telmain)||qqmain.length <= 0 || !regqq.test(qqmain)) {
            layer.msg("请输入qq号和手机号码");
        } else {
            $("#tg_form").submit();
        }

    });
    //饼状图
    var redata;
    $.ajaxSetup({   
            async : false  
        }); 
	$.post("http://localhost/index.php/Home/index/getXj","",function(data){
		 redata = data;
	});
    
    var myChart = echarts.init(document.getElementById('myindex'));
    var option = {
        title : {
            text: '套餐收益比例数据',
            subtext: '（截止至今日0点）',
            x:'left',
            textStyle:{
                color:'#7193ca',
                fontSize: 30
            }
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            orient: 'vertical',
            left: 'left',
            top:80,
            data: ['普通套餐','高级套餐','VIP套餐','钻石套餐','超级VIP套餐','尊贵专享套餐A','尊贵专享套餐B','尊贵专享套餐C','DNS套餐']
        },
        series : [
            {
                name: '收益来源',
                type: 'pie',
                radius : '55%',
                center: ['50%', '60%'],
                data:redata,
                itemStyle: {
                    emphasis: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }
        ],
        color:['#ebf2fc','#bcdceb','#a9c1dd','#eaebe3','#fff1ca','#f9cebe','#d2acd3','#bcd3b7']
    };
    myChart.setOption(option);

	
});