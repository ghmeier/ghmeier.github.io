
		var planets = new Array();
		planets["center"] = 0;
		planets["first"] = 2;
		planets["second"] = 3;
		planets["third"] = 1.5;
		planets["fourth"] = 3.5;
		planets["squareInfinityPlanet"]=1.1;
		planets["UCCSRadioPlanet"]=1.5;
		planets["fableOfZelmaPlanet"]=1.6;
		planets["travelQuestPlanet"]=1.2;
		planets["takeTheTowerPlanet"]=1.9;
		planets["wishingWellPlanet"]=1.2;
		planets["lostHopePlanet"]=2.0;
		planets["9to5Planet"]=.9;
		planets["verticallySocialPlanet"]=1.8;
		planets["happyLittleCloudPlanet"]=1.5;
		planets["mtHobyPlanet"]=2.1;
		planets["othelloPlanet"]=.7;
		planets["challengesPlanet"]=1.0;
		var time = 0;

		$(document).ready( function()
		{
			if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
				$(".side-container").delay(100).animate({"left":"-100px"},1000,"easeInOutBack");
			}else {

			}

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