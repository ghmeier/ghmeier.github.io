<?php 
include 'globals.php';
$description = ($_POST["desc"]);

$con=mysqli_connect("localhost","root","Goringelitistmarmot1","isu_hackathon");

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    $rows = mysqli_num_rows(mysqli_query($con,"SELECT * FROM activity"));
    $query = "INSERT INTO activity VALUES(0,'',2,0.0,'".$description."');";
	echo $query;
    $result = mysqli_query($con,$query);
	if (!$result) {
		echo "it failed\n";
	}
    mysqli_close($con);
	

?>