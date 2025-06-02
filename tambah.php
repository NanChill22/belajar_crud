<?php
include 'koneksi.php';

if (isset($_POST["submit"])) {
    $nama = htmlspecialchars(trim($_POST["nama"]));
    $nim = htmlspecialchars(trim($_POST["nim"]));
    $jurusan = htmlspecialchars(trim($_POST["jurusan"]));

    // Gunakan prepared statement untuk keamanan
    $stmt = mysqli_prepare($conn, "INSERT INTO mahasiswa (nama, nim, jurusan) VALUES (?, ?, ?)");
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $nama, $nim, $jurusan);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($conn);
    }
}
?>

<h2>Tambah Data Mahasiswa</h2>
<form action="" method="post">
    <label>Nama: <input type="text" name="nama" required></label><br>
    <label>NIM: <input type="text" name="nim" required></label><br>
    <label>Jurusan: <input type="text" name="jurusan" required></label><br>
    <button type="submit" name="submit">Simpan</button>
</form>
