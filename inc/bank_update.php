<?php
require'dbh.inc.php';
if(isset($_POST)){
    
$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
    
    if($status == "Yes"){
        echo'<script>
       window.location.href="bank_update.php";
        </script>';
    }elseif($status == "No"){
        session_start();
session_unset();
session_destroy();
         echo '<script> 
        swal("Success!", "Your Loan has been submitted and would be reviewed, You would be contacted shortly!", "success"); 
        setTimeout(function(){
            window.location.href = "https://covid19.nmfb.com.ng/";
         }, 5000);
         </script>';
    }
}
