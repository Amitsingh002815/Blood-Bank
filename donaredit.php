<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
   .t1{
    width:400px;
    height: 400px;
    margin:200px 600px;
   filter:drop-shadow(10px 7px 10px black)
   }
   .form-control{
    width:300px;
   }
  b{
    font-size:20px;
  }
    </style>
</head>
<body>
    <form action="donareditupdate.php">
<?php

$a=$_GET['id'];

$con=mysqli_connect('localhost','root','seedit','login');
$q="Select * from logined where DonorID= '$a'";
$rs=mysqli_query($con,$q);
if($row=mysqli_fetch_array($rs)){
  
    
    echo" <b>Donor ID:</b><input type='text' value='$row[DonorID]' class='form-control' name='t1'> <br>";
    echo" <b>Donor Name:</b><input type='text' value='$row[DonorName]' class='form-control' name='t2'> <br>";
    echo" <b>Donor Email:</b><input type='text' value='$row[DonorEmail]' class='form-control' name='t3'> <br>";
    echo" <b>Mobile No.:</b><input type='text' value='$row[Mobile]' class='form-control' name='t4' ><br> ";

  echo"<button type='submit' class='btn btn-success'>update</button>;";
    

}
        
?>
</form>


</body>
</html>

