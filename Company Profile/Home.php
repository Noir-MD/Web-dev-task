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
  <main class="flex-grow-1">
<?php  
  $title = "British Propolish";
  $desc = "British Propolis adalah propolis premium asal Inggris dari lebah empat musim, berkualitas tinggi dan direkomendasikan di Indonesia.";
  $img = "Images/british 1.jpeg";
  include '../src/partials/product-section.php';

  $title = "Steffie";
  $desc = "Steffi adalah pemanis alami berupa stevia tetes. Steffi dirancang sebagai pengganti gula yang aman dan sehat, dengan kandungan kalori nol dan rasa manis yang kuat";
  $img = "Images/steffie 1.jpeg";
  include '../src/partials/product-section.php';

  $title = "Madu THE POST";
  $desc = "Madu THE POST adalah madu murni berkualitas tinggi yang diambil langsung dari alam, tanpa campuran. Kaya nutrisi untuk mendukung daya tahan tubuh, meningkatkan energi, dan menjaga kesehatan secara alami. Cocok dikonsumsi setiap hari.";
  $img = "Images/madu Tpose.jpeg";
  include '../src/partials/product-section.php';
?>
  </main>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3 mt-auto">
    <p class="mb-0">&copy; 2025 Avicenna. This is just a placeholder for the footer.</p>
  </footer>

</div>
<!-- Bootstrap JS Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>