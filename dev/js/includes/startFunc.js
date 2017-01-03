$(document).ready(function () {
//    запуск скриптов требующих ресайз
 
    //    запуск скрипта для картинок  в слайдере
    

    centerImg();
    $(window).resize(centerImg);
    
    
//        setTimeout(centerImg, 200);
//    $(window).resize(function(){
//         setTimeout(centerImg, 200)
//    });
    
    menuFunc();
    $(window).resize(menuFunc);
    
    
    
    contentFunc();
    $(window).resize(contentFunc);
});
