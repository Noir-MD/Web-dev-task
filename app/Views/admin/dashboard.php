<h1>Admin Dashboard</h1>
<p>Welcome to the admin area.</p>

<?php if (!empty($message)): ?>
    <p><?= esc($message) ?></p>
<?php endif; ?>

<!-- Form to insert a new product -->
<form method="post" action="">
    <label for="title">Nama Produk:</label>
    <input type="text" id="title" name="title" required><br>
    <label for="description">Deskripsi Produk:</label>
    <input type="text" id="description" name="description" required><br>
    <label for="image">Nama Gambar:</label>
    <input type="text" id="image" name="image" required><br>
    <button type="submit" name="submit">Tambah Produk</button>
</form>