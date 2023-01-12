<!DOCTYPE html>
<html>

<head>
    <title>Silver Mountain</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Raleway", Arial, Helvetica, sans-serif
        }
    </style>
</head>

<body class="light-grey">

    <div class="bar white large">
        <a href="index.php">Silver Mountain Resort</a>

    </div>

    <div class="container" id="login">
        <form method="post" action="home.php">
            <p><input class="input padding-16 border" type="text" placeholder="Email" require name="Email"></p>
            <p><input class="input padding-16 border" type="password" placeholder="Password" require name="Password"></p>
            <p><button class="button black padding-large" type="submit">LOG IN</button></p>
        </form>
    </div>
    <!-- Header -->
</body>



<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $email = $_POST["Email"];
    $password = $_POST["Password"];


    $host = 'eu-cdbr-west-03.cleardb.net';
    $db   = 'heroku_b5a80f7ef7b4f17';
    $user = 'b6449399c3ec1b';
    $pass = '082465fc';
    $charset = 'utf8mb4';
    $port = "3306";

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
    try {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "eroare la conexiune";
    };

    $sql = "SELECT COUNT  from users where email=? and password =?";
    $row = $pdo->prepare($sql)->execute([$email, $password]);
    if (!$row) {
?>
        <script>
            alert("Wrong Credentials");
        </script>
<?php
    }
    else{

    }
}
?>