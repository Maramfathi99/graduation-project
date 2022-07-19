

$(document).scroll(function () {
    if ($(document).scrollTop() > 300) {
        $('.top').fadeIn();
    } 
    else {
        $('.top').fadeOut();
    }
})

$('.top').click(function () {

    $('body, html').animate({
        scrollTop: 0
    }, 1500);

})
$(window).on("load",function(){
    setTimeout(()=>{
        $(".preloader").fadeOut("slow");
    },1000)
});