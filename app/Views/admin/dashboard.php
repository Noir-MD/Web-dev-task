<h1>Admin Dashboard</h1>
<p>Welcome to the admin area.</p>

<?php
// Proses upload gambar jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $uploadDir = __DIR__ . '/../../../public/Web/images/';
    $imageName = basename($_FILES['image']['name']);
    $targetFile = $uploadDir . $imageName;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Cek apakah file benar-benar gambar
    $check = getimagesize($_FILES['image']['tmp_name']);
    if ($check === false) {
        echo "<p>File bukan gambar.</p>";
        $uploadOk = 0;
    }

    // Cek jika file sudah ada
    if (file_exists($targetFile)) {
        echo "<p>File sudah ada.</p>";
        $uploadOk = 0;
    }

    // Batasi tipe file
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $allowedTypes)) {
        echo "<p>Hanya file JPG, JPEG, PNG & GIF yang diperbolehkan.</p>";
        $uploadOk = 0;
    }

    // Upload file jika valid
    if ($uploadOk) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            echo "<p>Gambar berhasil diupload ke Web/images/$imageName</p>";
        } else {
            echo "<p>Gagal mengupload gambar.</p>";
        }
    }
}
?>

<?php if (!empty($message)): ?>
    <p><?= esc($message) ?></p>
<?php endif; ?>

<!-- Form to insert a new product -->
<form method="post" action="" enctype="multipart/form-data">
    <label for="title">Nama Produk:</label>
    <input type="text" id="title" name="title" required><br>
    <label for="description">Deskripsi Produk:</label>
    <input type="text" id="description" name="description" required><br>
    <label for="image">Upload Gambar:</label>
    <input type="file" id="image" name="image" accept="image/*" required><br>
    <button type="submit" name="submit">Tambah Produk</button>
</form>