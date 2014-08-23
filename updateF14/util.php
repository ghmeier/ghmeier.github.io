<?php function getHeading($name){?>
<html>
	<head>
		<title><?php echo $name ?> | Garret Meier</title>
		<link href="./css/stylesheet.css" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	</head>
</html>
<?php } ?>

<?php function getSidebar(){ ?>
	<div class="side-container">
		<div class="profile">
			<h1 style="font-size:55px;top:270px;">Garret </h1>
			<h1 style="font-size:40px;top:330px;">Meier </h1>
			<img src="./img/primaryPhoto.jpg" />
		</div>
		<div class="info">
			<div class="navbutton" id="home">.about </div>
			<div class="navbutton" id="home">.projects</div>
			<div class="navbutton" id="home">.blogs</div>
			<div class="navbutton" id="home">.contact</div>
		</div>
	</div>
<?php } ?>

<?php function addStars() { ?>
	<div class="filter">
		<video id="video" height="100%" autoplay loop>
			
			<source src="img/starField.mp4" type="video/mp4" >
			<source src="img/starField.webm" type="video/webm">	
			<source src="img/starField.ogv" type="video/ogg">  
			
			<object data="img/starField.mp4" >
				<embed src="img/starField.swf" height="100%" width="100%">
			</object> 					
		</video>
	</div>
<?php } ?>