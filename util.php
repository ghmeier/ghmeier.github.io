<?php function getHeading($name){?>
<html>
	<head>
		<title><?php echo $name ?> | Garret Meier</title>
		<link href="./css/stylesheet.css" rel="stylesheet" type="text/css">
		<link href="./img/favicon.gif" rel="icon" type="img/gif">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
		<script src="./js/planets.js"></script>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta property="og:site_name" content="Garret Meier">
		<meta property="og:url" content="www.garretmeier.com">
		<meta property="og:title" content="Garret Meier">
		<meta name="description" content="A Sophomore in software engineering at Iowa State University, this is the one stop show for quick information about me.">
		<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1.0; user-scalable=no">
	</head>
</html>
<?php } ?>

<?php function getSidebar(){ ?>
	<div class="side-container">
		<a href="./index.php">
		<div class="profile">
			<h1 style="font-size:55px;top:270px;">Garret </h1>
			<h1 style="font-size:40px;top:330px;">Meier </h1>
			<img src="./img/primaryPhoto.jpg" />
		</div>
		</a>
		<div class="info">
			<a href="./about.php" style="color:black"><div class="navbutton" id="home">.about </div></a>
			<a href="./projects.php" style="color:black"><div class="navbutton" id="home">.projects</div></a>
			<a href="./blogs.php" style="color:black"><div class="navbutton" id="home">.blogs</div></a>
			<a href="./contact.php" style="color:black"><div class="navbutton" id="home">.contact</div></a>
		</div>
	</div>
<?php } ?>

<?php function addStars() { ?>
	<div class="filter">
		<video id="video" height="100%" width="auto" autoplay loop>

			<source src="img/starField.mp4" type="video/mp4" >
			<source src="img/starField.webm" type="video/webm">
			<source src="img/starField.ogv" type="video/ogg">

			<object data="img/starField.mp4" >
				<embed src="img/starField.swf" height="100%" width="100%">
			</object>
		</video>
	</div>
<?php } ?>

<?php function getBottom() { ?>
	<div class="watermark" style="position:absolute;display:block;width:100%;text-align:center;color:white;opacity:.4;bottom:10px;font-size:10px">
		Email: meier.garret@gmail.com <br>Phone: 406-839-0906
	</div>
<?php } ?>
