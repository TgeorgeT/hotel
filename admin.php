<?php
session_start();
echo 1;

?>
<?php
session_start();
if($_SESSION["user_id"]!=1){
    ?>

<script>
         window.location.replace("home.php");
    </script>

<?php
}


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




$sql = "SELECT room_id, count(rental_id) as Rentals from rentals 
where room_id is not null GROUP by room_id having count(rental_id)>0;";

$rooms = array();
$rentals = array();

$sth = $pdo->prepare($sql);
$sth->execute();



while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
   array_push($rooms,"Room".$row["room_id"]);
   array_push($rentals,intval($row["Rentals"]));
}
 
//$fimg ='jpgraph-3d_pie.png';
 




?>
