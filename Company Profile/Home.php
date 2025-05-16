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
    <section class="container my-4">
      <div class="row">
        <div class="col-md-12">
          <section class="content-box mb-4 d-flex flex-column flex-md-row align-items-center">
            <div>
              <h2>British Propolish</h2>
              <p>British Propolis adalah propolis premium asal Inggris dari lebah empat musim, berkualitas tinggi dan direkomendasikan di Indonesia.</p>
            </div>
            <div class="ms-md-4 mt-3 mt-md-0">
              <img src="Images/british 1.jpeg" alt="british 1" class="img-fluid rounded shadow" style="max-width:220px; max-height:180px; object-fit:contain; background:#fff;">
            </div>
          </section>

          <section class="content-box mb-4 d-flex flex-column flex-md-row align-items-center">
            <div>
              <h2>Steffie</h2>
              <p>Steffi adalah pemanis alami berupa stevia tetes. Steffi dirancang sebagai pengganti gula yang aman dan sehat, dengan kandungan kalori nol dan rasa manis yang kuat</p>
            </div>
            <div class="ms-md-4 mt-3 mt-md-0">
              <img src="Images/steffie 1.jpeg" alt="british 1" class="img-fluid rounded shadow" style="max-width:220px; max-height:180px; object-fit:contain; background:#fff;">
            </div>
          </section>


          <section class="content-box mb-4 d-flex flex-column flex-md-row align-items-center">
            <div>
              <h2>Madu THE POST</h2>
              <p>Madu THE POST adalah madu murni berkualitas tinggi yang diambil langsung dari alam, tanpa campuran. Kaya nutrisi untuk mendukung daya tahan tubuh, meningkatkan energi, dan menjaga kesehatan secara alami. Cocok dikonsumsi setiap hari.</p>
            </div>
            <div class="ms-md-4 mt-3 mt-md-0">
              <img src="Images/madu Tpose.jpeg" alt="british 1" class="img-fluid rounded shadow" style="max-width:220px; max-height:180px; object-fit:contain; background:#fff;">
            </div>
          </section>

        </div>
      </div>
    </section>
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
