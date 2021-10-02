<?php
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $civility = $_POST['civility'];

    session_start();

    $_SESSION['lastname'] = $lastname;
    $_SESSION['firstname'] = $firstname;
    $_SESSION['email'] = $email;
    $_SESSION['civility'] = $civility;
    
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
        <form id="calculs-form-2" action="../PROCESS/calories-calculator.php" method="POST">
            <h1 class="left-block-title-2 orange-text">
                <?php echo $firstname;?>, faisons connaissance
            </h1>
            <input type="text" id="input-text-2" name="height" placeholder="Votre taille en cm">
            <br>
            <input type="text" id="input-text-2" name="weight" placeholder="Votre poids">
            <br>
            <input type="text" id="input-text-2" name="age" placeholder="Votre age">
            <br><br>
            <p>
                <b>Combien de fois vous entrenez-vous / semaines ?</b>
            </p>
            <br>
            <input type="radio" id="nbWorkout" name="nbWorkout" value="12" class="inputRadio-2" style="margin-left: 0px;"><label for="huey">1 à 2 fois</label>
            <input type="radio" id="nbWorkout" name="nbWorkout" value="34" class="inputRadio-2"><label for="huey">3 à 4 fois</label>
            <input type="radio" id="nbWorkout" name="nbWorkout" value="56" class="inputRadio-2"><label for="huey">5 à 6 fois</label>
            <br><br>
            <p>
                <b>Quel est votre objectif ?</b>
            </p>
            <br>
            <input type="radio" id="objectif" name="objectif" value="loseWeight" class="inputRadio-2" style="margin-left: 0px;"><label for="huey">Perdre du poids</label>
            <input type="radio" id="objectif" name="objectif" value="maintain" class="inputRadio-2"><label for="objectif">Vous maintenir</label>
            <input type="radio" id="objectif" name="objectif" value="gainMuscle" class="inputRadio-2"><label for="objectif">Prendre du muscle</label>
            <br><br>
            <button id="button-1" onclick="rtn()" style="background: #fff; color: orange; border: 2px solid orange;">RETOUR</button><input style="margin-left: 15px;" type="submit" id="button-1" onclick="submitForm()" value="CONTINUER">
            <br><br>
        </form>
    </div>
        
    </div>
    <script type="text/javascript" src="../JS/jquery.min.js"></script>
    <script type="text/javascript" src="../JS/main.js"></script>
</body>
</html>
