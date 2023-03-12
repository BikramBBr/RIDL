
<?php
 

$servername = "localhost";
$username ="root";
$password ="";
$dbname ="ridl_p";
$conn = new mysqli($servername, $username, $password, $dbname);




$result= mysqli_query($conn, "SELECT * FROM daily_cash");
?>


<?php include("include/header.php")?>
<?php
        $i=0;
        $sum=0;
        while ($row=mysqli_fetch_array($result)) {
            ?>
            $sum=$sum+<?php echo $row["Total_Money_Today"];?>;
        <?php
            $i++;
        }

?>
<div>
	<h1><?php echo '$sum';?></h1>
	
</div>