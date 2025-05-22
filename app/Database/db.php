<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "produk";

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Fungsi untuk menjalankan query SELECT
function query($sql) {
    global $conn;
    $result = $conn->query($sql);
    $rows = [];
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }
    return $rows;
}

// Fungsi untuk menutup koneksi (opsional)
function close_db() {
    global $conn;
    $conn->close();
}
?>