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

        $sql = "SELECT * FROM users"; 
        $result = $conn -> query($sql); 
        
        echo "<h2> Lista użytkowników: <h2>";
        echo "<table border = '1'>"; 
        echo "<tr><th>ID</th><th>Imie</th><th>email</th><th>Akcja</th></tr>"; 
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>" ;
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td> <a href='edit.php?id=" . $row["id"] . "'> Edytuj </a></td>";
            echo "</tr>"; 
        }
        
        echo "</table>"; 
        $conn-> close();

    ?>
</head>
<body>
        
</body>
</html>