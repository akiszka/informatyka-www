<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="res/css/index.css">
</head>
<body>

    <header>
        <div class="container">
            <div id="branding">
                <h1>Antoni<span class="highlight">Kiszka</span>Enterprises</h1>
            </div>
            <nav>
            <ul>
                <li class="current"><a href="index.php">Strona główna</a></li>
                <li><a href="about.php">O nas</a></li>
                <li><a href="login.php">Logowanie</a></li>
            </ul>
            </nav>
        </div>
    </header>

    <article id="szczena-opada">
        <video autoplay muted loop id="video">
            <source src="res/img/rain.mp4" type="video/mp4">
        </video>

        <div class="overlay">
            <h1>Czasy się zmieniają...</h1>
            <p>...ale nasza jakość zawsze utrzymuje się na stałym poziomie. Zainwestuj w swoją przyszłość z Antoni Kiszka Enterprises.</p>

            <button id="scrolldown" onclick="redirectToAboutUs()">Pokaż mi, jak!</button>
        </div>
    </article>

    <svg id="fader"></svg>

    <script>
        function fadeInPage() {
            if (!window.AnimationEvent) { return; }
            var fader = document.getElementById('fader');
            fader.classList.add('fade-out');
        }

        function redirectToAboutUs() {
            window.location.href = "about.php";
        }

        fadeInPage();
    </script>
<body>
</html>