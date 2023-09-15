<!DOCTYPE html>
<!--
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Hotel_austria</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
    <style>
        /* Intro */
        #intro {
            background: url("images/overlay.png"), url("images/austria/intro.jpg");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, bottom center;
            background-repeat: repeat, no-repeat;
        }

        /* One */
        #one {
            background: url("images/overlay.png"), url("images/austria/one.mp4");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* Two */
        #two {
            background: url("images/overlay.png"), url("images/austria/two.mp4");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* three */
        #three {
            background: url("images/overlay.png"), url("images/austria/three.jpg");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* four */
        #four {
            background: url("images/overlay.png"), url("images/austria/four.jpg");
            background-size: 256px 256px, cover;
            background-attachment: fixed, fixed;
            background-position: top left, center center;
        }

        /* five */
        #five {
            background: url("images/overlay.png"), url("images/austria/five.jpg");
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
                <li><a href="#one">Hotel Imperial Vienna</a></li>
                <li><a href="#two">Almwellnes Hotel Pierer</a></li>
                <li><a href="#three">Wellnessresort Seiwald Superior</a></li>
                <li><a href="#four">Adlers Hotel Innsbruck</a></li>
                <li><a href="#five">Hilton Vienna Danube Waterfront</a></li>
            </ul>
        </nav>
    </header>

    <!-- Intro -->
    <section id="intro" class="main style1 dark fullscreen">
        <div class="content" style="background : rgba( 21, 21, 21, 0.4 ); border-radius : 25px;">
            <header>
                <h2>austria</h2>
            </header>
            <p>
                <strong>Austrian</strong> hotels are known for their quaint atmosphere and excellent service. Hotels here are decorated in a traditional European style, with beautiful interiors and stylish furnishings.
            </p>
            <footer>
                <a href="#one" class="button style2 down">More</a>
            </footer>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main style2 right dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/austria/one.mp4" type="video/mp4">
        </video>
        <div class="content box">
            <header>
                <a href="https://www.marriott.co.kr/reservation/rateListMenu.mi?scid=b9e45c84-5019-4753-a0d0-5a9612c9a3cf&gclid=EAIaIQobChMIkeaLgcaZ_wIVRUPCBR0MjAsUEAoYBSAAEgKI-PD_BwE&dclid=CIDZtIfGmf8CFYENXAodR8oCRQ&defaultTab=dealsAndPackages">
                    <h2>Hotel Imperial Vienna</h2>
                </a>
            </header>
            <p>The Hotel Imperial has a worldwide reputation for its top-class cuisine. An exquisite dinner at the OPUS gourmet restaurant in Vienna (awarded one Michelin star) is your guarantee of a memorable dining experience, as is a visit to the remarkable 1873-HalleNsalon bar. </p>
        </div>
        <a href="#two" class="button style2 down anchored">Next</a>
    </section>

    <!-- Two -->
    <section id="two" class="main style2 left dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/austria/two.mp4" type="video/mp4">
        </video>
        <div class="content box style2">
            <header>
                <a href="https://www.hotel-pierer.at/de/">
                    <h2>Almwellnes Hotel Pierer</h2>
                </a>
            </header>
            <p>Almwellness Hotel Pierer The 4-star superior house on the Teichalm combines relaxing alpine wellness, culinary alpine delights, impressive alpine experiences and elegant alpine design for an unforgettable holiday on a higher level! </p>
        </div>
        <a href="#three" class="button style2 down anchored">Next</a>
    </section>

    <!-- three -->
    <section id="three" class="main style2 right dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/austria/three.mp4" type="video/mp4">
        </video>
        <div class="content box">
            <header>
                <a href="https://www.wellnessresort-seiwald.at/">
                    <h2>Wellnessresort Seiwald Superior</h2>
                </a>
            </header>
            <p>Come in and feel comfortable in our home, in this small kingdom, where for thousand of years a powerful emperor holds his protecting hand.</p>
        </div>
        <a href="#four" class="button style2 down anchored">Next</a>
    </section>

    <!-- four -->
    <section id="four" class="main style2 left dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/austria/four.mp4" type="video/mp4">
        </video>
        <div class="content box style2">
            <header>
                <a href="https://ibe.gauvendi.com/recommendation?hc=gvinsdle&chkIn=21-06-2023&chkOut=22-06-2023&nr=2&utm_content=mapresults_21-06-2023_1_13253069378312267788H9047060155333910536_KR_desktop_default__&is_ad=false">
                    <h2>Adlers Hotel Innsbruck
                    </h2>
                </a>
            </header>
            <p>
                Are you looking for a luxury hotel in Innsbruck? Welcome to Adlers Hotel, a nice option for travelers like you.</p>
        </div>
        <a href="#five" class="button style2 down anchored">Next</a>
    </section>

    <!-- five -->
    <section id="five" class="main style2 right dark fullscreen">
        <video id="video" autoplay muted loop style="width : 100%;">
            <source src="images/austria/five.mp4" type="video/mp4">
        </video>
        <div class="content box">
            <header>
                <a href="https://www.hilton.com/en/book/reservation/rooms/?ctyhocn=VIEHA&arrivalDate=2023-07-11&departureDate=2023-07-12&room1NumAdults=2&WT.mc_id=zINDA0EMEA1HH2OLX3GGL4INTBAU5SR6VIEHAHI7_122978897_9083689&utm_source=intlmeta&utm_medium=intlmeta&utm_campaign=googlehpa&gclid=EAIaIQobChMI7ZSB-MiZ_wIVAZJwCh1jUgoEEAoYASAAEgKoq_D_BwE&dsclid=53782492134780928&bm-verify=AAQAAAAH_____yQTda3IGtYHY12lUUeVD_wLaDxcvQWH8Y-3Ogqjy2SLDDe81EdPlgax19ptTZ48ZeEHeR-5yqnAYkqCYxfd33xPQybDjX69R6nqHGmOoQI-WE0_Kfd7qLPvq_py-lV-0dz4Fn9788d7MX_VmqGE_92ULNr0OYZMxWpXNd71iCKXBzEvx605TDTDGIvsNs4R_1uCR-Clg1Dm7a-RpjZvgBmHyHkSryKsezHZxTueXq6EQevx4M48a8sedtMt2PP_mSsR041_kyTZqHsBmcxOYB71ve8Khw6zkrK5_99cE8DO_SEbaIvU4Ja879tlytxi1DgHqsEOeH29yIh9XBZjJ0GG1bH8Q0JEy64hnKkHn1LnCg0tu0tzAN7dd9N8k_pT8gbgBAt-1ak6j6LHRqxQIxjhuAV85F1UkKPcm2AhYx4nZruxeH1qL1jbaL4El3ylfK_aGK5YPuP4b3ua6LhZRRy6t2ob32vbBQSKgc9eBiW2kIlFWSJY3kb_Zh31qw0YSlVbQaA1zU7nGToQ9rWmWoH3dd2oTlz3xa_28CJHSWoEuuzTz69Gmj-rsobcjGeS5YuYIfj5qPv6zCTIVvwhCXkYUkpl-YP7cECjcyh8AaoqNvjhXUzHU_rSFrWL6dlW70YHMYN6TnvgxZ7D_zOSGplpz7HJR4rJN0wJi9BeRzgAFjeRsUrvq6GnLm5MyhvpybjzwxEjnaSwkDR-JMZCp1x3Q-i_luNw-RUzzpmS8bNzA4OA-GCFJCixgjVbLs2FyJ00s4-50TZK1v2PyTBUzzRCW2x_58EMhwsXWZwWCS9nMioMT-3tUbu4jHRLe5HhHNA">
                    <h2>Hilton Vienna Danube Waterfront</h2>
                </a>
            </header>
            <p>This Vienna hotel offers luxurious rooms with city views. You can take in views of the Danube and make use of a rooftop terrace, an outdoor pool and a Jacuzzi.</p>
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
