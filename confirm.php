<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $camera = "";

    if($_POST['action']=='Room1') $camera=1;
    else if($_POST['action']=='Room2') $camera=2;
    else $camera=3;
    
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

    if(isset($_SESSION['user_id'])) {
       echo $_SESSION['user_id'];
      } else {
        echo "No user";
      }

    $sql = "
    insert into rentals
    values(null, ?, ?, ?, ?);
    ";
    try{
    $sth = $pdo->prepare($sql);
    $sth->execute([$camera, $_SESSION["user_id"],$_SESSION["start_date"],$_SESSION["end_date"]]);
        
            echo 'Booking succseful!';

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}



?>