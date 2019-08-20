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
	<title>TV Series &mdash; Top Series</title>
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
        
        <!--CSS from DB Connection-->
        <link href='../css/jquery-ui.css' rel='stylesheet' type='text/css'>


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

	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

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
		<div class="top-menu" style="background-color:#FCF8F8">
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
							<li class="active"><a href="top_ten.php">Top Series</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="report.php">Report</a></li>
                            <li class="userwelcome"><?php echo "Welcome <b>$login_cookie</b>!"; ?></li>
							<li class="btn-cta"><a href="doLogout.php"><span>Logout</span></a></li>
						</ul>
					</div>
				</div>

			</div>

		</div>
        
	</nav>
                <!--TOP SERIES CONTAINER-->        
<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<br><h2>Top Series</h2>
					<p><?php echo "<b>$login_cookie</b>"?>, in this section you will find the top 10 TV Series according to my evaluation. To see more information about it, just pass the mouse pointer over the title. Hope you enjoy!</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
                    <div class="fh5co-blog animate-box">
						<img class="img-responsive" src="../images/handmaidstale.jpg" alt="Hulu - The Handmaid's Tale">
						<div class="blog-text">
							<span class="posted_on" id="hmt">1st</span>
                            <span class="comment"><a id="hmt"><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i></a></span>
                            <div class='content'>
                                <span title='Please wait...' id='user_1'><h3>The Handmaid's Tale&nbsp;</h3></span><a href="https://www.youtube.com/watch?v=9Vwsr6Ef3_E" class="popup-vimeo"><i class="icon-video"></i></a>
                            </div>
							<p>Set in a dystopian future, a woman is forced to live as a concubine under a fundamentalist theocratic dictatorship.</p>
                        </div>
					</div>
				</div>
                
				<div class="col-lg-6 col-md-6">
					<div class="fh5co-blog animate-box">
						<img class="img-responsive" src="../images/HTGAWM.jpg" alt="How to Get Away With Murder">
						<div class="blog-text">
							<span class="posted_on" id="htgawm">2nd</span>
                            <span class="comment"><a id="hmt"><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i></a></span>
                            <div class='content'>

                                <span title='Please wait...' id='user_2'><h3>How to Get Away With Murder&nbsp;</h3></span><a href="https://www.youtube.com/watch?v=VHKRO7rSbOs" class="popup-vimeo"><i class="icon-video"></i></a>
                            </div>
							<p>A group of ambitious law students and their brilliant criminal defense professor become involved in a twisted murder plot that promises to change the course of their lives.</p>
						</div> 
					</div>
				</div>

				<div class="col-lg-6 col-md-6">
					<div class="fh5co-blog animate-box">
						<img class="img-responsive" src="../images/GOT.jpg" alt="Game of Thrones">
                        <div class="blog-text">
                            <span class="posted_on" id="got">3rd</span>
                            <span class="comment"><a id="hmt"><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i></a></span>
                            <div class='content'>
                                <span title='Please wait...' id='user_3'><h3>Game of Thrones&nbsp;</h3></span><a href="https://www.youtube.com/watch?v=ylbqdj1WJX4" class="popup-vimeo"><i class="icon-video"></i></a>
                            </div>
							<p>Nine noble families fight for control over the mythical lands of Westeros, while an ancient enemy returns after thousands of years.</p>
					</div>
				</div>
            </div>
				<div class="col-lg-6 col-md-6">
					<div class="fh5co-blog animate-box">
						<img class="img-responsive" src="../images/sharpopjects.jpg" alt="Sharp Objects">
                        <div class="blog-text">
							<span class="posted_on" id="so">4th</span>
                            <span class="comment"><a id="so"><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star"></i></a></span>
                            <div class='content'>
                                <span title='Please wait...' id='user_4'><h3>Sharp Objects&nbsp;</h3></span><a href="https://www.youtube.com/watch?v=0wMUzmaM6X8" class="popup-vimeo"><i class="icon-video"></i></a>
                            </div>
							<p>A reporter confronts the psychological demons from her past when she returns to her hometown to cover a violent murder.</p>
					</div>
				</div>
            </div>
                
                <div class="col-lg-6 col-md-6">
					<div class="fh5co-blog animate-box">
						<img class="img-responsive" src="../images/narcos.jpg" alt="Narcos">
                        <div class="blog-text">
							<span class="posted_on" id="narcos">5th</span>
                            <span class="comment"><a id="so"><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star"></i></a></span>
                            <div class='content'>
                                <span title='Please wait...' id='user_5'><h3>Narcos&nbsp;</h3></span><a href="https://www.youtube.com/watch?v=U7elNhHwgBU" class="popup-vimeo"><i class="icon-video"></i></a>
                            </div>
							<p>A look at the criminal exploits of Colombian drug lord Pablo Escobar, as well as the many other drug kingpins who plagued through the years.</p>
					</div>
				</div>
            </div>
                <div class="col-lg-6 col-md-6">
					<div class="fh5co-blog animate-box">
						<img class="img-responsive" src="../images/walkingdead.jpg" alt="The Walking Dead">
                        <div class="blog-text">
                            <span class="posted_on" id="wd">6th</span>
                            <span class="comment"><a id="so"><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star"></i></a></span>
                            <div class='content'>
                                <span title='Please wait...' id='user_6'><h3>The Walking Dead&nbsp;</h3></span><a href="https://www.youtube.com/watch?v=cu2ApTImBKc" class="popup-vimeo"><i class="icon-video"></i></a>
                            </div>
							<p>Sheriff Deputy Rick Grimes wakes up from a coma to learn the world is in ruins, and must lead a group of survivors to stay alive coming across zombies and all the survivor feelings from human nature.</p>
					</div>
				</div>
            </div>
                
                <div class="col-lg-6 col-md-6">
					<div class="fh5co-blog animate-box">
						<img class="img-responsive" src="../images/friends.jpg" alt="Friends"><div class="blog-text">
                        <span class="posted_on" id="friends">7th</span>
                        <span class="comment"><a id="so"><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star"></i></a></span>
                        <div class='content'>
                            <span title='Please wait...' id='user_7'><h3>Friends&nbsp;</h3></span><a href="https://www.youtube.com/watch?v=ekYGfU0XIx0" class="popup-vimeo"><i class="icon-video"></i></a>
                        </div>
							<p>Follows the personal and professional lives of six twenty to thirty-something-year-old friends living in Manhattan.</p>
					</div>
				</div>
            </div>
                <div class="col-lg-6 col-md-6">
                    <div class="fh5co-blog animate-box">
                        <img class="img-responsive" src="../images/tbbt.jpg" alt="The Big Bang Theory">
                        <div class="blog-text">
							<span class="posted_on" id="tbbt">8th</span>
                            <span class="comment"><a id="so"><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star"></i></a></span>
                            <div class='content'>
                                <span title='Please wait...' id='user_8'><h3>The Big Bang Theory&nbsp;</h3></span><a href="https://www.youtube.com/watch?v=ekYGfU0XIx0" class="popup-vimeo"><i class="icon-video"></i></a>
                            </div>
							<p>A woman who moves into an apartment across the hall from two brilliant but socially awkward physicists shows them how little they know about life outside of the laboratory.</p>
					</div>
				</div>
            </div>
                
                <div class="col-lg-6 col-md-6">
					<div class="fh5co-blog animate-box">
						<img class="img-responsive" src="../images/hoc.jpg" alt="House of Cards">
                        <div class="blog-text">
							<span class="posted_on" id="hoc">9th</span>
                            <span class="comment"><a id="hoc"><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star"></i><i class="icon-star"></i></a></span>
                            <div class='content'>
                                <span title='Please wait...' id='user_9'><h3>House of Cards&nbsp;</h3></span><a href="https://www.youtube.com/watch?v=ULwUzF1q5w4" class="popup-vimeo"><i class="icon-video"></i></a>
                            </div>
							<p>A Congressman works with his equally conniving wife to exact revenge on the people who betrayed him.</p>
					</div>
				</div>
            </div>
            
                <div class="col-lg-6 col-md-6">
					<div class="fh5co-blog animate-box">
						<img class="img-responsive" src="../images/bll.jpg" alt="Big Little Lies">
                        <div class="blog-text">
							<span class="posted_on" id="bll">10th</span>
                            <span class="comment"><a id="bll"><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star2"></i><i class="icon-star"></i><i class="icon-star"></i></a></span>
                            <div class='content'>
                                <span title='Please wait...' id='user_10'><h3>Big Little Lies&nbsp;</h3></span><a href="https://www.youtube.com/watch?v=p9P34WqoBtQ" class="popup-vimeo"><i class="icon-video"></i></a>
                            </div>
							<p>The apparently perfect lives of three mothers of first graders unravel to the point of murder.</p>
                        </div>
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
							<li><a href="http://www.linkedin.com/in/barrosfabricio/en" target="_blank"><i class="icon-linkedin"></i></a></li>
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
    	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
	</footer>
</div>

        
	                <!-- SCRIPTS-->    

    <script src='../js/jquery-3.2.1.min.js' type='text/javascript'></script>
    <script src='../js/jquery-ui.js' type='text/javascript'></script>
    <script src='../js/script.js' type='text/javascript'></script>
    
	<!-- jQuery-->
	<!--<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing-->
	<!--<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<!--<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="../js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="../js/main.js"></script>

	</body>
</html>

