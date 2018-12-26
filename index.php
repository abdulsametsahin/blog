<?php require "init.php"; ?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abdulsamet ŞAHİN</title>
    <link rel="icon" type="image/png" href="<?=asset('img/icon.png?')?>" />
    <link rel="stylesheet/less" type="text/css" href="<?=asset('less/style.less?v1.'.rand(0,999))?>" />
</head>
<body>
    <div id="blog">
        <header>
            <ul>
                <li>
                    <a href="#" class="aktif">
                        <img src="<?=asset('img/about.svg')?>" alt="">
                        <span>Hakkımda</span>
                    </a>
                </li>
                <li>
                    <a href="https://github.com/abdulsametsahin">
                        <img width="22px" src="<?=asset('img/github.svg?2')?>" alt="">
                        <span>Github</span>
                    </a>
                </li>

                <div class="clear"></div>
            </ul>
        </header>
        <div class="about">
            <img class="me" src="https://avatars0.githubusercontent.com/u/41396774?s=460&v=4" alt="">
            <div class="text">
                <strong>Abdulsamet ŞAHİN —</strong>
                bilgisayar mühendisliği öğrencisi, freelancer, web uygulamaları geliştiricisi.
                <a href="mailto:hi@abdulsametsah.in">hi&#64;abdulsametsah.in</a>
                <h1>Bildiklerim</h1>

                <div class="skills">
                    <ul>
                        <li>
                            <span>PHP</span>
                            <?=star(5)?>
                        </li>
                        <li>
                            <span>HTML, CSS</span>
                            <?=star(5)?>
                        </li>
                        <li>
                            <span>Mysql</span>
                            <?=star(4)?>
                        </li>
                        <li>
                            <span>Javscript</span>
                            <?=star(4)?>
                        </li>
                        <li>
                            <span>Laravel</span>
                            <?=star(4)?>
                        </li>
                        <li>
                            <span>Vuejs</span>
                            <?=star(3)?>
                        </li>
                        <li>
                            <span>C</span>
                            <?=star(2)?>
                        </li>
                        <li>
                            <span>Python/Django</span>
                            <?=star(2)?>
                        </li>
                        <li>
                            <span>Ruby/Rails</span>
                            <?=star(2)?>
                        </li>
                    </ul>
                </div>


                <h1>İşletim Sistemleri</h1>
                <div class="skills">
                    <ul>
                        <li>Windows <span class="silik">kendi bilgisayarlarım</span></li>
                        <li>Linux (Ubuntu) <span class="silik">2+ senedir projelerimde sunucu olarak kullanıyorum.</span></li>
                    </ul>
                </div>


                <h1>Tecrübe Sahibi Olduklarım</h1>
                <div class="skills">
                    <ul>
                        <li>Gerçek Zamanlı Programlama</li>
                        <li>APIs</li>
                        <li>Nodejs, Socket.io, Expressjs</li>
                        <li>Selenium</li>
                        <li>Boostrap</li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
            <div class="social">
                <ul>
                    <li><a href="#">E-Posta</a></li>
                    <li><a href="#">Github</a></li>
                    <li><a href="#">Instagram</a></li>
                    <div class="clear"></div>
                </ul>
            </div>


        </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
</body>
</html>