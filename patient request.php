<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
            height:45px;
            background-color:red;
            padding-top:10px;
           
        }
        .side2{
            float:left;
            width:40%;
            /* margin-top:10px; */
            padding-top:10px;
            height:45px;
            background-color:red;
        }
        .side2 a{
            margin-left:25px;
            font-size:25px;
            text-decoration:none;
            color:white;
        }
        .side2 a:hover{
            color:black;
            
        }
        h1{
            text-decoration:underline;
        }
        .section{
            width:700px;
            margin:50px 500px;
        }
        .t1{
            background-color:black;
            color:red;
        }
        p{
            color:white;
            background-color:#7F8C8D;
            width:80px;
            padding-left:6px;
            font-family:bold;
        }
        span{
            margin-left:240px;
        }
      
    </style>
</head>
<body>
    <form action="">
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
        <center><h1>Your Request</h1></center><br>
           <table class='table'>
            <Thead>
                <th>S.No</th>
                <th>Request ID</th>
                <th>Units (in ml)</th>
                <th>status</th>
                <th>Action</th>
            </Thead>

            <tbody>
            <?php
$sno = 1;
$con = mysqli_connect('localhost', 'root', 'seedit', 'bloodgroup');
$q = "SELECT * FROM blood_request";

$rs = mysqli_query($con, $q);
while ($row = mysqli_fetch_array($rs)) {
    $statu = $row['Status']; // Corrected spelling of 'status'

    if ($statu == 'No Action') {
        $editbtn = "<a href=''>Edit</a>";
        $delebtn = "<a href=''>Delete</a>";
    } else {
        $editbtn = "";
        $delebtn = "";
    }
    echo "<tr>
           <td>$sno</td>
           <td>$row[Request_ID]</td>
           <td>$row[Units]</td> 
           <td><p>$row[Status]</p></td> 
           <td> $editbtn  $delebtn</td> 
           
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