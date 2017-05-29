$(document).ready(function(){
 
    $(".push").click(function(){
        $(".Barra").animate({
            width: "toggle",
            opacity: "toggle"
        });
         var cont=parseFloat($('.contenedor').css('width'))
         var conmarg = cont+parseFloat($('.contenedor').css('margin-left'))+parseFloat($('.contenedor').css('margin-right'));
         var pos = ($(window).width() - cont)/2;
         
         var mov;
         var tam =$(window).width()
         if($(window).width()>800)
            mov = pos+(conmarg*0.2);
         else if($(window).width()<800 && $(window).width()>500)
            mov = pos+(conmarg*0.5);
        else if($(window).width()<500)
            mov = pos+(conmarg*1);

        var x = parseFloat($(this).css('left'))
        if(parseInt(x) == parseInt(mov))
            $(this).animate({ left: pos+'px' }, 400);
        else 
            $(this).animate({ left: mov+'px' }, 400);
    
    })
    
    $(window).resize(function(){
       $('.Barra').css({display:'none'})
       var cont=parseFloat($('.contenedor').css('width'))
       var pos = ($(window).width() - cont)/2;
       $('.push').css({left: pos+'px'});
    })

});