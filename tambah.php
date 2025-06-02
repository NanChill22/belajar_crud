<?php
require_once "classes/Mahasiswa.php";
$mahasiswa = new Mahasiswa();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    // Validasi sederhana
    if (!empty($nama) && is_numeric($nim) && preg_match("/^[a-zA-Z\s]+$/", $jurusan)) {
        $mahasiswa->tambah($nama, $nim, $jurusan);
        header("Location: index.php");
    } else {
        echo "Input tidak valid.";
    }
}
?>

<h2>Tambah Mahasiswa</h2>
<form method="post">
    Nama: <input type="text" name="nama"><br>
    NIM: <input type="text" name="nim"><br>
    Jurusan: <input type="text" name="jurusan"><br>
    <button name="submit">Simpan</button>
</form>
