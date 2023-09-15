<!DOCTYPE html>
<!--
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Hotel_switzerland</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
    <style>
        /* Intro */
        #intro {
            background: url("images/overlay.png"), url("images/switzerland/intro.jpg");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, bottom center;
            background-repeat: repeat, no-repeat;
        }

        /* One */
        #one {
            background: url("images/overlay.png"), url("images/switzerland/one.mp4");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* Two */
        #two {
            background: url("images/overlay.png"), url("images/switzerland/two.mp4");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* three */
        #three {
            background: url("images/overlay.png"), url("images/switzerland/three.jpg");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* four */
        #four {
            background: url("images/overlay.png"), url("images/switzerland/four.jpg");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* five */
        #five {
            background: url("images/overlay.png"), url("images/switzerland/five.jpg");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        header>a {
            text-decoration: none;
        }

        /* 호텔명, 호텔소개글 가독성을 위한 css */
        .box {
            background: rgba(21, 21, 21, 0.4);
            color: white;
            padding: 2em;
        }

        #video {
            position: absolute;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }

    </style>
</head>

<body class="is-preload">
    <!-- Header -->
    <header id="header">
        <a href="../../index.php" style="color: black;">
            <h1>Home</h1>
        </a>
        <nav>
            <ul>
                <li><a href="#intro">Intro</a></li>
                <li><a href="#one">Kempinski Palace Engelberg</a></li>
                <li><a href="#two">Hotel Metropole</a></li>
                <li><a href="#three">Hotel Apartments - Lugano</a></li>
                <li><a href="#four">Chalet Hotel Schönegg</a></li>
                <li><a href="#five">Maloja Palace</a></li>
            </ul>
        </nav>
    </header>

    <!-- Intro -->
    <section id="intro" class="main style1 dark fullscreen">
        <div class="content" style="background : rgba( 21, 21, 21, 0.4 ); border-radius : 25px;">
            <header>
                <h2>switzerland</h2>
            </header>
            <p>
                Hotels in <strong>Switzerland</strong> are renowned for their luxurious and comfortable facilities and services.
            </p>
            <footer>
                <a href="#one" class="button style2 down">More</a>
            </footer>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main style2 right dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/switzerland/one.mp4" type="video/mp4">
        </video>
        <div class="content box">
            <header>
                <a href="https://www.kempinski.com/en">
                    <h2>Kempinski Palace Engelberg</h2>
                </a>
            </header>
            <p>Perched high in the mountains in the heart of Switzerland, located only a short distance from Lucerne, the Kempinski Palace Engelberg sits at the foot of the Titlis mountain.</p>
        </div>
        <a href="#two" class="button style2 down anchored">Next</a>
    </section>

    <!-- Two -->
    <section id="two" class="main style2 left dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/switzerland/two.mp4" type="video/mp4">
        </video>
        <div class="content box style2">
            <header>
                <a href="https://www.google.com/maps/place/Hotel+Metropole/@46.6861223,7.8568027,17z/data=!3m1!4b1!4m9!3m8!1s0x478fa49a2d9c7699:0x418ef28c22e1b8c3!5m2!4m1!1i2!8m2!3d46.6861223!4d7.8568027!16s%2Fg%2F1v2gcnqm?entry=ttu">
                    <h2>Hotel Metropole</h2>
                </a>
            </header>
            <p>Whether you are planning to come for relaxation or for working, this area is in harmony with nature and ideas will submerge easily and plentifully!</p>
        </div>
        <a href="#three" class="button style2 down anchored">Next</a>
    </section>

    <!-- three -->
    <section id="three" class="main style2 right dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/switzerland/three.mp4" type="video/mp4">
        </video>
        <div class="content box">
            <header>
                <a href="https://be.synxis.com/?adult=2&arrive=2023-06-03&chain=19159&child=0&config=SHA&currency=KRW&depart=2023-06-04&filter=META&hotel=36643&level=hotel&locale=en-US&rooms=1&src=goog_organic&start=availresults&theme=SHA&utm_campaign=google-hpa-36643&utm_content=mapresults_03-06-2023_1_36643_KR_desktop_default___organic&utm_medium=channel_connect&utm_source=google-hpa">
                    <h2>Hotel Apartments - Lugano</h2>
                </a>
            </header>
            <p>Looking for places to stay in Lugano, Switzerland? We are glad to welcome you to our brand new, high quality serviced apartments in the heart of Lugano, furnished to an extremely high standard with designer items and fittings.</p>
        </div>
        <a href="#four" class="button style2 down anchored">Next</a>
    </section>

    <!-- four -->
    <section id="four" class="main style2 left dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/switzerland/four.mp4" type="video/mp4">
        </video>
        <div class="content box style2">
            <header>
                <a href="https://www.simplebooking.it/ibe/hotelbooking/search?hid=3400&lang=EN&mhs_click_data=eyJwbGFjZW1lbnQiOiIxMDMiLCJwaWQiOiIiLCJkYXRlIjp7InNlYyI6MTY4NTI4MDQyMiwidXNlYyI6NDY2MDAwfSwiaG90ZWxJZCI6MTk1OTAsIm1hcmtldCI6IktSIiwiY2xpY2tJZCI6IjBkOWY4MzE2LTk3YzQtNGFhZC1hN2EzLWMxY2U4ZDEwOTg5MSIsImNoYWluQ29kZSI6bnVsbH0#guests=A,A&in=2023-6-11&out=2023-6-12&refcode=Googlehotelads&mscode=Googlehotelads&cur=KRW&coupon=&adType=0">
                    <h2>Chalet Hotel Schönegg</h2>
                </a>
            </header>
            <p>
                At Chalet Hotel Schönegg, delicious means being on the roof of the world.
        </div>
        <a href="#five" class="button style2 down anchored">Next</a>
    </section>

    <!-- five -->
    <section id="five" class="main style2 right dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/switzerland/five.mp4" type="video/mp4">
        </video>
        <div class="content box">
            <header>
                <a href="https://book.ermeshotels.com/#/hotel/2333/channel/1022/language/1/rooms?arrival=20230904&departure=20230906&adults=2">
                    <h2>Maloja Palace</h2>
                </a>
            </header>
            <p>Visiting Maloja Palace, the first CO2 neutral hotel in beautiful Engadine, on the Swiss Alps.</p>
        </div>
    </section>


    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.poptrox.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
