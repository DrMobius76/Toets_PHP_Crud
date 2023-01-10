<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>PDO CRUD</title>
</head>
<body>
    <h1>PDO CRUD</h1>

    <form action="create.php" method="post">
        
        <label for="Merk">Merk:</label><br>
        <input type="text" name="Merk" id="Merk"><br>

        <label for="Model">Model:</label><br>
        <input type="text" name="Model" id="Model"><br>

        <label for="Topsnelheid">Topsnelheid:</label><br>
        <input type="text" name="Topsnelheid" id="Topsnelheid"><br>

        <label for="Prijs">Prijs:</label><br>
        <input type="text" name="Prijs" id="Prijs"><br>

        <input type="submit" value="Verstuur">
    </form>
</body>
</html>