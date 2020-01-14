//jQuery読み込み
var $ = require("jquery");

//>>>>ヘッダー部分のカラー変更>>>>>>
// ヘッダーの高さを取得
// topからのスクロール量がヘッダーの高さを超えたらカラー変更
//<<<<<<<<<<<<<<<<<<
$(function(){


  //-----------------------------
  //スクロールしたら発火
  //-----------------------------
  $(window).scroll(function(){

    //-----------------------------
    //ヘッダー部分のカラー変更
    //-----------------------------
    //スクロール量
    var sc = $(this).scrollTop();
    //ヘッダーの高さ
    var headerHeight = $(".js-header").outerHeight();
    //ヒーローのトップからの高さ
    var heroHeight = $('.js-hero').outerHeight();
    //スクロール量が、ヒーローの高さ＋ヘッダーの高さで背景変更
    if( sc > heroHeight ){
      $(".js-header").addClass('js-header-bg-color-opa').removeClass('js-header-bg-color-sub');
    }else{
      $(".js-header").addClass('js-header-bg-color-sub').removeClass('js-header-bg-color-opa');
    }

    //-----------------------------
    //プロフ写真IN
    //-----------------------------
    // スクロール量取得
    // クラス追加・繰り返しなし
    //-----------------------------
      var mypic = $('.js-movein-mypic');
      var profHeight = $('.js-prof-height').offset().top;

      if( sc > profHeight ){
        mypic.addClass('mypic-move').removeClass('mypic-stop');
      }else{
        mypic.addClass('mypic-stop').removeClass('mypic-move');
      }


  });


  //-----------------------------
  //プロフィール詳細表示
  //-----------------------------
  //上部のボタン押下時のイベント
  $('.js-view-more').on('click',function(){
    $(this).siblings('.js-view-prof-detail').slideToggle("slow").css('display','flex');
    $(this).find('.js-icon').toggle();
    //上部ボタン下へ配置する
    //topからviewしているプロフ詳細までの距離
    var pDetailHeight = $('.js-prof-detail-height').offset().top;
    //アニメーション
    $('body,html').animate({
      scrollTop: pDetailHeight
    }, 500 );
  });
  //-----------------------------
  //下部のボタン押下時のイベント
  $('.js-slideup').on('click',function(){
    $(this).closest('.js-view-prof-detail').slideUp("slow");
    $('.js-view-more').find('.js-icon').toggle();
    //上部ボタン位置へ戻す
    //topからprofまでの距離
    var profHeight = $('.js-prof-height').offset().top;
    //アニメーション
    $('body,html').animate({
      scrollTop: profHeight
    }, 500 );
  });
  //-----------------------------

  //-----------------------------
  //ハンバーガーメニュー表示
  //-----------------------------
  //ハンバーガーボタンにバツボタン用のクラスをaddする＆ハンバーガーメニューを出す
  $('.js-show-btn').on('click',function(){
    $(this).toggleClass('js-hide-btn');
    $(this).siblings('.js-hum-menu').toggleClass('js-show-hum');
  });

  //メニューのリンクが押されたら、ハンバーガーメニューを閉じる
  $('.js-item-link').on('click',function(){
    $(this).closest('.js-hum-menu').siblings('.js-show-btn').toggleClass('js-hide-btn');
    $(this).closest('.js-hum-menu').toggleClass('js-show-hum');
  });

  //-----------------------------

  //-----------------------------
  //AOS発火
  //-----------------------------
  AOS.init({
    easing: 'ease-in-out-sine'
  });
  //-----------------------------


});
