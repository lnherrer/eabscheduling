<?php require_once("includes/header.php"); ?>

	<title>EAB Scheduling</title>

<?php require_once("includes/menu.php"); ?>

        <h1>Sign Up Now</h1>

<html>
  <body>
    <form action = "add_person_success.php" method = "get">
      <input type = "text" name = "upload" style = "display:none" value = "upload">
      First Name: <input trim="text" name= "fname"><br/>
      Middle Name: <input trim="text" name= "mname"><br/>
      Last Name: <input type="text" name= "lname"><br/>
      Suffix: <select name="position">
        <option value="">-Select-</option>
        <option value="II">II</option>
        <option value="III">III</option>
        <option value="IV">IV</option>
        <option value="Sr">Sr</option>
        <option value="Jr">Jr</option>
        <option value="MD">MD</option>
        <option value="DO">DO</option>
        <option value="PhD">PhD</option>
        <option value="JD">JD</option>
        <option value="Ret">Ret</option>
        <option value="RN">RN</option>
      </select><br />
      Position: <select name="position">
        <option value="">-Select-</option>
        <option value="Physician">Physician</option>
        <option value="Officer">Officer</option>
        <option value="Volunteer">Volunteer</option>
        <option value="Shadowing">Shadower</option>
      </select><br />
      <input type = "submit" value = "submit">
    </form>
  </body>
</html>

<?php require_once("includes/footer.php"); ?>