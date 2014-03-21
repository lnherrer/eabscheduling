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
                   <option value="">-Select-</option>
                   <option value="M-Power Clinic">M-Power Clinic</option>
                   <option value="EAB Clinic">EAB Clinic</option>
                   <option value="EAB Screening">EAB Screening</option>
               </select><br />
      Name: <br />
      Position: <select name="position">
                 <option value="">-Select-</option>
                 <option value="Physician">Physician</option>
                 <option value="Officer">Officer</option>
                 <option value="Volunteer">Volunteer</option>
                 <option value="Shadowing">Shadowing</option>
               </select><br />
      Role: <select name="role">
                 <option value="">-Select-</option>
                 <option value="Physician">Physician</option>
                 <option value="Front & Back Officer">Front & Back Officer</option>
                 <option value="Check In/Check Out">Check In/Check Out</option>
                 <option value="Clinic Leader">Clinic Leader</option>
                 <option value="Records Officer">Records Officer</option>
                 <option value="Dispensary Leader">Dispensary Leader</option>
                 <option value="Education Officer">Education Officer</option>
                 <option value="Check In">Check In</option>
                 <option value="Check Out">Check Out</option>
                 <option value="H&P">H&P</option>
                 <option value="Dispensary Assistant">Dispensary Assistant</option>
                 <option value="Vitals">Vitals</option>
                 <option value="Education Assistant">Education Assistant</option>
                 <option value="HIV Screener">HIV Screener</option>
            </select><br />
      Class: <select name="class">
                 <option value="Attending">Attending</option>
                 <option value="Fellow">Fellow</option>
                 <option value="Chief Resident">Chief Resident</option>
                 <option value="MS1">MS2</option>
                 <option value="MS2">MS2</option>
                 <option value="MS3">MS3</option>
                 <option value="MS4">MS4</option>
                 <option value="Physical Therapy Student">Physical Therapy Student</option>
                 <option value="Pharmacy Student">Pharmacy Student</option>
                 <option value="Public Health Student">Public Health Student</option>
                 <option value="Social Work Volunteer">Social Work Volunteer</option>
                 <option value="Dental Student">Dental Student</option>
              </select><br />

      <input type = "submit" value = "submit">
    </form>
  </body>
</html>

<?php require_once("includes/footer.php"); ?>



