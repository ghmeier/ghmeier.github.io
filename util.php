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
    <canvas id="all" style="position:absolute;display:block;background-color:black;z-index:-10"></canvas>
	<div class="side-container">
		<a href="./index.php">
		<div class="profile">
			<img src="./img/gm_square.jpg" />
			<h1 style="font-size:55px;">Garret </h1>
			<h1 style="font-size:40px;margin-bottom:20px">Meier </h1>

		</div>
		</a>
		<div class="info">
			<a href="./about" style="color:black"><div class="navbutton hover-action" id="home">.about </div></a>
			<a href="./projects" style="color:black"><div class="navbutton hover-action" id="home">.projects</div></a>
			<a href="./blogs.php" style="color:black"><div class="navbutton hover-action" id="home">.blog</div></a>
			<!--<a href="./contact.php" style="color:black"><div class="navbutton hover-action" id="home">.contact</div></a>-->
			<div class="navbutton" style="">
				<a href="http://twitter.com/headin_thecloud" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="http://linkedin.com/pub/garret-meier/53/5a3/49/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
				<a href="http://github.com/ghmeier/" target="_blank"><i class="fa fa-github-square"></i></a>
			</div>
		</div>
		<?php getBottom() ?>
	</div>
<?php } ?>

<?php function getBottom() { ?>
	<div class="navbutton" style="position:absolute;bottom:17px;width:320px;font-size:15px;line-height:17px">
		Email: meier.garret@gmail.com <br>Phone: 406-839-0906
	</div>
<?php } ?>
