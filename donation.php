<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
          *{
            margin: 0;
            padding: 0;
        }
        .t1{
            float: left;
            width: 53.8%;
            height: 45px;
            background-color: red;
            font-size: 25px;
            padding-top: 10px;
            color: white;
            padding-left: 20px;
        }
        
        .t2{
            float: left;
            width: 46%;
            height: 45px;
            background-color: red;
            padding-top: 10px;
           
        }
        .t2 a{
               margin-left: 20px;
               padding-left: 23px;
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
    h1{
        margin-left:400px;
        margin-top:40px;
    }
    hr{
        border:2px solid black;
        width:500px;
        margin-left:400px;
      
    }
    .bb{
        width:1300px;
        margin-left:200px;
    }
    .table{
        margin-top:60px;
    }
    h1{
        text-decoration:underline;
    }
    span{
        margin-left:210px;
    }
    p{
        background-color:#797D7E ;
        width:80px;
        color:white;
        font-size:15px;
        padding-left:7px;
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
                        $m=$_SESSION['m'];
                        echo"$m  ";
                        ?>
                    </span>
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
<br>

                   <div class="bb">
                    <h1>Manage Donation Request</h1>
                    
                    <table class="table">
                        <thead>
                            <th>S.no</th>
                            <th>Donation ID</th>
                            <th> Donar Name</th>
                            <th>Mobile No.</th>
                            <th>Blood Group</th>
                            <th>Units(in mL)</th>
                            <th>Disese</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                    

                        <tbody>
     <?php
     
      
     $sno=1;
     $con=mysqli_connect('localhost','root','seedit','bloodgroup');
     $q="SELECT blood_donation.id as ID,blood_donation.blood_group as bloodgroup,blood_donation.unit as Unit,
     blood_donation.disease as Disease,blood_donation.stetus as statu,donarlogin.DonorName as donarname,
      donarlogin.Mobile as mob FROM blood_donation,donarlogin";

     $rs=mysqli_query($con,$q);
     while($row=mysqli_fetch_array($rs)){

        
        echo" <tr >
              <td>$sno</td>
              <td>$row[ID]</td>
              <td>$row[donarname]</td>
              <td>$row[mob]</td>
              <td>$row[bloodgroup]</td>
              <td>$row[Unit]</td>
              <td>$row[Disease]</td>
              <td><p>$row[statu]</p></td>
              <td><a href='approve.php?id=$row[ID]'>Approve</a> <a href='reject.php?id=$row[ID]'>Reject</a></td>
              </tr>";
             
              $sno++;
          }
        ?>

    </tbody>
    </table>
                     
     </div>


      </form>
     
</body>
</html>


