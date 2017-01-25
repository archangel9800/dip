



$("body").on('click','#genre_w #search_btn',search); 
    function search(){
   $searchVal = $('#genre_w #search_field').val();
        if($searchVal == ''){
            $('#genre_w #search_field').attr('placeholder','Введите здесь чтонибуть!')
        } else {
                  $.post(
            "./functions.php",{
            "searchVal": $searchVal,   
            "action": "search",     
            },
            ifSuccess
              );
                function ifSuccess(data){
                            $("#content").html(data);
                };  
        };
        
        

            }; 