<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TOMOMI SASAKI -portfolio-</title>
    <meta name="viewport" content="width=device-width">
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
    <header id="header" class="flex bg-color-sub js-header">
      <div class="p-header flex">
        <h1 class="p-header__title">
          <a href="#header">portfolio</a>
        </h1>
        <ul class="p-header__menu">
          <li class="p-header__menu-item">
            <a class="p-header__item-link js-tab" data-tab="about">about</a>
          </li>
          <li class="p-header__menu-item">
            <a class="p-header__item-link js-tab" data-tab="works">works</a>
          </li>
          <li class="p-header__menu-item">
            <a class="p-header__item-link js-tab" data-tab="skill">skill</a>
          </li>
          <li class="p-header__menu-item">
            <a class="p-header__item-link js-tab" data-tab="profile">profile</a>
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

      <!------------------------------->
      <!--about-->
      <!------------------------------->
      <section id="about" class="p-tab-content js-tab-container">
          <div class="p-about__wrapper">

            <h1 class="c-title flex">
              <span class="c-title__text">ABOUT</span>
            </h1>

            <div class="p-about flex justify-content-center">
              <div class="c-card__text text-center">
                このページは佐々木智美のポートフォリオサイトです。</br>
                フロントエンドを中心にバックエンドも学習中。</br>
                簡易的なウェブサービスをフルスタックで作ったり、
                レスポンシブ対応させたりといったことに挑戦しています。</br>
                制作したサイトを作成・公開しているので、ご覧いただけると幸いです。
              </div>

          </div>

        </div>
      </section>



      <!------------------------------->
      <!--works-->
      <!------------------------------->
      <section id="works" class="p-tab-content js-tab-container is-show">

            <h1 class="c-title flex">
              <span class="c-title__text">WORKS</span>
            </h1>

            <p class="p-arrow-mobile"><span class="p-arrow-mobile__span new"></span>New/Old<span class="p-arrow-mobile__span old"></span></p>



            <div class="c-work flex justify-content-center">

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

      <!-- booksmap -->
      <div id="js-modal-booksmap" style="display:none;">

        <div class="c-work__modal-contents flex justify-content-center">
          <h2>BooksMap</h2>
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
                <h3 class="c-work__title">詳細</h3>
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
                <h3 class="c-work__title">概要</h3>
                <div class="c-work__content-text">
                  読んだ本の要約を投稿し合うサイトです。</br>
                  iPhoneやiPadなどへレスポンシブ対応させ、
                  ブラウザテストとエミューレーターテストを実施しました。</br>
                  <p class="c-work__subtitle">工夫した点</p>
                  読んでいる途中の本も気軽に投稿できるよう、読了と読書中の切り替えを設けました。</br>
                  また、人の目を気にせず読書できるよう、「お気に入り」や「気になる」の数は排除しました。</br>
                  代わりに投稿者の名前を掲載し、「よく見かける人」のような曖昧な繋がりや親近感が持てるようにしました。
                  <p class="c-work__subtitle">改善したい点</p>
                  <ul>
                    <li>・AmazonAPIなどを使って画像登録とリンク指定を簡単にする</li>
                    <li>・読んだ冊数などのグラフ化：読書量の見える化によりモチベーションアップを狙う</li>
                    <li>・お気にいりユーザーの登録機能</li>
                    etc...
                  </ul>
                </div>
              </div>
            </div>
        </div>

      </div>

      <!-- portfolio -->
      <div id="js-modal-portfolio" style="display:none;">

        <div class="c-work__modal-contents flex">
          <h2>portfolio</h2>

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
                <h3 class="c-work__title">詳細</h3>
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
                <h3 class="c-work__title">概要</h3>
                <div class="c-work__content-text">
                  ポートフォリオサイトです。</br>
                  制作物・プロフィールなどを掲載しています。</br>
                  <p class="c-work__subtitle">工夫した点</p>
                  上部のタブでページを切り替えられるようにしました。</br>
                  できるだけ少ない移動で全て閲覧でき、かつ必要な情報だけ素早く得られるようにするためです。
                </div>
              </div>
            </div>
        </div>

      </div>



      <!-- object指向 -->
      <div id="js-modal-errorspc" style="display:none;">

        <div class="c-work__modal-contents flex">
          <h2>ERROR PC</h2>
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
                <h3 class="c-work__title">詳細</h3>
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
                <h3 class="c-work__title">概要</h3>
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
          <h2>cafe</h2>

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
                <h3 class="c-work__title">詳細</h3>
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
                <h3 class="c-work__title">概要</h3>
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
          <h2>miina</h2>

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
                <h3 class="c-work__title">詳細</h3>
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
                <h3 class="c-work__title">概要</h3>
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

      <section id="skill" class="p-tab-content p-skill-wrapper js-tab-container">

        <h1 class="c-title flex">
          <span class="c-title__text">SKILL</span>
        </h1>

        <div class="c-skill-wrap flex" data-aos="fade-up">
          <div class="c-skill-wrap__content">
            <h2 class="c-skill-wrap__title">フロントエンド</h2>
            <div class="c-skill-wrap__skill">
              <div class="c-skill-wrap__skill-icons">
                <img class="c-skill-wrap__skill-icon" src="dist/img/html-5.png" alt="">
                <img class="c-skill-wrap__skill-icon" src="dist/img/css.png" alt="">
                <img class="c-skill-wrap__skill-icon" src="dist/img/js.png" alt="">
              </div>
              <p>HTML5/CSS3/bootstrap/JavaScript/jQuery</p>
            </div>
            <div class="c-skill-wrap__skill">
              <span class="font-color-sub">Can：</span>
              <ul>
                <li>FLOCSSを使ったCSS設計</li>
                <li>レスポンシブ対応サイト</li>
                <li>npmやyarnによるプラグインの導入</li>
                <li>タスクランナーの作成・使用</li>
              </ul>
              など
            </div>
          </div>
          <div class="c-skill-wrap__content" data-aos="fade-up">
            <h2 class="c-skill-wrap__title">バックエンド</h2>
            <div class="c-skill-wrap__skill">
              <div class="c-skill-wrap__skill-icons">
                <img class="c-skill-wrap__skill-icon" src="dist/img/php.png" alt="">
                <img class="c-skill-wrap__skill-icon" src="dist/img/mysql.png" alt="">
              </div>
              <p>MySQL/PHP/FuelPHP</p>
            </div>
            <div class="c-skill-wrap__skill">
              <span class="font-color-sub">Can：</span>
              <ul>
                <li>フルスクラッチでWebサービス開発</li>
                <li>オブジェクト指向でゲーム制作</li>
                <li>DB設計</li>
              </ul>
              など
            </div>
          </div>

          <div class="c-skill-wrap__content" data-aos="fade-up">
            <h2 class="c-skill-wrap__title">そのほか</h2>
            <div class="c-skill-wrap__skill">
              <div class="c-skill-wrap__skill-icons">
                <img class="c-skill-wrap__skill-icon" src="dist/img/github.png" alt="">
              </div>
              <p>GitHub/Sourcetree/Photoshop/XD/Android Emulator/Xcode</p>
            </div>
            <div class="c-skill-wrap__skill">
              <span class="font-color-sub">Can：</span>
              <ul>
                <li>githubへプッシュ</li>
                <li>Android Emulator/Xcodeでエミュレーターテスト</li>
                <li>Photoshopで画像加工</li>
                <li>XDでサイトデザイン</li>
              </ul>
              など
            </div>
          </div>

        </div>

    </section>

    <!------------------------------->
    <!--profile-->
    <!------------------------------->
    <section id="profile" class="p-tab-content js-tab-container">
      <div class="c-content__wrapper">

        <h1 class="c-title flex">
          <span class="c-title__text">PROFILE</span>
        </h1>

        <div class="p-about flex justify-content-center">

          <div class="flex-column site-width">

            <div class="c-card__text text-center">

              <h3 class="c-title__sub">基本情報</h3>

              <ul class="p-prof-summary__list">
                <li class="p-prof-summary__list-item">
                  name:
                  <span class="c-info__sub">SASAKI TOMOMI</span>

                </li>
                <li class="p-prof-summary__list-item">
                  birth:
                  <span class="c-info__sub">1992.11.25</span>
                </li>
                <li class="p-prof-summary__list-item">
                  from:
                  <span class="c-info__sub">島根県</span>
                </li>
                <li class="p-prof-summary__list-item">
                  graduation:
                  <span class="c-info__sub">教育大国語科</span>
                </li>
                <li class="p-prof-summary__list-item">
                  work:
                  <span class="c-info__sub">ウェブライター</span>
                </li>
              </ul>

            </div>

            <div class="c-card__text" data-aos="fade-up">

              <h3 class="c-title__sub text-center">職歴</h3>

                <div class="p-prof-detail__wrap">
                  <h3 class="p-prof-detail__title p-prof-detail__title-right">現職
                    <span class="p-prof-detail__date">2017-現在</span>
                  </h3>
                  <div class="p-prof-detail__texts flex">
                    <div class="p-prof-detail__imgbox-mobile">
                      <img class="p-prof-detail__img" src="dist/img/writer-pic.jpg" alt="blue-worker">
                    </div>
                    <div class="p-prof-detail__text">
                      <h4 class="c-info__sub">仕事内容：</h4>
                      ライター業。</br>
                      大手家電メーカーの製品紹介メディアで、オーディオ機器を中心に幅広く記事を担当。</br>
                      <h4 class="c-info__sub">経緯：</h4>
                      元々文章を書くのが好きだったため転職期間中にアルバイト感覚でクラウドワークスにてライター業務を請け負う。</br>
                      半年後に開業。大手家電メディアで9万PV以上の記事を多数作成中。</br>
                    </div>
                    <div class="p-prof-detail__imgbox mobile-none">
                      <img class="p-prof-detail__img" src="dist/img/writer-pic.jpg" alt="blue-worker">
                    </div>
                  </div>
                </div>

                <div class="p-prof-detail__wrap p-previous-work">
                  <h3 class="p-prof-detail__title">前職
                    <span class="p-prof-detail__date">2016-2017年</span>
                  </h3>
                  <div class="p-prof-detail__texts flex">
                    <div class="p-prof-detail__imgbox">
                      <img class="p-prof-detail__img" src="dist/img/blue-worker.jpg" alt="blue-worker">
                    </div>
                    <div class="p-prof-detail__text">
                      <h4 class="c-info__sub">仕事内容：</h4>
                      2016年新卒で設備業の会社の営業技術職へ採用。</br>
                      新築現場の設備工事補助業務・法人営業を担当。</br>
                      <h4 class="c-info__sub">退職理由：</h4>
                      資格を取得したことで歴史建造物の点検も担当。</br>
                      自己都合により退職。</br>
                      <h4 class="c-info__sub">取得資格：</h4>
                      消防設備士甲種4類（2018年失行済み）
                    </div>
                  </div>
                </div>

                <div class="p-prof-detail__wrap previous-work">
                  <h3 class="p-prof-detail__title">これから
                    <span class="p-prof-detail__date">2019-未来</span>
                  </h3>
                  <div class="p-prof-detail__texts flex">
                    <div class="p-prof-detail__imgbox">
                      <img class="p-prof-detail__img" src="dist/img/catEngineer.jpg" alt="blue-worker">
                    </div>
                    <div class="p-prof-detail__text">
                      <h4 class="c-info__sub">プログラミング</h4>
                      2019年4月から1日平均2.5時間プログラミング学習中。</br>
                      フロントもバックも扱えるエンジニアを目指す。</br>
                      <h4 class="c-info__sub">学ぶきっかけ・理由</h4>
                      ・ワードプレスへ入稿する際、HTMLの知識が必要とされたため</br>
                      ・幼い頃から緻密に計算されたモノに惹かれるため</br>
                      ・人の書いた文章を読むのが好き</br>
                      ・ゲーム「Detroit: Become Human」による影響</br>
                      <h4 class="c-info__sub">夢</h4>
                      30年後にアンドロイドと暮らすこと。
                    </div>
                  </div>
                </div>

            </div>

            <div class="c-card__text" data-aos="zoom-in">

              <h3 class="c-title__sub text-center">長所・短所・趣味</h3>
              <div class="p-prof-detail__wrap previous-work">
                <h3 class="p-prof-detail__title p-prof-detail__title-right">長所と短所
                </h3>
                <div class="p-prof-detail__texts flex">
                  <div class="p-prof-detail__imgbox-mobile">
                    <img class="p-prof-detail__img" src="dist/img/booknharinezumi.jpg" alt="blue-worker">
                  </div>
                  <div class="p-prof-detail__text">
                    <h4 class="c-info__sub">長所：挑戦と継続</h4>
                    気になることはとにかく試す性格。</br>
                    プログラミングの勉強を初めてみたり、DIYで壁を塗ってみたり、
                    旅に出てみたりとさまざまなことに挑戦。</br>
                    <a href="#works">アウトプットの作成</a>など、何らかの結果が出るまで行動する。
                    <h4 class="c-info__sub">短所：考えすぎる所</h4>
                    慎重な性格。</br>
                    何度も同じ箇所を確認したり、全体を見渡す前に目の前のことを終わらせようとする。</br>
                    改善のために心理学を勉強中。行動力を生かして認知行動療法などを実践。
                  </div>
                  <div class="p-prof-detail__imgbox mobile-none">
                    <img class="p-prof-detail__img" src="dist/img/booknharinezumi.jpg" alt="blue-worker">
                  </div>
                </div>
              </div>

              <div class="p-prof-detail__wrap previous-work">
                <h3 class="p-prof-detail__title">趣味
                </h3>
                <div class="p-prof-detail__texts flex">
                  <div class="p-prof-detail__imgbox">
                    <img class="p-prof-detail__img" src="dist/img/cycling.jpg" alt="blue-worker">
                  </div>
                  <div class="p-prof-detail__text">
                    サイクリング・DIY・ドラム・旅・映画・読書・漫画・アニメ・ゲーム実況・ボードゲーム・声優など</br>
                  </div>
                </div>
              </div>

            </div>

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
