<?php
include 'koneksi.php';

$id = $_GET["id"];
$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $jurusan = $_POST["jurusan"];
    $query = "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan' WHERE id=$id";
    mysqli_query($conn, $query);
    header("Location: index.php");
}
?>

<h2>Edit Data Mahasiswa</h2>
<form action="" method="post">
    Nama: <input type="text" name="nama" value="<?= $data['nama']; ?>"><br>
    NIM: <input type="text" name="nim" value="<?= $data['nim']; ?>"><br>
    Jurusan: <input type="text" name="jurusan" value="<?= $data['jurusan']; ?>"><br>
    <button type="submit" name="submit">Update</button>
</form>
