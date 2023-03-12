<?php
$servername = "localhost";
$username ="root";
$password ="";
$dbname ="ridl_p";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="DELETE FROM studentfee_form WHERE id='" .$_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
	echo "Record deleted successfully";
}else{
	echo "error deleting record: " .mysqli_error($conn);
}
mysqli_close($conn);
header("Location: studentfees.php");
exit;
?>