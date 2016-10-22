    $(window).on('load', function() {

        // Set general variables
        // ====================================================================
        var totalWidth = 0;
        $(".gallery__item").each(function(){
            totalWidth = totalWidth + $(this).outerWidth(true);
        });

        var maxScrollPosition = totalWidth - $(".gallery-wrap").outerWidth();

        // This is the core function that animates to the target item
        // ====================================================================
        function toGalleryItem($targetItem){
            if($targetItem.length){
                var newPosition = $targetItem.position().left;
                if(newPosition <= maxScrollPosition){
                    $targetItem.addClass("gallery__item--active");
                    $targetItem.siblings().removeClass("gallery__item--active");
                    $(".gallery").animate({
                        left : - newPosition
                    });
                } else {
                    $(".gallery").animate({
                        left : - maxScrollPosition
                    });
                };
            };
        };
        // Basic HTML manipulation
        // ====================================================================
        $(".gallery").width(totalWidth);
        $(".gallery__item:first").addClass("gallery__item--active");

        // When the prev button is clicked
        // ====================================================================
        $(".gallery__controls-prev").click(function(){
            var $targetItem = $(".gallery__item--active").prev();
            toGalleryItem($targetItem);
        });

        // When the next button is clicked
        // ====================================================================
        $(".gallery__controls-next").click(function(){
            var $targetItem = $(".gallery__item--active").next();
            toGalleryItem($targetItem);
        });
    });

(function($) {
    $(function() {
        if ($('#mainIn').val().length == 0) {
            $('#submit').prop('disabled', true);
        }
        $('#mainIn').on('keydown keyup keypress change', function() {
            if ($(this).val().length > 0) {
                $('#submit').prop('disabled', false);
            } else {
                $('#submit').prop('disabled', true);
            }
        });
    });
    $(function() {
        var $header = $('#topHead');
        var $logo = $('.logo');
        // Nav Fixed
        $(window).scroll(function() {
            if ($(window).scrollTop() > 200) {
                $header.addClass('fixed');
                $logo.addClass('logo-toggle');
            } else {
                $header.removeClass('fixed');
                $logo.removeClass('logo-toggle');
            }
        });
        // Nav Toggle Button
        $('#navToggle').click(function(){
            $header.toggleClass('open');
        });
    });

    $(function(){
        var offsetY = -10;
        var time = 500;

        $("#btnTrial,.scrollLink").on('click',function(){
            var target = $(this.hash);
            if (!target.length) return ;
            // 移動先となる値
            var targetY = target.offset().top+offsetY;
            targetY = targetY -200;

            // スクロールアニメーション
            $('html,body').animate({scrollTop: targetY}, time, 'swing');
            // ハッシュ書き換えとく
            window.history.pushState(null, null, this.hash);
            // デフォルトの処理はキャンセル
            return false;
          });
    });
    $('.choosenAni').css('visibility','hidden');
        $(window).scroll(function(){
            var windowHeight = $(window).height(),
            topWindow = $(window).scrollTop();
            $('.choosenAni').each(function(){
              var targetPosition = $(this).offset().top;
              if(topWindow > targetPosition - windowHeight + 100){
               $(this).addClass("fadeInDown");
              }
              else{
                $(this).removeClass("fadeInDown");
              }
        });
    });
//     $(function(){
//         $('a[href^=#]').click(function(){
// console.log("www");
//             var speed = 500;
//             var href= $(this).attr("href");
//             var target = $(href == "#" || href == "" ? 'html' : href);
//             var position = target.offset().top;
//             $("html, body").animate({scrollTop:position}, speed, "swing");
//             return false;
//         });
//     });

    $(function(){
        var slideSpd = 300;
        var slideTimer = 10000;
        var count = 0;

        var slideNum = $("#slideItem li").length;
        for( i=0; i<slideNum; i++ ){
            $("#slideItem li:eq("+i+")").attr("id","list"+i);
            $("#slideNav li:eq("+i+")").attr("id","btn"+i);
        }
        function itemFade(){
            $("#slideItem li#list"+count).appendTo('#slideItem');
            $("#slideItem li:last").css({opacity: '0'});
            $("#slideItem li:last").stop(true, false).animate({ opacity:'1' }, slideSpd );
            $("#slideNav li").css({ opacity:'1'})
            // $("#slideNav #btn"+count).stop(true, false).animate({ opacity:'0.8' }, slideSpd );
        }

        function countUp(){
            if( count >= slideNum-1 ){
                count = 0;
            }else{
                count++;
            }
        }
        var timerID;
        function timerStart(){
            clearInterval(timerID);
            timerID = setInterval(function(){
                countUp();
                itemFade();
                currentToggle();
            },slideTimer);
        }
        function currentToggle(){
            $("#slideNav li").removeClass("current");
            $("#slideNav #btn"+count).attr("class","current");
            $("#slideItem li").hover(function(){
                clearInterval(timerID);
            },function(){
                timerStart();
            });
        }

        $("#slideNav li").hover(function(){
            var index = $("#slideNav li").index(this);
            count = index;
            currentToggle();
            itemFade();
            clearInterval(timerID);
        },function(){
            timerStart();
        });


        itemFade();
        timerStart();
    });

    // $(function(){
    //     setTimeout(function(){
    //         $('.choosen__list__item01').toggleClass("imgAni");
    //     },1000);
    // });

})(jQuery);


$(document).ready(function() {
  $('dl').on('click', 'dt', function() {
    $(this).next().toggle("blind");
  });

});



