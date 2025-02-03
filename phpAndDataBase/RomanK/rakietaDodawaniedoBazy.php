<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Dodaj użytkownika</h2>
    <form action="potrzebnyDoDodawanie.php" method = "post" >
        <label for="name"> imie:</label>
        <input type="text" name="name" id = "name" required>
        <br><br>
        <label for="email"> email : </label>
        <input type="text" name = "email" id="email" required>
        <br><br>
        <button type ="submit">Dodaj </button> 
    </form>
</body>
</html>
