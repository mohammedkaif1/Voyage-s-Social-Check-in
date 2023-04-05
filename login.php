<?php
include("configure.php");
session_start();
if (isset($_POST['zero']))
{
	$k=$_POST['zero'];
	  
}
$k1=$_SESSION['email'];
$k2=$_SESSION['name'];
$k3=$_SESSION['transport'];
$k4=$_SESSION['seat'];
$k5=$_SESSION['source'];
$k6=$_SESSION['destination'];
$k7=$_SESSION['time'];
$k8=$_SESSION['day'];

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="scripts/styleSheet.css" rel="stylesheet" type="text/css" />
    <style>
        h2 {
            color: aqua;
        }
    </style>

    <title>welcome</title>
</head>

<body>
    <center>
        <div>
            <pre>


             </pre>
            <h2>
                WELCOME TO VOYAGERS SOCIAL CHECK-IN WEBSITE
            </h2>
        </div>
    </center>
    <center>
        <pre>


        
        </pre>
      <form method="post" action="">
        <center>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <img src="images/img1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $k5 ." " ."to" ." ". $k6 ?></h5>
                            <h5 class="card-title"><?php echo $k7." ".$k8 ?></h5>
                            <h5 align="center" class="info" colspan="2"><?php echo $info;?></h5>
                            <p class="card-text">
                            </p>
                            <a href="home.php" class="btn btn-primary"><?php echo $k6 ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </center>
                
            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
    </form>  
    </center>
</body>
</html>
     