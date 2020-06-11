<?php 
session_start();
require'inc/head.php';
if(!$_GET['BIMS']){
     echo'<script>
    window.location.href="offer_and_aggrement.php";
    </script>'; 
}
if(isset($_SESSION['bvn'])){
$bvn =  $_SESSION['bvn'];
$tsql= "SELECT * FROM [Targeted Credit Facility (TCF) - Household Loan Application Form] WHERE BVN='$bvn' AND [Approval Status]='APPROVED'";
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

<style>
 .transfer{background:url(img/covid.jpg);}
  .btransfer{background:url(img/covid.jpg);}
</style>
<div class="navigation">
    <img src="img/unnamed.png" alt="Nirsal Logo">
</div>
<div class="loan-body">
<div class="transfer" id="transfer">
 <p id="result"></p>
    <form method="post" id="update">
        <h4 class="text-success"><b>Enter Bank and Account Number</b></h4><hr> 
       <div class="form-group col-md-6">
       <label>Bank Name</label>
       <input type="text" name="bname" class="form-control" value="" required> 
        </div> 
        <div class="form-group col-md-6">
       <label>Account Number</label>
       <input type="text" name="bnumber" class="form-control" value="" required> 
       <input type="hidden" name="bvn" class="form-control" value="<?=$bvn;?>"> 
        </div> 
        <div class="form-group col-md-6">
<input type="submit" name="submit" class="btn btn-success" value="Submit"> 
</div>
    </form>
      <script>
        $(document).ready(function(){
            //$('#create').click(function(event){
            $("form#update").submit(function(e) {
                event.preventDefault();
                   
                  var formData = new FormData(this);
             
                
                 $.ajax({
        url: 'inc/update_bank.php',
        type: 'POST',
        data: formData,
        success: function (result) {
        $('#result').html(result);
        },
        cache: false,
        contentType: false,
        processData: false
    });
                
               
                    
                });
            });
            
        </script>
</div>


</div>
<?php require'inc/footer.php';?>
