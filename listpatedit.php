<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
    .t1{
        width:400px;
        height:400px;
        margin: 200px 600px;
    }
    .form-control{
        
    }
    b{
        font-size:20px;
    }

</style>
</head>
<body>
    <form action="listpatdelete.php">
<?php
    $a = $_GET['id'];
    $con = mysqli_connect('localhost', 'root', 'seedit', 'login');
    $q = "SELECT * FROM patient WHERE DonorID='$a'";

    $rs = mysqli_query($con, $q);

    while ($row = mysqli_fetch_array($rs)) {
        echo"<div class='t1'>";
        echo "<b>Patients ID:</b> <input type='text' class='form-control' value='" . $row['DonorID'] . "' name='t1'><br>
             <b>Patients Name:</b> <input type='text' class='form-control' value='" . $row['PatientName'] . "' name='t2'><br>
             <b>Patients Email:</b> <input type='text' class='form-control' value='" . $row['PatientEmail'] . "' name='t3'><br>
             <b>Patients Mobile:</b> <input type='text' class='form-control' value='" . $row['Mobile'] . "' name='t4'> <br>";

        echo"<button type='submit' class='btn btn-dark'>Update</button>";
        echo"</div>";
    }
?>
</form>
</body>
</html>
