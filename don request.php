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
            margin: 0;
            padding: 0;
        }
        .side1{
             float: left;
            width: 55%; 
            height: 50px;
            padding-top: 10px;
            font-size: 25px;
            background-color: red;
        }
        .side2{
            float: left;
            width: 45% ;
            height: 50px;
            padding-top: 10px;
            font-size: 25px;
            background-color: red;
        }
        .side2 a{
            padding-left: 35px;
            text-decoration: none;
            color: white;
        }
        .side2 a:hover{
            color: black;
            filter: drop-shadow(20px 2px 10px black);
        }
        .section{
            width: 800px;
            margin-left: 450px;
        }
        h3{
            color:white;
        }
        h2{
            text-decoration: underline;
            margin-top: 60px;
        }
        .table{
            margin-top: 40px;
            margin-left: 60px;
        }
        span{
            margin-left:180px;
        }
        p{
        background-color:#797D7E ;
        width:80px;
        color:white;
        font-size:15px;
        padding-left:8px;
    }
    </style>
</head>
<body>
<div class="container1">
        <div class="side1">
            <h3>Blood Bank Management system
            <span>Name:
                <?php
                session_start();
                $h=$_SESSION['u'];
                echo"$h";
                ?>
            </span>
            </h3>
        </div>
        <div class="side2">
            <a href="#">Dashboard</a>
            <a href="#">Donate</a>
            <a href="#">Request</a>
            <a href="#">Print Certificate</a>
            <a href="home.php">Logout</a>
        </div><br>

        <div class="section">
            <center><h2>Donation Request</h2></center>
            <table class="table">
                <thead>
                    <th>S.No</th>
                    <th>Donation ID</th>
                    <th>Units (in ml)</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                <?php
$con=mysqli_connect('localhost','root','seedit','bloodgroup');
$q="select * from blood_donation ";
$rs=mysqli_query($con,$q);

while($row=mysqli_fetch_array($rs)){
  
    $status = $row['stetus'];

  
    if($status == 'No Action') {
        $editLink = "<a href='# '>Edit</a>";
        $deleteLink = "<a href='#'>Delete</a>";
    }else {
        $editLink = "";
        $deleteLink = "";
    }

    echo"<tr>
            <td>$row[id]</td>
            <td>$row[blood_group]</td>
            <td>$row[unit]</td>
            <td><p>$status</p></td>
            <td>$editLink $deleteLink</td>
          </tr>";
}
?>

</tbody>
</table>
        </div>
 
</div>
</body>
</html>
