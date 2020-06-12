
<?php 
session_start();
require'inc/head.php';

$tsql= "SELECT * FROM [SME Loan Application Form] WHERE [ApprovalStatus]='APPROVED'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $getResults= sqlsrv_query($conn, $tsql, $params, $options);
    $count=sqlsrv_num_rows($getResults);
    
    echo $count;
