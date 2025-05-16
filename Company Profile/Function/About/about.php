<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
  <link href="../../../src/main.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid min-vh-100 d-flex flex-column p-0">

<body>
<div class="container-fluid min-vh-100 d-flex flex-column p-0">

  <!-- Navigation -->
  <?php $active = 'about'; include __DIR__ . '/../../../src/Partials/navbar.php'; ?>

  <!-- Main Content -->
  <main class="flex-grow-1">
    <?php  

      $title = "Tentang Kami";
      $content = '
          <p>Umi Ika Store adalah toko terpercaya yang menyediakan berbagai produk suplemen kesehatan dan herbal alami pilihan. Kami berkomitmen membantu kamu menjaga kebugaran, meningkatkan daya tahan tubuh, serta mendukung pemulihan secara alami dan aman.</p>
        ';
      include '../../../src/partials/section.php';

      $title = "Produk Utama";
      $content = '
          <p>Produk-Produk di toko kami mencakup hal hal seperti:</p>
          <ul>
            <li>Suplemen imun dan energi</li>
            <li>Vitamin harian & multivitamin</li>
            <li>Suplemen olahraga & kebugaran</li>
          </ul>
        ';
      include '../../../src/partials/section.php';

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
