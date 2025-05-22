<?php
// Koneksi database (ganti sesuai konfigurasi Anda)
require_once APPPATH . 'Database/db.php'; // gunakan koneksi dari CodeIgniter

if (!isset($conn) || $conn->connect_error) {
    echo "<p>Koneksi database gagal: " . ($conn->connect_error ?? 'No connection object') . "</p>";
    exit;
}

// Hapus data jika ada request
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM produk WHERE id=$id");
    echo "<p>Produk berhasil dihapus.</p>";
}

// Update data jika form edit disubmit
if (isset($_POST['edit_id'])) {
    $edit_id = intval($_POST['edit_id']);
    $edit_title = $conn->real_escape_string($_POST['edit_title']);
    $edit_description = $conn->real_escape_string($_POST['edit_description']);
    $conn->query("UPDATE produk SET title='$edit_title', description='$edit_description' WHERE id=$edit_id");
    echo "<p>Produk berhasil diupdate.</p>";
}

// Tampilkan data produk
$result = $conn->query("SELECT * FROM produk ORDER BY id DESC");
echo "<table border='1' cellpadding='5'><tr><th>ID</th><th>Nama</th><th>Deskripsi</th><th>Gambar</th><th>Aksi</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    if (isset($_GET['edit']) && $_GET['edit'] == $row['id']) {
        // Form edit
        echo "<form method='post'>";
        echo "<td><input type='text' name='edit_title' value='".htmlspecialchars($row['title'])."'></td>";
        echo "<td><input type='text' name='edit_description' value='".htmlspecialchars($row['description'])."'></td>";
        echo "<td><img src='/Web/{$row['image']}' width='80'></td>";
        echo "<td>
                <input type='hidden' name='edit_id' value='{$row['id']}'>
                <button type='submit'>Simpan</button>
                <a href='".base_url('admin/data')."'>Batal</a>
              </td>";
        echo "</form>";
    } else {
        echo "<td>".htmlspecialchars($row['title'])."</td>";
        echo "<td>".htmlspecialchars($row['description'])."</td>";
        echo "<td><img src='/Web/{$row['image']}' width='80'></td>";
        echo "<td>
                <a href='?edit={$row['id']}'>Edit</a> | 
                <a href='?delete={$row['id']}' onclick=\"return confirm('Yakin hapus?')\">Hapus</a>
              </td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<br><a href='" . base_url('admin') . "'><button>Kembali ke Dashboard</button></a>";

$conn->close();
?>