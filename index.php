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
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css" />
  </head>
  <body>
    <!------------------------------->
    <!--header-->
    <!------------------------------->
    <header id="header" class="flex bg-color-sub js-header js-header-bg-color-sub">
      <div class="p-header flex">
        <h1 class="p-header__title">
          <a href="#header">portfolio</a>
        </h1>
        <ul class="p-header__menu">
          <li class="p-header__menu-item">
            <a class="p-header__item-link" href="#profile">profile</a>
          </li>
          <li class="p-header__menu-item">
            <a class="p-header__item-link" href="#works">works</a>
          </li>
          <li class="p-header__menu-item">
            <a class="p-header__item-link" href="#skill">skill</a>
          </li>
          <li class="p-header__menu-item">
            <a class="p-header__item-link" href="#contact">contact</a>
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
            <a class="p-header__humberger-link" href="#profile">profile</a>
          </li>
          <li class="p-header__humberger-item js-item-link">
            <a class="p-header__humberger-link" href="#works">works</a>
          </li>
          <li class="p-header__humberger-item js-item-link">
            <a class="p-header__humberger-link" href="#skill">skill</a>
          </li>
          <li class="p-header__humberger-item js-item-link">
            <a class="p-header__humberger-link" href="#contact">contact</a>
          </li>
        </ul>

      </div>
    </header>


    <!------------------------------->
    <!--hero-->
    <!------------------------------->
    <div class="c-hero flex js-hero">
      <h1 class="c-hero__title">
        <ul class="c-hero__title-anime flex">
          <li class="c-hero__title-item">P</li>
          <li class="c-hero__title-item">o</li>
          <li class="c-hero__title-item">r</li>
          <li class="c-hero__title-item">t</li>
          <li class="c-hero__title-item">f</li>
          <li class="c-hero__title-item">o</li>
          <li class="c-hero__title-item">l</li>
          <li class="c-hero__title-item">i</li>
          <li class="c-hero__title-item">o</li>
        </ul>
      </h1>
    </div>
    <!------------------------------->
    <!--main-->
    <!------------------------------->
    <main id="main" class="flex">

              <!------------------------------->
              <!--profile-->
              <!------------------------------->

              <section id="profile" class="p-profile-wrap flex js-prof-height">
                <h1 class="c-title flex">
                  <span class="c-title__text">PROFILE</span>
                </h1>
                <div class="p-profile flex">
                  <div class="p-prof-summary flex site-width">

                    <div class="p-prof-summary__itemizebox flex">
                      <div class="p-prof-summary__itemize flex">

                        <ul class="p-prof-summary__list">
                          <li class="p-prof-summary__list-item">
                            <i class="far fa-user"></i>
                            SASAKI TOMOMI
                          </li>
                          <li class="p-prof-summary__list-item">
                            <i class="fas fa-birthday-cake"></i>
                            1992.11.25
                          </li>
                          <li class="p-prof-summary__list-item">
                            <i class="fas fa-home"></i>
                            島根県
                          </li>
                          <li class="p-prof-summary__list-item">
                            <i class="fas fa-graduation-cap"></i>
                            教育大学国語科卒業
                          </li>
                          <li class="p-prof-summary__list-item">
                            <i class="fas fa-briefcase"></i>
                            ウェブライター
                          </li>
                        </ul>
                        <div class="p-prof-summary__icon-wrap">
                          <a class="p-prof-summary__twitterlink icon" href="https://mobile.twitter.com/tomomi_dwyl">
                            <i class="p-prof-summary__twitter-icon fab fa-twitter"></i>
                          </a>
                          <a class="p-prof-summary__bloglink icon" href="https://mobile.twitter.com/tomomi_dwyl">
                            <i class="p-prof-summary__blog-icon fas fa-blog"></i>
                          </a>
                        </div>

                      </div>
                    </div>

                      <div class="p-prof-summary__mypic js-movein-mypic">
                        <img class="p-prof-summary__img" src="dist/img/prof-img.jpg" alt="">
                      </div>

                    <div class="p-prof-summary__base-info">
                      <div class="p-prof-summary__text-back">
                        <img class="p-prof-summary__text-back-img" src="dist/img/hukidashi-mokomoko.png" alt="">
                      </div>
                      <div class="p-prof-summary__text">
                        はじめまして！佐々木智美と申します。</br>
                        2019年からプログラミング学習をスタートしました。</br>
                        フロントエンドを中心にバックエンドも学習中です。</br>
                        このページでは制作物のほか、私の経歴や趣味などをご紹介しています。</br>
                        ご覧いただけると幸いです。
                      </div>
                    </div>

                  </div>


                  <!------------------------------->
                  <!--profile-detail-->
                  <!------------------------------->
                  <div class="p-prof-detail flex js-prof-detail-height">
                    <h2 class="p-more-info js-view-more">
                      more info</br>
                      <i class="fas fa-sort-up p-more-info__icon-up js-icon"></i>
                      <i class="fas fa-sort-down p-more-info__icon-down js-icon"></i>
                    </h2>


                    <div class="p-prof-detail__contents site-width js-view-prof-detail">

                      <div class="p-prof-detail__wrap previous-work site-width">
                        <h3 class="p-prof-detail__title">前職について
                          <span class="p-prof-detail__date">2016-2017年</span>
                        </h3>
                        <div class="p-prof-detail__texts flex">
                          <div class="p-prof-detail__imgbox">
                            <img class="p-prof-detail__img" src="dist/img/blue-worker.jpg" alt="blue-worker">
                          </div>
                          <div class="p-prof-detail__text">
                            大学卒業後、設備業の会社の営業技術職として採用される。</br>
                            新築現場の設備工事補助業務と法人営業に従事。</br>
                            従業員の高齢化などにより点検業務の人手が不足し、
                            歴史ある建造物での点検業務へシフト。</br>
                            素晴らしい同僚に恵まれながらも、苦手な虫が多い天井裏や軒下などで長時間作業する内、
                            適応障害になり退職。（現在は完治。）</br>
                            </br>
                            取得資格：消防設備士甲種4類（現在は失行済み）
                          </div>
                        </div>
                      </div>


                      <div class="p-prof-detail__wrap previous-work site-width">
                        <h3 class="p-prof-detail__title">現職について
                          <span class="p-prof-detail__date">2017-現在</span>
                        </h3>
                        <div class="p-prof-detail__texts flex">
                          <div class="p-prof-detail__imgbox-mobile">
                            <img class="p-prof-detail__img" src="dist/img/writer-pic.jpg" alt="blue-worker">
                          </div>
                          <div class="p-prof-detail__text">
                            前職で消防設備士の知識を生かして設備の設計図を作るのが特に楽しかったことから、
                            「知識を生かし、作り、役立つ仕事」に絞って転職活動を開始。</br>
                            製品をリサーチし、得た情報を噛み砕いて広めるライター業に興味を持つ。</br>
                            クラウドワークスにてライター業務を請け負い、半年後に開業。</br>
                            現在は大手家電メーカーの製品紹介メディアで、オーディオ機器を中心に幅広く記事を担当。
                          </div>
                          <div class="p-prof-detail__imgbox mobile-none">
                            <img class="p-prof-detail__img" src="dist/img/writer-pic.jpg" alt="blue-worker">
                          </div>
                        </div>
                      </div>


                      <div class="p-prof-detail__wrap previous-work site-width">
                        <h3 class="p-prof-detail__title">これからについて
                          <span class="p-prof-detail__date">2019-未来</span>
                        </h3>
                        <div class="p-prof-detail__texts flex">
                          <div class="p-prof-detail__imgbox">
                            <img class="p-prof-detail__img" src="dist/img/catEngineer.jpg" alt="blue-worker">
                          </div>
                          <div class="p-prof-detail__text">
                            ワードプレスへ入稿する際、HTMLの知識が必要とされたのをきっかけに、
                            2019年4月からプログラミング学習をスタート。</br>
                            Progateや動画教材を使い、前々から興味のあったPythonから勉強を始めるも、
                            JavaScriptの知識が前提となっていたため、フロントエンド中心の勉強へシフト。</br>
                            勉強するうちに楽しさに気が付く。</br>
                            さらに、転職活動中に指標としていた「知識を生かし、作り、役立つ仕事」とも合致するため、
                            エンジニアを目指す。</br>
                            30年後にはアンドロイドと暮らすのが夢。
                          </div>
                        </div>
                      </div>


                      <div class="p-prof-detail__wrap previous-work site-width">
                        <h3 class="p-prof-detail__title">長所と短所
                        </h3>
                        <div class="p-prof-detail__texts flex">
                          <div class="p-prof-detail__imgbox-mobile">
                            <img class="p-prof-detail__img" src="dist/img/booknharinezumi.jpg" alt="blue-worker">
                          </div>
                          <div class="p-prof-detail__text">
                            <h4 class="p-prof-detail__sub-title">長所：試し継続する</h4>
                            気になることはとにかく試す性格。</br>
                            動画教材にはなくても、APIについて調べてみたり、
                            DIYで壁を塗ってみたり、旅に出てみたりとさまざまなことに挑戦。</br>
                            <a href="#works">アウトプットの作成</a>など、何らかの結果が出るまで行動する。
                            <h4 class="p-prof-detail__sub-title">短所：初動が遅い</h4>
                            元々引っ込み思案かつ心配性。</br>
                            そのため、新しい言語を学ぶ前に少し躊躇してしまう、
                            何度も同じ箇所を確認してしまうなどの欠点がある。</br>
                            改善のために認知行動療法を実践中。運動やマインドフルネスを生活に取り入れている。
                          </div>
                          <div class="p-prof-detail__imgbox mobile-none">
                            <img class="p-prof-detail__img" src="dist/img/booknharinezumi.jpg" alt="blue-worker">
                          </div>
                        </div>
                      </div>

                      <div class="p-prof-detail__wrap previous-work site-width">
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


                      <h2 class="p-more-info js-slideup">
                        閉じる
                        <i class="fas fa-sort-up p-more-info__icon-up under-icon js-icon-up"></i>
                      </h2>

                    </div>


                  </div>


                </div>
              </section>

              <!------------------------------->
              <!--works-->
              <!------------------------------->
              <section id="works" class="p-work-wrapper flex">

                <h1 class="c-title flex">
                  <span class="c-title__text">WORKS</span>
                </h1>

                <div class="p-work flex">

                  <div class="p-work__contents-wrap flex site-width">


                    <div class="c-work flex">

                      <div class="c-work__wrap" data-aos="fade-up">
                        <div class="c-work__new-imgbox">
                          <img class="c-work__new-img" src="dist/img/new-flag.png" alt="new-flag">
                        </div>
                        <h2 class="c-work__create-date">up:2019年12月(2020年1月更新)</h2>
                        <div class="c-work__imgbox">
                          <a href="#" target="_blank">
                            <img class="c-work__img" src="dist/img/portfolio.png" alt="">
                            <div class="c-work__msg-panel js-hover-message disappear">
                              portfolio
                            </div>
                          </a>
                        </div>
                        <div class="c-work__skills">
                          <h3 class="c-work__title">use</h3>
                          <div class="c-work__use-skill">
                            scss/FLOCSS/npm
                          </div>
                        </div>
                        <div class="c-work__summary">
                          <h3 class="c-work__title">summary</h3>
                          <div class="c-work__summary-text">
                            <ul>
                              <li class="c-work__summary-item">
                                <i class="c-work__summary-time-icon icon fas fa-history"></i>
                                2019.12.20〜12.22
                              </li>
                              <li class="c-work__summary-item">
                                <a class="c-work__summary-link" href="https://github.com/tm1ss0do/portfolio">
                                  <i class="c-work__summary-git-icon icon fab fa-github"></i>
                                  github
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="c-work__wrap" data-aos="fade-up">
                        <h2 class="c-work__create-date">up:2019年11月</h2>
                        <div class="c-work__imgbox">
                          <a href="http://cafe-responsive.tomomi-s.xyz/" target="_blank">
                            <img class="c-work__img" src="dist/img/cafe-responsive.png" alt="cafe-responsive">
                            <div class="c-work__msg-panel js-hover-message disappear">
                              cafe</br>
                              -responsive-
                            </div>
                          </a>
                        </div>
                        <div class="c-work__skills">
                          <h3 class="c-work__title">use</h3>
                          <div class="c-work__use-skill">
                            scss/FLOCSS/npm
                          </div>
                        </div>
                        <div class="c-work__summary">
                          <h3 class="c-work__title">summary</h3>
                          <div class="c-work__summary-text">
                            <ul>
                              <li class="c-work__summary-item">
                                <i class="c-work__summary-time-icon icon fas fa-history"></i>
                                2019.11.8〜11.17
                              </li>
                              <li class="c-work__summary-item">
                                <i class="c-work__summary-git-icon icon fab fa-github"></i>
                                リンク準備中
                              </li>
                              <li class="c-work__summary-item">
                                <a class="c-work__summary-link" href="https://dekiruko.work/2019/11/30/%e3%82%a2%e3%82%a6%e3%83%88%e3%83%97%e3%83%83%e3%83%88%e3%80%8ccafe%e3%80%8d%e3%81%ae%e4%bd%9c%e6%88%90%e6%99%82%e9%96%93%e8%a8%98%e9%8c%b2/">
                                  <i class="c-work__summary-blog-icon icon fas fa-blog"></i>
                                  アウトプット「cafe」の作成時間記録
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="c-work__wrap" data-aos="fade-up">
                        <h2 class="c-work__create-date">up:2019年10月</h2>
                        <div class="c-work__imgbox">
                          <a href="http://miina.tomomi-s.xyz/" target="_blank">
                            <img class="c-work__img" src="dist/img/miina.png" alt="miina">
                            <div class="c-work__msg-panel js-hover-message disappear">
                              miina</br>
                              -フルスクラッチ-
                            </div>
                          </a>
                        </div>
                        <div class="c-work__skills">
                          <h3 class="c-work__title">use</h3>
                          <div class="c-work__use-skill">
                            php/MySQL/Apache
                          </div>
                        </div>
                        <div class="c-work__summary">
                          <h3 class="c-work__title">summary</h3>
                          <div class="c-work__summary-text">
                            <ul>
                              <li class="c-work__summary-item">
                                <i class="c-work__summary-time-icon icon fas fa-history"></i>
                                2019.9.29〜10.9
                              </li>
                              <li class="c-work__summary-item">
                                <i class="c-work__summary-git-icon icon fab fa-github"></i>
                                リンク準備中
                              </li>
                              <li class="c-work__summary-item">
                                <a class="c-work__summary-link" href="https://dekiruko.work/2019/09/30/">
                                  <i class="c-work__summary-blog-icon icon fas fa-blog"></i>
                                  アウトプット”miina”作成中
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    </div>


                    <div class="c-work flex">

                      <div class="c-work__wrap" data-aos="fade-up">
                        <h2 class="c-work__create-date">2019年1月完成予定</h2>
                        <div class="c-work__imgbox">
                          <a href="http://miina.tomomi-s.xyz/" target="_blank">
                            <img class="c-work__img" src="dist/img/making.png" alt="miina">
                            <div class="c-work__msg-panel js-hover-message disappear">
                              作成中</br>
                              -FuelPHP&amp;オブジェクト指向-
                            </div>
                          </a>
                        </div>
                        <div class="c-work__skills">
                          <h3 class="c-work__title">use</h3>
                          <div class="c-work__use-skill">

                            <i class="fab fa-js"></i>
                            <i class="fab fa-html5"></i>
                            <i class="fab fa-css3-alt"></i>
                            FuelPHP
                          </div>
                        </div>
                        <div class="c-work__summary">
                          <h3 class="c-work__title">summary</h3>
                          <div class="c-work__summary-text">
                            <ul>
                              <li class="c-work__summary-item">
                                <i class="c-work__summary-time-icon icon fas fa-history"></i>
                                2019.12〜
                              </li>
                              <li class="c-work__summary-item">
                                <i class="c-work__summary-git-icon icon fab fa-github"></i>
                                Coming soon...
                              </li>
                              <li class="c-work__summary-item">
                                <i class="c-work__summary-blog-icon icon fas fa-blog"></i>
                                Coming soon...
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="c-work__wrap" data-aos="fade-up">
                        <h2 class="c-work__create-date">2019年1月完成予定</h2>
                        <div class="c-work__imgbox">
                          <a href="http://miina.tomomi-s.xyz/" target="_blank">
                            <img class="c-work__img" src="dist/img/making.png" alt="miina">
                            <div class="c-work__msg-panel js-hover-message disappear">
                              作成中</br>
                              -WordPress-
                            </div>
                          </a>
                        </div>
                        <div class="c-work__skills">
                          <h3 class="c-work__title">use</h3>
                          <div class="c-work__use-skill">
                            <i class="fab fa-wordpress"></i>
                            WordPress
                          </div>
                        </div>
                        <div class="c-work__summary">
                          <h3 class="c-work__title">summary</h3>
                          <div class="c-work__summary-text">
                            <ul>
                              <li class="c-work__summary-item">
                                <i class="c-work__summary-time-icon icon fas fa-history"></i>
                                2019.1〜
                              </li>
                              <li class="c-work__summary-item">
                                <i class="c-work__summary-git-icon icon fab fa-github"></i>
                                Coming soon...
                              </li>
                              <li class="c-work__summary-item">
                                <i class="c-work__summary-blog-icon icon fas fa-blog"></i>
                                Coming soon...
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="c-work__wrap" data-aos="fade-up">
                        <h2 class="c-work__create-date">2019年2月完成予定</h2>
                        <div class="c-work__imgbox">
                          <a href="http://miina.tomomi-s.xyz/" target="_blank">
                            <img class="c-work__img" src="dist/img/making.png" alt="miina">
                            <div class="c-work__msg-panel js-hover-message disappear">
                              作成中</br>
                              -vue.js-
                            </div>
                          </a>
                        </div>
                        <div class="c-work__skills">
                          <h3 class="c-work__title">use</h3>
                          <div class="c-work__use-skill">
                            <i class="fab fa-js"></i>
                            <i class="fab fa-html5"></i>
                            <i class="fab fa-css3-alt"></i>
                            veu.js
                          </div>
                        </div>
                        <div class="c-work__summary">
                          <h3 class="c-work__title">summary</h3>
                          <div class="c-work__summary-text">
                            <ul>
                              <li class="c-work__summary-item">
                                <i class="c-work__summary-time-icon icon fas fa-history"></i>
                                Coming soon...
                              </li>
                              <li class="c-work__summary-item">
                                <i class="c-work__summary-git-icon icon fab fa-github"></i>
                                Coming soon...
                              </li>
                              <li class="c-work__summary-item">
                                <i class="c-work__summary-blog-icon icon fas fa-blog"></i>
                                Coming soon...
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>

                </div>


              </section>
              <!------------------------------->
              <!--skill-->
              <!------------------------------->

              <section id="skill" class="p-skill-wrapper flex">

                <h1 class="c-title flex">
                  <span class="c-title__text">SKILL</span>
                </h1>

                <div class="p-skill flex">

                  <div class="c-skill flex">

                    <div class="c-skill-wrap flex" data-aos="flip-up">
                      <h2 class="c-skill-wrap__title">Front-end</h2>
                      <div class="c-skill-wrap__skill">
                        <i class="fab fa-wordpress"></i>
                        <i class="fab fa-js"></i>
                        <i class="fab fa-html5"></i>
                        <i class="fab fa-css3-alt"></i>
                        <i class="fab fa-npm"></i>
                      </br>
                        HTML5/CSS3/jQuery/JavaScript/WordPress
                      </div>
                      <div class="c-skill-wrap__text">
                        <ul>
                          <li>FLOCSSでCSS設計</li>
                          <li>レスポンシブ対応</li>
                          <li>npm</li>
                        </ul>
                      </div>
                      ect.
                    </div>

                    <div class="c-skill-wrap" data-aos="flip-up">
                      <h2 class="c-skill-wrap__title">Back-end</h2>
                      <div class="c-skill-wrap__skill">
                        <i class="fab fa-php"></i>
                        </br>
                        MySQL/PHP/FuelPHP
                      </div>
                      <div class="c-skill-wrap__text">
                        <ul>
                          <li>フルスタックでWebサービス開発</li>
                          <li>オブジェクト指向</li>
                          <li>DB設計</li>
                        </ul>
                      </div>
                      ect.
                    </div>

                    <div class="c-skill-wrap" data-aos="flip-up">
                      <h2 class="c-skill-wrap__title">Others</h2>
                      <div class="c-skill-wrap__skill">
                        <i class="fab fa-github"></i>
                        <i class="fab fa-sourcetree"></i>
                        </br>
                        Git/GitHub/Sourcetree/Photoshop/XD
                      </div>
                      <div class="c-skill-wrap__text">
                        <ul>
                          <li>Photoshopで画像加工</li>
                          <li>XDでサイトデザイン</li>
                        </ul>
                      </div>
                      ect.
                    </div>

                  </div>

                </div>

              </section>
              <!------------------------------->
              <!--contact-->
              <!------------------------------->
              <section id="contact" class="p-contact-wrapper flex">
                <h1 class="c-title flex">
                  <span class="c-title__text">CONTACT</span>
                </h1>
                <div class="p-contact flex">
                  <!-- <h2 class="p-contact__title">メンテナンス中</h2> -->
                  <h2>
                  <a class="p-contact__twitterlink" href="https://mobile.twitter.com/tomomi_dwyl">
                    <i class="p-contact__twitter-icon fab fa-twitter"></i>
                  </a>
                  </h2>
                  <p>twitterにてお声がけ頂けると喜びます。</p>
                </div>
              </section>

    </main>
    <!------------------------------->
    <!--footer-->
    <!------------------------------->
    <footer id="footer">
      Copyright © 2019 Tomomi Sasaki .All Rights Reserved.
    </footer>
    <script type="text/javascript" src="dist/js/build.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  </body>
</html>
