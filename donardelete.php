<?php

   $a=$_GET['id'];
                    $con=mysqli_connect('localhost','root','seedit','login');
                    $q="delete from logined where DonorID='$a'";
                    $rs=mysqli_query($con,$q);

                    $sno = 1; // Initialize sno counter

                    if ($rs) {
                        echo" <script>window.location='Donar.php'</script>";
                    }
                    ?>
                   