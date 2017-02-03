



$("body").on('click','#genre_w #search_btn',search); 
    function search(){
   $searchVal = $('#genre_w #search_field').val();
        if($searchVal == ''){
            $('#genre_w #search_field').attr('placeholder','Введите здесь чтонибуть!')
        } else {
                    window.location = "/build/search?page=1&searchval="+$searchVal;
        };
        
            }; 