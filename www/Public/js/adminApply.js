$(function(){
    //待审核 已审核表格切换
    $(".admin_select a").click(function(){
        var nowNum = $(this).index();
        $(".admin_select a").removeClass("checked");
        $(this).addClass("checked");
        $(".tables").children("table").hide();
        $(".tables").children("table").eq(nowNum).show();
    });

});


