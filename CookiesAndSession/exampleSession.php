<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        session_start() ;
        echo "<p>Identyfikator sesji to: ". session_id() . "</p>"; 

        $_SESSION["nazwaSesji"] = "wartosc";
        $zmienna = $_SESSION["nazwaSesji"] ;
        isset($_SESSION["nazwaSesji"]); 

        session_unset();

        unset($_SESSION["nazwaSesji"]); 
    ?>
</head>
<body>
    
</body>
</html>