<?php
    $a = $_GET['id'];
    $con = mysqli_connect('localhost', 'root', 'seedit', 'donar');
    $q = "SELECT * FROM donars where DonarID='$a'";

    $rs = mysqli_query($con, $q);

 
        if($row = mysqli_fetch_array($rs)) {
            echo "Name: $row[DonarID]<br>
            Blood Group: $row[DonarName]<br>
            Age: $row[MobileNo]<br>
            <br>";
        }
    
  
?>

