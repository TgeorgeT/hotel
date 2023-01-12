
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
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<script src='https://www.google.com/recaptcha/api.js?onload=recaptchaOnload&render=explicit' async defer></script>

<script src ="https://www.google.com/recaptcha/api.js"></script>
<!-- <script>
    function onSubmit(token){
      document.getElementbById("contact").submit();
    }
</script> -->
</head>
<body class="light-grey">

<!-- Navigation Bar -->
<div class="bar white large">
  <a href="#" class="bar-item button black mobile"><i class="fa fa-bed margin-right"></i></a>
  <a href="#rooms" class="bar-item button mobile">Rooms</a>
  <a href="#about" class="bar-item button mobile">About</a>
  <a href="#contact" class="bar-item button mobile">Contact</a>
  <a href="signup.php" class="bar-item button right dark-grey mobile border">Sign up</a>
  <a href="login.php" class="bar-item button right dark-grey mobile border">Log in</a>
</div>
<!-- Header -->
<header class="display-container content" style="max-width:1500px;">
  <img class="image" src="imagini\hotel.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="800">
  <div class="display-left padding col l6 m8">
    <div class="container black">
      <h2><i class="fa fa-bed margin-right"></i>Hotel Silver Mountain</h2>
    </div>
    <div class="container white padding-16">
      <form action="/action_page.php" target="_blank">
        <div class="row-padding" style="margin:0 -16px;">
          <div class="half margin-bottom">
            <label><i class="fa fa-calendar-o"></i> Check In</label>
            <input class="input border" type="text" placeholder="DD MM YYYY" name="CheckIn" required>
          </div>
          <div class="half">
            <label><i class="fa fa-calendar-o"></i> Check Out</label>
            <input class="input border" type="text" placeholder="DD MM YYYY" name="CheckOut" required>
          </div>
        </div>
        <div class="row-padding" style="margin:8px -16px;">
          <div class="half margin-bottom">
            <label><i class="fa fa-male"></i> Adults</label>
            <input class="input border" type="number" value="1" name="Adults" min="1" max="6">
          </div>
          <div class="half">
            <label><i class="fa fa-child"></i> Kids</label>
          <input class="input border" type="number" value="0" name="Kids" min="0" max="6">
          </div>
        </div>
        <a href="login.php" class=" button right dark-grey mobile border">Search</a>
      </form>
    </div>
  </div>
</header>

<!-- Page content -->
<div class="content" style="max-width:1532px;">

  <div class="container margin-top" id="rooms">
    <h3>Rooms</h3>
    <p>Make yourself at home is our slogan. We offer the best beds in the industry. Sleep well and rest well.</p>
  </div>
  
  

  <div class="row-padding padding-16">
    <div class="third margin-bottom">
      <img src="imagini\single.jpg" alt="Norway" style="width:100%">
      <div class="container white">
        <h3>Single Room</h3>
        <h6 class="opacity">From $99</h6>
        <p>Single bed</p>
        <p>15m<sup>2</sup></p>
        <p class="large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
        <a href="login.php" class="button block black margin-bottom">Choose Room</a>
      </div>
    </div>
    <div class="third margin-bottom">
      <img src="imagini\double.jpg" alt="Norway" style="width:100%">
      <div class="container white">
        <h3>Double Room</h3>
        <h6 class="opacity">From $149</h6>
        <p>Queen-size bed</p>
        <p>25m<sup>2</sup></p>
        <p class="large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p></p>
        <a href="login.php" class="button block black margin-bottom">Choose Room</a>
      </div>
    </div>
    <div class="third margin-bottom">
      <img src="imagini\deluxe.jpg" alt="Norway" style="width:100%">
      <div class="container white">
        <h3>Deluxe Room</h3>
        <h6 class="opacity">From $199</h6>
        <p>King-size bed</p>
        <p>40m<sup>2</sup></p>
        <p class="large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
        <a href="login.php" class="button block black margin-bottom">Choose Room</a>
      </div>
    </div>
  </div>

  <div class="row-padding" id="about">
    <div class="col l4 12">
      <h3>About</h3>
      <h6>Our hotel is one of a kind. Enjoy the superb mountain views from your cozy room and dine at our all-inclusive restaurant rewarded with multiple awards. </h6>
    <p>We accept: <i class="fa fa-credit-card large"></i> <i class="fa fa-cc-mastercard large"></i> <i class="fa fa-cc-amex large"></i> <i class="fa fa-cc-cc-visa large"></i><i class="fa fa-cc-paypal large"></i></p>
    </div>
  </div>
  
  <div class="row-padding large center" style="margin:32px 0">
    <div class="third"><i class="fa fa-map-marker text-black"></i> DN11C, Harghita</div>
    <div class="third"><i class="fa fa-phone text-black"></i> Phone: +40752123133</div>
    <div class="third"><i class="fa fa-envelope text-black"></i> Email: silver.mountain.hotel@gmail.com</div>
  </div>

  <div class="panel black leftbar padding-32">
    <h6><i class="fa fa-info deep-orange padding margin-right"></i> On demand, we can offer playstation, babycall, children care, dog equipment, etc.</h6>
  </div>
 
  <script src="https://www.google.com/recaptcha/enterprise.js?render=6LfTHukjAAAAABkAoJtm4bKgK9tfncWILLxDTimP"></script>
<script>
grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('6LfTHukjAAAAABkAoJtm4bKgK9tfncWILLxDTimP', {action: 'submit'}).then(function(token) {
       
    });
});
</script>
   
  <div class="container" id="contact">
    <h2>Contact</h2>
    <p>If you have any questions, do not hesitate to ask them.</p>
    <i class="fa fa-map-marker text-black" style="width:30px"></i> Harghita, Romania<br>
    <i class="fa fa-phone text-black" style="width:30px"></i> Phone: +40752123133<br>
    <i class="fa fa-envelope text-black" style="width:30px"> </i> Email: silver.mountain.hotel@gmail.com<br>
    <form method="post" action="">
      <p><input class="input padding-16 border" type="text" placeholder="Name"  name="Name"></p>
      <p><input class="input padding-16 border" type="text" placeholder="Message"  name="Message"></p>
      <span id="captcha" style="color:red" ></span>
      <div class="g-recaptcha" data-sitekey="6LfTHukjAAAAABkAoJtm4bKgK9tfncWILLxDTimP"></div>
      <p><button id="contact" class="button black padding-large">SEND EMAIL</button></p>
    </form>
  </div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="padding-32 black center margin-top">
  <h5>Find Us On</h5>
  <div class="xlarge padding-16">
    <i class="fa fa-facebook-official hover-opacity"></i>
    <i class="fa fa-instagram hover-opacity"></i>
    <i class="fa fa-snapchat hover-opacity"></i>
    <i class="fa fa-pinterest-p hover-opacity"></i>
    <i class="fa fa-twitter hover-opacity"></i>
    <i class="fa fa-linkedin hover-opacity"></i>
  </div>
</footer>

<!-- Add Google Maps -->
<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
  myCenter=new google.maps.LatLng(46.117087, 25.942298);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7Q-uFgdKQf5MDxiP3Z76iFw1QHEPohbM&callback=myMap"></script>



</body>
</html>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
/* Exception class. */
require './vendor/autoload.php';

if($_SERVER['REQUEST_METHOD']==='POST'){


$recaptcha_url = "https://www.google.com/recaptcha/api/siteverify";
$recaptcha_secret = "6LfTHukjAAAAAIKW_WgvHvLCEdxrP3jO8kQVJmTW";
$recaptcha_response = $_POST["g-recaptcha-response"];

$recaptcha = file_get_contents($recaptcha_url. '?secret='.$recaptcha_secret.'&response='.$recaptcha_response);
$recaptcha = json_decode($recaptcha, true);

if($recaptcha['success']==1){

$name = $_POST["Name"];
$message = $_POST["Message"];


$email = new PHPMailer(TRUE);

try {
	$email->isSMTP();											
	$email->Host	 = 'smtp.gmail.com';					
	$email->SMTPAuth = true;							
	$email->Username = 'silver.mountain.hotel@gmail.com';				
	$email->Password = 'ycngoqwmlqywvdrt';						
	$email->SMTPSecure = 'tls';							
	$email->Port	 = 587;

	$email->setFrom('silver.mountain.hotel@gmail.com', $name);		
	$email->addAddress('silver.mountain.hotel@gmail.com');
					
	$email->Subject = 'Contact';
	$email->Body = $message;
	$email->send();
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$email->ErrorInfo}";
}
}
else{
  ?>
  <script>alert("Please fill recaptcha!")</script>;
  <?php
}
}
?>
