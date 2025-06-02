<?php
require_once "koneksi.php";

class Mahasiswa extends Database {

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM mahasiswa");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM mahasiswa WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function tambah($nama, $nim, $jurusan) {
        $stmt = $this->conn->prepare("INSERT INTO mahasiswa (nama, nim, jurusan) VALUES (?, ?, ?)");
        return $stmt->execute([$nama, $nim, $jurusan]);
    }

    public function update($id, $nama, $nim, $jurusan) {
        $stmt = $this->conn->prepare("UPDATE mahasiswa SET nama = ?, nim = ?, jurusan = ? WHERE id = ?");
        return $stmt->execute([$nama, $nim, $jurusan, $id]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM mahasiswa WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
