<?php
include 'koneksi.php';

$result = mysqli_query($koneksi, "SELECT * FROM aprika_mbarik");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Penduduk</title>
</head>
<body>
    <h1>Data Penduduk</h1>
    <a href="tambah.php">Tambah Data</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['NIK']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['pekerjaan']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
                    <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>