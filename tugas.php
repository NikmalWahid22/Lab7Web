<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tgl_lahir" required><br><br>

        <label>Pekerjaan:</label><br>
        <select name="pekerjaan" required>
            <option value="">-- Pilih Pekerjaan --</option>
            <option value="Programmer">Programmer</option>
            <option value="Guru">Guru</option>
            <option value="Dokter">Dokter</option>
            <option value="Desainer">Desainer</option>
            <option value="Mahasiswa">Mahasiswa</option>
        </select><br><br>

        <input type="submit" value="Kirim">
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        $tgl_lahir_obj = new DateTime($tgl_lahir);
        $sekarang = new DateTime();
        $umur = $sekarang->diff($tgl_lahir_obj)->y;

        switch ($pekerjaan) {
            case "Programmer":
                $gaji = 8000000;
                break;
            case "Guru":
                $gaji = 5000000;
                break;
            case "Dokter":
                $gaji = 10000000;
                break;
            case "Desainer":
                $gaji = 6000000;
                break;
            case "Mahasiswa":
                $gaji = 0;
                break;
            default:
                $gaji = 0;
                break;
        }

        echo "<h3>Hasil Data</h3>";
        echo "Nama: <strong>$nama</strong><br>";
        echo "Tanggal Lahir: <strong>$tgl_lahir</strong><br>";
        echo "Umur: <strong>$umur tahun</strong><br>";
        echo "Pekerjaan: <strong>$pekerjaan</strong><br>";
        echo "Gaji: <strong>Rp " . number_format($gaji, 0, ',', '.') . "</strong>";
    }
    ?>
</body>
</html>
