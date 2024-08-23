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
            padding-top: 8px;
            color: white;
            padding-left: 20px;
        }
        
        .t2{
            float: left;
            width: 46.2%;
            height: 45px;
            background-color: red;
            padding-top: 10px;
           
        }
        .t2 a{
               margin-left: 20px;
               padding-left: 20px;
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
    h1{
        margin-left:400px;
        margin-top:40px;
        text-decoration:underline;
    }
    hr{
        border:2px solid black;
        width:500px;
        margin-left:400px;
    }
    .bb{
        width:1300px;
        margin-left:180px;
    }
    .table{
        margin-top:60px;
    }span{
        margin-left:200px;
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
                    $c=$_SESSION['m'];
                    echo"$c";
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
                            <th>Request ID</th>
                            <th>Patient Name</th>
                            <th>Mobile No.</th>
                            <th>Blood Group</th>
                            <th>Units(in mL)</th>
                            <th>Reason</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>

                        <tbody>

                        <?php
                        $sno = 1;
                        $con1 = mysqli_connect('localhost', 'root', 'seedit', 'bloodgroup');
                       

                        $q = "SELECT blood_request.Request_ID as request,blood_request.Blood_Group as bloodgroups,blood_request.Units as unit,blood_request.Reason as reason,blood_request.Status as status, patient.PatientName as pname,patient.Mobile as mob FROM blood_request, patient";
                        $rs = mysqli_query($con1, $q);

                        while ($row = mysqli_fetch_array($rs)) {
                            echo "<tr>
                                    <td>$sno</td>
                                    <td>$row[request]</td>
                                    <td>$row[pname]</td>
                                    <td>$row[mob]</td>
                                    <td>$row[bloodgroups]</td>
                                    <td>$row[unit]</td>
                                    <td>$row[reason]</td>
                                    <td><p>$row[status]</p></td>
                                    <td><a href='approve.php?id=$row[request]'>Approve</a>   <a href='reject.php?id=$row[request]'>Reject</a></td>
                                </tr>";
                            $sno++;
                        }


?>

                        </tbody> 
                   </div>
             </form>
     
</body>
</html>





