<?php
    //wyloguj.php

    session_start();
    if(isset($_SESSION['log'])){
            unset($_SESSION["log"]);
    }else {
        header('location: scryptLoguj.php');
        exit;
    }

    $s = session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Wylogowales sie ze strony</p>
    <a href="scryptLoguj.php">Zaloguj sie</a>
</body>
</html>