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
    <div class="container">
      <section class="content-box mb-4">
        <h2>Lokasi Toko</h2>
        <p>Bukit Cimanggu City Blok V6 no.35</p>
      </section>
      <section class="content-box mb-4">
        <h2>Kontak Pemilik</h2>
        <p>081310921832</p>
      </section>
    </div>
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
