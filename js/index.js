/*********************************
	toggle
*********************************/


$('#toggle').on('click',function(){
	$('body').toggleClass('open');
});
$('.gnav li a').on('click',function(){
	$('body').removeClass('open');
});



/*********************************
	ロゴアニメーション
*********************************/

$(window).on('load',function(){
    $("#lorder img").delay(1200).fadeOut('slow');//ローディング画面を1.5秒（1500ms）待機してからフェードアウト
    $("#lorder").delay(1500).fadeOut('slow',function(){//ローディングエリア（splashエリア）を1.5秒でフェードアウトする記述
    
        $('body').addClass('appear');//フェードアウト後bodyにappearクラス付与
        
    });

    $('.splashbg').on('animationend', function() { 
        //この中に動かしたいJSを記載
        });
});


$(document).ready(function() {
    $('.service_slider').slick({
        autoplay: true,//自動でスライドさせる
        autoplaySpeed: 0,//次の画像に切り替えるまでの時間 今回の場合は0
        speed: 10000,//画像が切り替わるまでの時間 今回の場合は難病で1枚分動くか
        cssEase: 'linear',//動きの種類は等速に
        slidesToShow: 3,
        arrows:false,//左右に出る矢印を非表示
        swipe: false,//スワイプ禁止
        pauseOnFocus: false,//フォーカスが合っても止めない
        pauseOnHover: false,//hoverしても止めない
        responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                autoplay: true, // スマホでの自動再生を無効化
              }
            }
          ]
    });
  });


  $(document).ready(function() {
    $('.mv_slide').slick({
        autoplay: true,
        autoplaySpeed: 0,
        vertical: true,
        verticalSwiping: true,
        cssEase: 'linear',
        infinite: true,
        slidesToShow: 2.8,
        pauseOnFocus: false,//フォーカスが合っても止めない
        pauseOnHover: false,
        swipe: false,
        speed: 5000,
        arrows: false,
        dots: false,
        responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 4,
                autoplay: true, // スマホでの自動再生を無効化
              }
            }
          ]
    });
  });