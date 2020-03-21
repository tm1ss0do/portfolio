

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
