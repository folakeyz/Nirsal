<?php
require'dbh.inc.php';
if(isset($_POST)){
    
$bname = filter_input(INPUT_POST, 'bname', FILTER_SANITIZE_STRING);
$bnumber = filter_input(INPUT_POST, 'bnumber', FILTER_SANITIZE_STRING);
$bvn = filter_input(INPUT_POST, 'bvn', FILTER_SANITIZE_STRING);
    
 $tsql= "UPDATE GuarantorsForm SET ApplicantBankNames='$bname', ApplicantAccountNumbers='$bnumber' WHERE ApplicantBvn='$bvn'";
$getResults= sqlsrv_query($conn, $tsql);
    
    if($getResults){
session_start();
session_unset();
session_destroy();
       echo '<script> 
        swal("Success!", "Bank Has been Updated!", "success"); 
        setTimeout(function(){
            window.location.href = "https://https://covid19.nmfb.com.ng/";
         }, 5000);
         </script>';
    }
}