<?php require'inc/dbh.inc.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nirsal | Targeted Credit Facility for COVID-19</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
<!--    <link rel="stylesheet" href="css/fontawesome/css/all.css">-->
  <link rel="stylesheet" href="css/xxx.css">
      <link rel="stylesheet" href="css/sweetalert2.min.css">
<link rel="stylesheet" href="css/roboto.css">
    <script src="js/jquery3.min.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script src="js/sweetalert2.all.min.js"></script>
     
</head>
<body>
    <script>
    
 window.addEventListener("beforeunload", function (e) {
  var confirmationMessage = "Your Loan offer would not be sent";

  (e || window.event).returnValue = confirmationMessage; //Gecko + IE
  return confirmationMessage;                            //Webkit, Safari, Chrome
});

    
    </script>
<script>
        function enforce_maxlength(event) {
            var t = event.target;
            if (t.hasAttribute('maxlength')) {
                t.value = t.value.slice(0, t.getAttribute('maxlength'));
            }
        }
        document.body.addEventListener('input', enforce_maxlength);
    </script>
