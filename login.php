<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
          *{
            margin: 0;
            padding: 0;
        }
        .t1{
            float: left;
            width: 53.8%;
            height: 40px;
            background-color: red;
            font-size: 25px;
            padding-top: 10px;
            color: white;
            padding-left: 20px;
        }
        
        .t2{
            float: left;
            width: 45%;
            height: 40px;
            background-color: red;
            padding-top: 10px;
           
        }
        .t2 a{
               margin-left: 20px;
               padding-left: 30px;
               font-size: 22px;
               text-decoration: none;
               color: white;
        }
        .t2 a:hover{
            color: black;
        }
        .container{
            display: grid;
            gap: 4;
        }
    .box{
        width: 200px;
        height: 200px;
        background-color: rgb(232, 235, 232);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border:1px solid black;
        box-shadow: 1px 1px 1px 1px rgb(198, 11, 11);
        float: left;
        /* margin-left: 15px; */
        

    }
    p{
        font-size: 25px;
    }
    .flex-container{
        display:flex;
        width:100%;
        height:55vh;
        column-gap:40px;
        row-gap:70px;
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
        
    }
    .pra{
        margin-left:40px;
        margin-right:40px;
        margin-top:30px;
        margin-bottom:20px;
        font-size:25px;
        color:red;
    }
    .m{
        font-size:27px;
        color:black;
        margin-top:-5px;

    }
    .t{
        font-size:24px;
        color:black;
        margin-top:-5px;
        font-weight:bold;
           
    }
    span{
        margin-left:240px;
    }
    
    </style>
</head>
<body>
      <form action="">

      <div class="t1">
                   <header>Blood Bank Management System  
                <span>Name: <?php
                       session_start();
                       $m=$_SESSION['m'];
                       echo"$m  ";
                 ?></span>
                   </header>
                  
                   </div>
                   <div class="t2">
                   <a href="login.php">Dashboard</a>
                   <a href="Donar.php">Donar</a>
                   <a href="list patient.php">Patient</a>
                    <a href="donation.php">Donations</a>
                    <a href="request.php">Requests</a>
                    <a href="home.php">Logout</a>
                   </div>

                    
                    <div class="">
                    <?php
                $con=mysqli_connect('localhost','root','seedit','bloodgroup');
                $q="select sum(unit) as x1 from blood_donation where blood_group='A'";
                $rs=mysqli_query($con,$q);
                $a=0;

                while($row=mysqli_fetch_array($rs))
                {
                     $a= $row['x1'];
                }
                $con=mysqli_connect('localhost','root','seedit','bloodgroup');
                $q="select sum(unit) as x1 from blood_donation where blood_group='A+'";
                $rs=mysqli_query($con,$q);
                $b=0;
                while($row=mysqli_fetch_array($rs))
                {
                     $b= $row['x1'];
                   
                }
                $con=mysqli_connect('localhost','root','seedit','bloodgroup');
                $q="select sum(unit) as x1 from blood_donation where blood_group='A-'";
                $rs=mysqli_query($con,$q);
                $c=0;
                while($row=mysqli_fetch_array($rs))
                {
                     $c= $row['x1'];
                }
                $con=mysqli_connect('localhost','root','seedit','bloodgroup');
                $q="select sum(unit) as x1 from blood_donation where blood_group='B'";
                $rs=mysqli_query($con,$q);
                while($row=mysqli_fetch_array($rs))
                {
                     $d= $row['x1'];
                }
                $con=mysqli_connect('localhost','root','seedit','bloodgroup');
                $q="select sum(unit) as x1 from blood_donation where blood_group='B+'";
                $rs=mysqli_query($con,$q);
                while($row=mysqli_fetch_array($rs))
                {
                     $e= $row['x1'];
                }
                $con=mysqli_connect('localhost','root','seedit','bloodgroup');
                $q="select sum(unit) as x1 from blood_donation where blood_group='B-'";
                $rs=mysqli_query($con,$q);
                while($row=mysqli_fetch_array($rs))
                {
                     $f= $row['x1'];
                }
                $con=mysqli_connect('localhost','root','seedit','bloodgroup');
                $q="select sum(unit) as x1 from blood_donation where blood_group='AB+'";
                $rs=mysqli_query($con,$q);
                while($row=mysqli_fetch_array($rs))
                {
                     $g= $row['x1'];
                }
                $con=mysqli_connect('localhost','root','seedit','bloodgroup');
                $q="select sum(unit) as x1 from blood_donation where blood_group='AB-'";
                $rs=mysqli_query($con,$q);
                while($row=mysqli_fetch_array($rs))
                {
                     $h= $row['x1'];
                }
                $con=mysqli_connect('localhost','root','seedit','bloodgroup');
                $q="select sum(unit) as x1 from blood_donation where blood_group='O+'";
                $rs=mysqli_query($con,$q);
                while($row=mysqli_fetch_array($rs))
                {
                     $i= $row['x1'];
                }
                $con=mysqli_connect('localhost','root','seedit','bloodgroup');
                $q="select sum(unit) as x1 from blood_donation where  blood_group='O-'";
                $rs=mysqli_query($con,$q);
                while($row=mysqli_fetch_array($rs))
                {
                     $j= $row['x1'];
                }
              ?>
             <div class="flex-container">
                <div class="flex-item"><p class="pra">A</p><p class="pra m">Blood Available</p><p class="pra t">Total:<?php echo $a; ?> Units</p></div>
                <div class="flex-item"><p class="pra">A+</p><p class="pra m">Blood Available</p><p class="pra t">Total:<?php echo $b; ?> Units</p></div>
                <div class="flex-item"><p class="pra">A-</p><p class="pra m">Blood Available</p><p class="pra t">Total:<?php echo $c; ?> Units</p></div>
                <div class="flex-item"><p class="pra">B</p><p class="pra m">Blood Available</p><p class="pra t">Total:<?php echo $d; ?> Units</p></div>
                <div class="flex-item"><p class="pra">B+</p><p class="pra m">Blood Available</p><p class="pra t">Total:<?php echo $e; ?> Units</p></div>
                <div class="flex-item"><p class="pra">B-</p><p class="pra m">Blood Available</p><p class="pra t">Total:<?php echo $f; ?> Units</p></div>
                <div class="flex-item"><p class="pra">AB+</p><p class="pra m">Blood Available</p><p class="pra t">Total:<?php echo $g; ?> Units</p></div>
                <div class="flex-item"><p class="pra">AB-</p><p class="pra m">Blood Available</p><p class="pra t">Total:<?php echo $h; ?> Units</p></div>
                <div class="flex-item"><p class="pra">O+</p><p class="pra m">Blood Available</p><p class="pra t">Total:<?php echo $i; ?> Units</p></div>
                <div class="flex-item"><p class="pra">O-</p><p class="pra m">Blood Available</p><p class="pra t">Total:<?php echo $j; ?> Units</p></div>
             </div>
        </div>
                    
                      
?>
        </div>
    </div>
                

</div>
                   


      </form>
     
</body>
</html>
