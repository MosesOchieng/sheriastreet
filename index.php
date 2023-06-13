<?php

 if(!isset($_COOKIE["comply_cookie"])) { ?>
	<div id="cookies">
	<p>Our website uses cookies. By continuing we assume your permission to deploy cookies, as detailed in our <a href="yourPolicy">privacy policy</a>.
	<span class="cookie-accept" title="Okay, close"><img src="img/close.png" alt="Close"/></span></p>
	</div>
  <?php } 
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sheria Street.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

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
<style>
    /* CSS styles for the popup */
 
.news {
  background-color: #000000af;
  width: 100%;
  height: 80vh;
  position: absolute;
  z-index: 5;
  display: flex;
  justify-content: center;
  padding: 10%;
  top: 0;
}
.news .newsfooter {
  text-align: center;
}
.news .closeBtn {
  margin-top: 10px;
  background-color: #ee574c;
  color: #fff;
  padding: 6px 10px;
  border: none;
}
.news .closeBtn::after {
  content: "Got It";
  padding: 10px;
}
.news .newsBox {
  box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
  background-color: #fff;
  background-image: url("https://enally.in/images/new/news-bg.png");
  background-size: contain;
  width: 50%;
  height: 450px;
  padding: 3% 2%;
}
.news .newsBox .content {
  -webkit-box-shadow: inset 0px 1px 12px -1px rgba(0, 0, 0, 0.033);
  -moz-box-shadow: inset 0px 1px 12px -1px rgba(0, 0, 0, 0.033);
  box-shadow: inset 0px 1px 12px -1px rgba(0, 0, 0, 0.033);
  height: 280px;
  padding: 20px;
  overflow-y: scroll;
  scrollbar-width: thin;
  scrollbar-color: #ee574c #f7f7f7;
}
.news .newsBox .content::-webkit-scrollbar {
  width: 5px;
}
.news .newsBox h5 {
  font-weight: 900;
}
.news .newsBox .heading {
  text-align: center;
  font-size: 32px;
  font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
  color: #ee574c;
}
.news .news-animation {
  animation-name: slideNewsOut;
  animation-duration: 0.8s;
}
@keyframes slideNewsOut {
  from {
    transform: translateX(-800px);
    transition-duration: 0.6s;
    width: 20%;
  }
  to {
    transform: translateX(0px);
  }
}
.news .news-close-animation {
  animation-name: slideNewsIn;
  animation-duration: 0.9s;
}
@keyframes slideNewsIn {
  from {
    transform: translateX(0px);
    transition-duration: 0.9s;
    width: 20%;
  }
  to {
    transform: translateX(-1200px);
  }
}
#cookies { 
  width: 100%;
  margin: 0;
  padding: 0.5em 10%;
  background: rgba(86,86,86,0.95);
  border-bottom: solid 1px rgb(225,225,225);
}
 
#cookies p {
  font-family: sans-serif;
  font-size: 14px;
  font-weight: 700;
  letter-spacing: 1px;
  text-shadow: 0 -1px 0 rgba(0,0,0,0.35);
  text-align: center; 
  color: rgb(255,255,250);
  margin: 4px;
  z-index: 999;
}

#cookies .cookie-accept {
  padding-left: 10px;
  cursor: pointer;
  display: inline;
  color: rgb(255,255,250);
  text-shadow: 0 -1px 0 rgba(0,0,0,0.35);
}
</style>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
	<div class="colorlib-loader"></div>
	
	<div id="page">
	<nav class="colorlib-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div id="colorlib-logo"><a href="index.html">Sheria<span>Street.</span></a></div>
					</div>
					<div class="col-md-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.html">Dashboard</a></li>
							<li><a href="practice.php">USSD</a></li>
							<li><a href="won.php">Social Justice Centers.</a></li>
							<li class="has-dropdown">
								<a href="blog.php">Whatsapp ChatBot Ripoti</a>
						
							</li>
							<li><a href="about.php">About</a></li>
							
						
							<li><a href="javascript: void(0);" id="music" class="music-mode-btn text-white  rounded-end">Report Case</a></li>
						</ul>
						
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	
</section>
	<aside id="colorlib-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/d.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Hiil Innovation</h1>
							 		<h2>2nd Runners Up Hiil Innovation Justice Challange 2022.</h2>
									<p><a class="btn btn-primary btn-lg" href="#">Piga Ripoti</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/m.jpeg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					
									<h2>Gender Based violnce affects us all.Lets join hands in fighting GBV across the country.</h2>
									<p><a class="btn btn-primary btn-lg btn-learn" href="#">All about GBV</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
			   <li style="background-image: url(images/t.jpg);">
				<div class="overlay-gradient"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
							<div class="slider-text-inner">
								
								 <h2>Piga ripoti for help to you, to a friend and get help easily.</h2>
								 <p><a class="btn btn-primary btn-lg btn-learn" href="#">Piga Ripoti</a></p>
							</div>
						</div>
					</div>
				</div>
			</li>
			   <li style="background-image: url(images/k.jpg);">
				<div class="overlay-gradient"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
							<div class="slider-text-inner">
								
								 <h2>Share your story among millions of Kenyan communities today.</h2>
								 <p><a class="btn btn-primary btn-lg btn-learn" href="#">Join the community.</a></p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li style="background-image: url(images/p.jpg);">
				<div class="overlay-gradient"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
							<div class="slider-text-inner">
								
								 <h2>Piga ripoti leo and get help against GBV anywhere.</h2>
								 <p><a class="btn btn-primary btn-lg btn-learn" href="#">Report a Case</a></p>
							</div>
						</div>
					</div>
				</div>
			</li>
		   	<li style="background-image: url(images/f.jpeg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					
									<h2>Know more about <a href="#" target="_blank">Social Justice Centers</h2>
									<p><a class="btn btn-primary btn-lg btn-learn" href="#">Social Justice Centers.</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>		   	
		  	</ul>
	  	</div>
	</aside>
	
	<div id="intro-bg">
		<div class="container">
			<div id="colorlib-intro">
				<div class="third-col">
					<span class="icon"><i class="icon-cog"></i></span>
					<h2>ARE YOU A VICTIM ?</h2>
					<p>Reach out ,track your progress and be that element of changein the society by fighting for your rights and stopping Gender Based Violence.</p>
				</div>
				<div class="third-col third-col-color">
					<span class="icon"><i class="icon-old-phone"></i></span>
					<h2>Call now (+254) 7-450-092-523</h2>
					<h2>Email us @ <a href="#">sheriastreet@proton.me</a></h2>
					<p>Reach out for any queries to us and get help instantly.</p>
				</div>
			</div>
		</div>
	</div>

	<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/t.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center animate-box">
					<span class="icon"><i class="flaticon-lawyer-1"></i></span>
					<span class="colorlib-counter js-counter" data-from="0" data-to="1539" data-speed="5000" data-refresh-interval="50"></span>
					<span class="colorlib-counter-label">	Gender Based Violence Victims</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="icon"><i class="flaticon-courthouse"></i></span>
					<span class="colorlib-counter js-counter" data-from="0" data-to="307" data-speed="5000" data-refresh-interval="50"></span>
					<span class="colorlib-counter-label">Social Justice Centers</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="icon"><i class="flaticon-libra"></i></span>
					<span class="colorlib-counter js-counter" data-from="0" data-to="5678" data-speed="5000" data-refresh-interval="50"></span>
					<span class="colorlib-counter-label">Reported Cases</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="icon"><i class="flaticon-police-badge"></i></span>
					<span class="colorlib-counter js-counter" data-from="0" data-to="3999" data-speed="5000" data-refresh-interval="50"></span>
					<span class="colorlib-counter-label">Solved&amp; Cases</span>
				</div>
			</div>
		</div>
	</div>

	<div id="colorlib-content">
		<div class="video colorlib-video" style="background-image: url(images/l.jpeg);">
			<a href="images/n.mp4" class="popup-vimeo"><i class="icon-video2"></i></a>
			<div class="overlay"></div>
		</div>
		<div class="choose animate-box">
			<div class="colorlib-heading">
				<h2>T47 Power Breakfast Show with Partners.</h2>
				<p>Great Discussions on how to end Gender Based Violence in the communities.Click Play Button to listen to more.</p>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
			Gender Discritmination. 50%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
				Female Genital Mutilation 80%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
				Domestic Violence 70%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
				Sexual Harassment  40%
				</div>
			</div>
		</div>
	</div>
<br>
<br>

	<div id="colorlib-started" style="background-image:url(images/p.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center colorlib-heading colorlib-heading2">
					<h2>Be Part of Us.</h2>
					<p>Stand for the fight against GBV by promoting our activities economically through financial or partnerships.</p>
					<p><a href="#" class="btn btn-primary btn-lg">Donations</a></p>
				</div>
			</div>
		</div>
	</div>
	

	<section>
<div class="news" id="news_box" style="display: none;">
        <div class="newsBox" id="newss">
            <p class="heading" id="heading">Piga Ripoti</p>
            <div class="content">
            <h5>Welcome</h5>
            <p>
Habari yako, are you a victim of Gender based violence ,click next to seek help across social justice centers near you.
                <br>
                <center>
              Click next.
			  <br>
			  <br>
			  <div style="display: inline-block;">
			  <a href="javascript: void(0);" id="mu" class="music-mode-btn text-white  rounded-end">
				<button style="display: inline-block;">Next</button>
			  </a>
			  <div class="newsfooter">
                <button style="display: inline-block;" class="closeBtn btn-dark" id="closeNews"></button>
            </div>
			  </div>
                </center>
            </p>
            </div>

        </div>
    </div>

<div class="next" id="news_next" style="display: none;">
<div class="newsB" id="news">
            <p class="heading" id="heading">Piga Ripoti</p>
            <div class="content">
			<form id="nextPageForm">
          <label for="phoneNumber">Phone Number:</label>
          <input type="text" id="phoneNumber" name="phoneNumber" required>
          <br>
          <label for="caseDetails">Case Details:</label>
          <textarea id="caseDetails" name="caseDetails" required></textarea>
          <br>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
          <br>
          <label for="location">Location:</label>
          <input type="text" id="location" name="location" required>
        </form>
        <center>
          <button onclick="submitForm()" style="display: inline-block;">Submit</button>
        </center>
</div>
<script>
	// News Slider Animation    

addEventListener("load", function() {
    document.getElementById("news_box").style.display = "none";
});

const news = document.getElementById("music");
const closebtn = document.getElementById("closeNews");
news.addEventListener("click", (e) => {
    window.scrollTo(0, 0);
    document.getElementById("news_box").style.display = "flex";
    document.getElementById("newss").classList.add("newsBox", "news-animation");
});

closebtn.addEventListener("click", (e) => {
    // document.getElementById("newss").classList.add("news-close-animation", "newsBox");
    // setTimeout(function() {
    //     document.getElementById("news_box").style.display = "none";
    // }, 100)
    document.getElementById("news_box").style.display = "none";

});
</script>
	
<script>
		// News Slider Animation    

addEventListener("load", function() {
    document.getElementById("news_box").style.display = "none"; 
});

const newl = document.getElementById("mu");
const close = document.getElementById("closeNews");
news.addEventListener("click", (e) => {
    window.scrollTo(0, 0);
    document.getElementById("news_box").style.display = "flex";
    document.getElementById("newss").classList.add("newsBox", "news-animation");
});

closebtn.addEventListener("click", (e) => {
    // document.getElementById("newss").classList.add("news-close-animation", "newsBox");
    // setTimeout(function() {
    //     document.getElementById("news_box").style.display = "none";
    // }, 100)
    document.getElementById("news_box").style.display = "none";

});

</script>
	
			</div>
		</div>
	</div>

	<footer id="colorlib-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 colorlib-widget">
					<h4>Sheria Street.</h4>
					<p>Tech. Organization that provides solutions to Gender Based Violence victims by connecting them to social justice centers..</p>
				</div>
				<div class="col-md-3 col-md-push-1">
					<h4>Navigation</h4>
					<ul class="colorlib-footer-links">
						<li><a href="#">Home</a></li>
						<li><a href="#">Partners</a></li>
						<li><a href="#">Honours and Awards.</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">About us</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Contact Information</h4>
					<ul class="colorlib-footer-links">
						<li>00100  Nairobi, <br> Moi Avenue</li>
						<li><a href="tel://1234567920">+ 254 7450 925 23</a></li>
						<li><a href="mailto:info@yoursite.com">sheriastreet@proton.me</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Opening Hours</h4>
					<ul class="colorlib-footer-links">
						<li>Mon - Thu: 9:00 - 21 00</li>
						<li>Fri 8:00 - 21 00</li>
						<li>Sat 9:30 - 15: 00</li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
				
					</p>
					<p>
						<ul class="colorlib-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
<script>
	
$('.cookie-accept').click(function () { //on click event

  days = 182; //number of days to keep the cookie
  myDate = new Date();
  myDate.setTime(myDate.getTime()+(days*24*60*60*1000));
  document.cookie = "comply_cookie = comply_yes; expires = " + myDate.toGMTString(); //creates the cookie: name|value|expiry
  $("#cookies").slideUp("slow"); //jquery to slide it up
});


//---

document.getElementById("cookie-accept").onclick = function(e) {
  days = 182; //number of days to keep the cookie
  myDate = new Date();
  myDate.setTime(myDate.getTime()+(days*24*60*60*1000));
  document.cookie = "comply_cookie = comply_yes; expires = " + myDate.toGMTString(); //creates the cookie: name|value|expiry
  document.getElementById("cookies").parentNode.removeChild(elem);
}
</script>
	</body>
</html>

