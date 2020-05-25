<?php 
session_start();
require'inc/head.php';

if(isset($_SESSION['bvn'])){
$bvn =  $_SESSION['bvn'];
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
<div class="transfer" id="transfer">
  <form method="post" id="val">
    <h4 class="text-success"><b>Would you like to transfer your Loan to another Bank</b></h4><hr>
    <p id="result"></p>
<div class="form-group col-md-6">
 <p class="text-success"><input type="radio" name="status" value="Yes" required> Yes </p>  
</div>
<div class="form-group col-md-6">
 <p class="text-success"><input type="radio" name="status" value="No" required> No </p>  
</div>
<div class="form-group col-md-6">
<input type="submit" name="submit" class="btn btn-success" value="Submit"> 
</div>

</form>  

</div>
<div class="btransfer" id="btransfer">
    <form>
        <h4 class="text-success"><b>Enter Bank and Account Number</b></h4><hr> 
       <div class="form-group col-md-6">
       <label>Bank Name</label>
       <input type="text" name="bname" class="form-control" value=""> 
        </div> 
        <div class="form-group col-md-6">
       <label>Account Number</label>
       <input type="text" name="bnumber" class="form-control" value=""> 
        </div> 
        <div class="form-group col-md-6">
<input type="submit" name="submit" class="btn btn-success" value="Submit"> 
</div>
    </form>
      <script>
        $(document).ready(function(){
            //$('#create').click(function(event){
            $("form#val").submit(function(e) {
                event.preventDefault();
                //var formData = $('#deploy').serialize();    
                  var formData = new FormData(this);
                //console.log(formData);
                
                 $.ajax({
        url: 'inc/bank_update.php',
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
