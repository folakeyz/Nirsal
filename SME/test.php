
<?php 
session_start();
require'inc/head.php';
/*$bvn=22143025438;
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
*/

$tsql= "SELECT * FROM [SME Loan Application Form] WHERE [ApprovalStatus]='$app'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $getResults= sqlsrv_query($conn, $tsql, $params, $options);
    $count=sqlsrv_num_rows($getResults);
    while($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)){
        echo '<p> ID' .$row['id'].'<br></p>';
        echo '<p> Approval Status' .$row['ApprovalStatus'].'<br></p>';
            echo '<p> Amount' .$row['Approved Loan Amount'].'<br></p>';
         echo '<p> D BVN' .$row["Director's BVN"].'<br></p>';
         echo '<p> P BVN' .$row["Promoter's BVN"].'<br></p>';

    }
  echo $count.'<br>';
