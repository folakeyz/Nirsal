<?php
if(isset($_POST)){
        $agree="Accepted";
        $bvn = $_POST['bvn'];
        $tsql= "UPDATE [SmeGuarantors] SET Decision='$agree' WHERE ApplicantBvn='$bvn'";
$getResults= sqlsrv_query($conn, $tsql);
        $tsql= "SELECT * FROM [SmeGuarantors] WHERE ApplicantBvn='$bvn'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $getResults= sqlsrv_query($conn, $tsql, $params, $options);
    $count=sqlsrv_num_rows($getResults);
        echo $count;
        
        
        
       /* if($getResults){
        echo'<script>
        swal("success!", "Terms and Conditions Accepted!", "success");
       window.location.href="complete_process.php";
        </script>';
        }else{
           echo'<script>
      swal("Warning!", "An Error Occured,'.$bvn.'Please Try again!", "warning");
        </script>';      
        }*/
    
}

if(isset($_GET['reject'])){
        
        
}
