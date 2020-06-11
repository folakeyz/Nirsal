<?php
require'dbh.inc.php';
if(isset($_POST)){
        $agree="Accepted";
        $bvn = $_POST['bvn'];
         $cname = filter_input(INPUT_POST, 'cname', FILTER_SANITIZE_STRING);
       // $tsql= "UPDATE [GuarantorsForms] SET Decision='$agree' WHERE ApplicantBvn='$bvn'";
        $tsql="INSERT INTO [GuarantorsForms] (ApplicantBvn, ApplicantName, Decision)VALUES('$bvn','$cname','$agree')";
$getResults= sqlsrv_query($conn, $tsql);

    if($getResults){
        echo'<script>
        swal("success!", "Terms and Conditions Accepted!", "success");
       window.location.href="complete_process.php?BIMS=BIMS";
        </script>';
        }else{
           echo'<script>
      swal("Warning!", "An Error Occured, Please Try again!", "warning");
        </script>';      
        }
    
}
