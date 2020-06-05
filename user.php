<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="res/css/index.css">
<link rel="stylesheet" href="res/css/user.css">
</head>

<?php

session_start();

if($_SESSION["loggedin"] != true){
    header("Location: login.php");
    exit();
}

?>

<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Antoni<span class="highlight">Kiszka</span>Enterprises</h1>
            </div>
            <nav>
            <ul>
                <li><a href="index.php">Strona główna</a></li>
                <li><a href="about.php">O nas</a></li>
                <li class="current"><a href="login.php">Użytkownik</a></li>
            </ul>
            </nav>
        </div>
    </header>

    <article id="user-info">
        <div class="container">
            <h1>Witaj, <?php echo($_SESSION["username"]); ?></h1>
            <p>Zgodnie z notą prawną na stronie O Nas, szacowany czas do pobrania twoich organów wynosi:</p>
            <h3 id="countdown"></h3>
            <button class="logout-button" onclick="location.href='res/php/logout.php'">Wyloguj się</a>
        </div>
    </article>

    <script>
        var countDownDate = new Date("Oct 30 , 2021 16:20:00").getTime();

        function updateCountdown() {
            var now = new Date().getTime();

            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("countdown").innerHTML = days + " dni, " + hours + " godzin, " + minutes + " minut i " + seconds + " sekund ";
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>
<body>
</html>