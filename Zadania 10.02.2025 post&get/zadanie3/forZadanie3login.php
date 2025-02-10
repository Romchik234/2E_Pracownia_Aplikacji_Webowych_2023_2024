<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $host = "localhost";
    $user = "root";  
    $pass = ""; 
    $dbname = "userdata"; 

    $conn = new mysqli($host , $user , $pass , $dbname); 
    if ($conn -> connect_error)
    {
        die("Błąd połacznie: " . $conn->connect_error); 
    }

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $login = $_POST["login"];
        $password = $_POST["password"];
    }

    $sql = "SELECT * FROM `userdata` WHERE login = '$login';";
    $result = $conn -> query($sql);
    if($result -> num_rows > 0 )
    {
        echo "Udało sie zalogowac POZDRAWIAM"; 
    }else 
        {echo "Ten login juz istnije. Podaj inny"; 
            $sql = "INSERT INTO `userdata`(`id`, `login`, `passwod`) VALUES 
            ('[value-1]','$login','$password');" ; 
            $conn -> query($sql);
        }

            $conn -> close(); 
    ?>
</head>
<body>
    
</body>
</html>