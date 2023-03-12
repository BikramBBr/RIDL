<?php
$servername = "localhost";
$username ="root";
$password ="";
$dbname ="ridl_p";
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['sub'])) {
    $Student_Name=$_POST['Student_Name'];
    $Student_ID=$_POST['Student_ID'];
    $Date_of_Birth = $_POST['Date_of_Birth'];
    $Sex = $_POST['Sex'];
    $Father_Name=$_POST['Father_Name'];
    $Mother_Name=$_POST['Mother_Name'];
    $Father_Occupation = $_POST['Father_Occupation'];
    $Highest_Qualification=$_POST['Highest_Qualification'];
    $Permanent_Address=$_POST['Permanent_Address'];
    $Course_Name =$_POST['Course_Name'];
    $Date_of_Admission =$_POST['Date_of_Admission'];
    $Class_Start_Date=$_POST['Class_Start_Date'];
    $Phone_No =$_POST['Phone_No'];
    $Class_End_Date =$_POST['Class_End_Date'];
  
  
    
    
    $sql = "INSERT INTO add_student( Student_Name, Student_ID, Date_of_Birth, Sex, Father_Name, Mother_Name,Father_Occupation,Highest_Qualification,Permanent_Address,Course_Name,Date_of_Admission,Class_Start_Date,Phone_No,Class_End_Date)
    VALUES ('$Student_Name','$Student_ID','$Date_of_Birth','$Sex','$Father_Name','$Mother_Name','$Father_Occupation','$Highest_Qualification','$Permanent_Address','$Course_Name','$Date_of_Admission','$Class_Start_Date','$Phone_No','$Class_End_Date')";
    if (mysqli_query($conn, $sql)) {
        echo "New data created successfully";
    }else{
        echo "error:" .$sql. "
        " .mysqli_close($conn);
    }

}

$result= mysqli_query($conn, "SELECT * FROM add_student");

?>







<?php include("include/header.php")?>

<div class="container mb-5">
    <div class="card">
        <div class="card-head" style="background-color: #41089d;color: white;height: 50px; border-radius: 3px;">
            <h3 class="mt-2 ml-2">Student Registration</h3>
        </div>
        <div class="card-body">
 <form method="post">
  <div class="row">
    <div class="col">
        <label>Student Name</label>
      <input type="text" class="form-control" name="Student_Name" >
    </div>
    <div class="col">
        <label>Student ID</label>
      <input type="text" class="form-control" name="Student_ID">
    </div>

  </div>
  <div class="row mt-2">
    <div class="col">
        <label>Date of Birth</label>
      <input type="date" class="form-control" name="Date_of_Birth">
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
        <label>Father Name</label>
      <input type="text" class="form-control" name="Father_Name">
    </div>
    <div class="col">
        <label>
Mother Name</label>
      <input type="text" class="form-control" name="Mother_Name">
    </div>
    
  </div>
  <div class="row mt-2">
    <div class="col">
        <label>Father Occupation</label>
      <input type="text" class="form-control" name="Father_Occupation">
    </div>
   <div class="col">
        <label>Highest Qualification</label>
      <input type="text" class="form-control" name="Highest_Qualification">
    </div>
    
  </div>

   <div class="row mt-2">
    <div class="col">
        <label>Permanent Address</label>
      <input type="text" class="form-control" name="Permanent_Address">
    </div>
   <div class="col">
        <label>Course Name</label>
      <input type="text" class="form-control" name="Course_Name">
    </div>
    
  </div>
   <div class="row mt-2">
    <div class="col">
        <label>Date of Admission</label>
      <input type="date" class="form-control" name="Date_of_Admission">
    </div>
   <div class="col">
        <label>Class Start Date</label>
      <input type="date" class="form-control" name="Class_Start_Date">
    </div>
    
  </div>

  <div class="row mt-2">
    <div class="col">
        <label>Phone No.</label>
      <input type="text" id="anyNumber" class="form-control" name="Phone_No">
    </div>
   <div class="col">
        <label>
Class End Date</label>
      <input type="date" class="form-control" name="Class_End_Date">
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





  (function(b){var c={allowFloat:false,allowNegative:false};b.fn.numericInput=function(e){var f=b.extend({},c,e);var d=f.allowFloat;var g=f.allowNegative;this.keypress(function(j){var i=j.which;var h=b(this).val();if(i>0&&(i<48||i>57)){if(d==true&&i==46){if(g==true&&a(this)==0&&h.charAt(0)=="-"){return false}if(h.match(/[.]/)){return false}}else{if(g==true&&i==45){if(h.charAt(0)=="-"){return false}if(a(this)!=0){return false}}else{if(i==8){return true}else{return false}}}}else{if(i>0&&(i>=48&&i<=57)){if(g==true&&h.charAt(0)=="-"&&a(this)==0){return false}}}});return this};function a(d){if(d.selectionStart){return d.selectionStart}else{if(document.selection){d.focus();var f=document.selection.createRange();if(f==null){return 0}var e=d.createTextRange(),g=e.duplicate();e.moveToBookmark(f.getBookmark());g.setEndPoint("EndToStart",e);return g.text.length}}return 0}}(jQuery));

$(function() {
   $("#anyNumber").numericInput({ allowFloat: true, allowNegative: true });
});
</script>

	</body>
	</html>