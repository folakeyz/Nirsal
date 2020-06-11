<?php
require'dbh.inc.php';
if(isset($_POST)){
        $agree="Accepted";
        $bvn = $_POST['bvn'];
         $cname = filter_input(INPUT_POST, 'cname', FILTER_SANITIZE_STRING);
        
        $tsqls= "SELECT * FROM [GuarantorsForms] WHERE ApplicantBvn='$bvn'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $getResult= sqlsrv_query($conn, $tsqls, $params, $options);
    $count=sqlsrv_num_rows($getResult);
        if($count == 0){
              // $tsql= "UPDATE [GuarantorsForms] SET Decision='$agree' WHERE ApplicantBvn='$bvn'";
        $tsql="INSERT INTO [GuarantorsForms] (ApplicantBvn, ApplicantName, Decision)VALUES('$bvn','$cname','$agree')";
$getResults= sqlsrv_query($conn, $tsql);   
                 if($getResults){
        echo'<script>
        swal("success!", "Accepted!", "success");
       window.location.href="complete_process.php?BIMS=BIMS";
        </script>';
        }else{
           echo'<script>
      swal("Warning!", "An Error Occured, Please Try again!", "warning");
        </script>';      
        }
        }else{
           echo'<script>
        swal("success!", "Accepted!", "success");
       window.location.href="complete_process.php?BIMS=BIMS";   
        </script>';
        }
      

}
