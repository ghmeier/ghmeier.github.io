<?php include ('util.php'); ?>
<!DOCTYPE HTML>

<?php getHeading('About'); ?>

<html>
    <body>
        <?php getSidebar(); ?>

        <div class = "content-container">

        <?php addStars(); ?>
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
		
		<div class="central-content">
			<script>
			if (document.location.hash !=""){				
				var loc = "./content/"+document.location.hash.substring(1)+"txt";
				$.get(loc).done(function(){
				$(".central-content").load(loc);
				}).fail( function(){
				$(".central-content").load("./content/professional.txt");
				document.location.hash = "professional.";
				});
			} else {
				$(".central-content").load("./content/professional.txt");
				document.location.hash = "professional.";
			}
			
			
			</script>
		</div>
		
		<div class="left-container">
			<div class="project" id="professional">
				<h1><i class="fa fa-code"></i>Professional</h1>
			</div>
			<div class="project">
				<a href="./content/GarretMeierResume.pdf" target="_blank"><h1><i class="fa fa-file-text"></i>Resume</h1></a>
			</div>
			<div class="project" id="casual">
				<h1><i class="fa fa-coffee"></i>Casual</h1>
			</div>
			<div class="project" id="forFun">
				<h1><i class="fa fa-star fa-spin"></i>Just For Fun</h1>
			</div>
		</div>
        <script>
        $(document).ready( function()
        {
            $(".side-container").delay(1500).animate({"left":"-100px"},1000,"easeInOutBack");
            $("#video").animate({"opacity":"1.0"},3000);
	
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
					$(".central-content").load("./content/"+$(this).attr("id")+".txt");
					document.location.hash = $(this).attr("id")+".";
			});	

        });

        </script>
    </body>
</html>
