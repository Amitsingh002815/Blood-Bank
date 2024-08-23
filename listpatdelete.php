<?php
    $a = $_GET['t1'];
    $b = $_GET['t2'];
    $c = $_GET['t3'];
    $d = $_GET['t4'];

    $con = mysqli_connect('localhost', 'root', 'seedit', 'login');
    $q = "UPDATE patient SET PatientName='$b', PatientEmail='$c', Mobile='$d' WHERE DonorID='$a'"; // Corrected SQL query

    $rs = mysqli_query($con, $q);

    if ($rs) {
        echo "Save";
    } else {
        echo "Error";
    }
?>
