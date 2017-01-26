function adminka(){
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
        $showCatalogVal = $("#adminka .list_cat_bl ul .active a").attr('idcat');
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
            $catName = $("#adminka .list_cat_bl ul .active a").attr('idcat');
            $aboutImg = $("#adminka #add_about").val();
            $dataaray = new FormData();
var error = '';
        if($('#adminka #file').val() == '' || $("#adminka .list_cat_bl ul .active a").attr('idcat') == '' || $aboutImg == '') {               
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
                location.reload();
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
            $("body").on('click','#adminka .remove_btn', remOneImg);
        function remOneImg(){    
            $id = $(this).attr('numberimg');
            $sizing = $(this).attr('sizing');
            $dispNone = $(this).parent().parent();
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

        
    
      } 
        
        
        
        
        
        
        

       
    