<?php
require'dbh.inc.php';
if(isset($_POST)){
        $agree="Accepted";
        $bvn = $_POST['bvn'];
        $cname= filter_input(INPUT_POST, 'cname', FILTER_SANITIZE_STRING);
        $date =date("d-m-y h:i:a");
           $tsqls= "SELECT * FROM [SmeGuarantors] WHERE ApplicantBvn='$bvn'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $getResult= sqlsrv_query($conn, $tsqls, $params, $options);
    $count=sqlsrv_num_rows($getResult);
        if($count == 0){
          $tsql="INSERT INTO [SmeGuarantors] (ApplicantBvn, ApplicantName, Decision, timestamp)VALUES('$bvn','$cname','$agree', '$date')";
$getResults= sqlsrv_query($conn, $tsql);

    if($getResults){
        echo'<script>
        swal("Success!", "Terms and Conditions Accepted!", "success");
       window.location.href="bank_update.php?BIMS=BIMS";
        </script>';
        }else{
           echo'<script>
      swal("Warning!", "An Error Occured,'.$bvn.'Please Try again!", "warning");
        </script>';      
        }
    
}else{
  echo'<script>
        swal("success!", "Accepted!", "success");
       window.location.href="bank_update.php?BIMS=BIMS";
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
         
         
