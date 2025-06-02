<?php
require_once "classes/Mahasiswa.php";
$mahasiswa = new Mahasiswa();
$data = $mahasiswa->getAll();
?>

<h2>Data Mahasiswa (PDO)</h2>
<a href="tambah.php">Tambah Data</a>
<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
    <?php $no = 1; foreach ($data as $row): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= htmlspecialchars($row['nama']) ?></td>
        <td><?= htmlspecialchars($row['nim']) ?></td>
        <td><?= htmlspecialchars($row['jurusan']) ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach ?>
</table>
