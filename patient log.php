<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        h2{
            margin-left:10px;
            font-size:25px;
            color:white;
        }
        .side1{
            float:left;
            width:60%;
            height:40px;
            background-color:red;
            padding-top:10px;
           
        }
        .side2{
            float:left;
            width:40%;
            /* margin-top:10px; */
            padding-top:10px;
            height:40px;
            background-color:red;
        }
        .side2 a{
            margin-left:30px;
            font-size:25px;
            text-decoration:none;
            color:white;
        }
        .side2 a:hover{
            color:black;
           
        }
        .flex-container{
        display:flex;
        width:100%;
        height:55vh;
        column-gap:40px;
        row-gap:45px;
        flex-wrap:wrap;
        justify-content:center;
        padding:35px 0px;
        align-items:center;
    }
    .flex-item{
        background-color:transparent;
        width:17%;
        height:23vh;
        border:2px solid gray;
        box-shadow:4px 4px 8px 0px gray;
        border-radius:9px;
        font-family:sans-serif;
        padding:0px 15px;
        margin-top:30px;
        
    }
    /* .pra{
        margin-left:40px;
        margin-right:40px;
        margin-top:30px;
        margin-bottom:20px;
        font-size:25px;
        color:red;
    } */
    .m{
        font-size:27px;
        color:black;
        margin-top:30px;
        color:red;
    }
    .t{
        font-size:24px;
        color:black;
        margin-top:15px;
        font-weight:bold;       
    }
    span
    {
        margin-left:240px;
    } 
        .footer{
            width: ;
            height: 60px;
            background-color: red;
            margin-top: 680px;
            font-size: 30px;
            padding-left: 700px;
            padding-top: 20px;
        }
    </style>
</head>
<body>
      <div class="side1">
        <h2>Blood Bank Management System
            <span> Name:
              <?php
             session_start();
             $h=$_SESSION['mn'];
             echo"$h";
              ?>
            </span>
        </h2>
      </div>
      <div class="side2">
          <a href="">Dashboard</a>
          <a href="Request form.php">Request blood</a>
          <a href="patient request.php">Requests History</a>
          <a href="home.php">Logout</a>
      </div><br>
               <?php

              
                // $con=mysqli_connect('localhost','root','seedit','bloodgroup');
                // $q="select sum(unit) as x1 from blood_donation";
                // $rs=mysqli_query($con,$q);
                // $a=0;
                // while($row=mysqli_fetch_array($rs))
                // {
                //      $a= $row['x1'];
                // }

                // $con=mysqli_connect('localhost','root','seedit','bloodgroup');
                // $q="select sum() as x1 from blood_donation where stetus=''";
                // $rs=mysqli_query($con,$q);
                // $b=0;
                // while($row=mysqli_fetch_array($rs))
                // {
                //      $b= $row['x1'];
                   
                // }

                // $con=mysqli_connect('localhost','root','seedit','bloodgroup');
                // $q="select COUNT(stetus) as x1 from blood_donation where stetus='pending'"; 
                // $rs=mysqli_query($con,$q);
                // $c=0;
                // while($row=mysqli_fetch_array($rs))
                // {
                //      $c= $row['x1'];
                // }

                // $con=mysqli_connect('localhost','root','seedit','bloodgroup');
                // $q="select count(stetus) as x1 from blood_donation where stetus='Approve'";
                // $rs=mysqli_query($con,$q);
                // while($row=mysqli_fetch_array($rs))
                // {
                //      $d= $row['x1'];
                // }

                // $con=mysqli_connect('localhost','root','seedit','bloodgroup');
                // $q="select count(stetus) as x1 from blood_donation where stetus='Reject'";
                // $rs=mysqli_query($con,$q);
                // while($row=mysqli_fetch_array($rs))
                // {
                //      $e= $row['x1'];
                // }
                
              ?>



      <div class="flex-container">
                <div class="flex-item"><p class="pra m">Blood Requested</p><p class="pra t">Total:<?php  ?> Units</p></div>
                <div class="flex-item"><p class="pra m">Total Request</p><p class="pra t">Total:<?php ?> Units</p></div>
                <div class="flex-item"><p class="pra m">Request Pending</p><p class="pra t">Total:<?php  ?> Units</p></div>
                <div class="flex-item"><p class="pra m">Request Accepted</p><p class="pra t">Total:<?php  ?> Units</p></div>
                <div class="flex-item"><p class="pra m">Request Rejected</p><p class="pra t">Total:<?php  ?> Units</p></div>
             </div>
          

      <footer class="footer">@2024 CSEtutorial.com</footer>
</body>
</html>