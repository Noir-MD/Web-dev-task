<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Company Profile</title>
  <link href="../src/main.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid min-vh-100 d-flex flex-column p-0">
  
  <!-- Navigation -->
  <?php $active = 'home'; include __DIR__ . '/../src/Partials/navbar.php'; ?>

  <!-- Hero Section -->
  <header class="bg-secondary text-white text-center py-5 mb-4">
    <div class="container">
      <h1 class="display-4">Selamat Datang di UMI IKA STORE</h1>
      <p class="lead">Toko terpercaya untuk produk suplemen kesehatan dan herbal alami pilihan.</p>
    </div>
  </header>


  <!-- Main Content -->
  <main class="flex-grow-1" id="main-content" style="opacity: 0; transition: opacity 0.8s;">

<?php  
  include '../src/partials/db.php';
  $products = query("SELECT * FROM produk"); // Pastikan nama tabel dan kolom sesuai

  foreach ($products as $product) {
    $title = $product['title'];
    $desc  = $product['description'];
    $img   = $product['image'];
    include '../src/partials/product-section.php';
  }
?>

  </main>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3 mt-auto">
    <p class="mb-0">&copy; 2025 Avicenna. This is just a placeholder for the footer.</p>
  </footer>

</div>
<!-- Bootstrap JS Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="Function/Js/fade animation.js"></script>

</body>
</html>