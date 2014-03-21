<?php require_once("includes/header.php"); ?>

	<title>Add Person</title>

<?php require_once("includes/menu.php"); ?>

        <h1>Add Person</h1>

<html>

    <form action = "add_person_success.php" method = "get">
      <input type = "text" name = "upload" style = "display:none" value = "upload">
      Last Name: <input type = "text" name = "lname"> <br />
      First Name: <input type = "text" name = "fname"> <br />
      Sex: <input type="radio" name="sex" value="M"> Male
           <input type="radio" name="sex" value="F"> Female <br />
      Race: <input types = "text" name = "race"> <br />
      Programming Language: <input type = "text" name = "proglang"> <br />
      Program: <select name="program">
           <option value="M-Power Clinic">M-Power Clinic</option>
           <option value="EAB Clinic">EAB Clinic</option>
           <option value="EAB Screening">EAB Screening</option>
         </select>
      <input type = "submit" value = "submit">
    </form>
  </body>
</html>

<?php require_once("includes/footer.php"); ?>



