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
    if($result -> num_rows <= 0 )
    {
        echo "Nie prawidłowy login!"; 
    }else{
        echo "Poprawny login<br>";
         
         $row = $result->fetch_assoc();
         //echo $row["password"];
         
         if($row["password"] == $password)
             echo"Hasło jest poprawne, Udało sie zalogować"; 
         else
             echo"Hasło nie jest poprawne";
    } 

    $conn -> close(); 
    ?>
</head>
<body>
    
</body>
</html>