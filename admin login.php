<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin </title>
    <style>
         *{
            margin: 0;
            padding: 0;
        }
        .t1{
            float: left;
            width: 70%;
            height: 40px;
            background-color: red;
            font-size: 25px;
            padding-top: 10px;
            
          
        }
        .t2{
            float: left;
            width: 30%;
            height: 40px;
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
        .admin{
            width: 450px;
            height: 300px;
            margin: 250px 500px;
            /* padding-top: 250px; */
           border:2px solid white;
           filter:drop-shadow(10px 7px 10px black)
        }
        .admin h1{
            padding-left: 100px;
            text-decoration:underline;
        }
        .admin label{
            font-size: 25px;
            margin: 0 20px;
        }
        .a{
            margin: 0 20px;
            width: 400px;
            height: 40px;
            font-size: 20px;
        }
        .b{
            margin: 0 20px;
            font-size: 20px;
            background-color: red;
        }
        .admin input:hover{
           
            cursor: pointer;
        }
        
    </style>
</head>
<body>
     <form action="">
     <div class="t1">
                   <header>Blood Bank Management System</header>
                 
                   </div>
                   <div class="t2">
                   <a href="home.php">Home</a>
                   <a href="admin login.php">Admin</a>
                   <a href="logindonar.php">Donar</a>
                    <a href="patient.php">Patient</a>
                   </div><br>
   <br>
                   <div class="admin">
                       <h1>Admin Login Page</h1><br>
                       <label for="">Name:</label><br>
                       <input type="Text" placeholder="Enter Name" class="a" name="t3" required><br><br>

                       <label for="">Password:</label><br>
                       <input type="password" placeholder="Enter Password" class="a" name="t4" required><br><br>
                        
                       <input type="submit" value="Login" class="b">
                      
                   </div>

                
                  
     </form>
</body>
</html>

<?php
    if(isset($_GET['t3']) && isset($_GET['t4'])){
        $a = $_GET['t3'];
        $b = $_GET['t4'];

       
        session_start();
        $m='Admin User';
        $_SESSION['m']=$m;
        
        $con = mysqli_connect('localhost','root','seedit','bloodgroup');
        $q = "SELECT * FROM login2 WHERE Name='$a' AND Password='$b'";
        $stmt = mysqli_query($con, $q);
      
        if($row=mysqli_fetch_array($stmt)){
            echo "<script>window.location='login.php'</script>";
        }else{
            echo "<script>alert('Login Failed')</script>";
        }
    }
?>



