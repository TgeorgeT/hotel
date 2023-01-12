<?php

session_start();
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
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    } catch (PDOException $e) {
        echo "eroare la conexiune";
    };

    $sql = "SELECT *  from users where email=? and password =?";
    $sth = $pdo->prepare($sql);
    $sth->execute([$email, $password]);
    $row = $sth->fetch(PDO::FETCH_ASSOC);
    if (!$row) {
?>
        <script>
            alert("Wrong Credentials");
            window.location.replace("/hotel/login.php");
        </script>
<?php
    } else {
        $_SESSION["last_name"] = $row["last_name"];
        $_SESSION["gender"] = $row["gender"];  
        $_SESSION["user_id"] = $row["user_id"];
    }
    
    if($_SESSION["user_id"]==1){
        ?>
        <script>
            window.location.replace("admin.php");
        </script>
<?php

    }
}



?>

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

        #camera1,
        #camera2,
        #camera3 {
            display: none
        }

        ;
    </style>

</head>

<body class="light-grey">

    <!-- Navigation Bar -->
    <div class="bar white large">
        <h2><?php echo "Hello " . $_SESSION["gender"] . " " . htmlspecialchars($_SESSION["last_name"]);  ?><h2>
    </div>
    <!-- Header -->
    <header class="display-container content" style="max-width:1500px;">
        <img class="image" src="imagini\hotel.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="800">
        <div class="display-left padding col l6 m8">
            <div class="container black">
                <h2><i class="fa fa-bed margin-right"></i>Hotel Silver Mountain</h2>
            </div>
            <div class="container white padding-16">
                <form method="get" target="_blank">
                    <div class="row-padding" style="margin:0 -16px;">
                        <div class="half margin-bottom">
                            <label><i class="fa fa-calendar-o"></i> Check In</label>
                            <input class="input border" type="date" placeholder="DD MM YYYY" name="CheckIn" value="<?php echo isset($_GET['CheckIn']) ? htmlspecialchars($_GET['CheckIn']) : '' ?>">
                        </div>
                        <div class="half">
                            <label><i class="fa fa-calendar-o"></i> Check Out</label>
                            <input class="input border" type="date" placeholder="DD MM YYYY" name="CheckOut" value="<?php echo isset($_GET['CheckOut']) ? htmlspecialchars($_GET['CheckOut']) : '' ?>">
                        </div>
                    </div>
                    <div class="row-padding" style="margin:8px -16px;">
                        <div class="half margin-bottom">
                            <label><i class="fa fa-male"></i> Adults</label>
                            <input class="input border" type="number" value="<?php echo isset($_GET['Adults']) ? htmlspecialchars($_GET['Adults']) : '1' ?>" name="Adults" min="1" max="6">
                        </div>
                        <div class="half">
                            <label><i class="fa fa-child"></i> Kids</label>
                            <input class="input border" type="number" value="<?php echo isset($_GET['Kids']) ? htmlspecialchars($_GET['Kids']) : '0' ?>" name="Kids" min="0" max="6">
                        </div>
                    </div>
                    <button class="button dark-grey" type="submit"><i class="fa fa-search margin-right"></i> Search availability</button>
                </form>
            </div>
        </div>
    </header>

    <!-- Page content -->
    <div class="content" style="max-width:1532px;">




        <div class="row-padding padding-16 display none" id="camere">
            <form action="confirm.php" method ="post">
            <div class="third margin-bottom" id="camera1">
                <img src="imagini\single.jpg" alt="Norway" style="width:100%">
                <div class="container white">
                    <h3>Single Room</h3>
                    <h6 class="opacity">From $99</h6>
                    <p>Single bed</p>
                    <p>15m<sup>2</sup></p>
                    <p class="large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
                    <button name ="action" class="button block black margin-bottom" value="Room1" type="submit">Choose Room</button>
                </div>
            </div>
            <div class="third margin-bottom" id="camera2">
                <img src="imagini\double.jpg" alt="Norway" style="width:100%">
                <div class="container white">
                    <h3>Double Room</h3>
                    <h6 class="opacity">From $149</h6>
                    <p>Queen-size bed</p>
                    <p>25m<sup>2</sup></p>
                    <p class="large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
                    </p>
                    <button name ="action" class="button block black margin-bottom" value="Room2" type="submit">Choose Room</button>
                </div>
            </div>
            <div class="third margin-bottom" id="camera3">
                <img src="imagini\deluxe.jpg" alt="Norway" style="width:100%">
                <div class="container white">
                    <h3>Deluxe Room</h3>
                    <h6 class="opacity">From $199</h6>
                    <p>King-size bed</p>
                    <p>40m<sup>2</sup></p>
                    <p class="large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
                    <button name ="action" class="button block black margin-bottom" value="Room3" type="submit">Choose Room</button>
                </div>
            </div>
            </form>
        </div>



        <!-- End page content -->
    </div>






</body>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $number = $_GET["Adults"] + $_GET["Kids"];




    $_SESSION["start_date"] = $_GET["CheckIn"];
    $_SESSION["end_date"] = $_GET["CheckOut"];

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

    $sql = "
    select rm.room_id, size, count,max_people, room_name, rm.room_id, IFNULL(Numar, 0) Numar
from rooms rm
left join(
select room_id, count(*) Numar
from rentals rt
where  ((rt.start_date<=? and rt.end_date>=?) or 
    (rt.start_date<=? and rt.end_date>=?))
group by room_id) rt 
on rm.room_id = rt.room_id
where max_people>=?;
    ";
    $sth = $pdo->prepare($sql);
    $sth->execute([$_GET["CheckIn"], $_GET["CheckIn"], $_GET["CheckOut"], $_GET["CheckOut"],$number]);
    $ok = 0;
    while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
        $ok++;
        $sql = "
        select *
        from rooms
        where room_id=?;
        ";


        $sth1 = $pdo->prepare($sql);
        $sth1->execute([$row["room_id"]]);
        $room = $sth1->fetch(PDO::FETCH_ASSOC);

?>
        <script>
            var nume = "<?php echo $room["room_name"]; ?>";
        </script>
        <?php
        if ($row["Numar"] < $room["count"]) {
        ?>
            <script>
                document.getElementById(nume).style.display = 'block';
            </script>
        <?php
        }
    }
    if ($ok == 0) {
        ?>
        <script>
            alert('No rooms available');
        </script>
<?php
    }
}

?>