<?php require'inc/head.php';?>


<div class="navigation">
    <img src="img/unnamed.png" alt="Nirsal Logo">
</div>
<div class="loan-body">
<div class="transfer" id="transfer">
    <form method="post">
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
        url: 'inc/update_bank',
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