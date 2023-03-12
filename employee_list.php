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





<style type="text/css">
a{
    color: white !important;
}

    .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>
<?php include("include/header.php")?>
<?php

if (mysqli_num_rows($result)>0) {
    ?>
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>


<table id="example" class="table table-striped table-bordered styled-table" style="width:100%">
        <thead>
           <tr class="active-row">
            <td>ID</td>
            <td>Employee_Name</td>
            <td>Phone</td>				
            <td>Employe_Email</td>
            <td>Highest_Qualification</td>
            <td>Sex</td>
             <td>Date_of_Birth</td>
              <td>Employee_Deparment</td>
               <td>Employee_Address</td>
               <td>Employee_Joing_Date</td>

        </tr>
        </thead>
        <tbody>



<?php
        $i=0;
        while ($row=mysqli_fetch_array($result)) {
            ?>
            <tr class="active-row">
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["Employee_Name"];?></td>
                <td><?php echo $row["Phone"];?></td>
                <td><?php echo $row["Employe_Email"];?></td>
                <td><?php echo $row["Highest_Qualification"];?></td>
                <td><?php echo $row["Sex"];?></td>
                <td><?php echo $row["Date_of_Birth"];?></td>
                <td><?php echo $row["Employee_Deparment"];?></td>
                <td><?php echo $row["Employee_Address"];?></td>
                <td><?php echo $row["Employee_Joing_Date"];?></td>
                
                

            </tr>
            <?php
            $i++;
        }
        ?>




        </tbody>
       
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

</script>



    </body>
    </html>