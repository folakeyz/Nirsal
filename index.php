<?php require'inc/head.php';

if(isset($_GET['id'])){
$bvn = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);  
 $tsql= "SELECT * FROM [Targeted Credit Facility (TCF) - Household Loan Application Form] WHERE BVN='$bvn'";
$getResults= sqlsrv_query($conn, $tsql);
}else{
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
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
    ?>
    <h3 class="text-success text-center"><b>WELCOME&nbsp;&nbsp;<?=$row['Applicant Name'];?></b> </h3>
   
<!--    <small>User Information</small><hr>-->
    <form method="" action="">

<div class="guarantor">
     <small>Guarantor's Info</small><hr>
                    <div class="col-md-4 form-group float-left">
           <label>Applicant's Name</label>
           <input type="text" class="form-control" value="<?=$row['Applicant Name'];?>" name="gfname" required>
       </div>   
        
       <div class="col-md-4 form-group float-left">
           <label>Approved Loan Amount</label>
           <input type="text" class="form-control" value="&#x20A6;&nbsp;<?php
        
        $num =$row['Loan Amount'];
         $test=(int)$num;
        echo number_format($test);
        ?>" name="gmobile" required>
       </div> 
       <div class="col-md-4 form-group float-left">
           <label>Loan Tenor</label>
           <input type="text" class="form-control" value="<?=$row['Approved Loan Tenor'];?>" name="gemail" >
       </div> 
        <div class="col-md-4 form-group float-left">
           <label>Loan Moratorium</label>
           <input type="text" class="form-control" value="<?=$row['Approved Loan Moratorium'];?>" name="bvn" required>
       </div> 
        <div class="col-md-4 form-group float-left">
        <br>
           <input type="submit" class="btn btn-success btn-block" value="Proceed" name="submit" required>
       </div> 
</div>
    <?php } ?>
    </form>
        
</div>  

<?php require'inc/footer.php';?>
