
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