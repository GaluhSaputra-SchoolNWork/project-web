<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pertemuan-3-master/koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM notes WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Catatan berhasil dihapus!";
    header("Location: ../index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();