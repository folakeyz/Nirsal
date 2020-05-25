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
<style>
 .transfer{background:url(img/covid.jpg);}
  .btransfer{background:url(img/covid.jpg);}
</style>

<div class="navigation">
    <img src="img/unnamed.png" alt="Nirsal Logo">
</div>
<div class="loan-body">
<div class="transfer" id="transfer">
  <form method="post" id="val">
    <h4 class="text-success"><b>Would you like to transfer the money to another Bank</b></h4><hr>
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
<?php require'inc/footer.php';?>
