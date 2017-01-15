function adminka(){
    
    
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
                    }
                        
                };
        };
   closeloginBlock();
        
        
$("body").on('click','#adminka .login_btn',sendLogin); 
   function sendLogin(){
       console.log('click');
        $.post(
            "../functions.php",{
            "login": $("#adminka .admin_login #login").val(),   
            "password": $("#adminka .admin_login #password").val(),
            "action": "login",     
            },
            ifSuccess
              );
                function ifSuccess(data){
//                $("#adminka .result").html(data);
            $("#adminka #add_remove").html(data);
                };
            
       
       
            }; 
     
 

  
    
    
    
    
    
    //initialize the select element as shown below
        $('#adminka select').material_select();
       $("#adminka #btn_add_cat").on( "click", add_catalog ); 
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
                    }
//                    console.log(data);
//                    $('select').on('change', changeSelect);
                }
        }   
}
    
    
    
    
    
    
    
    
    
};