<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./<?php echo empty($_GET['name']) ? "flatly" : $_GET['name'];?>/stylesheets/styles.css" media="screen">
    <link rel="stylesheet" href="./custom_news.css" media="screen">
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="navbar-brand">ニュース</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-8 content-main">
          <h1>ミラン、好調の本田と契約延長か。すでに代理人と交渉も？</h1>
          <p class="news-info">
            <a href="#">フットボールチャンネル</a>
            <span class="news-date">2月28日(日)21時35分配信</span>
          </p>
          <div class="content-text">
            <img src="http://placehold.it/200x150" class="news-thumbnail">
            今季が開幕して以降、本田は出場機会を失うこともあったが、2016年になって以降は全公式戦で先発出場を続けている。<br><br>
            また、正確なクロスでゴールを演出するだけでなく、守備でも献身的なプレーを見せる本田に、現地メディアも高い評価を与えている。<br><br>
            そんな本田に、ミランは新契約を準備しているという。ミランと本田の契約は来季限り（2017年7月まで）となっているが、延長となればさらに長くミランに残ることになる。<br><br>
            同メディアによれば、アドリアーノ・ガッリアーニCEOは本田の代理人である兄の弘幸氏と交渉を行っており、合意に自信を持っているとしている。<br>
            好調を続ける本田は以前からミランへの愛情を強調しており、シニシャ・ミハイロビッチ監督も本田に信頼を置いている。
          </div>

          <div class="content-ad-rect">
            <a href="#">
              <img src="http://placehold.it/300x250">
            </a>
          </div>

        </div>
        <div class="col-md-4 content-sub">
          <div class="content-ad-rect">
            <a href="#">
              <img src="http://placehold.it/300x250">
            </a>
          </div>

          <div class="news-mod">
            <h3><a hrf="#">スポーツランキング</a></h3>
            <ul class="list-unstyled">
              <li class="clearfix">
                <img src="http://placehold.it/100x75" class="news-mod-thumbnail">
                <p>
                  <a href="#">
                  本田、伊紙『ガゼッタ』も降参。「真の中盤」と絶賛しMVPに選出！
                  </a>
                </p>
              </li>
              <li class="clearfix">
                <img src="http://placehold.it/100x75" class="news-mod-thumbnail">
                <p>
                  <a href="#">
                  本田、伊紙『ガゼッタ』も降参。「真の中盤」と絶賛しMVPに選出！
                  </a>
                </p>
              </li>
              <li class="clearfix">
                <img src="http://placehold.it/100x75" class="news-mod-thumbnail">
                <p>
                  <a href="#">
                  本田、伊紙『ガゼッタ』も降参。「真の中盤」と絶賛しMVPに選出！
                  </a>
                </p>
              </li>
            </ul>
          </div>
        </div>
        
        <div class="col-md-12 content-footer">
          <footer>
            Copyright (C) 2016 Yahoo Japan Corporation. All Rights Reserved.
          </footer>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./<?php echo empty($_GET['name']) ? 'flatly' : $_GET['name'];?>/javascripts/bootstrap.min.js"></script>
  </body>
</html>

