<?php
require_once "classes/Mahasiswa.php";
$mahasiswa = new Mahasiswa();

$id = $_GET['id'];
$mahasiswa->delete($id);
header("Location: index.php");
