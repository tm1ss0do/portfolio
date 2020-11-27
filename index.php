<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TOMOMI SASAKI | portfolio</title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="佐々木智美のポートフォリオサイトです。制作物やスキルをご紹介しています。">
    <link rel="stylesheet" href="dist/css/app.css">
    <link rel="stylesheet" href="dist/css/reset.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kosugi|M+PLUS+Rounded+1c|Noto+Sans+JP|Sawarabi+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="modaal.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>

    <!------------------------------->
    <!--header-->
    <!------------------------------->
    <header id="header" class="flex js-header">
      <div class="p-header flex">
        <h1 class="p-header__title">
          <a href="#hero">portfolio</a>
        </h1>
        <ul class="p-header__menu">
          <li class="p-header__menu-item">
            <a href="#about" class="p-header__item-link">about</a>
          </li>
          <li class="p-header__menu-item">
            <a href="#works" class="p-header__item-link">works</a>
          </li>
          <li class="p-header__menu-item">
            <a href="#skill" class="p-header__item-link">skill</a>
          </li>
          <li class="p-header__menu-item">
            <a href="#profile" class="p-header__item-link">profile</a>
          </li>
        </ul>
        <!------------------------------->
        <!--humberger menu-->
        <!------------------------------->
        <ul class="p-header__humberger-icon js-show-btn">
          <li class="p-header__humberger-stick"></li>
        </ul>
        <ul class="p-header__humberger js-hum-menu">
          <li class="p-header__humberger-item js-item-link">
            <a class="p-header__humberger-link" href="#about">about</a>
          </li>
          <li class="p-header__humberger-item js-item-link">
            <a class="p-header__humberger-link" href="#works">works</a>
          </li>
          <li class="p-header__humberger-item js-item-link">
            <a class="p-header__humberger-link" href="#skill">skill</a>
          </li>
          <li class="p-header__humberger-item js-item-link">
            <a class="p-header__humberger-link" href="#profile">profile</a>
          </li>
        </ul>

      </div>
    </header>

    <!------------------------------->
    <!--main-->
    <!------------------------------->
    <main id="main" class="flex">

      <!-- **************************** -->
      <!-- hero hedder -->
      <div id="hero" class="p-hero__container">
        <section class="p-hero__wrap u-text-align--center">
          <h2 class="c-title__header-logo u-font--xl">Portfolio</h2>
          <p class="c-title__sub"> created by tomomi</p>
        </section>
      </div>

      <!-- <section class="hero container-fluid js-float-menu-target">
        <h2 class="hero-title">Responsive Design<br> is so good.</h2>
      </section> -->

      <!------------------------------->
      <!--about-->
      <!------------------------------->
      <section id="about" class="p-section-content  js-tab-container">
          <div class="p-about__wrapper">

            <h2 class="c-title flex">
              <span class="c-title__text">ABOUT</span>
            </h2>

            <div class="p-about flex justify-content-center">
              <div class="c-card__text text-center">
                このページは佐々木智美のポートフォリオサイトです。</br>
                2019年からウェブサイトを作り始めました。</br>
                簡易的なウェブサービスをフルスタックで作ったり、レスポンシブ対応させたりしています。</br>
                ご覧いただけると幸いです。
              </div>

          </div>

        </div>
      </section>



      <!------------------------------->
      <!--works-->
      <!------------------------------->
      <section id="works" class="p-section-content js-tab-container">

            <h2 class="c-title flex">
              <span class="c-title__text">WORKS</span>
            </h2>

            <h3 class="c-card__text text-center" >最新</h3>

            <div class="c-work flex justify-content-center">

              <div class="c-work__wrap" data-aos="fade-up">
                <div class="c-work__imgbox">
                  <img class="c-work__img" src="dist/img/match-welcome-page.png" alt="match-welcome-page">
                </div>
                <a href="#js-modal-match" class="js-modal c-work__hover-wrap text-center">
                  <p class="c-work__hover-text">LaravelとVueを使ったWebサービス</p>
                </a>
              </div>

            </div>

            <div class="c-card__text text-center">
                <p>
                  エンジニアとのマッチングサービスです。</br>
                  主婦の方でもかんたんに依頼できることをテーマに作りました。
                </p>


            </div>


            <div class="c-work flex justify-content-center">

              <p class="p-arrow-mobile"><span class="p-arrow-mobile__span new"></span>New/Old<span class="p-arrow-mobile__span old"></span></p>

              <div class="p-arrow__container new">
                <p class="p-arrow new">
                  <span class="p-arrow__span new"></span>
                  New
                </p>
              </div>

              <div class="c-work__wrap" data-aos="fade-up">
                <div class="c-work__imgbox">
                  <img class="c-work__img" src="dist/img/booksmap.png" alt="booksmap">
                </div>
                <a href="#js-modal-booksmap" class="js-modal c-work__hover-wrap text-center">
                  <p class="c-work__hover-text">FuelPHPを使ったWebサービス</p>
                </a>
              </div>

              <div class="c-work__wrap" data-aos="fade-up">
                <div class="c-work__imgbox">
                  <img class="c-work__img" src="dist/img/portfolio.png" alt="">
                </div>
                <a href="#js-modal-portfolio" class="js-modal c-work__hover-wrap text-center">
                  <p class="c-work__hover-text">このサイトです</p>
                </a>
              </div>

              <div class="c-work__wrap" data-aos="fade-up">
                <div class="c-work__imgbox">
                  <img class="c-work__img" src="dist/img/cafe-responsive.png" alt="cafe-responsive">
                </div>
                <a href="#js-modal-cafe" class="js-modal c-work__hover-wrap text-center">
                  <p class="c-work__hover-text">レスポンシブ対応練習用サイト</p>
                </a>
              </div>

              <div class="c-work__wrap" data-aos="fade-up">
                <div class="c-work__imgbox">
                  <img class="c-work__img" src="dist/img/errorspc.png" alt="errorspc">
                </div>
                <a href="#js-modal-errorspc" class="js-modal c-work__hover-wrap text-center">
                  <p class="c-work__hover-text">オブジェクト指向練習用ゲーム</p>
                </a>
              </div>

              <div class="c-work__wrap" data-aos="fade-up">
                <div class="c-work__imgbox">
                    <img class="c-work__img" src="dist/img/miina.png" alt="miina">
                </div>
                <a href="#js-modal-miina" class="js-modal c-work__hover-wrap text-center">
                  <p class="c-work__hover-text">フルスクラッチ</p>
                </a>
              </div>

              <div class="p-arrow__container old">
                <p class="p-arrow old">
                  Old
                  <span class="p-arrow__span old"></span>
                </p>
              </div>

            </div>

      </section>

      <!-- ********************** -->
      <!-- modaaal works -->
      <!-- ********************** -->

      <!-- match -->
      <div id="js-modal-match" style="display:none;">

        <div class="c-work__modal-contents flex justify-content-center">
          <h3>match</h3>
            <div class="c-work__wrap-modal">
              <a class="c-work__img-link">
                <img class="c-work__img" src="dist/img/match-welcome-page.png" alt="match-welcome-page">
              </a>
            </div>

            <div class="c-work__details-wrap">
              <div class="c-work__btn-wrap">
                <a class="c-work__content-link" href="https://create-match.herokuapp.com/" target="_blank">作品ページへ</a>
                <a class="c-work__content-link" href="https://github.com/tm1ss0do/matchEngineer" target="_blank">
                  <i class="c-work__content-git-icon icon fab fa-github"></i>
                  github
                </a>
              </div>
              <div class="c-work__content">
                <h4 class="c-work__title">詳細</h4>
                <div class="c-work__content-text">
                  <ul>
                    <li class="c-work__content-item">
                      使用言語など：Laravel/Vue/FLOCSS/scss/webpack/Xd
                    </li>
                    <li class="c-work__content-item">開発：Mac / Docker</li>
                    <li class="c-work__content-item">サーバー：Apache / MySQL</li>
                    <li class="c-work__content-item">
                      制作期間：2020.8.1〜10.25(全約200時間)
                    </li>
                    <li class="c-work__content-item">
                      エミュレーターテスト済：Mac/windows/iphoneSE/iphone8/iPhone11/iPadPro/Pixel2
                    </li>
                    <li class="c-work__content-item">
                      ブラウザテスト済：safari/chrome/Edge/IE11/firefox
                    </li>
                  </ul>
                </div>
              </div>
              <div class="c-work__content">
                <h4 class="c-work__title">概要</h4>
                <div class="c-work__content-text">
                  「エンジニアをもっと身近に」をテーマにしたサービスです。</br>
                  クラウドワークスやランサーズよりも、メルカリなどのサービスを意識し、詳しくない方でも手軽に利用できるようにしています。
                  <p class="c-work__subtitle">工夫した点</p>
                  案件一覧ページは情報量が多かったため、DBの情報をjson形式で取得し、Vueでページ切り替えできるようにしました。</br>
                  また、ダイレクトメッセージやコメントがあった場合は、ユーザーのマイページへ通知が来るようにしました。</br>
                  既読かどうかはDBへ保存されるため、他のブラウザやデバイスで見た場合も既読を保持できます。</br>
                </div>
              </div>
            </div>
        </div>

      </div>

      <!-- booksmap -->
      <div id="js-modal-booksmap" style="display:none;">

        <div class="c-work__modal-contents flex justify-content-center">
          <h3>BooksMap</h3>
            <div class="c-work__wrap-modal">
              <a class="c-work__img-link">
                <img class="c-work__img" src="dist/img/booksmap.png" alt="">
              </a>
            </div>

            <div class="c-work__details-wrap">
              <div class="c-work__btn-wrap">
                <a class="c-work__content-link" href="https://booksmap.tomomi-s.xyz/public/home" target="_blank">作品ページへ</a>
                <a class="c-work__content-link" href="https://github.com/tm1ss0do/booksmap" target="_blank">
                  <i class="c-work__content-git-icon icon fab fa-github"></i>
                  github
                </a>
              </div>
              <div class="c-work__content">
                <h4 class="c-work__title">詳細</h4>
                <div class="c-work__content-text">
                  <ul>
                    <li class="c-work__content-item">
                      使用言語など：FuelPHP/bootstrap/scss
                    </li>
                    <li class="c-work__content-item">
                      制作期間：2019.1.20〜3.2
                    </li>
                    <li class="c-work__content-item">
                      ブラウザテスト済：Mac safari/chrome windows Edge/IE11
                    </li>
                  </ul>
                </div>
              </div>
              <div class="c-work__content">
                <h4 class="c-work__title">概要</h4>
                <div class="c-work__content-text">
                  読んだ本の要約を投稿し合うサイトです。</br>
                  iPhoneやiPadなどへレスポンシブ対応させ、
                  ブラウザテストとエミューレーターテストを実施しました。</br>
                  <p class="c-work__subtitle">工夫した点</p>
                  読んでいる途中の本も気軽に投稿できるよう、読了と読書中の切り替えを設けました。</br>
                  投稿者の名前を掲載し、「よく見かける人」のような曖昧な繋がりや親近感が持てるようにしました。
                </div>
              </div>
            </div>
        </div>

      </div>

      <!-- portfolio -->
      <div id="js-modal-portfolio" style="display:none;">

        <div class="c-work__modal-contents flex">
          <h3>portfolio</h3>

            <div class="c-work__wrap-modal">
              <a class="c-work__img-link">
                <img class="c-work__img" src="dist/img/portfolio.png" alt="">
              </a>
            </div>

            <div class="c-work__details-wrap">
              <div class="c-work__btn-wrap">
                <a class="c-work__content-link" href="https://github.com/tm1ss0do/portfolio" target="_blank">
                  <i class="c-work__content-git-icon icon fab fa-github"></i>
                  github
                </a>
              </div>
              <div class="c-work__content">
                <h4 class="c-work__title">詳細</h4>
                <div class="c-work__content-text">
                  <ul>
                    <li class="c-work__content-item">
                      使用言語など：scss/FLOCSS/npm
                    </li>
                    <li class="c-work__content-item">
                      制作期間：2019.12.20〜12.22(2020年3月更新)
                    </li>
                  </ul>
                </div>
              </div>
              <div class="c-work__content">
                <h4 class="c-work__title">概要</h4>
                <div class="c-work__content-text">
                  ポートフォリオサイトです。</br>
                  制作物・プロフィールなどを掲載しています。</br>
                  <p class="c-work__subtitle">工夫した点</p>
                  当初タブでページを切り替えられるようにしていましたが、ウェブ解析士の方からタブは開いてもらえないことが多いと教えていただき、1ページで完結させました。
                </div>
              </div>
            </div>
        </div>

      </div>



      <!-- object指向 -->
      <div id="js-modal-errorspc" style="display:none;">

        <div class="c-work__modal-contents flex">
          <h3>ERROR PC</h3>
            <div class="c-work__wrap-modal">
              <a class="c-work__img-link">
                <img class="c-work__img" src="dist/img/errorspc.png" alt="">
              </a>
            </div>
            <div class="c-work__details-wrap">
              <div class="c-work__btn-wrap">
                <a class="c-work__content-link" href="https://errorspc.tomomi-s.xyz/" target="_blank">作品ページへ</a>
                <a class="c-work__content-link" href="https://github.com/tm1ss0do/errorspc" target="_blank">
                  <i class="c-work__content-git-icon icon fab fa-github"></i>
                  github
                </a>
              </div>
              <div class="c-work__content">
                <h4 class="c-work__title">詳細</h4>
                <div class="c-work__content-text">
                  <ul>
                    <li class="c-work__content-item">
                      使用言語など：php/css/photoshop
                    </li>
                    <li class="c-work__content-item">
                      制作期間：2019.10.15〜10.25
                    </li>
                  </ul>
                </div>
              </div>
              <div class="c-work__content">
                <h4 class="c-work__title">概要</h4>
                <div class="c-work__content-text">
                  PHPのオブジェクト指向の練習に作った簡単なゲームです。</br>
                  <p class="c-work__subtitle">工夫した点</p>
                  周囲にプログラミング学習者が多いので、楽しめるように共感できるような題材を選びました。
                </div>
              </div>
            </div>
        </div>

      </div>


      <!-- cafe -->
      <div id="js-modal-cafe" style="display:none;">

        <div class="c-work__modal-contents flex">
          <h3>cafe</h3>

            <div class="c-work__wrap-modal">
              <a class="c-work__img-link">
                <img class="c-work__img" src="dist/img/cafe-responsive.png" alt="">
              </a>
            </div>

            <div class="c-work__details-wrap">
              <div class="c-work__btn-wrap">
                <a class="c-work__content-link" href="https://cafe-responsive.tomomi-s.xyz/" target="_blank">作品ページへ</a>
                <a class="c-work__content-link" href="https://github.com/tm1ss0do/cafe-responsive" target="_blank">
                  <i class="c-work__content-git-icon icon fab fa-github"></i>
                  github
                </a>
              </div>
              <div class="c-work__content">
                <h4 class="c-work__title">詳細</h4>
                <div class="c-work__content-text">
                  <ul>
                    <li class="c-work__content-item">
                      使用言語など：scss/FLOCSS/npm
                    </li>
                    <li class="c-work__content-item">
                      制作期間：2019.11.8〜11.17
                    </li>

                  </ul>
                </div>
              </div>
              <div class="c-work__content">
                <h4 class="c-work__title">概要</h4>
                <div class="c-work__content-text">
                  レスポンシブ対応練習サイトです。</br>
                  架空のカフェをイメージして紹介ページを作っています。</br>
                  <p class="c-work__subtitle">工夫した点</p>
                  photoshopを使って画像加工に挑戦しています。
                </div>
              </div>
            </div>
        </div>

      </div>

      <!-- miina -->
      <div id="js-modal-miina" style="display:none;">

        <div class="c-work__modal-contents flex">
          <h3>miina</h3>

            <div class="c-work__wrap-modal">
              <a class="c-work__img-link">
                <img class="c-work__img" src="dist/img/miina.png" alt="">
              </a>
            </div>
            <div class="c-work__details-wrap">
              <div class="c-work__btn-wrap">
                <a class="c-work__content-link" href="https://miina.tomomi-s.xyz/" target="_blank">作品ページへ</a>
                <a class="c-work__content-link" href="https://github.com/tm1ss0do/miina" target="_blank">
                  <i class="c-work__content-git-icon icon fab fa-github"></i>
                  github
                </a>
              </div>
              <div class="c-work__content">
                <h4 class="c-work__title">詳細</h4>
                <div class="c-work__content-text">
                  <ul>
                    <li class="c-work__content-item">
                      使用言語など：php/MySQL/Apache/XD
                    </li>
                    <li class="c-work__content-item">
                      制作期間：2019.9.29〜10.9
                    </li>
                  </ul>
                </div>
              </div>
              <div class="c-work__content">
                <h4 class="c-work__title">概要</h4>
                <div class="c-work__content-text">
                  フルスクラッチで作成した初めてのWebサービスです。</br>
                  「minne」のようなフリマサービスをイメージして作成しました。</br>
                  <p class="c-work__subtitle">フルスクラッチで作った理由</p>
                  フレームワークで作成した時にエラーに対処できないと聞いたためです。</br>
                  実際、FuelPHPでWebサービスを作成した時にフルスクラッチで作った経験が役に立ちました。
                </div>
              </div>
            </div>
        </div>

      </div>



      <!------------------------------->
      <!--skill-->
      <!------------------------------->

      <section id="skill" class="p-section-content p-skill-wrapper js-tab-container">

        <h2 class="c-title flex">
          <span class="c-title__text">SKILL</span>
        </h2>
        個人で学習・開発してきた内容をまとめています。

        <div class="c-skill-wrap" data-aos="fade-up">
          <div class="c-skill-wrap__content">
            <h3 class="c-skill-wrap__title">
              HTML5・CSS3・bootstrap
            </h3>
            <div class="c-skill-wrap__skill">
              <h4 class="font-color-sub">できること</h4>
              <ul class="c-skill-wrap__list">
                <li class="c-skill-wrap__list-item">FLOCSSを使ったCSS設計</li>
                <li class="c-skill-wrap__list-item">sassを使ったコーディング</li>
                <li class="c-skill-wrap__list-item">レスポンシブ対応サイト</li>
                <li class="c-skill-wrap__list-item">npmやyarnによるプラグインの導入</li>
                <li class="c-skill-wrap__list-item">タスクランナーの作成・使用</li>
                <li class="c-skill-wrap__list-item">gulpやwebpackを使ったコーディング</li>
              </ul>
              など
            </div>
          </div>
          <div class="c-skill-wrap__content">
            <h3 class="c-skill-wrap__title">
              js・jQuery・Vue・React・Backbone
            </h3>
            <div class="c-skill-wrap__skill">
              <h4 class="font-color-sub">できること</h4>
              <ul class="c-skill-wrap__list">
                <li class="c-skill-wrap__list-item">axiousを使った非同期通信</li>
                <li class="c-skill-wrap__list-item">Vue.jsを使ったSPAの作成</li>
              </ul>
              など
            </div>
          </div>
          <div class="c-skill-wrap__content" data-aos="fade-up">
            <h3 class="c-skill-wrap__title">
              PHP・Fuel PHP・Laravel・Apache
            </h3>
            <div class="c-skill-wrap__skill">
              PHPとFuel PHPでは、それぞれWebサービスを個人開発しています。</br>
              LaravelとVueを掛け合わせたエンジニアマッチングサービスも作成しました。
              <h4 class="font-color-sub">できること</h4>
              <ul class="c-skill-wrap__list">
                <li class="c-skill-wrap__list-item">PHPでWebサービス開発</li>
                <li class="c-skill-wrap__list-item">DB設計</li>
                <li class="c-skill-wrap__list-item">DockerでLAMP環境の作成</li>
              </ul>
              など
            </div>
          </div>
          <div class="c-skill-wrap__content" data-aos="fade-up">
            <h3 class="c-skill-wrap__title">
              WordPress
            </h3>
            <div class="c-skill-wrap__skill">
              独自ドメインを取得し、WPのテーマを使ってブログを運営しています。</br>
              WPのテーマも作りました。
              <h4 class="font-color-sub">できること</h4>

              <ul class="c-skill-wrap__list">
                <li class="c-skill-wrap__list-item">WPテーマの作成</li>
                <li class="c-skill-wrap__list-item">子テーマの編集</li>
              </ul>
              など
            </div>
          </div>

          <div class="c-skill-wrap__content" data-aos="fade-up">
            <h3 class="c-skill-wrap__title">そのほか</h3>
            <div class="c-skill-wrap__skill">
              <p>GitHub/Sourcetree/Photoshop/XD/Android Emulator/Xcode</p>
            </div>
            <div class="c-skill-wrap__skill">
              <p class="font-color-sub">できること</p>
              <ul class="c-skill-wrap__list">
                <li class="c-skill-wrap__list-item">githubへのアップ</li>
                <li class="c-skill-wrap__list-item">Sourcetreeを介してgitでコード管理(個人開発)</li>
                <li class="c-skill-wrap__list-item">Android Emulator/Xcodeでエミュレーターテスト</li>
                <li class="c-skill-wrap__list-item">Photoshopで画像加工</li>
                <li class="c-skill-wrap__list-item">XDでサイトデザイン</li>
              </ul>
              など
            </div>
          </div>

        </div>

    </section>

    <!------------------------------->
    <!--profile-->
    <!------------------------------->
    <section id="profile" class="p-section-content  js-tab-container">
      <div class="c-content__wrapper">

        <h2 class="c-title flex">
          <span class="c-title__text">PROFILE</span>
        </h2>

        <div class="c-prof__wrapper">
          <h3 class="c-prof__title">TOMOMI</h3>
          <div class="c-prof__text">
            <p>1992年生まれの島根県出身です。京都教育大学の国語科を卒業。</br>
              暮らしに役立つ情報メディアのウェブライターとして活動しており、納品記事は月に9万PV以上を記録しています。</br>
              人からはよく、穏やか・意思が強い・優しい・話しやすい・変わっていると言われます。</br>
            </p>
          </div>
        </div>

      </div>
    </section>





    </main>
    <!------------------------------->
    <!--footer-->
    <!------------------------------->
    <footer id="footer">
      Copyright © <?php echo date('Y'); ?> Tomomi Sasaki .All Rights Reserved.
    </footer>

    <script src='//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="modaal.min.js"></script>
    <script type="text/javascript" src="dist/js/build.js"></script>
  </body>
</html>
