<?php include ('util.php'); ?> 
<!DOCTYPE HTML>

<?php getHeading('Home'); ?>

<html>

	<body>
		<?php getSidebar(); ?>
		
		<div class = "content-container">
		
		<?php addStars(); ?>
		
			<div class="planet" id = "center"></div>
			<div class="orbit" id="centerOrbit"></div>
			
			<div class="planet" id="first">
				<div class="tooltip">
					<div class="tooldesc" style =""><strong>get to know me</strong></div>
					<i class="fa fa-arrow-circle-right fa-3x" style=""></i>
				</div>
			</div>
			<div class="orbit" id="firstOrbit"></div>
			
			<div class="planet" id="second">
				<div class="tooltip">
					<div class="tooldesc" style =""><strong>see what I've done</strong></div>
					<i class="fa fa-arrow-circle-right fa-3x" style=""></i>
				</div>
			</div>
			<div class="orbit" id="secondOrbit"></div>
			
			<div class="planet" id="third">
				<div class="tooltip">
					<div class="tooldesc" style =""><strong>read on</strong></div>
					<i class="fa fa-arrow-circle-right fa-3x" style=""></i>
				</div>
			</div>
			<div class="orbit" id="thirdOrbit"></div>
			
			<div class="planet" id="fourth">
				<div class="tooltip">
					<div class="tooldesc" style =""><strong>connect with me</strong></div>
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
	</script>
	</body>

	

</html>