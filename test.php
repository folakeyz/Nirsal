<?php 
session_start();
require'inc/head.php';

$_SESSION['bvn']=22547201573;
 $tsql= "SELECT * FROM [Targeted Credit Facility (TCF) - Household Loan Application Form] WHERE BVN='$bvn' AND [Approval Status]='APPROVED'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $getResults= sqlsrv_query($conn, $tsql, $params, $options);
    $count=sqlsrv_num_rows($getResults);
    
    echo $count;
