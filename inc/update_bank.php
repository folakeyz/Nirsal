<?php
require'dbh.inc.php';
if(isset($_POST)){
    
echo $bname = filter_input(INPUT_POST, 'bname', FILTER_SANITIZE_STRING);
echo $bnumber = filter_input(INPUT_POST, 'bnumber', FILTER_SANITIZE_STRING);
echo $bvn = filter_input(INPUT_POST, 'bvn', FILTER_SANITIZE_STRING);
    
 /*$tsql= "UPDATE GuarantorsForm SET ApplicantBankNames=(?), ApplicantAccountNumbers=(?) WHERE ApplicantBvn='$bvn'";
 $params = array($bname, $bnumber);
 $getResults= sqlsrv_query($conn, $tsql, $params);

    
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
    }else{
        echo '<script> 
        swal("Warning!", "An Error Occured, Please Try Again", "error"); 
         </script>';
    }*/
}
