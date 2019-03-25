$(function(){
    $(window).scroll(function(){
        var topDistance=$(window).scrollTop();  //获取鼠标在本窗口现有状态下移动的高度
        if(topDistance>50){  //如果移动高度大于100px,顶部图标单单显示出，如果移动高度小于等于100，顶部图标不显示
            $('.return_top').fadeIn(800);
        }else{
            $('.return_top').fadeOut(800);
        }
    });
    $('.return_top').on('click',function(){
        $('html,body').animate({scrollTop:0},800); //必须用$('html,body')选择，不然没效果
    })
});

