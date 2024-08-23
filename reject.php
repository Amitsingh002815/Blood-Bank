<?php

         $id=$_GET['id'];
         $r='Reject';
         $con=mysqli_connect('localhost','root','seedit','bloodgroup');
         $q="update blood_donation set stetus='$r' where id='$id'";

         $rs=mysqli_query($con,$q);
         if($rs){
            echo"Save";
         }else{
            echo"Error";
         }


?>