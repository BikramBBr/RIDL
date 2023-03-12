<?php
$servername = "localhost";
$username ="root";
$password ="";
$dbname ="ridl_p";
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['sub'])) {
    $Employee_Name=$_POST['Employee_Name'];
	 $Salary_Amount=$_POST['Salary_Amount'];
    $date = $_POST['date'];
    $Payment_Month = $_POST['Payment_Month'];
    $Monthly_leave=$_POST['Monthly_leave'];
    $Leave_Type=$_POST['Leave_Type'];
    
    $sql = "INSERT INTO add_salary( Employee_Name, Salary_Amount, date, Payment_Month, Monthly_leave, Leave_Type)
    VALUES ('$Employee_Name','$Salary_Amount','$date','$Payment_Month','$Monthly_leave','$Leave_Type' )";
    if (mysqli_query($conn, $sql)) {
     echo "Employee Salary Added successfully";
    }else{
        echo "error:" .$sql. "
        " .mysqli_close($conn);
    }
   

}

$result= mysqli_query($conn, "SELECT * FROM add_salary");
?>







<?php include("include/header.php")?>

<div class="container mb-5">
    <div class="card">
        <div class="card-head" style="background-color: #41089d;color: white;height: 50px; border-radius: 3px;">
            <h3 class="mt-2 ml-2">Employee Salary</h3>

            </div>
        </div>
        <div class="card-body">
 <form method="post">
 


    
   
  <div class="row mt-2">
    <div class="col">
        <label>Employee Name</label>
      <input type="text" class="form-control" name="Employee_Name">
    </div>
    <div class="col">
        <label>Salary Amount</label>
        <input type="text" class="form-control" name="Salary_Amount">
    </div>
    </div>
    
  <div class="row mt-2">
    <div class="col">
        <label>Date</label>
      <input type="date" class="form-control" name="date">
    </div>
    <div class="col">
    <label>Payment Month</label>
      <input type="date" class="form-control" name="Payment_Month">
    </div>
    
  </div>
  <div class="row mt-2">
    <div class="col">
        <label>Monthly leave</label>
      <input type="text" class="form-control" name="Monthly_leave">
    </div>
   <div class="col">
        <label>Leave Type</label>
      <select class="form-control form-control-sm" name="Leave_Type">
  <option value="">--Select Gender--</option>
  <option value="HALF TIME">Half Time</option>
  <option value="FULL TIME">Full Time</option>
</select>
    </div>
    
  </div>

   
    
 
  <button type="submit" class="btn btn-primary btn-lg btn-block mt-2" name="sub">SUBMIT</button>
</form>
            
        </div>
        
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