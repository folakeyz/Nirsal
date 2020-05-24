<?php require'inc/head.php';?>


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
