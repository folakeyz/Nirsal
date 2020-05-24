<?php
require'dbh.inc.php';
if(isset($_POST)){
    
$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
    
    if($status == "Yes"){
        echo'<script>
       window.location.href="bank_update.php";
        </script>';
    }
}
