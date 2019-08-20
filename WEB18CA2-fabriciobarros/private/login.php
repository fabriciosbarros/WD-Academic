<?php
  $login = $_POST['login'];
  $enter = $_POST['enter'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";

try {
    require_once 'pdo_connect.php';
} catch (Exception $e) {
    $error = $e->getMessage();
}
 if (isset($error)) {
    echo "<p>$error</p>";
}   
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TV Series &dash; Login</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

</head>
<body>
<?php
    if (isset($enter)) 
    
    {    
      $verify = $db->query($sql);
      
        if ($verify->fetchColumn()==0)
        {
            header('Location: login_error.html');
            
        }else{
            $username = $db->query("SELECT first_name FROM users WHERE login = '$login' AND password = '$password'");
            $username2 = $username->fetch();
            $username3 = $username2['first_name'];
            
            session_start();
            $_SESSION["loggedIn"]=1;
            $_SESSION["name"]=$username3;
            //setcookie("firstname",$username3);
            header('Location: index_logged.php');

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
