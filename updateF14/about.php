<?php include ('util.php'); ?>
<!DOCTYPE HTML>

<?php getHeading('About'); ?>

<html>
    <body>
        <?php getSidebar(); ?>

        <div class = "content-container">

        <?php addStars(); ?>
		<?php getBottom(); ?>
		
        </div>
		
		<div class="central-content">
		
		</div>
		
		<div class="left-container">
			<div class="project">
				<h1><i class="fa fa-code"></i>Professional</h1>
			</div>
			<div class="project">
				<h1><i class="fa fa-coffee"></i>Casual</h1>
			</div>
			<div class="project">
				<h1><i class="fa fa-star fa-spin"></i>Just For Fun</h1>
			</div>
		</div>
        <script>
        $(document).ready( function()
        {
            $(".side-container").delay(1500).animate({"left":"-100px"},1000,"easeInOutBack");
            $("#video").animate({"opacity":"1.0"},3000);
        });

        </script>
    </body>
</html>
