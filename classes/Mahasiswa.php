<?php
require_once "koneksi.php";

class Mahasiswa extends Database {
    
    public function getAll() {
        $result = $this->conn->query("SELECT * FROM mahasiswa");
        return $result;
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM mahasiswa WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function tambah($nama, $nim, $jurusan) {
        $stmt = $this->conn->prepare("INSERT INTO mahasiswa (nama, nim, jurusan) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nama, $nim, $jurusan);
        return $stmt->execute();
    }

    public function update($id, $nama, $nim, $jurusan) {
        $stmt = $this->conn->prepare("UPDATE mahasiswa SET nama=?, nim=?, jurusan=? WHERE id=?");
        $stmt->bind_param("sssi", $nama, $nim, $jurusan, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM mahasiswa WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
