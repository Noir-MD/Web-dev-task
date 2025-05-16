<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <link href="../../../src/main.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid min-vh-100 d-flex flex-column p-0">

  <!-- Navigation -->
  <?php $active = 'contact'; include __DIR__ . '/../../../src/Partials/navbar.php'; ?>

  <!-- Main Content -->
  <main class="flex-grow-1">
    <?php  

      $title = "Lokasi Toko";
      $content = '
          <p>Bukit Cimanggu City Blok V6 no.35</p>
        ';
      include '../../../src/partials/section.php';

      $title = "Kontak Pemilik";
      $content = '
          <p>081310921832</p>
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