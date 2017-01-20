function adminka(){
    if($("#adminka").length > 0){
    //инициализация выпадающих списков
        $('#adminka select').material_select();  
        
      $('#adminka .admin_login input').css({
        backgroundColor:  'transparent !important',
      }); 
    
    
//    вводим логин и закрываем форму входа
    function closeloginBlock(){
         $.post(
                "../functions.php",{
                "action": "cookie", 
                },
                ifSuccess
            );
                function ifSuccess(data){
                    if(data){
                        $("#adminka #add_remove").html(data);
                        $('#adminka select').material_select(); 
                    }
                        
                };
        };
   closeloginBlock();      
$("body").on('click','#adminka .login_btn',sendLogin); 
   function sendLogin(){
        $.post(
            "../functions.php",{
            "login": $("#adminka .admin_login #login").val(),   
            "password": $("#adminka .admin_login #password").val(),
            "action": "login",     
            },
            ifSuccess
              );
                function ifSuccess(data){
                    if(data == 'error'){
                        
                    }else{
                            $("#adminka #add_remove").html(data); 
                    };
           
                    //инициализация выпадающих списков
                    $('#adminka select').material_select(); 
                    
                    
                };
            
       
       
            }; 
     
 

  
    
    
    
    
//    Добавляем каталог
    $("body").on('click',"#adminka #btn_add_cat", add_catalog); 
    function add_catalog(){
    $add_val =  $("#adminka #add_cat").val();
        if( $add_val == '' ){
           $("#adminka .err_add").html("Введите название каталога!");
        } else{
           $("#adminka .err_add").html(""); 
            $.post(
                "../functions.php",{
                "inp_add_cat_val": $("#adminka #add_cat").val(),
                "action": "add", 
                },
                ifSuccess
            );
                function ifSuccess(data){
                    if(data == "exists_cat_name"){
                     $("#adminka .err_add").removeClass('okk').addClass('error').html("Такой каталог существует!");   
                    }else if(data == "not_exists"){
                      $("#adminka .err_add").removeClass('error').addClass('okk').html("Каталог создан!");
                        location.reload(true);
                       
                    }
//                    $('select').on('change', changeSelect);
                }
        }   
}
  
// Показываем фото
     $("body").on('change','#adminka .remove_cat_bl select', showPhoto); 
    function showPhoto(){
        $showPhoto = $("#adminka .remove_cat_bl ul .active").text();;
             $.post(
                "../functions.php",{
                "showPhoto": $showPhoto,
                "action": "show", 
                },
                ifSuccess
            );
        function ifSuccess(data){
                    $("#adminka .remove_image").html(data);
            
                }
        
    }
    
    
    
    
    
    
    
    
    
    
//Удаляем каталог   
    $("body").on('click','#adminka .remove_cat_bl #rem_cat', showCatalog); 
    function showCatalog(){
        $showCatalogVal = $("#adminka .remove_cat_bl ul .active").text();
        if($showCatalogVal){
            
            $.post(
                "../functions.php",{
                "showCatalogVal": $showCatalogVal,
                "action": "remove", 
                },
                ifSuccess
            );
             function ifSuccess(data){
                    if(data == "deleted_cat"){
                     $("#adminka .err_del_cat").html("Каталог удален!");   
                        location.reload();
                    }
                }
            
        } 
        
        
        
        
    }
    
    
    
    //    Добавляем изображения
    $("body").on('click',"#adminka #btn_add_img", add_img); 
    function add_img(){
//    $('#adminka form').submit(function() {
//                return false;
//            });

    
        
        var fd = new FormData();
        fd.append('id', '123');
        fd.append('type', 'one');
        fd.append('img', $("#adminka .add_remove_catalog_img #file1920x1080")[0].files[0]);



        
//        $file1920x1080 = $("#adminka .add_remove_catalog_img #file1920x1080");
//        $file1024x768 = $("#adminka .add_remove_catalog_img #file1024x768");
//        $file960x800 = $("#adminka .add_remove_catalog_img #file960x800");
//        $add_about = $("#adminka .add_remove_catalog_img #add_about").val();
//                "file1920x1080":  $file1920x1080,
//                "file1024x768":  $file1024x768,
//                "file960x800":  $file960x800,
//                "add_about":  $add_about,  


        
        

            $.post(
                "../functions.php",{
                processData: false,
                contentType: false,   
                dataType: 'json',    
                data:  fd,
                "action": "add_img", 
                    
                },
                ifSuccess
            );
                function ifSuccess(data){
                    console.log(data);
//                    $('select').on('change', changeSelect);
                }
            
          };
//            
          

    
    
    };
    
};
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



function transition(){
    if($(window).width() >= 992){
      $('.transition').css({
        transition: 'all 0.4s',
    });  
    }else{
       $('.transition').css({
        transition: 'none',
    });   
    };
    
    
};




   //делает выбраный жанр активным
//activBtn("#genre_w .genre");

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
