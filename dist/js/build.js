(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){


//>>>>ヘッダー部分のカラー変更>>>>>>
// ヘッダーの高さを取得
// topからのスクロール量がヘッダーの高さを超えたらカラー変更
//<<<<<<<<<<<<<<<<<<
$(function(){

  //-----------------------------
  //タブクリックで表示
  //-----------------------------

  $('.js-tab').click(function(){
		$('.is-active').removeClass('is-active');
		$(this).closest('.p-header__menu-item').addClass('is-active');
		$('.is-show').removeClass('is-show');
		const tabs = $(this).data().tab;
    $('#'+tabs).addClass('is-show');
	});

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
  //AOS発火
  //-----------------------------
  AOS.init({
    easing: 'ease-in-out-sine'
  });
  //-----------------------------
  //modal発火
  $('.js-modal').modaal();


});

},{}]},{},[1])