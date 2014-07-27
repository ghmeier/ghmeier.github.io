<?php function getHeading($name){?>
<html>
	<head>
		<title><?php echo $name ?> | Garret Meier</title>
		<link href="./css/stylesheet.css" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
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