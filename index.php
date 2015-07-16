<?php include ('util.php'); ?>
<!DOCTYPE HTML>

<?php getHeading('Home'); ?>

<html>

	<body style="">
		<?php getSidebar(); ?>

		<div class = "content-container">

		<?php getBottom(); ?>
			<div class="media-notification">
				<h1>Hey, I'm so glad you're here...</h1>
				<p>You can still see all my information on a mobile device, but unfortunately, small screens and mobile browsers don't play nicely with some of the visuals.</p>
				<p>If you want to experience the full site, come back on a desktop with a screen width greater than 950px.</p>
			</div>

			<div class="planet" id = "center"></div>
			<div class="orbit" id="centerOrbit"></div>

			<div class="planet" id="first">
					<div class="tooltip" id="about">
					<div class="tooldesc" onclick="newPage('about')" style =""><strong>get to know me</strong></div>
					<i class="fa fa-arrow-circle-right fa-3x" style=""></i>
				</div>
			</div>
			<div class="orbit" id="firstOrbit"></div>

			<div class="planet" id="second">
				<div class="tooltip" id="projects">
					<div class="tooldesc" onclick="newPage('projects')" style =""><strong>see what I've done</strong></div>
					<i class="fa fa-arrow-circle-right fa-3x" style=""></i>
				</div>
			</div>
			<div class="orbit" id="secondOrbit"></div>

			<div class="planet" id="third">
				<div class="tooltip" id="blogs">
					<div class="tooldesc" onclick="newPage('blogs')" style =""><strong>read on</strong></div>
					<i class="fa fa-arrow-circle-right fa-3x" style=""></i>
				</div>
			</div>
			<div class="orbit" id="thirdOrbit"></div>

			<div class="planet" id="fourth">
				<div class="tooltip" id="contact">
					<div class="tooldesc" onclick="newPage('contact')" style =""><strong>connect with me</strong></div>
					<i class="fa fa-arrow-circle-right fa-3x" style=""></i>
				</div>
			</div>
			<div class="orbit" id="fourthOrbit"></div>

		</div>
	</body>

<script src="./js/star.js"></script>

</html>
