<?php
 include("config.php"); 

$servername = "localhost";
$username ="root";
$password ="";
$dbname ="ridl_p";
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['sub'])) {
    $Received_a_sum_of_Rupees=$_POST['Received_a_sum_of_Rupees'];
    $Student_Name=$_POST['Student_Name'];
    $For_Course = $_POST['For_Course'];
    $Student_Roll = $_POST['Student_Roll'];
    $Payment_Month=$_POST['Payment_Month'];
    $Late_Fine=$_POST['Late_Fine'];
    $Payment_Date=$_POST['Payment_Date'];
    $Received_in=$_POST['Received_in'];
    
    
    $sql = "INSERT INTO studentfee_form(Received_a_sum_of_Rupees,Student_Name,For_Course,Student_Roll,Payment_Month,Late_Fine,Payment_Date,Received_in)
    VALUES ('$Received_a_sum_of_Rupees','$Student_Name','$For_Course','$Student_Roll','$Payment_Month','$Late_Fine','$Payment_Date','$Received_in')";
    if (mysqli_query($conn, $sql)) {
        echo "New data created successfully";
    }else{
        echo "error:" .$sql. "
        " .mysqli_close($conn);
    }

}

$result= mysqli_query($conn, "SELECT * FROM studentfee_form");
?>







<?php include("include/header.php")?>

<div class="container mb-5">
    <div class="card">
        <div class="card-head" style="background-color: #41089d;color: white;height: 50px; border-radius: 3px;">
            <h3 class="mt-2 ml-2">STUDENT FEES</h3>
        </div>
        <div class="card-body">
 <form method="post">
  <div class="row">
    <div class="col">
        <label>Received a sum of Rupees</label>
      <input type="text" id="anyNumber" class="form-control" name="Received_a_sum_of_Rupees" >
    </div>
    <div class="col">
        <label>Student Name</label>
      <input type="text" class="form-control" name="Student_Name">
    </div>

  </div>
  <div class="row mt-2">
    <div class="col">
        <label>For Course/Other</label>
      <input type="text" class="form-control" name="For_Course">
    </div>
    <div class="col">
        <label>
Student Roll</label>
      <input type="text" class="form-control" name="Student_Roll">
    </div>
    
  </div>
  <div class="row mt-2">
    <div class="col">
        <label>Payment Month</label>
      <input type="text" class="form-control" name="Payment_Month">
    </div>
    <div class="col">
        <label>
Late Fine</label>
      <input type="text" id="anyNumber" class="form-control" name="Late_Fine">
    </div>
    
  </div>
  <div class="row mt-2">
    <div class="col">
        <label>Payment Date</label>
      <input type="date" class="form-control" name="Payment_Date">
    </div>
    <div class="col">
        <label>Payment Received in</label>
      <select class="form-control form-control-sm" name="Received_in">
  <option value="">--choose--</option>
  <option value="CASH">Cash</option>
  <option value="CHEQUE">Cheque</option>
  <option value="OTHER">Other</option>
</select>
    </div>
    
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block mt-2" name="sub">SUBMIT</button>
</form>
            
        </div>
        
    </div>
    
</div>




<?php
if (mysqli_num_rows($result)>0) {
    ?>
 



<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
           <tr>
            <td>ID</td>
            <td>Received a sum of Rupees</td>
            <td>Student Name</td>
            <td>For Course/Other</td>
            <td>Student Roll</td>
            <td>Payment Month</td>
             <td>Late Fine</td>
              <td>Payment Date</td>
               <td>Payment Received in</td>
               <td>delete</td>
             <td>Invoice</td>

        </tr>
        </thead>
        <tbody>



<?php
        $i=0;
        while ($row=mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["Received_a_sum_of_Rupees"];?></td>
                <td><?php echo $row["Student_Name"];?></td>
                <td><?php echo $row["For_Course"];?></td>
                <td><?php echo $row["Student_Roll"];?></td>
                <td><?php echo $row["Payment_Month"];?></td>
                <td><?php echo $row["Late_Fine"];?></td>
                <td><?php echo $row["Payment_Date"];?></td>
                <td><?php echo $row["Received_in"];?></td>
                <td><a href="deleter.php?id=<?php echo $row["id"]; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
             <td>  <a class="btn-sm btn-success" href="print_invoice.php?pdf=1&id=<?php echo $row["id"]; ?>" target="_blank" >PRINT</a></td>

            </tr>
            <?php
            $i++;
        }
        ?>




        </tbody>
        <tfoot>
                   <tr>
            <td>ID</td>
            <td>Received a sum of Rupees</td>
            <td>Student Name</td>
            <td>For Course/Other</td>
            <td>Student Roll</td>
            <td>Payment Month</td>
             <td>Late Fine</td>
              <td>Payment Date</td>
               <td>Payment Received in</td>
               <td>delete</td>
        </tr>
        </tfoot>
    </table>








    <?php
}
else{
    echo "no result found";
}
?>

          
           <!--all nav-->
        </div>
    </div>  




<script type="text/javascript">
    
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
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