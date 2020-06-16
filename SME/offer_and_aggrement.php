<?php 
session_start();
require'inc/head.php';


if(isset($_SESSION['bvn'])){
$bvn =  $_SESSION['bvn'];
$app="APPROVED";
$tsql= "SELECT * FROM [SME Loan Application Form] WHERE [Director's BVN]='$bvn' AND [ApprovalStatus]='$app' OR [Promoter's BVN]='$bvn' AND [ApprovalStatus]='$app'";
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


<div class="navigation">
    <img src="img/unnamed.png" alt="Nirsal Logo">
</div>
<div class="loan-body">
<div class="col-md-9 mx-auto offer">
       <?php
    $row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC) 
    ?>
    <h4><b>COVID-19 TARGETED CREDIT FACILITY LOAN OFFER LETTER</b></h4>
    <h6>REFERENCE NO: COVID19TCF/NMFB/29042020/ABI001 DATE: <?=date("Y-M-d");?></h6>


COMPANY NAME: <?=$row['Business/Company Name'];?></p>

<p>Address:<?=$row['Home Address'];?></p>

<p>OFFER OF SME TERM LOAN FACILITY (COVID19 - TCF)</p>
<p>We refer to your application for an SME Loan facility under the COVID-19 Targeted Credit Facility Intervention Scheme and are pleased to inform you that the Management of NIRSAL Microfinance Bank Ltd (hereinafter referred to as ‘the bank’) has approved the sum of &#x20A6;&nbsp;<?php
        
        $num =$row['Approved Loan Amount'];
         $test=(int)$num;
        echo number_format($test);
        ?>, subject to the following terms and conditions:</p>
   
   
<p><b>BORROWERS NAME: <?=$row['Business/Company Name'];?></b>

<b>LENDER: NIRSAL Microfinance Bank Ltd</b>
<b>FACILITY TYPE: COVID-19 SME Targeted Credit Facility</b>

<b>PURPOSE: To Finance Working Capital Requirements</b>

APPROVED LOAN AMOUNT: &#x20A6;&nbsp;<?php                  $num =$row['Approved Loan Amount'];          $test=(int)$num;         echo number_format($test);         ?></p>
   <p><b>INTEREST RATE:</b> 5% per annum (all-in) up till February 28th, 2021(4% one off interest will be deducted on disbursement; 1% p.a to be charged till February 2021)

9% per annum (all-in) effective March 1st, 2021 till maturity (subject to money market condition)</p>
 <p><b>REPAYMENT STRUCTURE:</b> Fixed amount per month (covering both principal and interest)

TENOR: 36 months from Disbursement Date.

MORATORIUM: 12 months moratorium on both principal & interest

COLLATERAL: 1. Acceptable 3rd Party Guarantor OR

2. Moveable Assets OR

3. Simple deposit of Title documents.

(Valued at least 70% of the loan amount for 2&3)</p>
   <p>The Borrower consents that the Bank shall, without notice or demand, apply any credit balance (whether then due), to which the borrower is at the time beneficially entitled to in any account with the Bank and/or with any other bank/other financial institutions, in (or towards satisfaction of any sum then due and payable (but unpaid) by the Borrower to the Bank under this Agreement.</p>
    
    <p><b>II. CONDITION PRECEDENT FOR DRAWDOWN ON LOAN FACILITY</b>

<p>1. Indication of your acceptance of this offer by executing the offer and loan agreement acceptance on page …</p>

<p>2. Insure the loan facility noting the Bank as first loss payee with an Insurance company endorsed by the Bank. The insurance premium shall be renewed annually throughout the life span of the facility.</p>

<p>3. Receipt of signed guarantor form where applicable</p>

<p>4. Receipt of executed and confirmation of collateral document</p>

<p>5. Clean Credit Bureau report</p>

<p>6. Domiciliation of sales Proceeds</p>

<p>We look forward to a mutually beneficial relationship.</p>

    <p>Yours Faithfully,</p>

<p>For: <b>NIRSAL MICROFINANCE BANK</b></p>
<div class="col-md-12">
<div class="col-md-4 float-left">
  <img src="img/one.png">  
  <p>CHIBUZO OGBONNA </p>
<b>PRODUCT MANAGER </b>
</div>
<div class="col-md-4 float-left">
   <p><br></p>
    </div>
<div class="col-md-4 float-left">
  <img src="img/two.png">
  <p>JERRY OSAGIE</p>
  <b>HEAD, CREDIT</b>

</div>
    </div>
<div class="col-md-12">
   <p><u>MEMORANDUM OF ACCEPTANCE</u></p> 
   <p>I,  <?=$row['Business/Company Name'];?> have read this Offer Letter and the loan agreement and fully understand it.</p>

  <p>I am pleased to willingly accept the Offer of &#x20A6;&nbsp;<?php                  $num =$row['Approved Loan Amount'];          $test=(int)$num;         echo number_format($test);         ?> COVID-19 SME Targeted Credit Facility, along with the Terms and Conditions contained, herein, in the offer letter and the loan agreement dated <?=date("Y-M-d");?> and signed by me.</p><br>
  <p><b>NAME:  <?=$row['Business/Company Name'];?><br>

SIGNATURE…………………………..<br>

DATE: <?=date("Y-M-d");?> <br>
Company:   <?=$row['Business/Company Name'];?></b></p><br>
<div class="col-md-12">
<p>   COVID-19 TCF LOAN AGREEMENT</p>
<p>THIS LOAN AGREEMENT is made the <?=date("Y-M-d");?>  BETWEEN NIRSAL MICROFINANCE BANK LIMITED, a limited liability company incorporated in Nigeria and licensed by the Central Bank of Nigeria as a National Microfinance Bank to carry on the business of Micro financing in Nigeria, and has its registered office at Plot 103/104,No 1, Monrovia Street, Wuse 2, Abuja Nigeria (hereinafter referred to as either ‘the Bank’ or ‘the Lender’ and which expression shall where the context so admits include its successors-in-title and assigns) of the one part,</p>
<p><b>AND</b>

<p><b class="text-danger"> <?=$row['Business/Company Name'];?> </b> of  <?=$row['Business/Company Name'];?>(hereinafter referred to as ‘the Borrower’ and which expression shall where the context so admits include his/her personal representatives, heirs and assigns) of the other part; (each ‘a party’ and collectively ‘the parties’).</p>

<b>WHEREAS:</b>

<p>a. The Borrower applied for loan facility under the COVID-19 Targeted Credit Facility (COVID-19 TCF), in accordance with the provisions of the Central Bank of Nigeria (CBN) Guidelines for the operation of COVID-19 TCF (hereafter referred to as ‘the Guidelines’).</p>

<p>b. Sequel to the Borrower’s aforesaid application, the Bank offered the Borrower a Term loan facility of <b class="text-danger">&#x20A6;&nbsp;<?php                  $num =$row['Approved Loan Amount'];          $test=(int)$num;         echo number_format($test);         ?></b> vide a letter titled <b>‘OFFER OF SME TERM LOAN FACILITY ‘(COVID-19 TCF)’</b> and dated 29TH April, 2020, on the terms and conditions specified therein.</p>

<p>c. The Borrower has accepted the Bank’s offer of the term loan facility, consequent upon which the parties agreed to execute this Loan Agreement on the terms and conditions herein contained.</p>

<p>Now this <b>LOAN AGREEMENT WITNESSES</b> as follows</p>
<p>1. The COVID-19 Targeted Credit Facility<br>

Subject to the terms and conditions of this Loan Agreement, the Bank hereby agrees to make available to the Borrower a Term loan facility of <b>&#x20A6;&nbsp;<?php                  $num =$row['Approved Loan Amount'];          $test=(int)$num;         echo number_format($test);         ?>, pursuant to the Borrower’s application for a COVID-19 TCF.</b></p>
    <p><b>1. Repayment</b></p>

<p>Subject to the provisions hereunder, the Borrower shall repay the principal of the Loan in full, plus all accrued and unpaid interest thereon and all other outstanding Obligations.</p>

<p>A. All payments to be made by the Borrower as Obligations on the COVID-19 TCF shall be made without set-off, recoupment, counterclaim or any other reduction. Except as otherwise expressly provided herein, all payments of the Obligations shall be made by the Borrower to the Bank and shall be made in Naira.</p>

<p>B. Repayment shall be a fixed amount, paid every month into the Borrower’s account domiciled with the Bank.</p>

<p>C. The fixed repayment amount shall be a proportion of the Principal Loan amount and accrued interest.</p>

<p>D. Where the Borrower’s account is unfunded on a due repayment date, the loan repayment shall be tagged as ‘Past Due’.</p>

<p>E. Repayment shall commence the month after (the completion of) the moratorium period.</p>

    <p><b>2. Composition of Monthly Repayment</b></p>

<p>All repayment, payable with respect to each Repayment Date per month, shall equal the sum of the product of:</p>

<p>a. The Interest Rate,</p>

<p>b. The outstanding principal amount of the Loan on such date of payment, and</p>

<p>c. Any amount accrued and payable but not paid on any prior Repayment Date in respect of the Loan.</p>

<p><b>3. Default in Repayment</b></p>

<p>Where the Borrower fails or neglect to pay/fully pay a repayment amount on the due date, a warning notification will be sent to the Borrower for payment within five (5) business days. Consequent on the Borrower’s further failure or neglect to make repayment, the Bank shall have the right to activate the Global Standing Instruction and debit the borrowers account in any financial institution to repay he due loan, and or seize the Borrower’s assets in pursuant of its Loan Recovery process.</p>

<p><b>4. Borrower’s Covenants:</b></p>

<p>The Borrower makes the following covenants:</p>

<p>I. The borrower consents and agrees to use the loan facility strictly and only for the purpose for which the loan was sought. The Bank shall retain the right to terminate the loan facility, withdraw all assets and institute an action for breach of contract, if it is determined that the loan facility has been diverted to, and for other purposes in variance to the purpose for which the loan was granted.</p>

<p>II. The borrower shall not, without the prior written consent of the Bank, sell, transfer or otherwise dispose any of his/ her assets acquired with the loan obtained from the Bank while the loan is still in effect.</p>

<p>III. The borrower shall not enter into a single transaction or a series of transactions (whether related or not) and whether voluntary or involuntary to sell, lease, transfer or otherwise dispose of the assets mentioned in (II).</p>

<p>IV. Other than pursuant to this loan Facility or with the prior written consent of the Bank, he shall not incur or allow any financial indebtedness to remain outstanding.</p>

<p>V. The borrower shall pay and discharge all taxes imposed upon him or his assets within the time period allowed under applicable law without incurring penalties.</p>

<p>VI. The Borrower hereby undertakes to provide and execute all requisite security documents in furtherance of the loan facility.</p>

<p><b>5. Representations</b></p>

<p>The Borrower also makes the following representations and warranties.</p>

<p>a. No default</p>

<p>(a) No event of default will result or may reasonably be expected to result from the making of the Loan transaction.</p>

<p>(b)No misleading information</p>

<p>All written information supplied by the Borrower is true, complete and accurate in all material respects as at the date it was given and is not misleading in any respect.</p>

<p><b>6. (1) Events of Default</b></p>

<p>Each of the events or circumstances set out hereunder is an Event of Default.</p>

<p>a. Non-payment/Part-payment</p>

<p>The Borrower does not pay or incompletely pays on the due date any amount payable pursuant to this Agreement.</p>

<p>b. Other obligations</p>

<p>he Borrower does not comply with any provision of this Agreement (other than those referred to in Clause a (Non-payment)).</p>

<p>c. Unlawfulness</p>

<p>It is or becomes unlawful for the Borrower not to perform any of his/her obligations under this Agreement.</p>

<p>d. Repudiation</p>

<p>The Borrower repudiates this Agreement or evidences an intention to repudiate this Agreement.</p>

<p>e. Material adverse change</p>

<p>Any event or circumstance occurs which the Bank reasonably believes may have a Material Adverse Effect on the repayment of the COVID-19 TCF.</p>

<p>(2) Default Remedies</p>

<p>Following the notice of default, the borrower is expected to make complete payment, failure to do so, the bank will immediately initiate loan recovery process, which shall include but not limited to, confiscating the Borrower’s personal properties, taking ownership of the collateral(s) pledged, instituting an action for breach of contract, exercising lien over the Borrower’s assets with the Bank, among others.</p>

<p>The Borrower shall indemnify the Bank against all losses and expenses, which may be sustained or incurred as a consequence of the occurrence of an Event of Default. For this purpose, a certificate from the Bank as to the amount of any such loss or expense shall be final and conclusive, save in the case of a manifest error.</p>

<p>(3) Waiver</p>

<p>To the extent that the Borrower may, in any suit, action or proceeding brought in connection with the exercise of the Default Remedies, be entitled to the benefit of any provision of law invalidating the exercise of the Default Remedies for any reason whatsoever, the Borrower hereby waives such benefit to the fullest extent permitted by law.</p>

<p><b>7. Set-off</b></p>

<p>(a) The Borrower consents and agrees that the Bank shall, without notice or demand, apply any credit balance (whether then due), to which the borrower is at the time beneficially entitled to in any account with the Bank and/or with any other bank/other financial institutions, in (or towards satisfaction of any sum then due and payable (but unpaid) by the Borrower to the Bank under this Agreement.</p>

<p>(b) No set-off by the Borrower</p>

<p>All payments to be made by the Borrower under this Agreement shall be calculated and be made without (and free and clear of any deduction for) set-off or counterclaim.</p>

<p>8. Limitation of Liability</p>

The Borrower hereby exonerates the Bank from any liability that may arise as a result of the Bank complying with the Borrower’s instructions given over any form of electronic channel. The electronic channel shall include, but not limited to, emails, phone calls, facsimile, SMS.

    <p>9. Severance Clause</p>

 <p>If, at any time, any term or provision of this Agreement shall in whole or in part be held to any extent to be illegal, invalid or unenforceable under any enactment or rule of law, that term or provision or part shall to that extent be deemed not to form part of this Agreement, and the enforceability of the remainder of this Agreement shall not in any way be affected or impaired.</p>

 <p>10. Waivers</p>

 <p>No failure to exercise, or any delay in exercising, on the part of the Bank, any right, power or remedy under this Agreement shall operate as a waiver of it, nor shall any single or partial exercise of any right, power or remedy preclude any further or other exercise or the exercise of any other</p>

 <p>right, power or remedy. The rights, powers and remedies provided in this Agreement are cumulative and not exclusive of any rights, powers or remedies provided by law.</p>

 <p>11. Amendments</p>

 <p>No amendment or variation of this agreement shall take effect unless it is in writing, signed by both parties. However, the Bank reserves the right to review the rate charged on the loan amount as interest by issuing the Borrower not less five (5) Business Day notice.</p>

 <p><b>12. Counterparts</b></p>

 <p>This Agreement may be executed in any number of counterparts, and this has the same effect as if the signatures on the counterparts were on a single copy of the Agreement.</p>

 <p><b>13. Arbitration and dispute resolution</b></p>

<p>1. In the case of any dispute or disputes (a “Dispute”) between the parties arising out of or relating to the construction, validity, performance or interpretation of this Agreement or the breach thereof, either party shall refer the Dispute to arbitration in accordance with the arbitral rules contained in the Arbitration & Conciliation Act, LFN 2004.</p>

<p>2. Each party shall appoint an arbitrator and the two arbitrators so appointed shall request an independent third arbitrator.</p>

<p>3. If either party fails to appoint an arbitrator within five (5) days of receiving notice of the appointment of an arbitrator by the other party, such arbitrator shall at the request of that party be appointed by the President of the Nigerian Institute of Chartered Arbitrators;</p>

<p>4. Each party shall bear its own costs and expenses (including attorneys' fees and disbursements) incurred in connection with the arbitration. All other costs and expenses attributable to the arbitration (including the fees of the third arbitrator) shall be allocated equally between the parties.</p>

<p>5. There shall be no right of appeal or application to court, (save for the purposes of enforcement of any award of the arbitral panel), from the decision of the arbitration panel, as any award made by the arbitration panel shall be final, conclusive and binding upon the parties.</p>

<p><b>14.Insurance Cover</b></p>

    <p>The Borrower shall adequately insure the loan amount with a reputable insurance company endorsed by the Banker’s nominated Insurance Broker.</p>

    <p>The Borrower shall retain an equivalent of 1% of the loan value towards Insurance Premium payments to satisfy the requirement for Credit Life Insurance.</p>

<p><b>15.Governing law</b></p>

<p>This loan Agreement shall be governed by and shall be construed in accordance with applicable laws of Nigeria.

    <p><b>16.Disclosure of Information</b></p>

<p>The Borrower hereby grants his/her consent to the Bank to</p>

<p>I. Disclose information relating to his/her account and this loan transaction to authorized persons, including but not limited to Credit Bureaus, Regulatory Authorities, Law Enforcement Agencies, among others, and to cause to be publish and retain on the Credit Risk Management System of the Central Bank of Nigeria and Credit Bureaus all information relating to the Borrower’s status of indebtedness.</p>

<p>II. Use acquired information to validate/advertise the Banks loan products and services.</p>

<p>IN WITNESS whereof the Parties have executed this document on the date first above written.</p>
<p><b>SIGN AND DELIVERED</b> For and On Behalf of the within- named Bank</p>
<div class="col-md-12">
<div class="col-md-4 float-left">
  <img src="img/one.png">  
  <p>CHIBUZO OGBONNA </p>
<b>PRODUCT MANAGER </b>
</div>
<div class="col-md-4 float-left">
   <p><br></p>
    </div>
<div class="col-md-4 float-left">
  <img src="img/two.png">
  <p>JERRY OSAGIE</p>
  <b>HEAD, CREDIT</b>

</div>
    </div>
    <p><b>SIGNED AND DELIVERED </b>by the

Within named Borrower</p>
<p> <?=$row['Business/Company Name'];?></p>
<form method="post" id="agree">
   <p id="result"></p>
    <div class="form-group col-md-12">
        <input type="hidden" name="bvn" value="<?=$_SESSION['bvn'];?>">
        <input type="hidden" name="cname" value="<?=$row['Business/Company Name'];?>">
         <p><input type="checkbox" name="check" required>
        &nbsp;I have read and agree to the Terms and Conditions, Acceptance of this offer and agreement is subject to the Guarantor’s consent</p>
    </div>
    <div class="form-group col-md-3">
         <input type="submit" name="accept" value="Accept" class="btn btn-sm btn-success btn-block" required>
    </div>
         <div class="form-group col-md-3">
<?php
        if(isset($_GET['reject'])){
     session_start();
session_unset();
session_destroy();
            $agree="Rejected";
        $bvn = $_GET['reject'];
        $cname=$row['Business/Company Name'];    
       // $tsql= "UPDATE [SmeGuarantors] SET Decision='$agree' WHERE ApplicantBvn='$bvn'";
             $tsql="INSERT INTO [SmeGuarantors] (ApplicantBvn, ApplicantName, Decision)VALUES('$bvn','$cname','$agree')";
$getResults= sqlsrv_query($conn, $tsql);
         echo '<script> 
        swal("Error!", "You have rejected the Terms and Conditions!", "error"); 
        setTimeout(function(){
            window.location.href = "https://covid19.nmfb.com.ng/";
         }, 5000);
         </script>';
    
} 
         
         ?>
     
     <a class="btn btn-sm btn-danger btn-block" href="offer_and_aggrement.php?reject=<?=$_SESSION['bvn'];?>">Reject</a>
     
    </div>
</form>
      <script>
        $(document).ready(function(){
            //$('#create').click(function(event){
            $("form#agree").submit(function(e) {
                event.preventDefault();
                //var formData = $('#deploy').serialize();    
                  var formData = new FormData(this);
                //console.log(formData);
                
                 $.ajax({
        url: 'inc/agree.php',
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
</div>


<?php require'inc/footer.php';?>
