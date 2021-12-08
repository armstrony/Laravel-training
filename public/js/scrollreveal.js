$(document).ready(function(){
    scDuration();
    $(window).scroll(function(){
        $('nav').toggleClass('scrolled', $(this).scrollTop()>50);
    });
})

function scDuration(){
    ScrollReveal().reveal('.container',{duration:1200});
    ScrollReveal().reveal('.container-fluid',{duration:1200});
    ScrollReveal().reveal('.row',{duration:1500});
    ScrollReveal().reveal('.page-footer',{duration:1000});
    ScrollReveal().reveal('.about-banner',{duration:1200});
    ScrollReveal().reveal('.box-art',{duration:1200});
}