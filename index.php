<?php 
session_start();
require'inc/head.php';

if(isset($_GET['id'])){
$bvn = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);  
$_SESSION['bvn']=$bvn;
 $tsql= "SELECT * FROM [Targeted Credit Facility (TCF) - Household Loan Application Form] WHERE BVN='$bvn'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $getResults= sqlsrv_query($conn, $tsql, $params, $options);
    $count=sqlsrv_num_rows($getResults);
    
}elseif($count == 0){
     echo'<script>
    window.location.href="https://covid19.nmfb.com.ng/";
    </script>';  
}

else{
    echo'<script>
    window.location.href="https://covid19.nmfb.com.ng/";
    </script>'; 
}
    

?>
<div class="navigation">
    <img src="img/unnamed.png" alt="Nirsal Logo">
</div>
<div class="loan-body">
    <?php
    $row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC) 
    ?>
    <h3 class="text-success text-center"><b>WELCOME&nbsp;&nbsp;<?=$row['Applicant Name'];?></b> </h3>
   
<!--    <small>User Information</small><hr>-->
    <form method="" action="">

<div class="guarantor">
     <small>Guarantor's Info</small><hr>
                    <div class="col-md-4 form-group float-left">
           <label>Applicant's Name</label>
           <input type="text" class="form-control" value="<?=$row['Applicant Name'];?>" readonly>
       </div>   
        
       <div class="col-md-4 form-group float-left">
           <label>Approved Loan Amount</label>
           <input type="text" class="form-control" value="&#x20A6;&nbsp;<?php
        
        $num =$row['Loan Amount'];
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
