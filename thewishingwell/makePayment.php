<?php
    $description = ($_POST["desc"]);
    $amount = ($_POST["amount"]);
    $token = ($_POST["token"]);
    $personId = ($_POST["id"]);
    $fname = ($_POST["fname"]);
    $lname = ($_POST["lname"]);
	echo $fname." ".$lname;
    if ($fname == null) {
		$fname = "Luke";
	}
	if ($lname == null) {
		$lname = "Geiken";
	}
    
    $con=mysqli_connect("localhost","root","Goringelitistmarmot1","isu_hackathon");

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    $rows = mysqli_num_rows(mysqli_query($con,"SELECT * FROM activity"));
    $query = "INSERT INTO activity VALUES(0,'" . $fname . " " . $lname . "',0,".$amount.",'".$description."');";
    $result = mysqli_query($con,$query);
	if (!$result) {
		echo "it failed\n";
	}
    mysqli_close($con);
    
    
    exec("curl https://api.venmo.com/v1/payments -d access_token=" . $token . " -d email=g.hmeier%40yahoo.com -d action=pay -d amount=".$amount." -d note=I-made-a-wish-at-The-Wishing-Well");
    
    /**$json = json_decode($result, true);
    print_r($json);
	
    echo '<a href="access_token=', urlencode($token), '">';*/
    
    $url = "http://localhost/thewishingwell/?access_token=".$token . "&complete=1";
    header("Location: ".$url);
    
?>