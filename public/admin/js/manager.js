$(function(){
    // 导航中间的控制按钮
    (function(){
        $('.hamburger').click(function(){
            $('.col-lg-2').toggle();
            if($('.col-lg-10').hasClass('col-lg-10')){
                $('.col-lg-10').removeClass('col-lg-10').addClass('col-lg-12');
            }else{
                $('.col-lg-12').removeClass('col-lg-12').addClass('col-lg-10');
            }
        })
    }
  )();
  // 控制台
  (function(){
        $('.ime-click').click(function(){
            $(this).parent().css({'background':'#f9f9f9'});
            $(this).children('span').eq(1).toggleClass('glyphicon-menu-down');
            //if( $(this).children('span').eq(1).hasClass('glyphicon-menu-left')){
            //    $(this).children('span').eq(1).removeClass('glyphicon-menu-left').addClass('glyphicon-menu-down');
            //}else{
            //    $(this).children('span').eq(1).removeClass('glyphicon-menu-down').addClass('glyphicon-menu-left');
            //}
        });
         $('.ime-click').hover(function(){
            $(this).parent().css({'background':'#f9f9f9'})
        },function(){
            $(this).parent().css({'background':'#f4f4f4'})
        })
    })();

});