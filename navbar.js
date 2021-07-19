// Simple script to toggle a class which cant be 
// achieved by CSS due to DOM hierachy
$(document).ready(function () {
    $("nav#navbar").hover(function(){
        //Onmouseenter
        $("main").addClass("shrink");
    }, function(){
        //Onmouseleave
        $("main").removeClass("shrink");
    });
});