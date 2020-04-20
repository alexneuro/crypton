<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>

    <title>Crypton</title>
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/jquery.fullpage.min.css">
    <link type="text/css" rel="stylesheet" href="css/wp-style.css">
    <link type="text/css" rel="stylesheet" href="css/responsive.css">
</head>
<body class="whitepaper">
<div class="fullscreen-bg">
    <video id="fullscreen-bg__video" loop muted autoplay poster="img/poster.jpg">
        <source src="video/video.mp4" type="video/mp4">
    </video>
</div>
<div class="inner-content header">
    <a href="/" id="logo"></a>
</div>

<div class="inner-content text-head">
    <div class="inline-flex head">
        <div>
            <h1>
                Why we are building CRYPTON
            </h1>
            <h2>
                WHITE PAPER
            </h2>
        </div>
        <div class="inline-flex">
            <a href="#" class="lang active"><img src="img/usa.png">English</a>
            <a href="#" class="lang"><img src="img/japan.png">日本語</a>
            <a href="#" class="lang"><img src="img/china.png">中文</a>
            <a href="#" class="rounded-btn">leave feedback</a>
            <a href="#" class="rounded-btn">download pdf</a>
        </div>
    </div>
</div>
<div class="textbox">
    <div class="inner-content">
        <div class="left-panel">
            <ul id="doc-links">

            </ul>


        </div>
        <div class="wp-text">
			<?php include_once( "wp-text.html" ) ?>
        </div>
        <div style="clear: both"></div>
    </div>
    <div id="footer">
        <div class="footer-content">
            <div class="inline-flex">
                <div class="flex">
                    <h3>GET STARTED</h3>
                    <ul>
                        <li><a href="#">About Crypton</a></li>
                        <li><a href="#">Download Wallet</a></li>
                        <li><a href="#">Buy Crypton</a></li>
                        <li><a href="#">User Guides</a></li>
                    </ul>
                </div>
                <div class="flex">
                    <h3>NETWORK</h3>
                    <ul>
                        <li><a href="#">Full list of Exchanges</a></li>
                        <li><a href="#">Block Explorers</a></li>
                        <li><a href="#">Network Stats</a></li>
                    </ul>
                </div>
                <div class="flex">
                    <h3>COMMUNITY</h3>
                    <ul>
                        <li><a href="#">Telegram</a></li>
                        <li><a href="#">Reddit</a></li>
                        <li><a href="#"> Bitcoin Talk</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Slack</a></li>
                    </ul>
                </div>
                <div class="flex">
                    <h3>RESOURCES</h3>
                    <ul>
                        <li><a href="legal.html">Legal</a></li>
                        <li><a href="white-paper.php">White Papper</a></li>
                        <li><a href="#">Start Mining</a></li>
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Genesis Block</a></li>
                    </ul>
                </div>
            </div>
            <div class="flex subscribe">
                <div class="icons">
                    <a href="#"><img src="img/fb.png"></a>
                    <a href="#"><img src="img/link.png"></a>
                    <a href="#"><img src="img/inst.png"></a>
                    <a href="#"><img src="img/lid.png"></a>
                    <a href="#"><img src="img/in.png"></a>
                    <a href="#"><img src="img/tw.png"></a>
                </div>
                <div class="inputs">
                    <input type="email" name="email" id="email" placeholder="E-MAIL">
                    <a id="email-btn">SEND</a>
                    <div style="clear: both"></div>
                </div>
                <div style="clear: both"></div>
                <p class="copy">CRYPTON, 2018</p>
            </div>
        </div>
    </div>
</div>

<a id="menu-btn"></a>
<a id="menu-close"></a>
<div id="menu-wrapper">
    <ul id="menu">
        <li><a href="#">GET STARTED</a></li>
        <li><a href="white-paper.php">WHITE PAPER</a></li>
        <li><a href="#">EXPLORER</a></li>
        <li><a href="#">DOWNLOAD</a></li>
        <li><a href="#">COMMUNITY</a></li>
        <li><a href="#">RESOURCES</a></li>
    </ul>
</div>


<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/scrolloverflow.js"></script>
<script type="text/javascript" src="js/jquery.fullpage.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.anchor').each(function () {
            var scrollTop = $(this).offset().top;
            var text = '<li' + ($(this).prop("tagName") == 'H4' ? ' class="sub"' : '') + '><a class="doc-link" data-link="' + scrollTop + '">' + $(this).text() + '</a></li>'
            $('#doc-links').append(text);
        });

        $('.doc-link').click(function () {
            $('#doc-links').find('li').each(function () {
                $(this).removeClass('active');
            });

            $(this).parent('li').addClass('active');

            var link = $(this).data('link');

            // $('.head h2').text($(this).text());
            // $('.textbox').scrollTop(link - 300);
            $('.textbox').animate({ scrollTop: link-300}, 1000);
        });
    });
</script>
</body>
</html>