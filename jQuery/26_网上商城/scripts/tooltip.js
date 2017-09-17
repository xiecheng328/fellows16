function tooltip(selector){

    $(selector).hover(function(e){
        this.tip = $(this).attr("title")?$(this).attr("title"):$(this).html();
        $("<div class='tip'></div>").html(this.tip).css({
            top: e.pageY + 10,
            left: e.pageX + 10
        }).appendTo($("body")).show(1000);

        

        $(this).removeAttr("title");
    }, function(){
        $(this).attr("title", this.tip);
        $(".tip").remove();
    }).on("mousemove", function(e){
        $(".tip").offset({
            top: e.pageY + 10,
            left: e.pageX + 10
        });
    });
}