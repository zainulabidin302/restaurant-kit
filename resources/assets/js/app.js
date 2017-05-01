require('./bootstrap');
require('./jquery-2.2.3.min.js');

$(document).ready(function(){

    $('#menu-btn').click(function(){
        if($('#modal').hasClass('close')){
            $('#modal').addClass('open');
            $('#modal').removeClass('close');
            $('#menu-block').css({"overflow":"inherit"});

        }else{
            $('#modal').addClass('close');
            $('#modal').removeClass('open');
            $('#menu-block').css({"overflow":"hidden"});    
        }   
    });

});
