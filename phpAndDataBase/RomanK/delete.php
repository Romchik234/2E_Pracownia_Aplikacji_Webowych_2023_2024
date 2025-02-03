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
         
         if(!isset($_GET["id"])){
            die ("Brak ID użytkownika."); 
        }

        $id = $_GET["id"]; 

        $sql = "DELETE FROM users where id = $id"; 

        if($conn -> query($sql)===TRUE)
            echo "Użtytkownik zostal usuniety"; 
        else {
            echo "Bład: " . $conn -> error;
        }
    
        $conn -> close(); 
    
    ?>
</head>
<body>
    
</body>
</html>