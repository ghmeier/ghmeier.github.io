<?php include('util.php'); ?>
<!DOCTYPE HTML>

<?php getHeading('Blogs'); ?>

<html>

    <body>
        <?php getSidebar(); ?>

        <div class = "content-container">
		
        <?php addStars(); ?>
		<?php getBottom(); ?>
    </div>
	
	<div class="central-content" style="overflow-y:scroll;right:-16px">
	<script async src="https://static.medium.com/embed.js"></script><a class="m-story" data-collapsed="true" data-width="100%" href="https://medium.com/@headin_thecloud/492b7633b555">Six Months of Startup</a>
	<script async src="https://static.medium.com/embed.js"></script><a class="m-story" data-collapsed="true" data-width="100%" href="https://medium.com/@headin_thecloud/c2625e61757c">Working with Friends</a>
	<script async src="https://static.medium.com/embed.js"></script><a class="m-story" data-collapsed="true" data-width="100%" href="https://medium.com/@headin_thecloud/278bdb99bfd4">Snap out of Reality.</a>
	<script async src="https://static.medium.com/embed.js"></script><a class="m-story" data-collapsed="true" data-width="100%" href="https://medium.com/@headin_thecloud/fc3034e28e19">What to Expect (and Overlook) from a Startup.</a>
	<script async src="https://static.medium.com/embed.js"></script><a class="m-story" data-collapsed="true" data-width="100%" href="https://medium.com/@headin_thecloud/413c63e594da">What is Boss Monster?</a>
	<script async src="https://static.medium.com/embed.js"></script><a class="m-story" data-collapsed="true" data-width="100%" href="https://medium.com/@headin_thecloud/5ae5674b4ad2">4 Reasons to Play More (Tabletop) Games!</a>
	<script async src="https://static.medium.com/embed.js"></script><a class="m-story" data-collapsed="true" data-width="100%" href="https://medium.com/@headin_thecloud/bf9f225760a7">Appreciating Opinions</a>
	<script async src="https://static.medium.com/embed.js"></script><a class="m-story" data-collapsed="true" data-width="100%" href="https://medium.com/@headin_thecloud/24fd39c171af">The Close-Minded Conundrum</a>
	<script async src="https://static.medium.com/embed.js"></script><a class="m-story" data-collapsed="true" data-width="100%" href="https://medium.com/@headin_thecloud/6ea361df4017">Four Undeniable Reasons to Own A Chromebook</a>
	<script async src="https://static.medium.com/embed.js"></script><a class="m-story" data-collapsed="true" data-width="100%" href="https://medium.com/@headin_thecloud/e322d24ab0">I Love Clouds, and So Should You</a>
	<script async src="https://static.medium.com/embed.js"></script><a class="m-story" data-collapsed="true" data-width="100%" href="https://medium.com/@headin_thecloud/50d7899391c6">Encouragement for the Male Feminist</a>
		<!--<script>
			if (document.location.hash !=""){				
				var loc = "./content/"+document.location.hash.substring(1)+"txt";
				$.get(loc).done(function(){
				$(".central-content").load(loc);
				}).fail( function(){
				$(".central-content").load("./blogs/central.txt");
				document.location.hash = "central.";
				});
			} else {
				$(".central-content").load("./blogs/central.txt");
				document.location.hash = "central.";
			}
			
			
			</script>	-->
	<div>
        <script>
        $(document).ready( function()
        {

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
				$(".central-content").load("./blogs/"+$(this).attr("id")+".txt");
				document.location.hash = $(this).attr("id")+".";
			});
        });

        </script>
    </body>
</html>
