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
        width: 700px;
        height: 680px;
         margin-top: 20px;
         margin-left: 500px;
        border:2px solid white;
        filter: drop-shadow(10px 12px 10px black);
       }
       /* .box:hover{
          border:2px solid white; 
        filter: drop-shadow(10px 12px 10px black);
       } */
       h1{
        margin-top: 30px;
        margin-left: 210px;
       }
       hr{
        width: 450px;
        margin-left: 100px;
       }
       .mb-3{
        margin-left: 70px;
        margin-top: 30px;
        font-size: 20px;
       }
       .btn{
        margin-left: 50px;
        margin-top: 30px;
        float: left;
       }
       .form-control{
        width: 500px;
       }
       h5{
        float: left;
        margin-top: 35px;
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
                 <h1>Register Page</h1><hr>

        <div class="mb-3">
                <label for="text" class="form-label">Name:</label>
                <input type="name" class="form-control" id="name" placeholder="Enter your name" name="t1">
        </div>
              
        <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="t2">
        </div>
        <div class="mb-3">
                <label for="mob" class="form-label">Mobile:</label>
                <input type="tel" class="form-control" id="tel" placeholder="Enter Mobile number" name="t3">
        </div>
        <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="t4">
        </div>
        <div class="mb-3">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
         </div>
                <button type="submit" class="btn btn-primary">Register</button>
               <h5> Already registered? <a href="logindonar.php">Login here</a></h5>
         </form>
         </div>
                   
                   
     
      </form>
</body>
</html>


<?php

        if(isset($_GET['t1'])){
            $a=$_GET['t1'];
            $b=$_GET['t2'];
            $c=$_GET['t3'];
            $d=$_GET['t4'];

           


               $con=mysqli_connect('localhost','root','seedit','bloodgroup');
               $q="insert into donarlogin values(NULL,'$a','$b','$c','$d')";
               $rs=mysqli_query($con,$q);

               if($rs){
                echo"<script>alert('Registered Successfully')</script>";
                echo "<script>window.location='logindonar.php'</script>";
               }else{
                echo"<script>alert('Error')</script>";
               }
        } 

?>

