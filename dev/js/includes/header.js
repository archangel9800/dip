
function headerFunc(){

};

//Слайдер
if($('#header .swiper-container').length > 0 ){
var swiper = new Swiper('#header .swiper-container', {
        pagination: '#header .swiper-pagination',
        paginationClickable: true,
//        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 5000,
        autoplayDisableOnInteraction: false
    });
};