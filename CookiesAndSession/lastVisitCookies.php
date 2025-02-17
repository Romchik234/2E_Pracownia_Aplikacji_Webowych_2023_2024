<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $mies = 2592000 + time();
        
        setcookie("wizyta", date("F js - g:ia"), $mies);

        if(isset($_COOKIE["wizyta"])){
            $ostatnio = $_COOKIE["wizyta"]; 
            echo "Witamy na stronie, ostatnia towja wizyta byla : $ostatnio"; 
        }else {
            echo "Witaj na naszej stronie";
        }

    ?>
</head>
<body>
    
</body>
</html>