<?php
require'dbh.inc.php';
if(isset($_POST)){
        $agree="Accepted";
        $bvn = $_POST['bvn'];
         $cname = $_POST['cname'];
       // $tsql= "UPDATE [GuarantorsForms] SET Decision='$agree' WHERE ApplicantBvn='$bvn'";
        $tsql="INSERT INTO [GuarantorsForms] (`ApplicantBvn`,`ApplicantName`,`Decision`)VALUES('$bvn','$cname','$agree')";
$getResults= sqlsrv_query($conn, $tsql);

    if($getResults){
        echo'<script>
        swal("success!", "Terms and Conditions Accepted!", "success");
       window.location.href="complete_process.php?BIMS=BIMS";
        </script>';
        }else{
           echo'<script>
      swal("Warning!", "An Error Occured,'.$bvn.'Please Try again!", "warning");
        </script>';      
        }
    
}
