//Have to use JS to change the length of the bars because not
//many browsers support attr() for css
$(document).ready(function () {
    $(".bar span").each(function(){
        let per = $(this).parent().attr("data-percent")
        $(this).animate({
            "width": per
        });
        $(this).parent().next().html(per);
    });
});