<?php
require'dbh.inc.php';
if(isset($_POST)){
        $agree="Accepted";
        $bvn = $_POST['bvn'];
        $tsql= "UPDATE [SmeGuarantors] SET Decision='$agree' WHERE ApplicantBvn='$bvn'";
$getResults= sqlsrv_query($conn, $tsql);

    if($getResults){
        echo'<script>
        swal("success!", "Terms and Conditions Accepted!", "success");
       window.location.href="complete_process.php?BIMS";
        </script>';
        }else{
           echo'<script>
      swal("Warning!", "An Error Occured,'.$bvn.'Please Try again!", "warning");
        </script>';      
        }
    
}


        if(isset($_GET['reject'])){
                       $agree="Accepted";
        $bvn = $_GET['bvn'];
        $tsql= "UPDATE [SmeGuarantors] SET Decision='$agree' WHERE ApplicantBvn='$bvn'";
$getResults= sqlsrv_query($conn, $tsql);
     session_start();
session_unset();
session_destroy();
         echo '<script> 
        swal("Error!", "You have rejected the Terms and Conditions!", "error"); 
        setTimeout(function(){
            window.location.href = "https://covid19.nmfb.com.ng/";
         }, 5000);
         </script>';
    
} 
         
         
