//jQuery読み込み
var $ = require("jquery");
//aos読み込み


//>>>>ヘッダー部分のカラー変更>>>>>>
// ヘッダーの高さを取得
// topからのスクロール量がヘッダーの高さを超えたらカラー変更
//<<<<<<<<<<<<<<<<<<
$(function(){

  //スクロールしたら発火
  $(window).scroll(function(){

    //>>>>ヘッダー部分のカラー変更>>>>>>
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

    //>>>>プロフ写真IN>>>>>>
    // スクロール量取得
    // クラス追加・繰り返しなし
    //<<<<<<<<<<<<<<<<<<
      var mypic = $('.js-movein-mypic');
      var profHeight = $('.js-prof-height').offset().top;

      if( sc > profHeight ){
        mypic.addClass('mypic-move').removeClass('mypic-stop');
      }else{
        mypic.addClass('mypic-stop').removeClass('mypic-move');
      }


  });



});
