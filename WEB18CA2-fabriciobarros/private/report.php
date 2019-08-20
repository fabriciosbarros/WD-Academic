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
	<title>TV Series &mdash; Report</title>
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
                            <li><a href="news.php">News</a></li>
                            <li class="active"><a href="report.php">Report</a></li>
                            <li class="userwelcome"><?php echo "Welcome <b>$login_cookie</b>!"; ?></li>
							<li class="btn-cta"><a href="doLogout.php"><span>Logout</span></a></li>
						</ul>
					</div>
				</div>

			</div>

		</div>
        
	</nav>

        <!--INTRODUCTION-->
        	<div id="fh5co-about">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>TV Series Webpage</h2>
					<p>I chose the subject "TV Series" as my hobbie to build this webpage because is one of the things that I most like doing. When I am watching an episode I feel like I am aout of this world. A similar feeling when I am reading a book. <br><br>
                    
                    Although it wasn't easy to build this website, I had a lot of fun trying to put all the requirements in a way that the website looked "real" and fully online.</p>
				</div>
			</div>
        			<div class="row">
				<div class="member">
					<div class="col-md-6 nopadding animate-box">
						<div class="author" style="background-image: url(../images/me.jpg);"></div>
					</div>
					<div class="col-md-6 nopadding animate-box">
						<div class="desc">
							<h3>Fabricio Barros</h3>

							<p>Student number: 2018256<br>
                            e-mail: fabri.barros@gmail.com</p>
							<p>
								<ul class="fh5co-social-icons">
									<li><a href="http://www.facebook.com/fabri.barros" target="_blank"><i class="icon-facebook-with-circle"></i></a></li>
									<li><a href="http://www.linkedin.com/in/barrosfabricio/en" target="_blank"><i class="icon-linkedin-with-circle"></i></a></li>
									<li><a href="http://www.instagram.com/fabriciobarross" target="_blank"><i class="icon-instagram-with-circle"></i></a></li>
								</ul>
							</p>
						</div>
                    
					</div>
                        
				</div>
            
                </div>
                
        </div>
        
        </div>

        <!--FEATURES IMPLEMENTED-->
        
<div id="fh5co-about">
    <div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Features implemented</h2>
					<p>All required features are implemented in the website as follows. To see the details of each one of them just click on the icon. If you just scroll down you will also see the following sections: <b>References</b>, <b>Future Features Predicted</b> and <b>Reflection</b>.</p>
				</div>
			</div>
    </div>
            <div id="topfeatures" class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                </div>
    <div class="col-md-4 text-center animate-box">
                    
					<div class="services">
						<span class="icon">
                            <a href="#home"><i class="icon-login"></i></a>
						</span>
						<div class="desc">
							<h3><a href="#home">Home, Login &amp; General Requirements</a></h3>
							<p>There is a public page that contains a brief explanation about my hobbie, a Youtube video, external links and the login button. After the login, session and cookies are used. The website is completely responsive and can be accessed even from mobile phones with a very good experience.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span class="icon">
                            <a href="#database"><i class="icon-database"></i></a>
						</span>
						<div class="desc">
							<h3><a href="#database">Database</a></h3>
							<p>As a private page, it appears only for registered members that log in. It contains a "see more" function when passing the mouse over the TV Series Titles using a method/library that. All the information displayed comes from a database.</p>
						</div>
					</div>
				</div>
    <div class="row">
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span class="icon">
                            <a href="#article"><i class="icon-news"></i></a>
						</span>
						<div class="desc">
							<h3><a href="#article">Article</a></h3>
							<p>In this page you'll find a 3 columns grids with images that links to sections down in the article, which is formatted using CSS. There's also a button that leads to a subscription form for a newsletter and a function from an external file that calculates the aproximated age of a person according to the year of birth.</p>
						</div>
					</div>
				</div>
    </div>
	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<br><h2>References</h2>
					<p>Basically I have used two websites to get help in most of the time:<br><b>W3Schools</b> &amp; <b>Stack Overflow</b>.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="fh5co-blog animate-box">
						<img class="img-responsive" src="../images/w3schools.jpg" alt="W3Schools Website">
						<div class="blog-text">
							<p>In this website I could get codes to create my modal form to login and the Newsletter and also the javascript to apply the smooth scroll.</p>
							<a href="http://www.w3schools.com/" target="_blank" class="btn btn-primary">Go to Website</a>
						</div> 
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="fh5co-blog animate-box">
						<img class="img-responsive" src="../images/stack.jpg" alt="Stack Overflow Website">
						<div class="blog-text">
							<p>In this page I got most of the help I needed to troubleshooting and some tips about how to connect the website to a database.</p>
							<a href="http://stackoverflow.com" target="_blank" class="btn btn-primary">Go to Website</a>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-mission">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center animate-box">
					<h2>Future Features Predicted</h2>
					<blockquote>
						<p align="left"><i class="icon-paper-clip"></i>&nbsp;A sign up screen for new users.</p>
                        <p align="left"><i class="icon-paper-clip"></i>&nbsp;A forum area where the users could interacte between each other and also suggest Series to talk about in the website.</p>
                        <p align="left"><i class="icon-paper-clip"></i>&nbsp;A new data in the database where the users could rate the series and the site could have a ranking of the best rated series.</p>
                        <p align="left"><i class="icon-paper-clip"></i>&nbsp;A competition area to add a gamification to the website where the users could do a task and then automatically be registred to take part in a draw.</p>
                        <p align="left"><i class="icon-paper-clip"></i>&nbsp;A script to organize dynamically the Top Series according to the position and rating.</p>
                    </blockquote>
				</div>
			</div>
		</div>
	</div>

    <div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<br><br><h2>Reflection</h2>
					<p>When I took the first look at this CA I thought to myself I would have to give my best to do it the best way I could. As an IT student, I need to have any peace of work to be presented in a portifolio and this assignment was my chance. So I put all my effort on it to build it with all the funcionalities required and have the result I was expecting.</p>
                    <p> It wasn't easy. I think 12 weeks is not enough for anyone to be able to create a well done functioning website from zero. But I needed to hav it done. So I started straight away, got my template from Bootstrap, started drawing the first sketch and after loads of researches on the internet, troubleshootings and studying and understanding database connections, javascript, css and html, I could finally finish the project.</p>
                    <p>If I had to build it again I would have learned more about database connection and javascript before starting building it. I could have done things work in a different and more simple way. This was the most difficult thing. Because it doesn't matter where do you get the template or the final code from. If you don't understand what you are doing, you won't be able to customize anything. So it's the same to have nothing.</p>
                    <p>I would love to have implemented the user rating and an dynamic order for the Top Series page. It would have been amazing.</p>
                    <p>But overall, I am very happy with the result. I think the website looks great, the look and feel and UX are very good and I am really proud of it.</p>
				</div>
			</div>
    </div>
 <div id="home" class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2></h2><br>
                </div>
<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <div class="services">
<span class="icon">
							<i class="icon-login"></i>
						</span>
                    </div>
						<div class="desc">
							<h3 align="center">Home, Login &amp; General Requirements</h3>

				</div>

				</div>
			</div>
    </div>

		<div class="container">    
			<div class="row">
				<div class="member">
					<div class="col-md-6 nopadding animate-box">
						<div class="author" style="background-image: url(../images/login.jpg);"></div>
					</div>
					<div class="col-md-6 nopadding animate-box">
						<div class="desc">
							<h3>Fig.1</h3>
							<span>Login pop up</span>
							<p>When clicking on "Login" button the user is presented a login pop up in which they have to insert their credentials. This information is then checked in the table "users" from "tvseries" database. If the credentials are incorrect, an error message is displayed and the user must enter the information again. All this transactions are made using PHP and MySQL.</p>

						</div>
					</div>
				</div>
				<div class="member">
					<div class="col-md-6 nopadding col-md-push-6 animate-box">
						<div class="author" style="background-image: url(../images/video-popup.jpg);"></div>
					</div>
					<div class="col-md-6 nopadding col-md-pull-6 animate-box">
						<div class="desc">
							<h3>Fig.2</h3>
							<span>Video pop up</span>
							<p>The user can access a Youtube video not only on the public homepage but also on the logged home. The video is displayed in a pop up on the screen.</p>

						</div>
					</div>
				</div>
				<div class="member">
					<div class="col-md-6 nopadding animate-box">
						<div class="author" style="background-image: url(../images/responsive.jpg);"></div>
					</div>
					<div class="col-md-6 nopadding animate-box">
						<div class="desc">
							<h3>Fig.3</h3>
							<span>Responsive design</span>
							<p>Thanks to a Bootstrap framework, the website is completely responsive. In the example given, an emulation of an iPhone X screen.</p>
						</div>
					</div>
				</div>
                <div class="member">
					<div class="col-md-6 nopadding col-md-push-6 animate-box">
						<div class="author" style="background-image: url(../images/test-browsers.jpg);"></div>
					</div>
					<div class="col-md-6 nopadding col-md-pull-6 animate-box">
						<div class="desc">
							<h3>Fig.4</h3>
							<span>Test in browsers</span>
							<p>The website was tested in Safari, Chrome and Fireforx and worked perfectly. In the figure you can see the website working in each browser, responsive and showing different areas for each browser.</p>

						</div>
					</div>
				</div>
                <div class="member">
					<div class="col-md-6 nopadding animate-box">
						<div class="author" style="background-image: url(../images/session.jpg);"></div>
					</div>
					<div class="col-md-6 nopadding animate-box">
						<div class="desc">
							<h3>Fig.5</h3>
							<span>Sessions and Cookies</span>
							<p>The website shows the first name of the user in the header and also in some areas during the navigation. It also doesn't allow access to private pages when someone tries to browse using the URL. In this case, if there's no session active, the website redirect the user to the index page.</p>
						</div>
					</div>
				</div>
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <br><br><p><a href="#topfeatures">Go back to features&nbsp;<i class="icon-arrow-up2"></i></a></p>
                </div>
			</div>
		</div>
            
    <div id="database" class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2></h2><br>
                </div>
<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <div class="services">
<span class="icon">
							<i class="icon-database"></i>
						</span>
                    </div>
						<div class="desc">
							<h3 align="center">Database</h3>

				</div>

				</div>
			</div>
    </div>
    <div class="container">    
			<div class="row">
				<div class="member">
					<div class="col-md-6 nopadding animate-box">
						<div class="author" style="background-image: url(../images/jquery.jpg);"></div>
					</div>
					<div class="col-md-6 nopadding animate-box">
						<div class="desc">
							<h3>Fig.6</h3>
							<span>Query to access database</span>
							<p>On the private page "Top Series" there's a list of 10 TV series displaying a picture, title, rating, sinopsis and a video. When the user passes the mouse over the title, it displays the Genre, Creator(s), number of seasons and Executive Producer's. All this information comes from the table "series" in the database "tvseries" created for this project. To allow this connection, I used PHP, MySQL and Ajax.</p>

						</div>
					</div>
				</div>
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <br><br><p><a href="#topfeatures">Go back to features&nbsp;<i class="icon-arrow-up2"></i></a></p>
                </div>
			</div>
		</div>
       <div id="article" class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2></h2><br>
                </div>
<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <div class="services">
<span class="icon">
							<i class="icon-news"></i>
						</span>
                    </div>
						<div class="desc">
							<h3 align="center">Article</h3>

				</div>

				</div>
			</div>
    </div>
    <div class="container">    
			<div class="row">
                <div class="member">
					<div class="col-md-6 nopadding col-md-push-6 animate-box">
						<div class="author" style="background-image: url(../images/grid-pictures.jpg);"></div>
					</div>
					<div class="col-md-6 nopadding col-md-pull-6 animate-box">
						<div class="desc">
							<h3>Fig.7</h3>
							<span>Grid for pictures</span>
							<p>In the "News" page the user will have access to 3 articles about 3 
                            TV Series that are going to be released in 2019. Each picture is a link to the articles in the same page. The scroll is "smooth" due to a script used in the page.</p>
						</div>
					</div>
				</div>
                <div class="member">
					<div class="col-md-6 nopadding animate-box">
						<div class="author" style="background-image: url(../images/articles.jpg);"></div>
					</div>
					<div class="col-md-6 nopadding animate-box">
						<div class="desc">
							<h3>Fig.8</h3>
							<span>CSS Styling</span>
							<p>The whole page is styled using CSS. Paragraphs, Headlines (h1, h2, h3 etc.), links, grids and icons. Not to mention the header and the footer. I wanted to make sure that the "look and feel" was the best I could deliver so I customized a lot of styles to match the colors of buttons, backgrounds and forms.</p>

						</div>
					</div>
				</div>
                <div class="member">
					<div class="col-md-6 nopadding col-md-push-6 animate-box">
						<div class="author" style="background-image: url(../images/newsletter.jpg);"></div>
					</div>
					<div class="col-md-6 nopadding col-md-pull-6 animate-box">
						<div class="desc">
							<h3>Fig.9</h3>
							<span>Newsletter Form</span>
							<p>At the bottom of the page "News", the user can fill a javascript form to receive e-mails from the site. All the information is stored in the "newsletter" table in the database "tvseries". This transaction happens using PHP and MySQL. After filling the form, the website display a message in a pop up informing if they will receive any adult content or not according to the result from the calculation made by a PHP code using the year of birth informed.</p>
						</div>
					</div>
				</div>
                 <div class="member">
					<div class="col-md-6 nopadding animate-box">
						<div class="author" style="background-image: url(../images/calculation.jpg);"></div>
					</div>
					<div class="col-md-6 nopadding animate-box">
						<div class="desc">
							<h3>Fig.10</h3>
							<span>Calculation</span>
							<p>This session of the page allows the user to check their age before the subscription to know if they will or will not receive any adult content.The calculation is possible due to the external javascript file "script.js".</p>
						</div>
					</div>
				</div>
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <br><br><p><a href="#topfeatures">Go back to features&nbsp;<i class="icon-arrow-up2"></i></a></p>
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
					<!--<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>-->
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
    <!--SCRIPTS-->
        <script src='../js/jquery-3.2.1.min.js' type='text/javascript'></script>
    <script src='../js/jquery-ui.js' type='text/javascript'></script>
    <script src='../js/script.js' type='text/javascript'></script>
    
	<!-- jQuery Easing -->
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

	</body>
</html>

