<?php 
session_start();
require'inc/head.php';

if(isset($_GET['id'])){
$bvn = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);  
$_SESSION['bvn']=$bvn;
 $stat="APPROVED";
 $tsql= "SELECT * FROM [Targeted Credit Facility (TCF) - Household Loan Application Form] WHERE BVN='$bvn' AND [Approval Status] IS NOT NULL";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $getResults= sqlsrv_query($conn, $tsql, $params, $options);
    $count=sqlsrv_num_rows($getResults);
 echo $count;
echo"Try again Later.";
if($count == 0){
     /*echo'<script>
    window.location.href="https://covid19.nmfb.com.ng/";
    </script>';*/
}else{
 /* echo'<script>
    window.location.href="loan.php";
    </script>';  */
}
    
}

else{
      echo'<script>
    window.location.href="https://covid19.nmfb.com.ng/";
    </script>';
}
    

?>
