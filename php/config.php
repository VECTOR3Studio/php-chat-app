<?php 
    $conn = mysqli_connect("sql13.hostcreators.sk:3318", "u5658_Simon", "Rudinka40-45", "d5658_messaging_app");
    if($conn){
    } else{
        echo "Error" .mysqli_connect_error();
    }
?>