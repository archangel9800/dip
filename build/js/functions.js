function adminka(){
        if($("#adminka").length > 0){
            if($('#adminka .remove_image .forOneImg').width() >= $('#adminka .remove_image .forOneImg').height()){
               $('#adminka .remove_image .forOneImg').css({
                   width: '100%',
                   height: 'auto',
            }); 
                
            } else{
                $('#adminka .remove_image .forOneImg').css({
                   width: 'auto',
                   height: '75vh',
            }); 
               
            } 
        
        
    
    }

}
    if($("#adminka").length > 0){
    //инициализация выпадающих списков
        $('#adminka select').material_select();  
        
      $('#adminka .admin_login input').css({
        backgroundColor:  'transparent !important',
      }); 
    

    
//    Добавляем каталог
    $("body").on('click',"#adminka #btn_add_cat", add_catalog); 
    function add_catalog(event){
    event.preventDefault();    
    $add_val =  $("#adminka #add_cat").val();
        if( $add_val == '' ){
           $("#adminka #info").html("Введите название каталога!");
        } else{
           $("#adminka #info").html(""); 
            $.post(
                "../functions.php",{
                "inp_add_cat_val": $("#adminka #add_cat").val(),
                "action": "add", 
                },
                ifSuccess
            );
                function ifSuccess(data){
                    if(data == "exists_cat_name"){
                     $("#adminka #info").removeClass('okk').addClass('error').html("Такой каталог существует!");   
                    }else if(data == "not_exists"){
                      $("#adminka #info").removeClass('error').addClass('okk').html("Каталог создан!");
                      $("#adminka .select-wrapper .list").html("");
                        
//                        $.post(
//                            "../functions.php",{
//                            "inp_add_cat_val": $("#adminka #add_cat").val(),
//                            "action": "add", 
//                            },
//                            ifSuccess2
//                        );
//                        function ifSuccess2(data){
//                            $("#adminka .select-wrapper .list").html(data);
//                        };

                        
                        location.reload(true);
                       
                    }
//                    $('select').on('change', changeSelect);
                }
        }   
}
  


    
//Удаляем каталог   
    $("body").on('click','#adminka #rem_cat', removeCat); 
    function removeCat(event){
        event.preventDefault();
        $showCatalogVal = $("#adminka .list_cat_bl ul .active").attr('data-idcat');
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
                     $("#adminka #info").html("Каталог удален!");   
                        location.reload();
                    }
                }
            
        } 
        
        
    }
    

//   Добавление изображений и обрезка     
    $("body").on('click','#adminka #btn_add_img', addImg);     
    function addImg(event){
        event.preventDefault();
            $catName = $("#adminka .list_cat_bl ul .active").attr('data-idcat');
            $aboutImg = $("#adminka #add_about").val();
            $dataaray = new FormData();
var error = '';
        if($('#adminka #file').val() == '' || $("#adminka .list_cat_bl ul .active").attr('data-idcat') == '' || $aboutImg == '') {               
               error = error + 'Выберите изображение, каталог куда загружать и краткое описание'; 
               $('#info').html(error);
            } else{  
        
        
    jQuery.each($('#adminka #file')[0].files, function(i, file) {
            if(file.name.length < 1) {               
               error = error + ' Имя файла не правильное! '; 
            } //Проверка на длину имени             
            else if(file.size > 8000000) {
                error = error + ' Файл ' + file.name + ' больше 8 мб!';
            } //Проверка размера файла
            else if(file.type != 'image/png' && file.type != 'image/jpg' && !file.type != 'image/gif' && file.type != 'image/jpeg' ) {
                error = error + 'Файл  ' + file.name + '  не является png, jpg или gif!';
            } //Проверка типа файлов
        
        $dataaray.append('file-'+i, file);
    });
        $dataaray.append('catName', $catName);
          $dataaray.append('aboutImg', $aboutImg);
if (error != '') {
            $('#info').html(error);
    } else {
        $.ajax({
            url: '../scriptsPHP/upload.php',
            contentType: false,
            processData: false, 
            type: 'POST',
            data: $dataaray,
            cache: false,
            success: function(data){
                $('#info').html(data);
                event.preventDefault();
                
//                setTimeout(function(){
//                        location.reload();
//                    }, 0);
                
                
            },
            beforeSend: function(data){
                $("#btn_add_img").attr('disabled',true);
                $('#info').html('Загрузка...');
                event.preventDefault();
            },
        });
         }
    }
    }

        
        
//        Удаление одного изображения
            $("body").on('click','#adminka .remove_btn_adm', remOneImg);
        function remOneImg(){    
            $id = $(this).attr('data-numberimg');
            $sizing = $(this).attr('data-sizing');
            $dispNone = $(this).parent();
            $.post(
                "../functions.php",{
                'id': $id,
                'sizing': $sizing,
                "action": "remOneImg", 
                },
                ifSuccess
            );
             function ifSuccess(data){
                    console.log(data);
                 
                         if(data == 'del_img'){
                             $('#info').html('Удалено!');
                             $dispNone.css({
                                display: 'none',
                             });
                             
                             setTimeout(function(){
                                    $('#info').html('');
                            }, 1000);
                         }
                    
                 
                    }
                }
       
        
        

        
        
        
            
        };

        
    
      


        
        
        
        
        

       
    
function contentFunc(){
    
//$("body").on('click','#content #imgContent .for_hight2 img',oneImg); 
//   function oneImg(event){
//       var $input = $(this);
//        $.post(
//            "./functions.php",{
//            "oneImg": $input.attr('data-numberimg'),   
//            "action5": "oneImg",     
//            },
//            ifSuccess
//              );
//                function ifSuccess(data){
//                            $("#content #imgContent").html(data);
//                };
//            };s 
 
    


    
   
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








$("body").on('click','#genre_w #search_btn',search); 
    function search(){
   $searchVal = $('#genre_w #search_field').val();
        if($searchVal == ''){
            $('#genre_w #search_field').attr('placeholder','Введите здесь чтонибуть!')
        } else {
                    window.location = "/build/search?page=1&searchval="+$searchVal;
        };
        
            }; 

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
$(window).resize(adminka);    
    
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
