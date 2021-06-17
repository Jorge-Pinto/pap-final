
var head = document.getElementsByTagName('head')[0];
var script = document.createElement('script');
script.type = 'text/javascript';
script.src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js%22%3E";
$(document).ready(function(){

    $('.radio-group .radio').click(function(){
    $('.radio').addClass('gray');
    $(this).removeClass('gray');
    });
    
    $('.plus-minus .plus').click(function(){
    var count = $(this).parent().prev().text();
    $(this).parent().prev().html(Number(count) + 1);
    });
    
    $('.plus-minus .minus').click(function(){
    var count = $(this).parent().prev().text();
    $(this).parent().prev().html(Number(count) - 1);
    });
    
    });