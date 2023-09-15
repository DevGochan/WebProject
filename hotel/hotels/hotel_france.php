<!DOCTYPE html>
<!--
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Hotel_france</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
    <style>
        /* Intro */
        #intro {
            background: url("images/overlay.png"), url("images/france/intro.jpg");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, bottom center;
            background-repeat: repeat, no-repeat;
        }

        /* One */
        #one {
            background: url("images/overlay.png"), url("images/france/one.mp4");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* Two */
        #two {
            background: url("images/overlay.png"), url("images/france/two.mp4");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* three */
        #three {
            background: url("images/overlay.png"), url("images/france/three.jpg");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* four */
        #four {
            background: url("images/overlay.png"), url("images/france/four.jpg");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* five */
        #five {
            background: url("images/overlay.png"), url("images/france/five.jpg");
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
                <li><a href="#one">Four Seasons Hotel Megeve</a></li>
                <li><a href="#two">Hotel Crillon le Brave</a></li>
                <li><a href="#three">Hotel Mercure Chamonix</a></li>
                <li><a href="#four">L'Hotel</a></li>
                <li><a href="#five">Hotel Keppler</a></li>
            </ul>
        </nav>
    </header>

    <!-- Intro -->
    <section id="intro" class="main style1 dark fullscreen">
        <div class="content" style="background : rgba( 21, 21, 21, 0.4 ); border-radius : 25px;">
            <header>
                <h2>france</h2>
            </header>
            <p>
                <strong>French</strong> hotels are known for their unique characteristics<br> that contribute to the country's reputation for luxury, elegance, and exceptional hospitality.
            </p>
            <footer>
                <a href="#one" class="button style2 down">More</a>
            </footer>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main style2 right dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/france/one.mp4" type="video/mp4">
        </video>
        <div class="content box">
            <header>
                <a href="https://www.fourseasons.com/megeve/?ppc=true&utm_source=google&utm_medium=paidsearch&utm_campaign=acronym-na-hre-low-englobalbrand.eng-na&utm_content=na-71700000101042088-58700008075165193-0&utm_term=na&gad=1&gclid=EAIaIQobChMIy8WCnPuX_wIVT8NMAh0DZgI8EAAYASAAEgKDkvD_BwE&gclsrc=aw.ds">
                    <h2>Four Seasons Hotel Megeve</h2>
                </a>
            </header>
            <p>Dive into our magical world in the French North Alps, close to the Mont-Blanc. You will be enchanted by our 5 stars hotel with its unique interior, in a refined style.</p>
        </div>
        <a href="#two" class="button style2 down anchored">Next</a>
    </section>

    <!-- Two -->
    <section id="two" class="main style2 left dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/france/two.mp4" type="video/mp4">
        </video>
        <div class="content box style2">
            <header>
                <a href="https://www.slh.com/hotels/hotel-crillon-le-brave/">
                    <h2>Hotel Crillon le Brave</h2>
                </a>
            </header>
            <p>Quintessential France meets modern luxury high in the hills of Provence.</p>
        </div>
        <a href="#three" class="button style2 down anchored">Next</a>
    </section>

    <!-- three -->
    <section id="three" class="main style2 right dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/france/three.mp4" type="video/mp4">
        </video>
        <div class="content box">
            <header>
                <a href="https://mercure.accor.com/gb/asia/index.shtml">
                    <h2>Hotel Mercure Chamonix</h2>
                </a>
            </header>
            <p>Next to Chamonix Mont Blanc Train Station and the Aiguille du Midi cable car, this traditional Alpine hotel offers views of Mont Blanc.</p>
        </div>
        <a href="#four" class="button style2 down anchored">Next</a>
    </section>

    <!-- four -->
    <section id="four" class="main style2 left dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/france/four.mp4" type="video/mp4">
        </video>
        <div class="content box style2">
            <header>
                <a href="https://www.l-hotel.com/">
                    <h2>L'Hotel</h2>
                </a>
            </header>
            <p>
                One of the most famous hotels in Paris, L'Hotel has been a secret hideaway over the past two centuries.</p>
        </div>
        <a href="#five" class="button style2 down anchored">Next</a>
    </section>

    <!-- five -->
    <section id="five" class="main style2 right dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/france/five.mp4" type="video/mp4">
        </video>
        <div class="content box">
            <header>
                <a href="https://www.keppler.fr/">
                    <h2>Hotel Keppler</h2>
                </a>
            </header>
            <p>Hotel Keppler is a Paris central glamorous hotel, located a few steps from Champs Elysees.</p>
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
