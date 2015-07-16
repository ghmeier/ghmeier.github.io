<?php include ('util.php'); ?>
<!DOCTYPE HTML>

<?php getHeading('About'); ?>

<html>
    <body>
        <?php getSidebar(); ?>

        <div class = "content-container">

		<?php getBottom(); ?>
				<div class="planet" id = "center"></div>
			<div class="orbit" id="centerOrbit"></div>

			<div class="planet" id="first">
			</div>
			<div class="orbit" id="firstOrbit"></div>

			<div class="planet" id="second">
			</div>
			<div class="orbit" id="secondOrbit"></div>

			<div class="planet" id="third">
			</div>
			<div class="orbit" id="thirdOrbit"></div>

			<div class="planet" id="fourth">
			</div>
			<div class="orbit" id="fourthOrbit"></div>
        </div>
		<div class="centralcontent">
			<div class="centralcenter">
			<script>
			if (document.location.hash !=""){
				var loc = "./content/"+document.location.hash.substring(1)+"html";
				$.get(loc).done(function(){
				$(".centralcenter").load(loc);
				}).fail( function(){
				$(".centralcenter").load("./content/professional.html");
				document.location.hash = "professional.";
				});
			} else {
				$(".centralcenter").load("./content/professional.html");
				document.location.hash = "professional.";
			}


			</script>
			</div>
		</div>

		<div class="left-container">
			<div class="project" id="professional">
				<h1><i class="fa fa-code"></i>Professional</h1>
			</div>
			<div class="project" id="resume">
				<h1><i class="fa fa-file-text"></i>Resume</h1>
			</div>
			<div class="project" id="casual">
				<h1><i class="fa fa-coffee"></i>Casual</h1>
			</div>
		</div>

        <script src="./js/star.js"></script>
        <script>
        $(document).ready( function()
        {

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
					$(".centralcenter").load("./content/"+$(this).attr("id")+".html");
					document.location.hash = $(this).attr("id")+".";
			});

        });

        </script>
    </body>
</html>
