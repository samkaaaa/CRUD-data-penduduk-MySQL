<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $NIK = $_POST['NIK'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];

    $query = "INSERT INTO aprika_mbarik (NIK, nama, alamat, pekerjaan) 
              VALUES ('$NIK', '$nama', '$alamat', '$pekerjaan')";
    mysqli_query($koneksi, $query);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Penduduk</h1>
    <form method="POST" action="">
        <label>NIK:</label><br>
        <input type="text" name="NIK" required><br>
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br>
        <label>Alamat:</label><br>
        <textarea name="alamat" required></textarea><br>
        <label>Pekerjaan:</label><br>
        <input type="text" name="pekerjaan" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>