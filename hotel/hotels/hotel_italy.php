<!DOCTYPE html>
<!--
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Hotel_Italy</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
    <style>
        /* Intro */
        #intro {
            background: url("images/overlay.png"), url("images/italy/intro.jpg");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, bottom center;
            background-repeat: repeat, no-repeat;
        }

        /* One */
        #one {
            background: url("images/overlay.png"), url("images/italy/one.mp4");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* Two */
        #two {
            background: url("images/overlay.png"), url("images/italy/two.mp4");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* three */
        #three {
            background: url("images/overlay.png"), url("images/italy/three.jpg");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* four */
        #four {
            background: url("images/overlay.png"), url("images/italy/four.jpg");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* five */
        #five {
            background: url("images/overlay.png"), url("images/italy/five.jpg");
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
                <li><a href="#one">The Westin Excelsior</a></li>
                <li><a href="#two">San Montano</a></li>
                <li><a href="#three">Villa La Massa</a></li>
                <li><a href="#four">Anantara Palazzo Naiadi</a></li>
                <li><a href="#five">Le Sirenuse</a></li>
            </ul>
        </nav>
    </header>

    <!-- Intro -->
    <section id="intro" class="main style1 dark fullscreen">
        <div class="content" style="background : rgba( 21, 21, 21, 0.4 ); border-radius : 25px;">
            <header>
                <h2>Italy</h2>
            </header>
            <p>
                Hotels in <strong>Italy</strong> are known for their unique characteristics<br> that reflect the country's rich history, culture, and hospitality.
            </p>
            <footer>
                <a href="#one" class="button style2 down">More</a>
            </footer>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main style2 right dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/italy/one.mp4" type="video/mp4">
        </video>
        <div class="content box">
            <header>
                <a href="https://www.marriott.com/en-us/hotels/romwi-the-westin-excelsior-rome/overview/">
                    <h2>The Westin Excelsior</h2>
                </a>
            </header>
            <p>Looking for a place to stay in Rome? Then look no further than the Westin Excelsior, Rome, a luxury hotel that brings the best of Rome to your doorstep.</p>
        </div>
        <a href="#two" class="button style2 down anchored">Next</a>
    </section>

    <!-- Two -->
    <section id="two" class="main style2 left dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/italy/two.mp4" type="video/mp4">
        </video>
        <div class="content box style2">
            <header>
                <a href="https://www.sanmontano.com/">
                    <h2>San Montano</h2>
                </a>
            </header>
            <p>Meet San Montaano, the essence of Ischia Island!</p>
        </div>
        <a href="#three" class="button style2 down anchored">Next</a>
    </section>

    <!-- three -->
    <section id="three" class="main style2 right dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/italy/three.mp4" type="video/mp4">
        </video>
        <div class="content box">
            <header>
                <a href="https://www.villalamassa.com/">
                    <h2>Villa La Massa</h2>
                </a>
            </header>
            <p>Villa La Massa is the best choice for travelers visiting Candeli for its luxurious atmosphere as well as various facilities that will make your time even more unforgettable.</p>
        </div>
        <a href="#four" class="button style2 down anchored">Next</a>
    </section>

    <!-- four -->
    <section id="four" class="main style2 left dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/italy/four.mp4" type="video/mp4">
        </video>
        <div class="content box style2">
            <header>
                <a href="https://www.anantara.com/en/palazzo-naiadi-rome">
                    <h2>Anantara Palazzo Naiadi</h2>
                </a>
            </header>
            <p>
                Set in an impressive white marble building from the 1800s, Anantara Palazzo Naiadi is located in Plaza Repubblica.
            </p>
        </div>
        <a href="#five" class="button style2 down anchored">Next</a>
    </section>

    <!-- five -->
    <section id="five" class="main style2 right dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/italy/five.mp4" type="video/mp4">
        </video>
        <div class="content box">
            <header>
                <a href="https://sirenuse.it/en/">
                    <h2>Le Sirenuse</h2>
                </a>
            </header>
            <p>Guests can relax with champagne and a selection of oysters in the Sirenuse's oyster bar. The Michelin-starred restaurant has a large terrace overlooking the sea.</p>
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
