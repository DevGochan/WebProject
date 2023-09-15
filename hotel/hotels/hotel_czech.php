<!DOCTYPE html>
<!--
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Hotel_czech</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
    <style>
        /* Intro */
        #intro {
            background: url("images/overlay.png"), url("images/czech/intro.jpg");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, bottom center;
            background-repeat: repeat, no-repeat;
        }

        /* One */
        #one {
            background: url("images/overlay.png"), url("images/czech/one.mp4");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* Two */
        #two {
            background: url("images/overlay.png"), url("images/czech/two.mp4");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* three */
        #three {
            background: url("images/overlay.png"), url("images/czech/three.jpg");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* four */
        #four {
            background: url("images/overlay.png"), url("images/czech/four.jpg");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* five */
        #five {
            background: url("images/overlay.png"), url("images/czech/five.jpg");
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
                <h2>czech</h2>
            </header>
            <p>
                Hotels in the <strong>Czech</strong> Republic offer quality accommodation<br> combining historic charm with modern amenities.
            </p>
            <footer>
                <a href="#one" class="button style2 down">More</a>
            </footer>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main style2 right dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/czech/one.mp4" type="video/mp4">
        </video>
        <div class="content box">
            <header>
                <a href="https://klarov.astenhotels.com/en">
                    <h2>Hotel Klarov Prague</h2>
                </a>
            </header>
            <p>Boutique Hotel Klarov presented an exceptional architectural challenge.</p>
        </div>
        <a href="#two" class="button style2 down anchored">Next</a>
    </section>

    <!-- Two -->
    <section id="two" class="main style2 left dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/czech/two.mp4" type="video/mp4">
        </video>
        <div class="content box style2">
            <header>
                <a href="https://www.designhotelneruda.com/">
                    <h2>Design Hotel Neruda</h2>
                </a>
            </header>
            <p>Design Hotel Neruda is located right below Prague Castle, in a charming area of Mala Strana, in the house where once lived the famous Czech writer Jan Neruda. Modern interior with classical elements was designed by famous architect Borek Sipek.</p>
        </div>
        <a href="#three" class="button style2 down anchored">Next</a>
    </section>

    <!-- three -->
    <section id="three" class="main style2 right dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/czech/three.mp4" type="video/mp4">
        </video>
        <div class="content box">
            <header>
                <a href="https://www.hilton.com/en/book/reservation/rooms/?ctyhocn=PRGHI&arrivalDate=2023-07-10&departureDate=2023-07-11&room1NumAdults=2&WT.mc_id=zINDA0EMEA1HH2OLX3GGL4INTBAU5SR6PRGHITW7_122978897_9083689&utm_source=intlmeta&utm_medium=intlmeta&utm_campaign=googlehpa&gclid=EAIaIQobChMI_ojvqvSX_wIVzkJ9Ch0kYwFUEAoYASAAEgKHOPD_BwE&dsclid=53767532900790272&bm-verify=AAQAAAAH_____3GmSG-atExvhnU22JaulreVIBtAuLJFONf11fPWOq6Ft4pjJ-e87yfqDWmD57A70bIdFFr9xI2VV-f38uO5tj7AXqssepJW8sL47aWgnKdmtrxom35NImY2wXHZead4g7kLBqPg1bppexQvr-3P_MpdcWrQVmlEr7brmgVUNkqUTKVnN71k1SbR1XYuBikEMsR0J_WQCccTbHeRm7bRwfZZHfHxd8RNKQrnmyDgzL78C2ssusw2jvjQ3clr-cB9hC-Fxs9-lKUaAcId6rsSI0yRUDy1TzLmHrWGC1cgfzs5qEdToBWdxsvlao_JExcA_FzJnF7xufM4-aIzZxWOnneN5p4yXQGhKHJsrl7FVSIDmY0YLEYylV5iQNGbk3kygwgdrjsZWZ7KB8asMqj4OK6SgOkFHFQAgAY2njrv4cuorHH_EGfgfLG8XSDqV_3G52u0ma5DOLZCIcYqxG7NlPqtSSx__qr0ZUv6_tkd4WXCZf_7Jw6TXbj4XoPtH1vfQAfwInt3RTPSVmj3iSENebWsnMUKXuKj4a97Zjgone-hm4zqFHDjSLSOrfsBOs8Fjb25pgNbyRH2bn2j9vbl5QpkrGWYBPFTqCxlq2P7emyE-Wzt91AUgd1P83lTmCB5q5BI1RWwzxeOm914jpq9qZShK8Qlisy1sRRD4_eR5D8KScu31zjBsOM_UI-uUYMY2KXLELH78iZiDJF1IJGK--vd0C3s4uyTwpdvVrZMu1qNXR48jpsDYmkEpqr-UcojoLhRmwibDpNozePFtn9A8BgSCG47XzxTGIerBHT4ViwolMAPClyFvs33JUf2yI9r_vA">
                    <h2>Hilton Prague</h2>
                </a>
            </header>
            <p>The Hilton Prague is a great business and casino hotel in the Czech capital. It's always a pleasure to be here as the location is good and the prices are fair. Nice executive lounge and breakfast selection included.</p>
        </div>
        <a href="#four" class="button style2 down anchored">Next</a>
    </section>

    <!-- four -->
    <section id="four" class="main style2 left dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/czech/four.mp4" type="video/mp4">
        </video>
        <div class="content box style2">
            <header>
                <a href="https://reservations.ariahotel.net/15760?languageid=EN_US&currency=KRW&subchan=GOOGLE_KR_desktop#/guestsandrooms">
                    <h2>Aria Hotel Prague</h2>
                </a>
            </header>
            <p>
                Aria Hotel is a boutique hotel in the heart of Prague, just minutes from the Prague Castle and the famed Charles Bridge. Aria provides an unforgettable 5-star luxury experience.
            </p>
        </div>
        <a href="#five" class="button style2 down anchored">Next</a>
    </section>

    <!-- five -->
    <section id="five" class="main style2 right dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/czech/five.mp4" type="video/mp4">
        </video>
        <div class="content box">
            <header>
                <a href="https://www.castlehotelcollection.com/vetrov-castle-hotel/">
                    <h2>Hotel Castle Vetrov</h2>
                </a>
            </header>
            <p>Větrov Castle Hotel’s 11 rooms and suite mirror the timeless elegance of the hotel and provide reposeful boutique accommodation in the heart of a natural Bohemian park.</p>
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
