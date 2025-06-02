<?php
include 'koneksi.php';

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $jurusan = $_POST["jurusan"];
    
    $query = "INSERT INTO mahasiswa (nama, nim, jurusan) VALUES ('$nama', '$nim', '$jurusan')";
    mysqli_query($conn, $query);
    
    header("Location: index.php");
}
?>

<h2>Tambah Data Mahasiswa</h2>
<form action="" method="post">
    Nama: <input type="text" name="nama"><br>
    NIM: <input type="text" name="nim"><br>
    Jurusan: <input type="text" name="jurusan"><br>
    <button type="submit" name="submit">Simpan</button>
</form>
