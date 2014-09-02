<?php require_once("includes/header.php"); ?>

	<title>EAB Scheduling</title>

<?php require_once("includes/menu.php"); ?>


      <h1>Sign Up Now</h1>
<html>
  <body>
    <form action = "profile.php" method = "get">
      <input type = "text" name = "upload" style = "display:none" value = "upload">
<?php
$con = new mysqli() or die("Error:".$con->error());
$query="SELECT '' FROM '' WHERE ''=?";
$stmt=$con->prepare($query);
$stmt->bind_param("s",$var1)
$stmt->bind_result($ooga);
$stmt->execute();
$stmt->fetch();
?>      
      Program: <select name="program">
        <option value="">-Select-</option>
        <option value="M-Power Clinic">M-Power Clinic</option>
      </select><br />
      Name: <br />
<?php
$con = new mysqli() or die("Error:".$con->error());
$query="SELECT '' FROM '' WHERE ''=?";
$stmt=$con->prepare($query);
$stmt->bind_param("s",$var1)
$stmt->bind_result($ooga);
$stmt->execute();
$stmt->fetch();
?>        
      Position: <select name="position">
<?php
$con = new mysqli() or die("Error:".$con->error());
$query="SELECT '' FROM '' WHERE ''=?";
$stmt=$con->prepare($query);
$stmt->bind_param("ss",$var1)
$stmt->bind_result($ooga);
$stmt->execute();
$stmt->fetch();
?>        
        <option value="">-Select-</option>
        <option value="Physician">Physician</option>
      </select><br />
      Role: <select name="role">
<?php
$con = new mysqli() or die("Error:".$con->error());
$query="SELECT '' FROM '' WHERE ''=?";
$stmt=$con->prepare($query);
$stmt->bind_param("s",$var1)
$stmt->bind_result($ooga);
$stmt->execute();
$stmt->fetch();
?>
        <option value="">-Select-</option>
        <option value="Physician">Physician</option>
      </select><br />
      Level: <select name="levelname">
<?php
$con = new mysqli() or die("Error:".$con->error());
$query="SELECT '' FROM '' WHERE ''=?";
$stmt=$con->prepare($query);
$stmt->bind_param("s",$var1)
$stmt->bind_result($ooga);
$stmt->execute();
$stmt->fetch();
?>
        <option value="">-Select-</option>
        <option value="Role">Role</option>
      </select><br />
      <input type = "submit" value = "submit">
    </form>
  </body>
</html>

<?php require_once("includes/footer.php"); ?>