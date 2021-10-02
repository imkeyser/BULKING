<?php
    session_start();
    $resultCalories = $_SESSION['caloriesPerDay'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="../FAVS.ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../FAVS.ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../FAVS.ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../FAVS.ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../FAVS.ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../FAVS.ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../FAVS.ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../FAVS.ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../FAVS.ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../FAVS.ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../FAVS.ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../FAVS.ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../FAVS.ico/favicon-16x16.png">
    <link rel="manifest" href="../FAVS.ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../FAVS.ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,500;0,900;1,300;1,500;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../STYLES/main.css">
    <title>BULKING - Calcul</title>
</head>
<body>
    <nav class="navbar">
        <div id="navbar-container">
            <div class="menu-logo"><a href="/">BULKING!</a></div>
            <div class="nav-links">
                <ul>
                    <li><a href="../">Accueil</a></li>
                    <li><a href="../NAV/">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav> 
    
    <div class="main-container-center">
    <h1 class="left-block-title-2" id="text-center">
        VOTRE OBJECTIF CALORIQUE JOURNALIER :
    </h1>
    <div style="color: orange; font-size: 3rem; text-align: center;" id="caloriesPerDay text-center"><?php echo $resultCalories; ?></div>
    </div>
        
    </div>
    <script type="text/javascript" src="../JS/jquery.min.js"></script>
    <script type="text/javascript" src="../JS/main.js"></script>
</body>
</html>