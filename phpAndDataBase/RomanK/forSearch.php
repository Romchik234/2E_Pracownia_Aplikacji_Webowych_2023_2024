<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
     $host = "localhost";
     $user = "root"; // domyślny użtytkownik sql 
     $pass = "" ;   // haslo puste 
     $dbname = "rakieta"; 
 
     //tworzenie połaczenia 
 
     $conn = new mysqli($host,$user,$pass,$dbname); 
 
     //sprawdaznie połącznenia 
     if ($conn -> connect_error)
     {
         die("Błąd połacznie: " . $conn->connect_error); 
     }

     
     if($_SERVER["REQUEST_METHOD"]== "POST"){
        $email = $_POST["email"]; 
     
        $sql = "SELECT * FROM users WHERE email = '$email'"; 
        $result = $conn ->query($sql); 

        if($result-> num_rows > 0 ){
            echo "<p style='color: green;'>Użytkownik istnieje w bazie.</p>"; 
            $row = $result->fetch_assoc();
            echo "<p><strong>Imię: </strong>" . $row ["name"]. "<p>";
            echo "<p><strong>Email: </strong>" . $row ["email"]. "<p>";
        }else {
            echo "<p style='color: red;'> Użytkownik nie instnije.</p>"; 
        }
    }
    $conn -> close(); 
    ?>
</head>
<body>
    
</body>
</html>