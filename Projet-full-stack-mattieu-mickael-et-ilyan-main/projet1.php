<?php
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');
?>

<!DOCTYPE HTML>

<html lang="fr">
    <head>
        <title>Thiago Projet 1</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">
        <div id="wrapper">

            <header id="header">
                <div>
                    <h1><?php echo $projet[1]['titre']; ?></h1>
                    <h2><?php echo $projet[1]['description']; ?></h2>
                </div>
            </header>

            <!-- Bouton "Home" qui revient à la page précédente -->
            <div style="text-align: center; margin-top: 20px;">
                <button class="btn" onclick="goBack()">home</button>
            </div>

            <script>
                function goBack() {
                    window.history.back();
                }
            </script>

        </div>

        <!-- Inclusion des scripts JavaScript -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
