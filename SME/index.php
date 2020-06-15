
<?php 
session_start();
require'inc/head.php';

if(isset($_GET['id'])){
$bvn = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);  
$_SESSION['bvn']=$bvn;
 $tsql= "SELECT * FROM [SME Loan Application Form] WHERE [Director's BVN]='$bvn' OR [Promoter's BVN]='$bvn' AND [ApprovalStatus]='APPROVED'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $getResults= sqlsrv_query($conn, $tsql, $params, $options);
    $count=sqlsrv_num_rows($getResults);
  echo'<script>
    window.location.href="loan.php";
    </script>';  
if($count == 0){
     echo'<script>
    window.location.href="https://covid19.nmfb.com.ng/";
    </script>';
}
    
}

else{
      echo'<script>
    window.location.href="https://covid19.nmfb.com.ng/";
    </script>';
}
    

?>
