<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="res/css/index.css">
<link rel="stylesheet" href="res/css/login.css">
</head>

<?php

session_start();

if($_SESSION["loggedin"] == true) {
    header("Location: user.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["username"]))){
        $username_err = "Nazwa użytkownika jest pusta.";
    } else{
        $username = trim($_POST["username"]);
    }

    if(empty(trim($_POST["password"]))){
        $password_err = "Hasło jest puste.";
    } else{
        $password = trim($_POST["password"]);
    }

    if(empty($username_err) && empty($password_err)) {
        if(hash("sha256", $password) == "9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08") { // wiem, że sha256 jest słabe do hashowania haseł, ale to i tak tylko demo
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;

            header("Location: user.php");
        } else {
            $password_err = "Niepoprawne hasło!";
        }
    }             
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

    <article id="login-invitation">
        <div class="container">
            <h1>Wymagane zalogowanie</h1>
            <p>Aby przejść do panelu użytkownika, wymagane jest zalogowanie się. Proszę podać swój login i hasło.</p>
            <p>Do przetestowania strony można użyć loginu <i>test</i> i hasła <i>test</i>.</p>
        </div>
    </article>

    <article id="login-page">
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Nazwa użytkownika">
            <input type="password" name="password" placeholder="Hasło">
            <button type="submit">Zaloguj się</button>
        </form>
    </article>

    <article id="login-errors">
        <div class="container">
        <?php
            echo("<h1>" . $username_err . "</h1>");
            echo("<h1>" . $password_err . "</h1>");
        ?>
        </div>
    </article>

    <hr id="footer-line">

    <article id="footer">
        <p>ANTONI KISZKA 1D</p>
        <a href="https://github.com/akiszka/informatyka-www" target="_blank">Kod strony</a>
    </article>
<body>
</html>