<?php
echo $date;
require'dbh.inc.php';
if(isset($_POST)){
        $agree="Accepted";
        $bvn = $_POST['bvn'];
         $cname = filter_input(INPUT_POST, 'cname', FILTER_SANITIZE_STRING);
        $date=date("d-m-y h:i:a");
        
        $tsqls= "SELECT * FROM [GuarantorsForms] WHERE ApplicantBvn='$bvn'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $getResult= sqlsrv_query($conn, $tsqls, $params, $options);
    $count=sqlsrv_num_rows($getResult);
        if($count == 0){
              // $tsql= "UPDATE [GuarantorsForms] SET Decision='$agree' WHERE ApplicantBvn='$bvn'";
        $tsql="INSERT INTO [GuarantorsForms] (ApplicantBvn, ApplicantName, Decision, Created)VALUES('$bvn','$cname','$agree', '$date')";
$getResults= sqlsrv_query($conn, $tsql);   
                 if($getResults){
        echo'<script>
        swal("success!", "Terms and Conditions Accepted!", "success");
       window.location.href="bank_update.php?BIMS=BIMS";
        </script>';
        }else{
           echo'<script>
      swal("Warning!", "An Error Occured, Please Try again!", "warning");
        </script>';      
        }
        }else{
           echo'<script>
        swal("success!", "Accepted!", "success");
       window.location.href="bank_update.php?BIMS=BIMS";   
        </script>';
        }
      

}
