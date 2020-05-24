<?php
require'dbh.inc.php';
if(isset($_POST)){
    
$bvn = filter_input(INPUT_POST, 'bvn', FILTER_SANITIZE_STRING);

    
     
 $tsql= "SELECT BVN FROM [Targeted Credit Facility (TCF) - Household Loan Application Form] WHERE BVN='$bvn'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $getResults= sqlsrv_query($conn, $tsql, $params, $options);
    $count=sqlsrv_num_rows($getResults);
  $user=password_hash($bvn, PASSWORD_DEFAULT);
    
    if($count == 1){
          echo '<script> 
        swal("Success!", "Available!", "success"); 
        window.location.href="loan.php?user='.$user.'&id='.$bvn.'";
         </script>';
    
    }else{
         echo '<script> 
        swal("Warning!", "Not Available!", "error"); 
         </script>';
    }
    
   
}
