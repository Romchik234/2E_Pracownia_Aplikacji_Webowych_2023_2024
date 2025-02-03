
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
        $sql = "SELECT * FROM users WHERE id = $id" ; 
        $result = $conn -> query($sql);
        
        if($result -> num_rows == 0)
        {
            die("Nie znaleziono użytkownika.");
        }

        $row = $result -> fetch_assoc();
        ?>
</head>
<body>
<h2> Edytuj użytkownika</h2>    
        <form action="update.php" method = "post">
            <label for="id"> Id: </label>
            <input action="hidden" name= "id" value="<?php echo $row['id'];?>" >
            <br><br>
            <label for="name">Imie: </label>
            <input type="text" name="name" id= "name" value="<?php echo $row['name']; ?>" required >
            <br><br>
            <label for="email">Email:</label>
            <input type="text" name = "email" id="email" value = "<?php echo $row['email']; ?>" required>
            <br><br>
            <button type="submit">Zapisz zmiany</button>
        </form>
</body>
<?php
$conn -> close(); 
?>
</html>