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
            margin-left:20px;
            font-size:25px;
            text-decoration:none;
            color:white;
        }
        .side2 a:hover{
            color:black;
            filter:drop-shadow(10px 7px 10px black)
        }
         .section{
            width:800px;
            text-align:center;
            margin-left:400px;
            margin-top:40px;
         }
         h3{
            text-decoration:underline;
         }
        .footer{
            width: ;
            height: 70px;
            background-color: red;
            margin-top: 685px;
            font-size: 30px;
            padding-left: 700px;
            padding-top: 20px;
        }
    </style>
</head>
<body>
      <div class="side1">
        <h2>Blood Bank Management System</h2>
      </div>
      <div class="side2">
          <a href="patient log.php">Dashboard</a>
          <a href="Request form.php">Request blood</a>
          <a href="">Requests History</a>
          <a href="">Logout</a>
      </div><br>

         <div class="section">
            <h3>Your Request</h3>
        <table class="table">
            <thead>
                <th>S.No</th>
                <th>Request ID</th>
                <th>Units (in ml)</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
        </table>
              
         </div>
     

      <footer class="footer">@2024 CSEtutorial.com</footer>
</body>
</html>