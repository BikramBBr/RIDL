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
<?php

if (mysqli_num_rows($result)>0) {
    ?>
 

<style type="text/css">
    table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
  bottom: .5em;
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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>

<table id="dtBasicExample" class="table table-striped table-bordered styled-table" style="width:100%">
        <thead>
           <tr class="active-row">
            <td>ID</td>
            <td>Student_Name</td>
            <td>Student_ID</td>
            <td>Date_of_Birth</td>
            <td>Mother_Name</td>
            <td>Father_Name</td>
             <td>Father_Occupation</td>
              <td>Highest_Qualification</td>
               <td>Permanent_Address</td>
               <td>Course_Name</td>
               <td>Date_of_Admission</td>
               <td>Class_Start_Date</td>
               <td>Phone_No</td>
               <td>Class_End_Date</td>
               
               

        </tr>
        </thead>
        <tbody>



<?php
        $i=0;
        while ($row=mysqli_fetch_array($result)) {
            ?>
            <tr class="active-row">
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["Student_Name"];?></td>
                <td><?php echo $row["Student_ID"];?></td>
                <td><?php echo $row["Date_of_Birth"];?></td>
                <td><?php echo $row["Mother_Name"];?></td>
                <td><?php echo $row["Father_Name"];?></td>
                <td><?php echo $row["Father_Occupation"];?></td>
                <td><?php echo $row["Highest_Qualification"];?></td>
                <td><?php echo $row["Permanent_Address"];?></td>
                <td><?php echo $row["Course_Name"];?></td>
                <td><?php echo $row["Date_of_Admission"];?></td>
                <td><?php echo $row["Class_Start_Date"];?></td>
                <td><?php echo $row["Phone_No"];?></td>
                <td><?php echo $row["Class_End_Date"];?></td>

                

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
</div>
</div>
<script type="text/javascript">
$(document).ready(function () {
  $('#dtBasicExample').DataTable({
    "searching": false // false to disable search (or any other option)
  });
  $('.dataTables_length').addClass('bs-select');
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