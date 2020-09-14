// $(function(){
//     return $('.addline').on("click", function(){
//         // $(this).before($(".businessact").clone().appendTo('.businessact'));
//         var i=1;
//         $(".businessact").find('.fas').addClass("fa-minus");
//         $(".businessact").find('.addline').removeClass("addline");
//         $(".businessact").find('.addline').addClass("removeline");
//         $(".businessact").find('.fas').removeClass("fa-plus");
//         $(".row2").clone().appendTo('.businessact');

//     });
// });
$(function(){
    return $('.addline').on("click", function(){
        
        var i=1;
        var ba= $(".businessact");

        ba.find('.fas').addClass("fa-minus");
        ba.find('.addline').removeClass("addline");
        ba.find('.addline').addClass("removeline");
        ba.find('.fas').removeClass("fa-plus");
        $(".row2").clone().appendTo('.businessact');

    });
});