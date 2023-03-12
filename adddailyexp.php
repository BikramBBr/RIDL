<?php
$servername = "localhost";
$username ="root";
$password ="";
$dbname ="ridl_p";
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['sub'])) {
    $Expenses_Purpose=$_POST['Expenses_Purpose'];
     $Payment_Month=$_POST['Payment_Month'];
      $Total_Money=$_POST['Total_Money'];
    
    
    
    $sql = "INSERT INTO Expenses_Details_Daily(Expenses_Purpose,Payment_Month,Total_Money)
    VALUES ('$Expenses_Purpose','$Payment_Month','$Total_Money')";
    if (mysqli_query($conn, $sql)) {
        echo "New data created successfully";
    }else{
        echo "error:" .$sql. "
        " .mysqli_close($conn);
    }

}

$result= mysqli_query($conn, "SELECT * FROM Expenses_Details_Daily");
?>












<?php include("include/header.php")?>


        <!-- Page Content  -->
       



<div class="container mb-5">
    <div class="card">
        <div class="card-head" style="background-color: #41089d;color: white;height: 50px; border-radius: 3px;">
            <h3 class="mt-2 ml-2">Expenses Details Daily</h3>
        </div>
        <div class="card-body">
 <form method="post">
    <div class="col">
        <label>Expenses Purpose</label>
      <input type="text" class="form-control" name="Expenses_Purpose" >
    </div>
  
 
  <div class="row mt-2">
    <div class="col">
        <label>Date</label>
      <input type="date" class="form-control" name="Payment_Month">
    </div>
    <div class="col">
        <label>
Total Money</label>
      <input type="text" class="form-control" name="Total_Money">
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
    <table class="table">
        <tr>
            <td>ID</td>
            <td>Expenses Purpose</td>
            <td>Date</td>
            <td>Total Money</td>
           
              
        </tr>
        <?php
        $i=0;
        while ($row=mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["Expenses_Purpose"];?></td>
                <td><?php echo $row["Payment_Month"];?></td>
                <td><?php echo $row["Total_Money"];?></td>
                


                
            </tr>
            <?php
            $i++;
        }
        ?>
    </table>
    <?php
}
else{
    echo "no result found";
}
?>




</div>
</div>




</body>
</html>