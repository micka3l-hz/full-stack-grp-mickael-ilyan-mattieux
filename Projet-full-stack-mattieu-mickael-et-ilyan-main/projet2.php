<?php
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');
?>

<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <title><?php echo $projet[2]['titre']; ?></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">
        <div id="wrapper">

            <header id="header">
                <div>
                    <!-- Titre dynamique -->
                    <h1><?php echo $projet[2]['titre']; ?></h1>
                    <!-- Description dynamique -->
                    <h2><?php echo $projet[2]['description']; ?></h2>

                    <style>
                        .btn {
                            padding: 10px 20px;
                            font-size: 16px;
                            color: white;
                            background-color: #383737;
                            border: none;
                            border-radius: 5px;
                            cursor: pointer;
                        }
                        .btn:hover {
                            background-color: #19191a;
                        }
                    </style>

                    <!-- Bouton pour revenir à la page précédente -->
                    <button class="btn" onclick="goBack()">home</button>

                    <script>
                        function goBack() {
                            window.history.back();
                        }
                    </script>
                </div>
            </header>

        </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
