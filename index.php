<?php require'inc/head.php';?>
<div class="navigation">
    <img src="img/unnamed.png" alt="Nirsal Logo">
</div>
<div class="landing">
     <div class="col-md-6 con-right text-center">
     <div class="col-md-12 mx-auto text-center">
      <h2 class="text-success">Targeted Credit Facility for COVID-19</h2><hr>
    <h3 class="text-success text-center">Welcome</h3>
    <small>Please Enter your BVN</small><hr>
    <p id="result"></p>
    <form method="post" action="" id="validation">
        <div class="form-group col-md-12">
            <input type="number" class="form-control" name="bvn" placeholder="Enter BVN" maxlength="11">
        </div>
            <div class="form-group col-md-12">
            <input type="submit" class="btn btn-success curved btn-block" name="validate" value="Validate BVN">
        </div>
    </form>
                
                 <script>
        $(document).ready(function(){
            //$('#create').click(function(event){
            $("form#validation").submit(function(e) {
                event.preventDefault();
                //var formData = $('#deploy').serialize();    
                  var formData = new FormData(this);
                //console.log(formData);
                
                 $.ajax({
        url: 'inc/validation',
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
    </div> 

<?php require'inc/footer.php';?>
   