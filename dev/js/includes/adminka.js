function adminka(){
    if($("#adminka").length > 0){
    //инициализация выпадающих списков
        $('#adminka select').material_select();    
    
    
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
//                        centerImg();
//                        setTimeout(centerImg, 50);
//                        setTimeout(centerImg, 100);
//                        setTimeout(centerImg, 150);
//                        setTimeout(centerImg, 200);
//                        $(window).resize(centerImg);
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
            $("#adminka #add_remove").html(data);
                    //инициализация выпадающих списков
                    $('#adminka select').material_select(); 
//                    centerImg();
//                    setTimeout(centerImg, 50);
//                    setTimeout(centerImg, 100);
//                    setTimeout(centerImg, 150);
//                    setTimeout(centerImg, 200);
//                    $(window).resize(centerImg);
                    
                    
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
//                    centerImg();
//                    setTimeout(centerImg, 50);
//                    setTimeout(centerImg, 100);
//                    setTimeout(centerImg, 150);
//                    setTimeout(centerImg, 200);
//                    $(window).resize(centerImg);
            
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
    
    
    
    
    
    
    
   } 
};