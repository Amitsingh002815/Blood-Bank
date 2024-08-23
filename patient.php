<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login donar</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        
        .t1{
            float: left;
            width: 70%;
            height: 50px;
            background-color: red;
            font-size: 25px;
            padding-top: 10px;
            
        }
        .t2{
            float: left;
            width: 30%;
            height: 50px;
            background-color: red;
            padding-top: 10px;
        }
        .t2 a{
               margin-left: 20px;
               padding-left: 30px;
               font-size: 20px;
               text-decoration: none;

        }
        .t2 a:hover{
            color: black;
        }
       header{
        padding-left: 10px;
       }
       .box{
        width: 600px;
        height: 500px;
         margin-top: 100px;
         margin-left: 500px;
        border:2px solid white;
        filter: drop-shadow(10px 12px 10px black);
       }
       /* .box:hover{
        filter: drop-shadow(10px 7px 10px orange);
       } */
       h1{
        margin-top: 30px;
        margin-left: 140px;
       }
       hr{
        width: 450px;
        margin-left: 80px;
       }
       .mb-3{
        margin-left: 50px;
        margin-top: 35px;
       }
       .btn{
        margin-left: 50px;
        margin-top: 35px;
        float: left;
       }
       .form-control{
        width: 450px;
       }
       h5{
        float: left;
        margin-top: 40px;
        margin-left: 20px;
       }
    </style>
</head>
<body>
      <form action="">
        
      <div class="t1">
                   <header>Blood Bank Management System</header>
                 
                   </div> 
                   <div class="t2">
                   <a href="">Home</a>
                   <a href="admin login.php">Admin</a>
                   <a href="">Donar</a>
                    <a href="">Patient</a>
    </div><br><br>

        <div class="box">   
                 <h1>Patient Login Page</h1><hr>
              
        <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="t1">
        </div>
        <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="t2">
        </div>
        
                <button type="submit" class="btn btn-primary">Login</button>
               <h5> Don't have an account? <a href="patient regester.php">Register here</a></h5>
         </form>
         </div>
                   
                   
     
      </form>
</body>
</html>

<?php
     if(isset($_GET['t1'])){
        $a=$_GET['t1'];
        $b=$_GET['t2'];

        session_start();
      
        
        $con=mysqli_connect('localhost','root','seedit','bloodgroup');
        $q="select * from patient where PatientEmail='$a' and Password='$b'";
        $rs=mysqli_query($con,$q);
        if($row=mysqli_fetch_array($rs)){

           $_SESSION['mn']=$row['PatientName'];
           $h=$row['PatientName'];

            echo"<script>alert('Logined successfully')</script>";
            echo"<script>window.location='patient log.php'</script>";
        }else{
            echo"<script>alert('Try Again')</script>";
        }
     }
?>
