<?php
 

$servername = "localhost";
$username ="root";
$password ="";
$dbname ="ridl_p";
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['sub'])) {
    $Total_Money_Today=$_POST['Total_Money_Today'];
    $Date=$_POST['Date'];
   
    
    
    $sql = "INSERT INTO daily_cash(Total_Money_Today,Date)
    VALUES ('$Total_Money_Today','$Date')";
    if (mysqli_query($conn, $sql)) {
        echo "New data created successfully";
    }else{
        echo "error:" .$sql. "
        " .mysqli_close($conn);
    }

}

$result= mysqli_query($conn, "SELECT * FROM daily_cash");
?>



<?php include("include/header.php")?>
<div class="container mb-5">
    <div class="card">
        <div class="card-head" style="background-color: #41089d;color: white;height: 50px; border-radius: 3px;">
            <h3 class="mt-2 ml-2">Daily Cash</h3>
        </div>
        <div class="card-body">
 <form method="post">
 
    <div class="col">
        <label>Total Money Today</label>
      <input type="text" id="anyNumber" class="form-control" name="Total_Money_Today" >
    </div>
    <div class="col">
        <label>Date</label>
      <input type="date" class="form-control" name="Date">
    </div>

  
  
    
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block mt-2" name="sub">SUBMIT</button>
</form>
            
        </div>
        <div class="card">
        	<div class="card-head mt-4">
        		<div class="card-head" style="background-color: #41089d;color: white;height: 50px; border-radius: 3px;">
            <h3 class="mt-2 ml-2">Daily Cash</h3>
        </div>
        	</div>
        	<div class="card-body">
        		<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
           <tr>
            <td>Sr No</td>
            <td>Total Money Amount</td>
            <td>Date</td>
            

        </tr>
        </thead>
        <tbody>



<?php
        $i=0;
        while ($row=mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["Total_Money_Today"];?></td>
                <td><?php echo $row["Date"];?></td>
                

            </tr>
            <?php
            $i++;
        }
        ?>




        </tbody>
        
    </table>
        		
        	</div>
        	
        </div>
        
    </div>
    
</div>

<?php
if (mysqli_num_rows($result)>0) {
    ?>



<?php

}
else{
    echo "no result found";
}
?>






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