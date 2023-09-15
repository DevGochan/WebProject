<!DOCTYPE html>
<!--
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Hotel_hungary</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
    <style>
        /* Intro */
        #intro {
            background: url("images/overlay.png"), url("images/hungary/intro.jpg");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, bottom center;
            background-repeat: repeat, no-repeat;
        }

        /* One */
        #one {
            background: url("images/overlay.png"), url("images/hungary/one.mp4");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* Two */
        #two {
            background: url("images/overlay.png"), url("images/hungary/two.mp4");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* three */
        #three {
            background: url("images/overlay.png"), url("images/hungary/three.jpg");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* four */
        #four {
            background: url("images/overlay.png"), url("images/hungary/four.jpg");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* five */
        #five {
            background: url("images/overlay.png"), url("images/hungary/five.jpg");
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
                <li><a href="#one">Continental Hotel Budapest</a></li>
                <li><a href="#two">Parisi Udvar Hotel Budapest</a></li>
                <li><a href="#three">Anantara New York Palace Budapest Hotel</a></li>
                <li><a href="#four">Grand Hotel Esztergom</a></li>
                <li><a href="#five">Hotel Palazzo Zichy</a></li>
            </ul>
        </nav>
    </header>

    <!-- Intro -->
    <section id="intro" class="main style1 dark fullscreen">
        <div class="content" style="background : rgba( 21, 21, 21, 0.4 ); border-radius : 25px;">
            <header>
                <h2>Hungary</h2>
            </header>
            <p>
                <strong>Hungarian</strong> hotels mainly follow European style and design, reflecting the country's historical and cultural character. These hotels are luxurious and are known for their beautiful décor and interiors inside and out.
            </p>
            <footer>
                <a href="#one" class="button style2 down">More</a>
            </footer>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main style2 right dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/hungary/one.mp4" type="video/mp4">
        </video>
        <div class="content box">
            <header>
                <a href="https://continentalhotelbudapest.com/">
                    <h2>Continental Hotel Budapest</h2>
                </a>
            </header>
            <p>Born again from the ashes of the former Hungaria Bath and Continental Hotel, combines traditional hospitality and the expectations of the 21st century.</p>
        </div>
        <a href="#two" class="button style2 down anchored">Next</a>
    </section>

    <!-- Two -->
    <section id="two" class="main style2 left dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/hungary/two.mp4" type="video/mp4">
        </video>
        <div class="content box style2">
            <header>
                <a href="https://www.hyatt.com/ko-KR/hotel/hungary/parisi-udvar-hotel/budub">
                    <h2>Parisi Udvar Hotel Budapest</h2>
                </a>
            </header>
            <p>The Párisi Udvar revives the Art Nouveau shopping arcade into a palatial hotel where you will experience the spectacle of an architectural gem, an ideal location in the core of the city, as well as enchanted visions of the past, present, and future.</p>
        </div>
        <a href="#three" class="button style2 down anchored">Next</a>
    </section>

    <!-- three -->
    <section id="three" class="main style2 right dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/hungary/three.mp4" type="video/mp4">
        </video>
        <div class="content box">
            <header>
                <a href="https://www.anantara.com/en">
                    <h2>Anantara New York Palace Budapest Hotel</h2>
                </a>
            </header>
            <p>There is a living room in the opulent neoclassical-style suite and two presidential suites decorated with various props.</p>
        </div>
        <a href="#four" class="button style2 down anchored">Next</a>
    </section>

    <!-- four -->
    <section id="four" class="main style2 left dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/hungary/four.mp4" type="video/mp4">
        </video>
        <div class="content box style2">
            <header>
                <a href="https://grandhotelesztergom.hu/en">
                    <h2>Grand Hotel Esztergom</h2>
                </a>
            </header>
            <p>
                Located in the city center of Esztergom, Esztergom is close to tourist attractions and exciting restaurants. </p>
        </div>
        <a href="#five" class="button style2 down anchored">Next</a>
    </section>

    <!-- five -->
    <section id="five" class="main style2 right dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/hungary/five.mp4" type="video/mp4">
        </video>
        <div class="content box">
            <header>
                <a href="https://hotel-palazzo-zichy.hu/">
                    <h2>Hotel Palazzo Zichy</h2>
                </a>
            </header>
            <p>Hotel Palazzo Jiki offers comfortable rooms where you can relax after a busy day. Reservation at Hotel Palazzo Jiki will make your trip to Budapest more comfortable.</p>
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
