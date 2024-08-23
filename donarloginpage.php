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
               font-size: 21px;
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
    </style>
    
</head>
<body>
      <form action="">

      <div class="t1">
                   <header>Blood Bank Management System  
                    <span>Name:
                        <?php
                         session_start();
                         $h=$_SESSION['u'];
                         echo"$h";
                        ?>
                    </span>
                     </header>
                  
                   </div>
                   <div class="t2">
                   <a href="donarloginpage.php">Dashboard</a>
                   <a href="donate.php">Donate</a>
                    <a href="don request.php">Requests</a>
                    <a href="">Print Certificate</a>
                    <a href="home.php">Logout</a>
                   </div>
                <div class="">
                    <?php
                $con=mysqli_connect('localhost','root','seedit','bloodgroup');
                $q="select sum(unit) as x1 from blood_donation";
                $rs=mysqli_query($con,$q);
                $a=0;
                while($row=mysqli_fetch_array($rs))
                {
                     $a= $row['x1'];
                }

                // $con=mysqli_connect('localhost','root','seedit','bloodgroup');
                // $q="select sum() as x1 from blood_donation where stetus=''";
                // $rs=mysqli_query($con,$q);
                // $b=0;
                // while($row=mysqli_fetch_array($rs))
                // {
                //      $b= $row['x1'];
                   
                // }

                $con=mysqli_connect('localhost','root','seedit','bloodgroup');
                $q="select COUNT(stetus) as x1 from blood_donation where stetus='pending'"; 
                $rs=mysqli_query($con,$q);
                $c=0;
                while($row=mysqli_fetch_array($rs))
                {
                     $c= $row['x1'];
                }

                $con=mysqli_connect('localhost','root','seedit','bloodgroup');
                $q="select count(stetus) as x1 from blood_donation where stetus='Approve'";
                $rs=mysqli_query($con,$q);
                while($row=mysqli_fetch_array($rs))
                {
                     $d= $row['x1'];
                }

                $con=mysqli_connect('localhost','root','seedit','bloodgroup');
                $q="select count(stetus) as x1 from blood_donation where stetus='Reject'";
                $rs=mysqli_query($con,$q);
                while($row=mysqli_fetch_array($rs))
                {
                     $e= $row['x1'];
                }
                
              ?>
             <div class="flex-container">
                <div class="flex-item"><p class="pra m">Blood donated</p><p class="pra t">Total:<?php echo $a; ?> Units</p></div>
                <div class="flex-item"><p class="pra m">Total Request</p><p class="pra t">Total:<?php ?> Units</p></div>
                <div class="flex-item"><p class="pra m">Request Pending</p><p class="pra t">Total:<?php echo $c;?> Units</p></div>
                <div class="flex-item"><p class="pra m">Request Accepted</p><p class="pra t">Total:<?php echo $d; ?> Units</p></div>
                <div class="flex-item"><p class="pra m">Request Rejected</p><p class="pra t">Total:<?php echo $e; ?> Units</p></div>
             </div>
        </div>
                    
                      
?>
        </div>
    </div>
                

</div>
                   


      </form