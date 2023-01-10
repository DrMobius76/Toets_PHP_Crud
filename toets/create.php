<?php
// var_dump($_POST);exit();
include('config.php');

// DSN staat voor data sourcename.
$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    echo "Er is een verbinding met de database";
} catch(PDOException $e) {
    echo "Er is helaas geen verbinding met de database.<br>
          Neem contact op met de Administrator<br>";
    echo "Systeemmelding: " . $e->getMessage();
}
// Maak de sql query voor het inserten van een record
$sql = "INSERT INTO dureauto (Id
                            ,Merk
                            ,Model
                            ,Topsnelheid
                            ,Prijs
                            )
        VALUES              (NULL
                            ,:Merk
                            ,:Model
                            ,:Topsnelheid
                            ,:Prijs
                            );";
// Maak de query gereed met de prepare-method van het $pdo-object
$statement = $pdo->prepare($sql);
$statement->bindValue(':Merk', $_POST['Merk'], PDO::PARAM_STR);
$statement->bindValue(':Model', $_POST['Model'], PDO::PARAM_STR);
$statement->bindValue(':Topsnelheid', $_POST['Topsnelheid'], PDO::PARAM_STR);
$statement->bindValue(':Prijs', $_POST['Prijs'], PDO::PARAM_STR);
// Vuur de query af op de database...
$statement->execute();



