<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP dasar</title>
</head>
<body>  

    <h1>Menggunakan Variable</h1>
    <?php
    $nim = "0411500400" ;
    $nama = 'Abdullah' ;
    echo "NIM : " . $nim . "<br>" ;
    echo "Nama : $nama" ;
    ?>

    <h1>Predefine Variable</h1>
    <?php
    echo 'Selamat Datang ' . $_GET['nama'];
    ?>

</body>
</html>