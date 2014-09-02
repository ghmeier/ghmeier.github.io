<?php include('util.php'); ?>
<!DOCTYPE HTML>

<?php getHeading('Projects'); ?>

<html>

    <body>
        <?php getSidebar(); ?>

        <div class = "content-container">

			<?php addStars(); ?>
		</div>
		
		<div class ="left-container">
			<div class="project">
				<h1><i class="fa fa-desktop"></i>Square Infinity</h1>
			</div>
			<div class="project">
				<h1>UCCS Radio</h1>
			</div>
			<div class="project">
				<h1>Fable of Zelma</h1>
			</div>
			<div class="project">
				<h1>Take the Tower</h1>
			</div>
			<div class="project">
				<h1>TravelQuest</h1>
			</div>
			<div class="project">
				<h1>Lost Hope</h1>
			</div>
			<div class="project">
				<h1><i class="fa fa-desktop"></i>Vertically Social</h1>
			</div>
			<div class="project">
				<h1><i class="fa fa-desktop"></i>HOBY Montana</h1>
			</div>
			<div class="project">
				<h1>Othello</h1>
			</div>
			<div class="project">
				<h1>Challenges</h1>
			</div>
		</div>
		
        <script>
        $(document).ready( function()
        {
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
        });

        </script>
    </body>
</html>
