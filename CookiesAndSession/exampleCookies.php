<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //$_COOKIE = ['ciastko']; 

    setcookie("pismo", "na skróty" , time()+10 , "/" , "localhost" , false); //zeby usunac treba podacz czas z przeszlosci 
    if (isset($_COOKIE["pismo"])){
        echo "Jestes naszym klientem"; 
    }else 
    {
        echo "Witamy na naszej stronie"; 
    }

    
    
    ?>
</head>
<body>
    
</body>
</html>