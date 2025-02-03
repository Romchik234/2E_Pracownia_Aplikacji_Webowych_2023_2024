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

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
    
    }

        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')" ; 
        if($conn->query($sql) === TRUE){
        echo "Nowy użytkownik został dodany"; 
        } else{
        echo "Błąd" . $conn->error ;
        }

     $conn -> close(); 
    ?>
</head>
<body>
    
</body>
</html>