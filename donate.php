<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .side1 {
            float: left;
            width: 55%;
            height: 50px;
            padding-top: 10px;
            font-size: 25px;
            background-color: red;
        }
        h2{
            color:white;
            font-size:28px;
        }
        .side2 {
            float: left;
            width: 45%;
            height: 50px;
            padding-top: 10px;
            font-size: 25px;
            background-color: red;
        }
        .side2 a {
            padding-left: 35px;
            text-decoration: none;
            color: white;
        }
        .side2 a:hover {
            color: black;
            filter: drop-shadow(20px 2px 10px black);
        }
        h3 {
            margin-left: 40px;
            filter: drop-shadow(10px 7px 10px black);
        }
        .section {
            width: 400px;
            background-color: aqua;
            height: 500px;
            margin-left: 80px;
            margin-top: 140px;
            padding-left: 20px;
            padding-top: 30px;
            border: 2px solid aqua;
            filter: drop-shadow(10px 7px 10px black);
            float: left;
        }
        .form-label {
            margin-top: 20px;
        }
        .section1 {
            float: left;
        }
        img {
            width: 900px;
            margin-top: 150px;
            margin-left: 230px;
            filter: drop-shadow(10px 7px 10px black);
        }
        span{
            margin-left:160px;
        }
    </style>
</head>
<body>
<div class="container1">
    <div class="side1">
        <h2>Blood Bank Management system
            <span>Name:
                <?php
                session_start();
                $h=$_SESSION['u'];
                echo"$h";
                ?>
            </span>
        </h2>
    </div>
    <div class="side2">
        <a href="donarloginpage.php">Dashboard</a>
        <a href="donate.php">Donate</a>
        <a href="don request.php">Request</a>
        <a href="#">Print Certificate</a>
        <a href="home.php">Logout</a>
    </div><br>
    <form >
        <div class="section">
            <h3>Blood donation Form</h3>
            <label for="browser" class="form-label">Blood Group</label>
            <input class="form-control" list="browsers" name="t1" id="browser">
            <datalist id="browsers">
                <option value="A">
                <option value="A+">
                <option value="B">
                <option value="AB">
                <option value="O">
            </datalist>
            <div class="mb-3 mt-3">
                <label for="units" class="form-label">No. of units</label>
                <input type="text" class="form-control" id="units" placeholder="No. of units (in mL)" name="t2">
            </div>
            <label for="disease" class="form-label">Disease (in ml)</label><br>
            <textarea name="t3" id="disease" cols="30" rows="3"></textarea><br>
            <input type="submit" value="Submit" class="btn btn-primary">
        </div>
    </form>
    <div class="section1">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPk3c4jVu0Mcr-p1SLh-s8ujc0dsQnzfhRD6ZRuiDOOQ&s"
             alt="" srcset="">
    </div>
</div>
</body>
</html>

<?php
if(isset($_GET['t1']) && isset($_GET['t2']) && isset($_GET['t3'])) {
    $a = $_GET['t1'];
    $b = $_GET['t2'];
    $c = $_GET['t3'];
    $d = 'No Action';
    $con = mysqli_connect('localhost', 'root', 'seedit', 'bloodgroup');
        $q = "INSERT INTO blood_donation  VALUES (NULL,'$a', '$b', '$c', '$d')";
        $rs = mysqli_query($con, $q);

        if($rs) {
            echo "<script>alert('Data Saved')</script>";
            echo"<script>window.location='donarloginpage.php'</script>";
        } else {
            echo "Error: " . mysqli_error($con);
        }

}
?>

