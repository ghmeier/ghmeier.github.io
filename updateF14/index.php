<?php include ('util.php'); ?>
<!DOCTYPE HTML>

<?php getHeading('Home'); ?>

<html>

	<body>
		<?php getSidebar(); ?>

		<div class = "content-container">

		<?php addStars(); ?>

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
		<script>
		var planets = new Array();
		planets["center"] = 0;
		planets["first"] = 2;
		planets["second"] = 3;
		planets["third"] = 1.5;
		planets["fourth"] = 3.5;
		var time = 0;

		$(document).ready( function()
		{
			$(".side-container").delay(1500).animate({"left":"-100px"},1000,"easeInOutBack");
			$("#video").animate({"opacity":"1.0"},3000);
			$(".tooltip").each(function()
			{
				$(this).hide();
				var change = $(this).parent().height()/2;
				$(this).animate({"margin-top":change+"px","width":"0px","height":"0px"},500);
			});

			$(".planet").hover( function()
			{
				$(this).children(".tooltip").stop();
				var change = -(60-$(this).height())/2;

				$(this).children(".tooltip").show();
				$(this).children(".tooltip").animate({"margin-top":""+change+"px","width":"250px","height":"50px"},500);
			}, function()
			{
				var change = $(this).height()/2;
				$(this).children(".tooltip").animate({"margin-top":"25px","width":"0px","height":"0px"},500,function(){ $(this).hide();});
			});
		});

		window.setInterval(function() {

			$(".content-container").children(".planet").each( function()
			{
				var curId = $(this).attr("id");
				var curRadians = (time/planets[curId]) /180.0  * 3.14159;
				var curOrbit = $(document.getElementById(curId + "Orbit"));
				var xRad = curOrbit.width()/2;
				var yRad = curOrbit.height()/2;
				var prevOrbitX = curOrbit.position().left + xRad;
				var prevOrbitY = curOrbit.position().top + yRad;
				var xNewPos = Math.cos(curRadians) * xRad;
				var yNewPos = Math.sin(curRadians) * yRad;
				var x = prevOrbitX - xNewPos;
				var y = prevOrbitY- yNewPos;
				$(this).animate({"left":""+x+"px","top":""+y+"px"},100);
			});
			time++;
		}, 100);

		function newPage(name){
		$("#"+name).parent().animate({"border-radius":"0px", "height":"0px","width":"0px","z-index":"100","opacity":"0"},750,function(){window.location.href = "./"+name +".php";});
			$(".planet").animate({"opacity":"0"},750);
		}
	</script>
	</body>



</html>
