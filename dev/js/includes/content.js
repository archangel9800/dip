function contentFunc(){
    
$("body").on('click','#content #imgContent .for_hight2 img',oneImg); 
   function oneImg(event){
       var $input = $(this);
        $.post(
            "./functions.php",{
            "oneImg": $input.attr('numberimg'),   
            "action": "oneImg",     
            },
            ifSuccess
              );
                function ifSuccess(data){
                            $("#content #imgContent").html(data);
                };
            }; 
 
    


    
   
};


    