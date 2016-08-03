$(function(){
    $('.category-title').hover(function(){
        $(this).next('hr').addClass('separator-active');
    },function(){
        $(this).next('hr').removeClass('separator-active');
    });
});
