    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/starter-template.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">EAB Scheduling</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php#abouteab">About EAB</a>
			</li>            
            <li class="dropdown">
              <a href="index.php#sign_up_now" class="dropdown-toggle" data-toggle="dropdown">Sign Up Now <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?new=volunteer">New Volunteer</a>
                </li>
                <li><a href="returning_volunteer.php">Returning Volunteer</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">More Info</li>
                <li><a href="index.php#volunteer_roles_&_responsibilities">Volunteer Roles & Responsibilities</a></li>
                <li><a href="calendar.php">Calendar</a></li>
              </ul>
            </li>
            <li><a href="index.php#officer">For Officers</a></li>
            <li><a href="index.php#physician">For Physicians</a></li>
            <li><a href="index.php#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<?php 

$new = $_GET['new'];

if($new == "volunteer")
{
	echo "
		<div class=\"modal fade\" id=\"newvolunteer\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"newvolunteerModalLabel\" aria-hidden=\"true\">
		  <div class=\"modal-dialog\">
		    <div class=\"modal-content\">
		      <div class=\"modal-header\">
		        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
		        <h4 class=\"modal-title\" id=\"New Volunteer\">About EAB</h4>
		      </div>
		      <div class=\"modal-body\"
		      
		      <h1>Add Person</h1>



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
                 <option value="Shadowing">Shadowing</option>
               </select><br />
      <input type = "submit" value = "submit">
    </form>

		      </div>
		      <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
		    </div>
		  </div>
		</div>
	";

	echo "
<script>
$(document).ready(function() {
    $('#newvolunteer').modal('show')
});
</script>

	     ";   
}	     
?>	 

    <div class="container">

      <div class="starter-template">
        <!-- This is where page content goes -->


    
        
        
