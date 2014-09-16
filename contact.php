<?php include('util.php'); ?>
<!DOCTYPE HTML>

<?php getHeading('Contact'); ?>

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
		
	<div class="left-container" style="overflow-x:hidden">
		<div class="project">
			<a href="http://facebook.com/garret.meier" target="_blank"><h1><i class="fa fa-facebook-square"></i>Wanna be friends?</h1></a>
		</div>
		<div class="project">
			<a href="http://twitter.com/headin_thecloud" target="_blank"><h1><i class="fa fa-twitter"></i>That's Tweet of you.</h1></a>
		</div>
		<div class="project">
			<a href="http://instagram.com/headin_thecloud" target="_blank"><h1><i class="fa fa-instagram"></i>More than just food.</h1></a>
		</div>
		<div class="project">
			<a href="http://plus.google.com/+GarretMeier/posts" target="_blank"><h1><i class="fa fa-google-plus-square"></i>+1 to that!</h1></a>
		</div>
		<div class="project">
			<a href="http://linkedin.com/pub/garret-meier/53/5a3/49/" target="_blank"><h1><i class="fa fa-linkedin-square"></i>I <3 Connections.</h1></a>
		</div>
		<div class="project">
			<a href="http://github.com/ghmeier/" target="_blank"><h1><i class="fa fa-github-square"></i>Mountains of Code.</h1></a>
		</div>
		<div class="project" style="bottom:10px;">
			<h1 style="font-size:15px"><i class="fa fa-envelope"></i>meier.garret@gmail.com</h1>
		</div>
	</div>
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
        });

        </script>
    </body>
</html>
