
<?php 
session_start();
require'inc/head.php';
$bvn=22143025438;
$app="APPROVED";
$tsql= "SELECT * FROM [SME Loan Application Form] WHERE [Director's BVN]='$bvn' AND [ApprovalStatus]='$app' OR [Promoter's BVN]='$bvn' AND [ApprovalStatus]='$app'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $getResults= sqlsrv_query($conn, $tsql, $params, $options);
    $count=sqlsrv_num_rows($getResults);
    while($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)){
        echo $row['id'].'<br>';
        echo $row['ApprovalStatus'].'<br>';
            echo $row['Approved Loan Amount'].'<br>';

    }
  echo $count.'<br>';

