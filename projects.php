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
			<div class="planet" id="happyLittleCloudPlanet"></div>
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
			<div class="orbit" id="happyLittleCloudPlanetOrbit"></div>
			<div class="orbit" id="othelloPlanetOrbit"></div>
			<div class="orbit" id="challengesPlanetOrbit"></div>
		</div>

			<div id="projectHead" style="position:fixed;right:0px;width:50%;z-index:10;background-color:white;padding-left:10px;padding-bottom:10px;box-shadow:0px 0px 5px black;overflow:hidden">
				<h1 id="my-projects">My Projects</h1>
			</div>
		<div class="centralcontent" style="	top:120px;bottom:0px;">
			<script>
				var read = ["central","Square Infinity Website","UCCS Radio Mobile", "Fable Of Zelma", "Travel Quest", "Take The Tower","Wishing Well","Lost Hope", "9 to 5","Happy Little Cloud"];
				var loc = ["central","squareInfinity","UCCSRadio","fableOfZelma","travelQuest","takeTheTower","wishingWell","lostHope","nine","happyLittleCloud"];

				for (id in loc){
					var temp = $("<div class='centralcenter' id='"+loc[id]+"'>").load("./content/"+loc[id]+".html");
					$(".centralcontent").append($(temp));

					if (loc[id] != "central"){
						$("#projectHead").append($("<a class='proj-nav' href='#"+loc[id]+"'> "+read[id]+" </a>") );
					}
				}
			</script>
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
			<div class="project" id="happyLittleCloud">
				<h1><i class="fa fa-gamepad"></i>Happy Little Cloud</h1>
			</div>

		</div>

        <script>
        $(document).ready( function()
        {
			$(".planet").hide();
			$("#center").show();

			$(".project").hover(function(){
				$(this).stop();
				$(this).animate({"margin-left":"40px"},200,"easeInCirc");
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
				//if (!$(curId).is(":visible")){
					$(curId).show();
					$(".centralcenter").load("./content/"+$(this).attr("id")+".html");
					document.location.hash = $(this).attr("id")+".";
				//}else {
				//	$(curId).hide();
				//}
			});
        });

        </script>
    </body>
    <script src="./js/star.js"></script>
</html>
