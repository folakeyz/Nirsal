<?php 
session_start();
require'inc/head.php';

$_SESSION['bvn']=22547201573;
 $tsql= "SELECT * FROM [Targeted Credit Facility (TCF) - Household Loan Application Form] WHERE BVN='$bvn'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $getResults= sqlsrv_query($conn, $tsql, $params, $options);
    $count=sqlsrv_num_rows($getResults);
 while($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)){
        echo $row['ApprovalStatus'].'<br>';
            echo $row['Approved Loan Amount'].'<br>';

    }

    echo $count;
