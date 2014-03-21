/*
<?php require_once("includes/header.php"); ?>

    <title>EAB Scheduling</title>
    
<?php require_once("includes/menu.php"); ?>

      <h1>Success!</h1><br />

<?php
$programname = $_GET["programname"];
$positionname = $_GET["positionname"];
$rolename = $_GET["rolename"];
$levelname = $_GET["levelname"];
$upload = $_GET["upload"];

if($upload=="upload")
{
	if($programname=="")
	{
		echo "Whoops! Your program must have a value!";
	}
	else if($positionname=="")
	{
		echo "Whoops! Your position must have a value!";
	}	
	else if($rolename=="")
	{
		echo "Whoops! Your role must have a value!";
	}
	else if($levelname=="")
	{
		echo "Whoops! Your level must have a value!";
	}
	else
	{
		$con = mysqli_connect("localhost", "eabscheddb", "712T6G77mj3SEmGS", "eabscheddb") or die(mysqli_error($con));
		//$query = "INSERT INTO `gbs788` VALUES('', '" . $lname . "', '" . $fname . "', '" . $sex . "', '" . $race . "', '" . $proglang . "');";
		$result = mysqli_query($con, $query);
		mysqli_close($con);
		echo "
        <h1>Success!</h1>
        Your record has been inserted into the database.<br />
		";
	}
}

?>

<?php require_once("includes/footer.php"); ?>
*/