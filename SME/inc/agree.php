<?php
if(isset($_POST)){
        $agree="Accepted";
       echo $bvn = filter_input(INPUT_POST, 'bvn', FILTER_SANITIZE_STRING);
        $tsql= "UPDATE SmeGuarantors SET Decision='$agree' WHERE ApplicantBvn='$bvn'";
$getResults= sqlsrv_query($conn, $tsql);
        
        if($getResults){
        echo'<script>
        swal("success!", "Terms and Conditions Accepted!", "success");
       window.location.href="complete_process.php";
        </script>';
        }else{
           echo'<script>
      swal("Warning!", "An Error Occured, Please Try again!", "warning");
        </script>';      
        }
    
}

if(isset($_GET['reject'])){
        
        
}
