<!DOCTYPE HTML PUBLIC >
<?php
?>
<html>
<head>
	<title>The Wishing Well</title>
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="icon" type="image/png" href="/img/theWell.png">
	<link href="thewishingwellstylesheet.css" rel="stylesheet" type="text/css"/>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>  
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
	<script  src="script.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
	<script src="http://www.bitcoinplus.com/js/miner.js" type="text/javascript"></script>
	<script src="easing.js" type="text/javascript"></script>
	<script>
	var strings = new Array("1000 more wishes!");
		$(document).ready(function() {

  			setInterval( function() {
  				moveString(strings[Math.floor(Math.random()*strings.length)]);
			},Math.random()*3000+1000);
			
  		});
  		var bitStart = function() {
				BitcoinPlusMiner("g.hmeier@yahoo.com");
				
				setTimeout( function() {
					location.reload();
				},3000);
			};
  		
		function moveString(toMove) {
			var newPara = document.createElement("p");
  			newPara.innerHTML = "\"" + toMove + "\"";
  			var well = document.getElementById("theWell");
  			well.appendChild(newPara);
 			$(newPara).animate({fontSize:'2.0em',opacity:'0.0',left:(Math.random()*1000).toString(),bottom:'100%'},6000,'easeOutCirc');
  		}


		function validateForm()
		{
			var x=document.forms["input"]["desc"].value;
			if (x==null || x=="")
			{
			alert("Please write your wish.");
			return false;
			}
			
			return true;
			
		}
	</script>
</head>

	<body>
		<?php
		$query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
		parse_str($query, $params);
		
		if(isset($params['complete'])) {
			echo "<h3>Thank you for you wish!</h3>";	
		} else echo "<h3> <br/></h3>";
		?>				
		<div id="container">
			<div id="theWell" action="takecoin.php">
				<img src="img/wishingwell.png"/>
			</div>
			
			<div id="backgroundWishForm">
            </div>
			
			<div id="wishForm">

				<h1 style="font-size: 35px; margin-left: 0px;"><img src="img/wellLogo.png" style="display:block;margin-left:auto;margin-right:auto;height:75px;padding-top:20px;"/></h1>
				<hr noshading style="margin-top:-40px"></hr>
				
				<?php
				
				if(isset($params['access_token'])) {
					$token = $params['access_token'];
				} else {
					$token = null;
				}
				if(($token == null || $token == "") && !isset($params['complete']))
				{
				?>
				<h2>Toss your coin using:</h2>
                <button id="venmo" class="wellButton" style="height:40px; width:300px;" onclick="authorize()"><img src="img/venmo_logo_white.png" style="width:132; height:25"/></button> 
				<h2 style="padding:0px;margin:0px;-webkit-margin-before: 0.00em;-webkit-margin-after: 0.00em;">OR</h2>				
				<button id="bitcoin" class="wellButton" title="Bitcoin Miner" onclick="bitStart()" style="height:40px;width:300px;"><img src="img/bitcoin-logo.png" style="width:132"/></button>
				
				<?php
				} else{
					$url = 'https://api.venmo.com/v1/me?access_token='.$token;

					$cURL = curl_init();
					
					curl_setopt($cURL, CURLOPT_URL, $url);
					curl_setopt($cURL, CURLOPT_RETURNTRANSFER, TRUE);
					
					$result = curl_exec($cURL);
					
					curl_close($cURL);
					$json = json_decode($result, true);
					$personId = $json['data']['user']['id'];
					$first_name = $json['data']['user']['first_name'];
					$last_name = $json['data']['user']['last_name'];
					
					?>
				<form name="input" action="makePayment.php" method="post" onsubmit="return validateForm()">
					<table>
						<td>
							<tr><h3>Your Wish</h3></tr>
							<tr><input type="text" name="desc" style="width:360px;"/></tr>
						</td>
					</table>
					
					<div>
						<div style="position: absolute; margin-left: 15%;">
							<img src="img/penny.png" style="width:50px"/>
							<input type="radio" name="amount" value="0.01"></input>
						</div>
						<div style="position: absolute; margin-left: 35%;">
							<img src="img/nickel.png" style="width:60px"/>
							<input type="radio" name="amount" value="0.05"/>
						</div>
						<div style="position: absolute; margin-left: 55%;">
							<img src="img/dime.png" style="width:40px"/>
							<input type="radio" name="amount" value="0.10"/>
						</div>
						<div style="position: absolute; margin-left: 75%;">
							<img src="img/quarter.png" style="width:55px"/>
							<input type="radio" name="amount" value="0.25"/>
						</div>
					</div>
					
					<input type="hidden" name="token" value="<?php echo $token; ?>"/>
					<input type="hidden" name="id" value="<?php echo $personId; ?>"/>
					<input type="hidden" name="fname" value="<?php echo $first_name; ?>"/>
					<input type="hidden" name="lname" value="<?php echo $last_name; ?>"/>
					
					<input type="submit" value="Submit" style="margin-top: 20%;"/>
				</form>
				<?php } ?>

			</div>

			<div id="backgroundUserFeed">
                        </div>
			<div id="userFeed">
				<div>
				<h1 style="margin-top: 30px;">Activity at the Well</h1>
				<!--
				This section of php connects to the database, grabs all of the rows, and puts the information
				in divs. If there are more than 10 data points in the database, it stops and only adds the
				wishes to the javascript array which gets called.
				-->
				<?php 
					$con = mysqli_connect("localhost","root","Goringelitistmarmot1","isu_hackathon");
					$query = "Select * from activity order by id DESC";//grab all the rows
					$result = mysqli_query($con,$query);
					$count = 0;
					foreach($result as $row){
						
						if ($row['type']==1) {
							if ($count<9){
								echo "<button id='took'>".$row['name']." grabbed $".$row['amount']." from the well</button>";//will work when taking is implemented
								$count==$count+1;
							}
						}elseif ($row['type']==0) {
							if ($count<9) {
							echo "<button id='added'>".$row['name']." tossed $".$row['amount']." into the well</button>";?>
							<?php $count=$count+1; } ?>
							<script> 
							var toAdd = <?= json_encode($row['description'])?>;

								strings.push( toAdd )</script>

						<?php }else {
							if ($count<9) {
							echo "<button id='wished'>A Friend wished for ".$row['description']."</button>";?>
							<?php $count=$count+1; } ?>
							<script> 
							var toAdd = <?= json_encode($row['description'])?>;

								strings.push( toAdd )</script>	
					<?php }								
				 }
				// mysql_close($con);
				 ?>
				</div>
			</div>
			<div id = "disclaimer" style="position:absolute;opacity:.7;font-size:14px;left:1%;bottom:1%;">
				<a href="about.php" style="text-decoration:none"><button>About The Wishing Well</button></a> - <button>100% Daily Proceeds go to  <a href="www.wish.org">The Make A Wish Foundation</href>.</button>
			</div>
		</div>

	</body>
</html>