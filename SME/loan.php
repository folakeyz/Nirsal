<?php 
session_start();
require'inc/head.php';
if(isset($_SESSION['bvn'])){
$bvn =  $_SESSION['bvn'];
$app="APPROVED";
$tsql= "SELECT * FROM [SME Loan Application Form] WHERE [Director's BVN]='$bvn' AND [ApprovalStatus] IS NOT NULL OR [Promoter's BVN]='$bvn' AND [ApprovalStatus] IS NOT NULL";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $getResults= sqlsrv_query($conn, $tsql, $params, $options);
    $count=sqlsrv_num_rows($getResults);
    
    if($count == 0){
     echo'<script>
    window.location.href="https://covid19.nmfb.com.ng/";
    </script>';  
}

    
}
else{
      echo'<script>
    window.location.href="https://covid19.nmfb.com.ng/";
    </script>'; 
}
    

?>
<style>
 .loan-body{
  background:url(img/covid.jpg)no-repeat;
  background-position:right;
 
 }
</style>
<div class="navigation">
    <img src="img/unnamed.png" alt="Nirsal Logo">
</div>
<div class="loan-body">
    <?php
    $row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC) 
    ?>
    <h3 class="text-success text-center"><b>WELCOME&nbsp;&nbsp;<?=$row['Business/Company Name'];?></b> </h3>
   
<!--    <small>User Information</small><hr>-->
    <form method="" action="">

<div class="guarantor">

                    <div class="col-md-4 form-group float-left">
           <label>Bussiness Name</label>
           <input type="text" class="form-control" value="<?=$row['Business/Company Name'];?>" readonly>
       </div>   
        
       <div class="col-md-4 form-group float-left">
           <label>Approved Loan Amount</label>
           <input type="text" class="form-control" value="&#x20A6;&nbsp;<?php
        
        $num =$row['Approved Loan Amount'];
         $test=(int)$num;
        echo number_format($test);
        ?>" name="gmobile" readonly>
       </div> 
       <div class="col-md-4 form-group float-left">
           <label>Loan Tenor</label>
           <input type="text" class="form-control" value="<?=$row['Approved Loan Tenor'];?>" readonly>
       </div> 
        <div class="col-md-4 form-group float-left">
           <label>Loan Moratorium</label>
           <input type="text" class="form-control" value="<?=$row['Approved Loan Moratorium'];?>" readonly>
       </div> 
        <div class="col-md-4 form-group float-left">
        <br>
            <a class="btn btn-success btn-block" href="offer_and_aggrement.php">Proceed</a>
       </div> 
</div>
 
    </form>
        
</div>  

<?php require'inc/footer.php';?>
