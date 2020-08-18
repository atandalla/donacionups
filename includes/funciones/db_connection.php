<?php
    $conn = new mysqli('remotemysql.com','BqFO3NU4ph', 'M8GPZ4qMDl', 'BqFO3NU4ph'); //direccion ip, passw, bd
    if($conn->connect_error){
        echo $error->$conn->connect_error;
    }


    
?>