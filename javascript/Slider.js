function slide(){
    $(".Slider #1").show("fade",500);
    $(".Slider #1").delay(5000).hide("fade",3000);
}
var count=2;
var total=$(".Slider img").size;
setInterval(function(){
    if(count>total){
        count=1;
    }else if(count<1){
        count=count+total;
    }
    $(".Slider #"+count).fadeIn(3000);
    //$(".Slider #"+count).show("fade",500);
    $(".Slider #"+count).delay(2000).fadeOut(4000);
    count++;
},10000);

function slidex(x){
    count=count+x;
    if(count>total){
        count=1;
    }else if(count<1){
        count=count+total;
    }
    $(".Slider #"+count).fadeIn(3000);
    //$(".Slider #"+count).show("fade",500);
    $(".Slider #"+count).delay(2000).fadeOut(4000);
    count++;
}