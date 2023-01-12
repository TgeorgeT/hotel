<!DOCTYPE html>
<html>

<head>
    <title>W3.CSS Template</title>
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
        <a href = "index.php">Silver Mountain Resort</a>

    </div>

    <div class="container" id="signup">
        <form method="post" action="">
            <p><input class="input padding-16 border" type="text" placeholder="First Name" require  name="FName"></p>
            <p><input class="input padding-16 border" type="text" placeholder="Last Name" require name="LName"></p>
            <p><input class="input padding-16 border" type="text" placeholder="Email" require name="Email"></p>
            <p><input class="input padding-16 border" type="text" placeholder="Phone Number" require name="Phone"></p>
            <p><input class="input padding-16 border" type="text" placeholder="Password" require name="Password"></p>
            <p><input class="input padding-16 border" type="text" placeholder="Verify Passwrord" require name="VPassword"></p>
            <select name="Gender" class="input padding-16 border">
                <option value="Mr">Mr.</option>
                <option value="Ms">Ms.</option>
            </select>
            <p><button class="button black padding-large" type="submit">SIGN UP</button></p>
        </form>
    </div>
    <!-- Header -->
</body>



<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $fname = $_POST["FName"];
    $lname = $_POST["LName"];
    $email = $_POST["Email"];
    $phone = $_POST["Phone"];
    $password = $_POST["Password"];
    $vpassword = $_POST["VPassword"];
    $gender = $_POST["Gender"];


    $host = 'eu-cdbr-west-03.cleardb.net';
    $db   = 'heroku_b5a80f7ef7b4f17';
    $user = 'b6449399c3ec1b';
    $pass = '082465fc';
    $charset = 'utf8mb4';
    $port = "3306";

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
    try {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute( PDO::ATTR_EMULATE_PREPARES, FALSE );

   } catch (PDOException $e) {
        echo "eroare la conexiune";
   };

   if($password != $vpassword){
    ?>
    <script> alert("Passwords do not match!");</script>
    <?php
   }
   else{
    try{
        $sql = "INSERT INTO users (first_name,last_name,email,phone,password, gender) VALUES (?,?,?,?,?,?)";
        $pdo->prepare($sql)->execute([$fname, $lname, $email,$phone,$password,$gender]);
        ?>
        <script>
            alert('User creation succesful!');
        </script>
        <?php
    }catch(PDOException $e){
        echo $e->getMessage();
    ?>
        <script>
            alert("User creation failed");
        </script>
        <?php
    }
    
   };
}
?>