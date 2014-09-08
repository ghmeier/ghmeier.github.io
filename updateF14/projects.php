<?php include('util.php'); ?>
<!DOCTYPE HTML>

<?php getHeading('Projects'); ?>

<html>

    <body>
        <?php getSidebar(); ?>

        <div class = "content-container">
			
			<div class="planet" id="center"></div>
			<div class="orbit" id="centerOrbit"></div>
			<div class="planet" id="squareInfinityPlanet"></div>
			<div class="planet" id="UCCSRadioPlanet"></div>
			<div class="planet" id="fableOfZelmaPlanet"></div>
			<div class="planet" id="travelQuestPlanet"></div>
			<div class="planet" id="takeTheTowerPlanet"></div>
			<div class="planet" id="wishingWellPlanet"></div>
			<div class="planet" id="ninePlanet"></div>
			<div class="planet" id="lostHopePlanet"></div>
			<div class="planet" id="verticallySocialPlanet"></div>
			<div class="planet" id="happyLittleCloudPlanet"></div>
			<div class="planet" id="mtHobyPlanet"></div>
			<div class="planet" id="othelloPlanet"></div>
			<div class="planet" id="challengesPlanet"></div>
			
			<div class="orbit" id="centerOrbit"></div>
			<div class="orbit" id="squareInfinityPlanetOrbit"></div>
			<div class="orbit" id="UCCSRadioPlanetOrbit"></div>
			<div class="orbit" id="fableOfZelmaPlanetOrbit"></div>
			<div class="orbit" id="travelQuestPlanetOrbit"></div>
			<div class="orbit" id="takeTheTowerPlanetOrbit"></div>
			<div class="orbit" id="wishingWellPlanetOrbit"></div>
			<div class="orbit" id="ninePlanetOrbit"></div>
			<div class="orbit" id="lostHopePlanetOrbit"></div>
			<div class="orbit" id="verticallySocialPlanetOrbit"></div>
			<div class="orbit" id="happyLittleCloudPlanetOrbit"></div>
			<div class="orbit" id="mtHobyPlanetOrbit"></div>
			<div class="orbit" id="othelloPlanetOrbit"></div>
			<div class="orbit" id="challengesPlanetOrbit"></div>
			<?php addStars(); ?>
			
			<?php getBottom(); ?>
		</div>
		
		<div class ="left-container">
			<div class="project" id="squareInfinity">
				<h1><i class="fa fa-desktop"></i>Square Infinity</h1>
			</div>
			<div class="project" id="UCCSRadio">
				<h1><i class="fa fa-mobile"></i>UCCS Radio</h1>
			</div>
			<div class="project" id="fableOfZelma">
				<h1><i class="fa fa-gamepad"></i>Fable of Zelma</h1>
			</div>
			<div class="project" id="travelQuest">
				<h1><i class="fa fa-mobile"></i>TravelQuest</h1>
			</div>
			<div class="project" id="takeTheTower">
				<h1><i class="fa fa-mobile"></i>Take the Tower</h1>
			</div>
			<div class="project" id="wishingWell">
				<h1><i class="fa fa-desktop"></i>Wishing Well</h1>
			</div>
			<div class="project" id="lostHope">
				<h1><i class="fa fa-gamepad"></i>Lost Hope</h1>
			</div>
			<div class="project" id="nine">
				<h1><i class="fa fa-desktop"></i>9to5</h1>
			</div>
			<div class="project" id="verticallySocial">
				<h1><i class="fa fa-desktop"></i>Vertically Social</h1>
			</div>
			<div class="project" id="happyLittleCloud">
				<h1><i class="fa fa-gamepad"></i>Happy Little Cloud</h1>
			</div>
			<div class="project" id="mtHoby">
				<h1><i class="fa fa-desktop"></i>HOBY Montana</h1>
			</div>
			<div class="project" id="othello">
				<h1><i class="fa fa-gamepad"></i>Othello</h1>
			</div>
			<div class="project" id="challenges">
				<h1><i class="fa fa-terminal"></i>Challenges</h1>
			</div>
		</div>
		
		<div class="central-content">
			Here is central content.
		</div>
		
        <script>
        $(document).ready( function()
        {
			$(".planet").hide();
			$("#center").show();
            $(".side-container").delay(1500).animate({"left":"-100px"},1000,"easeInOutBack");
            $("#video").animate({"opacity":"1.0"},3000);
			
			$(".project").hover(function(){
				$(this).stop();	
				$(this).animate({"margin-left":"0px"},200,"easeInCirc");
				$(this).siblings().stop();			
				$(this).siblings().css("margin-left","50px");
			},function(){
				$(this).siblings().stop();
				$(this).stop();
				$(this).animate({"margin-left":"50px"},200,"easeOutCirc");
				$(this).siblings().css("margin-left","50px");
			});
			
			$(".project").click( function(){
				var curId = "#"+$(this).attr("id")+"Planet";
				$(curId).show();
				//$(curId).siblings(".planet").hide();
				//$("#center").show();
			
			});
        });

        </script>
    </body>
</html>
