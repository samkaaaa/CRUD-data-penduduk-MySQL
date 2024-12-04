<?php
include 'koneksi.php';

$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM aprika_mbarik WHERE id = $id");
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $NIK = $_POST['NIK'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];

    $query = "UPDATE aprika_mbarik SET 
              NIK = '$NIK', nama = '$nama', alamat = '$alamat', pekerjaan = '$pekerjaan' 
              WHERE id = $id";
    mysqli_query($koneksi, $query);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data Penduduk</h1>
    <form method="POST" action="">
        <label>NIK:</label><br>
        <input type="text" name="NIK" value="<?= $data['NIK']; ?>" required><br>
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= $data['nama']; ?>" required><br>
        <label>Alamat:</label><br>
        <textarea name="alamat" required><?= $data['alamat']; ?></textarea><br>
        <label>Pekerjaan:</label><br>
        <input type="text" name="pekerjaan" value="<?= $data['pekerjaan']; ?>" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>