<?php
 $serverName = "nmfb.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "NMFB Targeted Credit Facility (TCF) Applications", // update me
        "Uid" => "nmfb", // update me
        "PWD" => 'VLKG@Ue4$i' // update me
    );
   $conn = sqlsrv_connect($serverName, $connectionOptions);  
if($conn){
    //echo'Connected Successful';
}else{
    echo"Error Connecting";
    die(print_r(sqlsrv_errors(), true));
}
