
<?php 
session_start();
require'inc/head.php';
$bvn=22141701040;
$tsql= "SELECT * FROM [SME Loan Application Form] WHERE [Director's BVN]='$bvn' OR [Promoter's BVN]='$bvn' AND [ApprovalStatus]='APPROVED'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $getResults= sqlsrv_query($conn, $tsql, $params, $options);
    $count=sqlsrv_num_rows($getResults);
    
    echo $count;