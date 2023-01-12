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




//require 'includes/dbh.inc.php'; //conexiunea la baza de date
require 'jpgraph-4.4.1/src/jpgraph.php';
require 'jpgraph-4.4.1/src/jpgraph_bar.php';
//require 'jpgraph-4.4.1/src/jpgraph_pie3d.php';
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
 

$graph = new Graph(220,300,'auto');
$graph->SetScale("textlin",0,100);

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->Set90AndMargin(50,40,40,40);
$graph->img->SetAngle(90); 

// set major and minor tick positions manually
$graph->SetBox(false);

//$graph->ygrid->SetColor('gray');
$graph->ygrid->Show(false);
$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels($rooms);
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

// For background to be gradient, setfill is needed first.
$graph->SetBackgroundGradient('#00CED1', '#FFFFFF', GRAD_HOR, BGRAD_PLOT);

// Create the bar plots
$b1plot = new BarPlot($rentals);

// ...and add it to the graPH
$graph->Add($b1plot);

$b1plot->SetWeight(0);
$b1plot->SetFillGradient("#808000","#90EE90",GRAD_HOR);
$b1plot->SetWidth(17);

// Display the graph
$graph->Stroke();


?>