<?php

$host = "localhost";    /* Host name */
$user = "root";         /* User */
$password = "root";         /* Password */
$dbname = "tvseries";   /* Database name */

// Create connection
$con = mysqli_connect($host, $user, $password,$dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$name=$_POST['name'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$enter=$_POST['enter'];
$year=date("Y");


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TV Series &dash; Newsletter</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    
</head>
<body>
<?php
    if (isset($enter)) 
    
    {    
        if (($year-$dob) <18)
        {
            mysqli_query($con,"INSERT INTO newsletter (name, email, dob) VALUES ('$name','$email','$dob')");
            header('Location: news_minor.html');
            setcookie("yob",($year-$dob));
            
        }else{
            mysqli_query($con,"INSERT INTO newsletter (name, email, dob) VALUES ('$name','$email','$dob')");
            header('Location: news_18.html');

        }
    }?>

<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="../js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="../js/main.js"></script>
<script src="..js/alert.js"></script>
    

</body>
</html>
