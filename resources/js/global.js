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
// $(function(){
//     return $('#addline').on("click", function(){
        
//         var i=1;
//         var ba= $(".businessact");

//         ba.find('.fas').addClass("fa-minus");
//         ba.find('.addline').removeClass("addline");
//         ba.find('.addline').addClass("removeline");
//         ba.find('.fas').removeClass("fa-plus");
//         $(".row2").clone().appendTo('.businessact');

//     });
// });

$(function(){
    var i=0;
    var ba= $(".businessact");

    $(document.body).on("click", '.addline', function(){

        i++;
        ba.append('<div class="row row2"><div class="col-md-4"><div class="form-group"><input class="form-control" placeholder="" type="text" name="line_of_business[]" id=""></div></div><div class="col-md-2"><div class="form-group"><input class="form-control" placeholder="" type="text" name="no_of_units[]" id=""></div></div><div class="col-md-2"><div class="form-group"><input class="form-control" placeholder="" type="text" name="capital[]" id=""></div></div><div class="col-md-3"><div class="row"><div class="col-md-6"><div class="form-group"><input class="form-control" placeholder="" type="text" name="essential[]" id=""></div></div><div class="col-md-6"><div class="form-group"><input class="form-control" placeholder="" type="text" name="non_essential[]" id=""></div></div></div></div><div class="col-md-1"><button type="button" class="btn btn-primary addline" id="btnline'+ i + '"><span><i class="fas fa-plus" id="line'+ i +'"></i></span></button></div></div>');
        
        ba.find("#line"+ parseInt(i - 1)).addClass("fa-minus");
        ba.find("#line"+ parseInt(i -1)).removeClass("fa-plus");

        ba.find("#btnline"+ parseInt(i - 1)).addClass("removeline");
        ba.find("#btnline"+ parseInt(i - 1)).removeClass("addline");

    });
});

$(function(){
    var i=0;

    return $(document.body).on("click", '.removeline', function(){
        ba.find("#line"+ i)
        // if(i == 0){

        //     ba.find("#line"+ i).addClass("fa-minus");
        //     ba.find("#line"+ i).removeClass("fa-plus");

        //     ba.find("#btnline"+ i).removeClass("addline");
        //     ba.find("#btnline"+ i).addClass("removeline");
        // }else if(i > 0){
        //     ba.find("#line"+ parseInt(i-1)).addClass("fa-minus");
        //     ba.find("#line"+ parseInt(i-1)).removeClass("fa-plus");

        //     ba.find("#btnline"+ parseInt(i-1)).removeClass("addline");
        //     ba.find("#btnline"+ parseInt(i-1)).addClass("removeline");
        // }
        console.log("testing");
        // alert(0);
        // ba.append('<div class="row row2"><div class="col-md-4"><div class="form-group"><input class="form-control" placeholder="" type="text" name="line_of_business[]" id=""></div></div><div class="col-md-2"><div class="form-group"><input class="form-control" placeholder="" type="text" name="no_of_units[]" id=""></div></div><div class="col-md-2"><div class="form-group"><input class="form-control" placeholder="" type="text" name="capital[]" id=""></div></div><div class="col-md-3"><div class="row"><div class="col-md-6"><div class="form-group"><input class="form-control" placeholder="" type="text" name="essential[]" id=""></div></div><div class="col-md-6"><div class="form-group"><input class="form-control" placeholder="" type="text" name="non_essential[]" id=""></div></div></div></div><div class="col-md-1"><button class="btn btn-primary addline" id="btnline'+ i++ + '"><span><i class="fas fa-plus" id="line'+ i++ +'"></i></span></button></div></div>');

        
    });
    
});