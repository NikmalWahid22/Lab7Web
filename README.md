- Nama : Muhamad Nikmal Wahid
- kelas : TI 24 a3
- Pemrograman Web

# Pratikum 7: PHP Dasar 

## Intruksi Praktikum 
- Siapkan Text editor seperti VScode
- Buat file baru
- Buat struktur dasar dari dokumen HTML
- Mengikuti langkah-langkah yang tertera

# Installasi XAMPP dan menjalankan Web Server 
![Gambar 1](xampp.png)
![Gambar 2](server.png) 

# Membuat file PHP
Memulai PHP membuat folder lab7_php_dasar pada root directory web server (d:\xampp\htdocs). Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL: http://localhost/lab7_php_dasar/

![Gambar 3](ss1.png)

# PHP dasar 
Membuat file baru dengan nama file php_dasar.php dan untuk mengakses hasilnya bisa melalui URL: http://localhost/lab7_php_dasar/php_dasar.php
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World" ;
    ?>    

</body>
</html>
```
![Gambar 4](ss2.png)

# Variable PHP 
Di bagian ini kita menambahkan variable pada program dan pada pratikum variabel terdapat Predefine Variable $_GET digunakan untuk mengambil data dari URL dalam bentuk query string dan untuk melihat hasil dari Predefine Variable $_GET kita bisa mengakses http://localhost/lab7_php_dasar/latihan2.php?nama=Agung
```
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
```
![Gambar 5](ss3.png)

# Membuat Form Input 
Form ini dipakai buat mengambil data dari pengguna (misalnya nama) dan dikirim ke PHP untuk diproses. 

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP dasar</title>
</head>
<body>

    <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="kirim">
    </form>
    <?php
    echo 'Selamat Datang ' . $_POST['nama'];
    ?>

</body>
</html>
```

![Gambar 6](ss4.png)

# Operator 
Operator digunakan untuk melakukan operasi perhitungan atau manipulasi nilai di dalam program.

```
    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji * $pajak);

    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>
```

![Gambar 7](ss5.png)

# Kondisi IF 
Kondisi if digunakan untuk mengecek suatu pernyataan (kondisi) dan menjalankan kode hanya jika kondisi tersebut benar (true).

```
    <?php
    $nama_hari = date("l");
    if ($nama_hari == "Sunday") {
        echo "Minggu";
    } elseif ($nama_hari == "Monday") {
        echo "Senin";
    } else {
        echo "Selasa";
    }
    ?>
```

# Kondisi Switch 
Switch digunakan untuk memeriksa banyak kemungkinan nilai dari satu variabel, mirip seperti if-elseif, tapi bentuknya lebih rapi dan mudah dibaca.
```
<?php
    $nama_hari = date("l"); 

    switch ($nama_hari) {
        case "Sunday":
            echo "Minggu";
            break;
        case "Monday":
            echo "Senin";
            break;
        case "Tuesday":
            echo "Selasa";
            break;
        default:
            echo "Sabtu";
    }
    ?>
```

![Gambar 8](ss6.png)

# Perulangan For 
For digunakan untuk mengulang eksekusi kode beberapa kali dengan jumlah perulangan yang sudah diketahui.

```
<?php
    echo "Perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++) {
        echo "Perulangan ke: " . $i . '<br />';
    }

    echo "Perulangan Menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--) {
        echo "Perulangan ke: " . $i . '<br />';
    }
    ?>
```

![Gambar 9](ss7.png)

# Perulangan While dan Do While 
## Perulangan While 
Digunakan untuk mengulang kode selama kondisi bernilai benar (true).
Kalau kondisi salah di awal, perulangan tidak akan dijalankan sama sekali
```
<?php
    echo "Perulangan 1 sampai 10 <br />"; 
    $i=1; 
    while ($i<=10) {
        echo "Perulangan ke: " . $i . '<br />'; 
        $i++;
        
    }
    ?>
```

## Perulangan Do While 
Mirip dengan while, tapi perintah dijalankan dulu baru dicek kondisinya.
Jadi, minimal satu kali perulangan pasti dijalankan.
```
<?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    do {
        echo "Perulangan ke: " . $i . '<br />';
        $i++;
    } while ($i<=10);
    ?>
```

![Gambar 10](ss8.png)

# Pertanyaan dan Tugas
Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang
berbeda-beda sesuai pilihan pekerjaan. 








