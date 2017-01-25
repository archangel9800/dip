$(document).ready(function () {
//    запуск скриптов требующих ресайз
    

//скрипты админки   
adminka();
    
    
//        setTimeout(centerImg, 200);
//    $(window).resize(function(){
//         setTimeout(centerImg, 200)
//    });
    
    headerFunc();
    $(window).resize(headerFunc);
    
    menuFunc();
    $(window).resize(menuFunc);
    
    contentFunc();
    $(window).resize(contentFunc);
    
    
    //центрируем блок
    centerBlock();
    $(window).resize(centerBlock);

//    запуск скрипта для картинок  в слайдере
    centerImg();
    $(window).resize(centerImg);
    
    
    
    transition();
    $(window).resize(transition);
});
