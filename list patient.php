<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        *{
            margin:0;
            padding:0;
        }
        .t1 {
            float: left;
            width: 55%;
            height: 45px;
            background-color: red;
            font-size: 25px;
            padding-top: 10px;
        }
        header{
            color:white;
        }
        .t2 {
            float: left;
            width: 45%;
            height: 45px;
            background-color: red;
            padding-top: 10px;
        }
        .t2 a {
            margin-left: 20px;
            padding-left: 20px;
            font-size: 21px;
            text-decoration: none;
            color:white;
        }
        .t2 a:hover {
            color: black;
        }
        .t3{
            margin:50px 400px
        }
        h1{
            text-decoration:underline;
            margin-top:60px;
        }
        .bb{
            width:1300px;
            margin-left:200px;
        }
        .table{
            margin-top:60px;
            margin-left:40px;
        }
        span{
            margin-left:240px;
        }
    </style>
</head>
<body>
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
        <a href="donar.php">Donors</a>
        <a href="list patient.php">Patients</a>
        <a href="donation.php">Donations</a>
        <a href="request.php">Requests</a>
        <a href="home.php">Logout</a>
    </div><br>

    <div class="bb">
        <center><h1>List of all Patients</h1></center>
        <table class="table">
            <thead>
                <th>S.no</th>
                <th>Patients ID</th>
                <th>Patients Name</th>
                <th>Patients Email</th>
                <th>Mobile No.</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                $con=mysqli_connect('localhost','root','seedit','login');
                $q="SELECT * FROM patient";
                $rs=mysqli_query($con,$q);
                $sno = 1;
                while($row=mysqli_fetch_array($rs)){
                    echo "<tr>
                        <td>$sno</td>
                        <td>{$row['DonorID']}</td>
                        <td>{$row['PatientName']}</td>
                        <td>{$row['PatientEmail']}</td>
                        <td>{$row['Mobile']}</td>
                        <td><a href='listpatedit.php?id=$row[DonorID]'>Edit</a> <a href='#'>Delete</a></td>
                    </tr>";
                    $sno++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
