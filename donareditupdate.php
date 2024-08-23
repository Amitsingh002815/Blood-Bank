<?php

     $a= $_GET['t1'];
     $b= $_GET['t2'];
     $c= $_GET['t3'];
     $d= $_GET['t4'];
   $con=mysqli_connect('localhost','root','seedit','login');
   $q="update logined set  DonorName='$b', DonorEmail='$c', Mobile='$d' where DonorID='$a' ";
   $rs=mysqli_query($con,$q);
   if($rs==true)
   {
    echo"<script>alert('Updated')</script>";
    echo"<script>window.location='login.php'</script>";
   }
   else 
   {
    echo"error";
   }
  
?>
