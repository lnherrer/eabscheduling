<? require_once("includes/header.php"); ?>
<? require_once("includes/menu.php"); ?>

<?php
	$lname=$_GET["lname"];
	$fname=$_GET["fname"];
	$sex=$_GET["sex"];
	$race=$_GET["race"];
	$proglang=$_GET["proglang"];
	$upload=$_GET["upload"];
		
		
	if($upload=="upload")
	{
		if($lname=="")
		{
			echo "ERROR! Your last name must have a value! 
			<br><br/>
			";
		}
		
		else if($fname=="")
		{
			 echo "ERROR! Your first name must have a value! 
			 <br><br/>			 
			 ";
		}
		
		else if($sex!="M" && $sex!="F")
		{
			echo "ERROR! Your sex must be M or F! 
			<br><br/>
			";
			
		}
		
		else if($race=="")
		{
			echo "ERROR! Your race must have a value! 
			<br><br/>
			";
		}
		
		else if($proglang=="")
		{
			echo "ERROR! Your programming language must have a value! 
			<br><br/>
			";
		}
		else
		{
			require_once("includes/db.php");
			$con = mysqli_connect($db_host, $db_user, $db_pw, $db_db) or die(mysqli_error($con));	
			$query= "INSERT INTO  `gbs788` VALUES('', '" . $lname . "', '" . $fname . "', '" . $sex . "', '" . $race . "', '" . $proglang . "');";
			$result = mysqli_query ($con, $query);
			mysqli_close ($con);


            echo "
            <h3>Success! Your name has been added to the database!!!</h3>
            <br><br/> 
            ";      

		}
	}
?>	