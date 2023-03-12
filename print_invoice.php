
<?php
ob_start();
require_once ('pdf.php');
 require_once('db.php');
         

//print_invoice.php
if(isset($_GET["pdf"]) && isset($_GET["id"]))
{
 
 $output = '';



 $statement = $connect->prepare("
  SELECT * FROM studentfee_form 
  WHERE id = :id
  LIMIT 1
 ");
 $statement->execute(
  array(
   ':id' => $_GET["id"]
  )
 );
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output .= '
  
  <div class="" style="text-align:center;">
  <img src="logo.png" width="150px;"/>
<h3 style="font-weight:800; font-family:Algerian;margin-top: 10px;">CACA ANIMATION & WEB</h3>
<h4 style="
    font-weight: 700;margin-top: 10px;
" >Panagarh Bazar, Dist- Purba Bardhaman , Pin-713148. </h4>
<h4 style="font-weight: 600;
    margin-top: 10px;">Phone : +91-7699997994 | Email:info@cacaart.com / cacahelpyou@gmail.com</h4>

   <table width="100%" border="1" cellpadding="5" cellspacing="0">
   
    <tr>
     <td colspan="2" align="center" style="font-size:18px; background-color:#ff0;"><b>Invoice</b></td>
    </tr>
	
	
    <tr>
     <td colspan="2">
      <table width="100%" cellpadding="5">
	  
	  

       <tr>
        <td width="65%">
         To,<br />
         <b>RECEIVER (BILL TO)</b><br />
        <b> Name : '.$row["Student_Name"].'</b><br /> 
        <b> Course Taken : '.$row["For_Course"].'</b><br />
        </td>
        <td width="35%">
         Invoice Date : '.$row["Payment_Date"].'<br />
        <b> Payment month : '.$row["Payment_Month"].'</b><br />
        <b> Late Fine : '.$row["Late_Fine"].'</b><br />

        </td>
       </tr>
      </table>
      <br />
      <table width="100%" border="1" cellpadding="5" cellspacing="0">
       <tr>
        <th>Sl No.</th>
        <th>Receive a sum of rupees</th>
         <th>Roll No</th>
        <th>Payment Mode</th>
       </tr>
       <tr>
	   <td>'.$row["id"].'</td>
	   <td>'.$row["Received_a_sum_of_Rupees"].'</td>
  	   <td>'.$row["Student_Roll"].'</td>
	   <td>'.$row["Received_in"].'</td>	  
 	   </tr>
  ';
  $output .= '
      </table>
     </td>
    </tr>
   </table>
   
   <h4 style="float:right; text-decoration:underline;">Authority Signature</h4>
  ';
 }
 $pdf = new Pdf();
 $file_name = 'Invoice-'.$row["Student_Name"].'.pdf';
 $pdf->loadHtml($output);
 $pdf->render();
 $pdf->stream($file_name, array("Attachment" => false));
}
?>