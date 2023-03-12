<?php
$servername = "localhost";
$username ="root";
$password ="";
$dbname ="ridl_p";
$conn = new mysqli($servername, $username, $password, $dbname);
$message="";

if (isset($_POST['sub'])) {
    $Employee_Name=$_POST['Employee_Name'];


    $Phone=$_POST['Phone'];
    $Employe_Email = $_POST['Employe_Email'];
    $Highest_Qualification = $_POST['Highest_Qualification'];
    $Sex=$_POST['Sex'];
    $Date_of_Birth=$_POST['Date_of_Birth'];
    $Employee_Deparment=$_POST['Employee_Deparment'];
    $Employee_Address=$_POST['Employee_Address'];
    $Employee_Joing_Date=$_POST['Employee_Joing_Date'];

    
    
    $sql = "INSERT INTO add_employee( Employee_Name, Phone, Employe_Email, Highest_Qualification, Sex, Date_of_Birth,Employee_Deparment,Employee_Address,Employee_Joing_Date)
    VALUES ('$Employee_Name','$Phone','$Employe_Email','$Highest_Qualification','$Sex','$Date_of_Birth' ,'$Employee_Deparment' ,'$Employee_Address' ,'$Employee_Joing_Date')";
    if (mysqli_query($conn, $sql)) {
     $message="Employee Added successfully";
    }else{
        echo "error:" .$sql. "
        " .mysqli_close($conn);
    }
    header('Location: add_employee.php');

}

$result= mysqli_query($conn, "SELECT * FROM add_employee");
?>







<?php include("include/header.php")?>

<div class="container mb-5">
    <div class="card">
        <div class="card-head" style="background-color: #41089d;color: white;height: 50px; border-radius: 3px;">
            <h3 class="mt-2 ml-2">Employee Registration</h3>

            </div><?php echo $message;?>
        </div>
        <div class="card-body">
 <form method="post">
 


    <div >
        <label>Employee Name</label>
      <input type="text" class="form-control" name="Employee_Name" required >
    </div>
   
  <div class="row mt-2">
    <div class="col">
        <label>Phone</label>
      <input type="text" class="form-control" name="Phone">
    </div>
    <div class="col">
        <label>Employe Email</label>
        <input type="email" class="form-control" name="Employe_Email">
    </div>
    </div>
    
  <div class="row mt-2">
    <div class="col">
        <label>Highest Qualification</label>
      <input type="text" class="form-control" name="Highest_Qualification">
    </div>
    <div class="col">
        <label>Sex</label>
       <select class="form-control form-control-sm" name="Sex">
  <option value="">--Select Gender--</option>
  <option value="MALE">Male</option>
  <option value="FEMALE">Female</option>
</select>
    </div>
    
  </div>
  <div class="row mt-2">
    <div class="col">
        <label>Date of Birth</label>
      <input type="date" class="form-control" name="Date_of_Birth">
    </div>
   <div class="col">
        <label>Employee Deparment</label>
      <input type="text" class="form-control" name="Employee_Deparment">
    </div>
    
  </div>

   
    <div >
        <label>Employee Address</label>
      <input type="text" class="form-control" name="Employee_Address">
    </div>
  
   <div class="row mt-2">
    <div class="col">
        <label>Job Type</label>
      <select class="form-control form-control-sm" name="Job_Type">
  <option value="">--Select Gender--</option>
  <option value="PART TIME">Part Time</option>
  <option value="FULL TIME">Full Time</option>
</select>
    </div>
   <div class="col">
        <label>Employee Joing Date</label>
      <input type="date" class="form-control" name="Employee_Joing_Date">
    </div>
    
  </div>

 
  <button type="submit" class="btn btn-primary btn-lg btn-block mt-2" name="sub">SUBMIT</button>
</form>
            
        </div>
        
    </div>
    
</div>





          
           <!--all nav-->
        </div>
    </div>	
<script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>

  </body>
  </html>