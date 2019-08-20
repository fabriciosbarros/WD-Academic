<?php
session_start();

$login_cookie = $_SESSION['name'];

if (!isset($_SESSION["loggedIn"]) && !$_SESSION["loggedIn"] == 1)
{
    //throw you off the page if not logged in
    // just in case someone trys the page with a direct URL    
    header("Location:../index.html");
}

?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TV Series &mdash; News</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="TV Series. The website where you'll find entertainment and information." />
	<meta name="keywords" content="tv series, tv program, hobbie, hobbies, netflix, apple tv, hulu, prime video" />
	<meta name="author" content="Fabricio Barros" />

	
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
        
        
        
        <!--IMPORTS FOR SCRIPT TO SCROLL-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="../css/flexslider.css">
   
        <!-- Popup Login Style  -->
	<link rel="stylesheet" href="../css/style-login-popup.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->



	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
        
        
        <!--MENU-->
        <nav class="fh5co-nav navbar-fixed-top" role="navigation">
		<div class="top-menu container-fluid" style="background-color:#FCF8F8">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index_logged.php">TV<span>Series</span></a></div>
					</div>
                    
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="index_logged.php">Home</a></li>
							<!--<li><a href="product.html">Product</a></li>-->
							<li class="has-dropdown">
								<a href="">Platforms</a>
								<ul class="dropdown">
									<li><a href="http://www.netflix.com" target="_blank">Netflix</a></li>
                                    <li><a href="http://www.hulu.com" target="_blank">Hulu</a></li>
						            <li><a href="http://www.apple.com/ie/tv/" target="_blank">Apple TV</a></li>
						            <li><a href="http://www.primevideo.com" target="_blank">Prime Video</a></li>
								</ul>
							</li>
							<li><a href="top_ten.php">Top Series</a></li>
                            <li class="active"><a href="news.php">News</a></li>
                            <li><a href="report.php">Report</a></li>
                            <li class="userwelcome"><?php echo "Welcome <b>$login_cookie</b>!"; ?></li>
							<li class="btn-cta"><a href="doLogout.php"><span>Logout</span></a></li>

						</ul>
					</div>
				</div>

			</div>

		</div>

            <!--NEWSLETTER FORM-->
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="newsletter.php" method="POST">
    <div class="container">
        <br>
        <br>
        <h3>Newsletter Subscription</h3>
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <!--<img src="images/img_avatar2.png" alt="Avatar" class="avatar">-->
    </div>

    <div class="container">
      <label for="name"><b>Name</b></label><br>
      <input type="text" placeholder="Enter your name" name="name" id="name" required>

      <label for="email"><b>e-mail</b></label><br>
      <input type="text" placeholder="Enter your e-mail" name="email" id="email" required><br>
      <label for="dob"><b>Year of birthday</b></label><br>
      <input type="text" placeholder="Year of Birthday" name="dob" id="dob" required>
        
        <button type="submit" value="enter" id="enter" name="enter">SUBMIT</button>
  
      </div>   
       </form>
            </div>
                        
                                <!--SCRIPT TO NEWSLETTER FORM-->

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    
	</nav>
            
<!--IMAGE GRID-->       
         
<div id="fh5co-product">
    <div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<br><h2>News</h2>
                    <p><?php echo "<b>$login_cookie</b>"; ?>, if you like to know what's on about TV Series, this is the right place!</p>
                </div>
        </div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 prod text-center animate-box">
					<div class="product" style="background-image: url(../images/new_sabrina.jpg);">
						<a href="#sabrina" class="view">
							<i class="icon-plus"></i>
						</a>
					</div>
                    <div class='content'>
                        <h3>The Chilling Adventures Of Sabrina</h3>
					<h5>April 2019</h5>
                    </div>
				</div>
				<div class="col-md-4 prod text-center animate-box">
					<div class="product" style="background-image: url(../images/new_reasonswhy.png);">
						<a href="#thirteen" class="view">
							<i class="icon-plus"></i>
						</a>
					</div>
					<h3>13 Reasons Why</h3>
					<h5>Spring 2019</h5>
				</div>
				<div class="col-md-4 prod text-center animate-box">
					<div class="product" style="background-image: url(../images/new_stranger.jpg);">
						<a href="#stranger" class="view">
							<i class="icon-plus"></i>
						</a>
					</div>
					<h3><a href="#">Stranger Things</a></h3>
					<h5>Summer 2019</h5>
				</div>
			</div>        
		</div>
           
 <!--ARTICLES-->         
        <div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Last news about TV Series</h2>
                    <p><b><?php echo date("d/m/Y")?></b></p> 
                    <p>In 2019 we expect a number of new series and the release of new seasons of our favourites! Hundreds of show from comedies to thrillers are going to fill our spare time for our entertainment. I selected here three very famous series that have just recently announced their return and I am delighted to talk about them:<b><i>The Chilling Adventures of Sabrina, 13 reasons why and Stranger Things.</i></b></p>
                </div>
                <div id="sabrina" class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2></h2><br>
                </div>
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h3><b>The Chilling Adventures of Sabrina</b></h3>
                    The second part of the first season of <a href="https://www.youtube.com/watch?v=SM64ZaS40Xs" class="popup-vimeo">The Chilling Adventures of Sabrina</a> will be released in April. Now the episodes will show a witch more sex and more hardcore than before. The soundtrack is mostly Rock n’ Roll. Can’t wait to see it!</p><p align="right"><a href="#fh5co-product"><i class="icon-arrow-up2"></i></a></p>
               </div>
                    <div id="thirteen" class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2></h2><br>
                </div>
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h3><b>13 Reasons Why</b></h3>
                    The third season of <a href="https://www.youtube.com/watch?v=yNOAs3poxMw" class="popup-vimeo">13 reasons why</a> is confirmed by Netflix and again, Hannah and her schoolmates are back in a series of events that will still relate to her suicide. According to the producer, the teenager will not play an “integral role”. This time the story will focus on the other characters.</p><br><br><p align="right"><a href="#fh5co-product"><i class="icon-arrow-up2"></i></a></p>
                    </div>
                    <div id="stranger" class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2></h2><br>
                    </div>
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h3><b>Stranger Things</b></h3>
                    And last, but not least, <a href="https://www.youtube.com/watch?v=aXyju7zFwyE" class="popup-vimeo">Stranger Things 3</a>! Yes! Eleven and the kids from Hawkins will be back to the next adventures. Expected to be released in summer 2019, a lot has been said about it. Netflix’s vice president of original programming Cindy Holland said that the delay will “worth the wait”.<br><br>
                    </div>
                    <div id="stranger" class="col-md-8 col-md-offset-2 text-center fh5co-heading">  
                    Soon I’ll be back posting more news about TV Series. 
                    </p><p align="right"><a href="#fh5co-product"><i class="icon-arrow-up2"></i></a></p>
    </div>
				</div>
			</div>
    </div>

<!--NEWSLETTER SUBSCRIPTION AND CHECK AGE-->
        
	<div id="fh5co-started" style="background-image:url(../images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Subscribe for our newsletter</h2>
					<p>You can receive my weekly news from TV Series in your e-mail. Just click the button below and fill the form.</p>
					<p><a id="" onclick="document.getElementById('id01').style.display='block'" class="btn btn-default btn-lg">SUBSCRIBE</a></p><br>
                    <p>Check your age to see if you are <b>OVER 18</b> and can receive <b>ADULT</b> content:</p><br>
                    <h2>Enter the year you were born:</h2><input type="text" id="yob" width=10px/><br><br>
                    <input type="button" class="btn btn-default btn-lg" onclick="call()" value="Check Age"/>
                    <h2>Your age is:</h2><h2 id="result"></h2>
                </div>        
			</div>
        </div>
    </div>
    </div>

    <!--FOOTER-->
	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h4>About me</h4>
					<p>I am a 37 years old guy passionate about movies and TV Series. I am capable of spending the whole weekend watching a bunch of episodes just to finish one season.</p>
				</div>
				<div class="col-md-4 col-md-push-1">
					<h4>Streaming Platforms</h4>
					<ul class="fh5co-footer-links">
						<li><a href="http://www.netflix.com" target="_blank">Netflix</a></li>
                        <li><a href="http://www.hulu.com" target="_blank">Hulu</a></li>
						<li><a href="http://www.apple.com/ie/tv/" target="_blank">Apple TV</a></li>
						<li><a href="http://www.primevideo.com" target="_blank">Prime Video</a></li>
					</ul>
				</div>

				<div class="col-md-4 col-md-push-1">
					<h4>Contact</h4>
					<ul class="fh5co-footer-links">
						<li>Apartment 1 Block A, <br> The Windmill Dublin 2</li>
						<li>+ 353 89 977 8784</li>
						<li><a href="mailto:fabri.barros@gmail.com">fabri.barros@gmail.com</a></li>
					</ul>
                    <p></p>
                    <ul class="fh5co-social-icons">
							<li><a href="http://www.facebook.com/fabri.barros" target="_blank"><i class="icon-facebook"></i></a></li>
							<li><a href="http://www.instagram.com/fabriciobarross" target="_blank"><i class="icon-instagram"></i></a></li>
							<li><a href="http://www.linkedin.com/in/barrosfabricio" target="_blank"><i class="icon-linkedin"></i></a></li>
						</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2018 Fabricio Barros TV Series. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://www.facebook.com/fabri.barros" target="_blank">Fabricio Barros</a>
                    </p>
				</div>
			</div>
		</div>
	</footer>
    </div>   
        
<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>
	                <!-- SCRIPTS-->    

    <script src='../js/jquery-3.2.1.min.js' type='text/javascript'></script>
    <script src='../js/jquery-ui.js' type='text/javascript'></script>
    <script src='../js/script.js' type='text/javascript'></script>
    
	<!-- jQuery Easing-->
	<!--<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="../js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="../js/main.js"></script>

        


        <!--SCRIPT CALCULATE AGE-->
<script src="../js/calculation.js"></script>
        
	</body>
</html>

