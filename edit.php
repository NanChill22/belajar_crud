<?php
require_once "classes/Mahasiswa.php";
$mahasiswa = new Mahasiswa();

$id = $_GET['id'];
$data = $mahasiswa->getById($id);

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    if (!empty($nama) && is_numeric($nim) && preg_match("/^[a-zA-Z\s]+$/", $jurusan)) {
        $mahasiswa->update($id, $nama, $nim, $jurusan);
        header("Location: index.php");
    } else {
        echo "Input tidak valid.";
    }
}
?>

<h2>Edit Mahasiswa</h2>
<form method="post">
    Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>"><br>
    NIM: <input type="text" name="nim" value="<?= $data['nim'] ?>"><br>
    Jurusan: <input type="text" name="jurusan" value="<?= $data['jurusan'] ?>"><br>
    <button name="submit">Update</button>
</form>
