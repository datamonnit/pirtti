<!-- <?php include('login.php');
  include('db.php');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Päiväkoti pirtti">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	  <meta name="keywords" content="päiväkoti, päiväkotiyhdistys, Päiväkotiyhdistys pirtti ry">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <title>Päiväkoti Pirtti | Etusivu</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <script>
      $(document).ready(function(){
          $("#hide").click(function(){
              $("nav").slideToggle("fast");
          });
      });
          document.getElementById("hide").onclick = function() {myFunction()};
    </script>
    <style>

</style>

  </head>
  <body>

    <header>
      <button onclick="topFunction()" id="myBtn">Ylös</button>
      <div class="container">
          <div id="title"> <p>Puh. 0440 214 297<br>Telkänkatu 2 50190 Mikkeli<br>pkpirttiry@surffi.fi</p></div>
          <h1> Päiväkoti Pirtti</h1>
<button name="myButton" id="hide">      <div class="juttu" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button>
        <nav>
          <ul>
            <li class="current tab1"><a href="index.html" class="fa fa-home">&nbsp;Etusivu </a></li>
            <li  class="tab4"><a href="yhteystiedot.html" class="fa fa-info">&nbsp;Yhteystiedot</a></li>
            <li  class="tab5 dropdown">
             <a class="fa fa-file" href="javascript:void(0)" class="dropbtn" >&nbsp;Hakemukset</a>
               <div class="dropdown-content">
                 <a href="paivahoitohakemus.html">Päivähoitohakemus</a>
                 <a href="esiopetushakemus.html">Esiopetushakemus</a>
                 <a href="palvelusetelihakemus.html">Palvelusetelihakemus</a>
               </div>
            </li>
            <li  class="tab6"><a href="kuvia.html" class="fa fa-image">&nbsp;Kuvia</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <?php include('errors.php'); ?>

    <form class="contact-form" action="forgotPassword.php" method="post">
      <input type="text" name="email">
      <button type="submit" name="submit">Lähetä</button>
    </form>
<script language="javascript">

</script>


<script>
function myFunction(x) {
    x.classList.toggle("change");
}
</script>

  <footer>
      <p>Päiväkotiyhdistys Pirtti ry, Copyright &copy; 2017</p>
  </footer>
  </body>

  <script>
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("fast");
    });
});
</script>
<script>

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
</html> -->


<?php
$servername = "it.esedu.fi";
$username = "pirtti";
$password = "p1rtt1onp4r4s!";
$database = "pirttidb";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "pirttil";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Kantaan ei pysty yhdistämään" . $conn->connect_error);
}
?>
<?php
require_once('db.php');
require('db.php');
// require('PHPMailer/PHPMailerAutoload.php');
if(isset($_POST) & !empty($_POST)){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $query = "SELECT * FROM gallery_user WHERE username='$username'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {
        $row = mysqli_fetch_assoc($results);
		$password = $row['password'];
		$to = $row['email'];
		$subject = "Your Recovered Password";
 
		$message = "Please use this password to login " . $password;
		$headers = "From: miklas.marko@live.com" . "\r\n";
		if(mail($to, $subject, $message, $headers)){
			echo "Your Password has been sent to your email id";
		}else{
			echo "Failed to Recover your password, try again";
		}
 
	}else{
		echo "User name does not exist in database";
	}

}

 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password in PHP & MySQL</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
 
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
		  <input type="text" name="username" class="form-control" placeholder="Username" required>
		</div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Forgot Password</button>
        <a class="btn btn-lg btn-primary btn-block" href="register.php">Register</a>
      </form>
</div>
</body>
</html>