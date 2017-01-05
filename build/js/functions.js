function contentFunc(){
    
//function setImgHight(){    
//$("#content .image_gallery").css({
////       height: $("#content .image_gallery").width() / 1.3 + "px",
//    position: "absolute",
//    });
//};
//    setTimeout(setImgHight, 0);
    
//   $("#content .image_gallery .img_wrap").css({
//       position: "absolute",
//    }); 
    
 
   
};


    

//центрирует изображение
function centerImg() {
    //Все встречались с проблемой когда картинка вставленная в блок с определенным размером да и еще и с рамкой не полностью заполняет этот блок, особенно когда высота и ширина картинки не соответствуют высоте и ширине блока в котором она находится. При этом мы имеем пустое пространство в виде полос либо снизу либо справа.
    
    //Данный скрипт решают эту проблему, конечно используя его мы немного обрезаем картинку либо по бокам, либо сверху и снизу, но при этом картинка всегда отцентрирована и полностью заполняет блок без пустых пространств с полосами. Так же скрип работает адаптивно при изменении размеров блока.
    
    //Скажем так, чем большая разница в соотношении сторон картинки и блока тем больше картинка обрезается.
    
    //   Скрипт заполняет блок картинкой, центрирует ее, обрезает лишнее. 
    //   img_wrap - класс блок обертка для картинки (должен иметь высоту и ширину)
    //   img_block - класс картинки или блока

    $('.img_wrap').css({
        position: "relative",
    });
    $('.img_wrap .img_block').css({
        position: "absolute",
        marginLeft: "auto",
        marginTop: "auto",
    });

    $('.img_wrap').each(function () {

        //  1. Автоматически выставляем img_block по ширине или высоте img_wrap. 
        switch (true) {
        case $(this).find(".img_block").width() > $(this).find(".img_block").height():
            $(this).find(".img_block").css({
                height: "auto",
                width: "100%",
            });
            break;
        case $(this).find(".img_block").width() <= $(this).find(".img_block").height():
            $(this).find(".img_block").css({
                height: "100%",
                width: "auto",
            });
            break;
        };

        //  2. На дамом этапе делаем чтоб img_block независимо от размеров заполнял img_wrap. Но при этом img_block справа и снизу будет вылазить за img_wrap.    
        switch (true) {
        case $(this).find(".img_block").width() > $(this).width():
            $(this).find(".img_block").css({
                height: "100%",
                width: "auto",
            });
            break;
        case $(this).find(".img_block").width() <= $(this).width():
            $(this).find(".img_block").css({
                height: "auto",
                width: "100%",
            });
            break;
        };

        switch (true) {
        case $(this).find(".img_block").height() > $(this).height():
            $(this).find(".img_block").css({
                height: "auto",
                width: "100%",
            });
            break;
        case $(this).find(".img_block").height() <= $(this).height():
            $(this).find(".img_block").css({
                height: "100%",
                width: "auto",
            });
            break;
        };

        //  3. Тут делаем так чтобы лишнее равномерно обрезалось со всех сторон и img_block центрировался по середине.         
        switch (true) {
        case $(this).find(".img_block").height() > $(this).height():
            $(this).find(".img_block").css({
                marginTop: ($(this).find(".img_block").height() - $(this).height()) / 2 * (-1) + "px",
            });
            $(this).css({
                overflow: "hidden",
            });
            break;
        case $(this).find(".img_block").height() <= $(this).height():
            $(this).find(".img_block").css({
                marginTop: "auto",
            });
            break;
        };

        switch (true) {
        case $(this).find(".img_block").width() > $(this).width():
            $(this).find(".img_block").css({
                marginLeft: ($(this).find(".img_block").width() - $(this).width()) / 2 * (-1) + "px",
            });
            $(this).css({
                overflow: "hidden",
            });
            break;
        case $(this).find(".img_block").width() <= $(this).width():
            $(this).find(".img_block").css({
                marginLeft: "auto",
            });
            break;
        };


    });

};

    //делает выбраный элемент активным
function activBtn(way){
   $(way).click( function(event){
            if(event.target.nodeName == "A"){ 
            $(event.target.parentNode.parentNode).find("a").removeClass("active");
            $(event.target).addClass("active");
            
            };
            
        });
};

  //центрируем блок
function centerBlock() {
    $(".inner").css({
       marginTop: $(".outer").height()/2 - $(".inner").height()/2 + 'px',
    });
};

// высота для мобильного
function SetMobileheight(claSs,heightBefore,heightAfter){
    if ($(window).width() <= $(window).height()){
      $(claSs).css({
          height: heightAfter,
          transition: 'none',
      });  
    }else{
       $(claSs).css({
          height: heightBefore,
      });  
    }; 
};





   //делает выбраный жанр активным
activBtn("#genre_w .genre");

function headerFunc(){

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

function menuFunc(){
// закрытие и открытие меню при нажатии   
  if($(window).width() <= 600 ){ 
            var click_btn = 1;
        $("#menu .tabss").css({
                 height: 0,
                 overflow: 'hidden',
             }); 
      $("#menu .mobile_m").click( function(){
          if(click_btn  == 0){
             $("#menu .tabss").css({
                 height: 0,
                 overflow: 'hidden',
             }); 
            click_btn  = 1;  
          } else if(click_btn  == 1){
             $("#menu .tabss").css({
                 height: 'auto',
                 overflow: 'visible',
             }); 
            click_btn  = 0;  
          };  
      });
  }else{
     $("#menu .tabss").css({
                 height: 'auto',
                 overflow: 'visible',
             }); 
  }
 
};
//делает выбраный элемент меню активным
activBtn("#menu");
$(document).ready(function () {
//    запуск скриптов требующих ресайз
 
   
    

 
    
    
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
});
