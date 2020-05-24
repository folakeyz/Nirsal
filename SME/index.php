
<?php 
session_start();
require'inc/head.php';

if(isset($_GET['id'])){
$bvn = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);  
$_SESSION['bvn']=$bvn;
 $tsql= "SELECT * FROM [Targeted Credit Facility (TCF) - Household Loan Application Form] WHERE BVN='$bvn'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $getResults= sqlsrv_query($conn, $tsql, $params, $options);
    $count=sqlsrv_num_rows($getResults);
  echo'<script>
    window.location.href="loan.php";
    </script>';  

    
}elseif($count == 0){
     echo'<script>
    window.location.href="https://covid19.nmfb.com.ng/";
    </script>';
}

else{
      echo'<script>
    window.location.href="https://covid19.nmfb.com.ng/";
    </script>';
}
    

?>
