<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Timeline</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">
<header>
    <br>
        <center>
        <h2>Pendaftaran Siswa Baru</h2>
        <h4>SMAK Setia Bakti Ruteng</h4>
        </center>
    </header>
        <ul>
            <li><a href="form-daftar.php">Input Data</a></li>
            <li><a href="list-siswa.php">Daftar Siswa</a></li>
        </ul>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">
                                        
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>

                    <p><a href="logout.php">Logout</a></p>
                </div>
            </div>

        </div>

    </div>
</div>

</body>
</html>