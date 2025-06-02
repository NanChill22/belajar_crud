<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<h2>Data Mahasiswa</h2>
<a href="tambah.php">Tambah Data</a>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
    <?php $i = 1; while ($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?= $i++; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
        <td>
            <a href="edit.php?id=<?= $row["id"]; ?>">Edit</a> | 
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Hapus data?');">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
