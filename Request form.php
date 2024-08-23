<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            background-color: aqua;
        }
        h2 {
            margin-left: 10px;
            font-size: 25px;
            color:white;
        }
        .side1 {
            float: left;
            width: 60%;
            height: 45px;
            background-color: red;
            padding-top: 10px;
        }
        .side2 {
            float: left;
            width: 40%;
            padding-top: 10px;
            height: 45px;
            background-color: red;
        }
        .side2 a {
            margin-left: 25px;
            font-size: 25px;
            text-decoration: none;
            color: white;
        }
        .side2 a:hover {
            color: black;
           
        }
        h3 {
            margin-left: 60px;
        }
        .section {
            width: 450px;
            background-color: aqua;
            height: 500px;
            margin-left: 630px;
            margin-top: 90px;
            padding-left: 20px;
            padding-top: 30px;
            border: 2px solid aqua;
            filter: drop-shadow(10px 7px 10px black);
            float: left;
        }
        .form-label {
            margin-top: 20px;
        }
        .footer {
            width: 100%; /* Added width unit */
            height: 70px;
            background-color: red;
            margin-top: 715px;
            font-size: 30px;
            padding-left: 700px;
            padding-top: 20px;
        }
        span{
            margin-left:230px;
        }
    </style>
</head>
<body>
    <form action="" method="GET"> <!-- Added method attribute -->
        <div class="side1">
            <h2>Blood Bank Management System
                <span>Name:
                    <?php
                     session_start();
                     $h=$_SESSION['mn'];
                     echo"$h";
                    ?>

                </span>
            </h2>
        </div>
        <div class="side2">
            <a href="patient log.php">Dashboard</a>
            <a href="Request form.php">Request blood</a>
            <a href="patient request.php">Requests History</a>
            <a href="home.php">Logout</a>
        </div><br>

        <div class="section">
            <h3>Blood Request Form</h3>

            <label for="browser" class="form-label">Blood Group</label>
            <input class="form-control" list="browsers" name="t1" id="browser">
            <datalist id="browsers">
                <option value="A+">
                <option value="A-">
                <option value="B+">
                <option value="B-">
                <option value="AB+">
                <option value="AB-">
                <option value="O+">
                <option value="O-">
            </datalist>
  
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">No. of units</label>
                <input type="text" class="form-control" id="email" placeholder="No. of units (in mL)" name="t2">
            </div>
            <label for="email" class="form-label">Reason</label><br>
            <textarea name="t3" id="" cols="30" rows="3"></textarea><br>
            <input type="submit" value="Request" class="btn btn-primary">
        </div>

        <footer class="footer">@2024 CSEtutorial.com</footer>
    </form>
</body>
</html>

<?php

      if(isset($_GET['t1'])){
        $a=$_GET['t1'];
        $b=$_GET['t2'];
        $c=$_GET['t3'];
        $d='No Action';
        $con=mysqli_connect('localhost','root','seedit','bloodgroup');
        $q="INSERT INTO blood_request VALUES(NULL,'$a','$b','$c','$d')";

        $rs=mysqli_query($con,$q);
        if($rs){
            echo"<script>alert('Saved Successfully')</script>";
            echo"<script>window.location='patient log.php'</script>";
        }else{
            echo"ERROR";
        }
      }
?>
