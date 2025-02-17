<?php
//strona.php
session_start();
if(!isset($_SESSION['log'])){
    header('location: scryptLoguj.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $imie = ucfirst($_SESSION['log']); 
        echo "Witaj" . $imie ; 
    ?>
    <p>Jestes na stronie glownej</p>
    <p>Przed opuszceniem strony wyloguj sie!</p>
    <a href="ForscryptLogujWyloguj.php">Wyloguj</a>
    
</body>
</html>