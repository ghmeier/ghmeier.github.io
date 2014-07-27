<!DOCTYPE HTML>

<head>
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">

</head>


<body>

<div id="startPlaying" style=""> Press Any Button to Explore... </div>
<div id="creationMark" style="">Garret Meier 2014</div>

<canvas id = "myCanvas" style="display:none;width:100%:height:100%;opacity:0.0;"></canvas>

<div class="achievement-box" id="welcome" style ="">
	<h1>You Made it!</h1>
	<p>Have a look around.</p>
	<img src="ach-1.gif"/>
</div>

<script>
var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
ctx.fillRect(20,20,150,100);
var playingOpacity = 1.0;
var playingOpacityChange = -.007;
var hasPressed = false;

var achievements = [false];

$(document).ready( function() {
	setInterval(function() {
		if (!hasPressed){
			$("#startPlaying").css("opacity", playingOpacity);
			playingOpacity += playingOpacityChange;
			if (playingOpacity <= 0.2 || playingOpacity >= 1.0) {
				playingOpacityChange = -playingOpacityChange;
			}
		}
		
		if (hasPressed){
			$("#startPlaying").css("display","none");
			$("#myCanvas").css("display","block");
			$("#myCanvas").animate({opacity:"1.0"},500);
			if (!achievements[0]){
				$("#welcome").animate({bottom:"10px"},500);
				$("#welcome").delay(1500).animate({bottom:"-100px"},500);
				achievements[0] = true;
			}
		}
	},10);
	
	$(document).keypress(function(event){
		hasPressed = true;
	})

});
</script>
</body>
