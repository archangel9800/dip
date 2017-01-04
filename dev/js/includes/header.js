
function headerFunc(){
     SetMobileheight("#s_slider","25vh","20vw");  
     SetMobileheight(".login_block","25vh","auto"); 
     SetMobileheight(".user_block","25vh","20vw");  
};

//Слайдер
var swiper = new Swiper('#header .swiper-container', {
        pagination: '#header .swiper-pagination',
        paginationClickable: true,
//        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 5000,
        autoplayDisableOnInteraction: false
    });