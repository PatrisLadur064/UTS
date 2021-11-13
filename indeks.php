<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMAK Setia Bakti Ruteng</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h2>SMAK Setia Bakti Ruteng</h2>
    </header>

    <h3>Menu</h3>
    <nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    </body>
</html>