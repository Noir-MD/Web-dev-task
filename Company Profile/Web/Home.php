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
  
  <?php $active = 'home'; include __DIR__ . '/../src/Partials/navbar.php'; ?>

  <header class="bg-secondary text-white py-5 mb-4" style="min-height: 380px; display: flex; align-items: center;">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
      <div class="text-center text-md-start flex-fill">
        <h1 class="display-4 fw-bold mb-3">Selamat Datang di UMI IKA STORE</h1>
        <p class="lead">Toko produk suplemen kesehatan dan herbal alami pilihan.</p>
      </div>
      <div class="flex-fill d-flex justify-content-center justify-content-md-end mt-4 mt-md-0">
        <div id="slideshow-container" style="position: relative; width: 320px; height: 220px;">
          <img src="Images/steffie 3.jpeg" alt="UMI IKA STORE" class="img-fluid rounded shadow slideshow-img" style="max-width: 320px; max-height: 220px; object-fit: contain; background: #fff; position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 1; transition: opacity 0.7s;">
          <img src="Images/steffie 2.jpeg" alt="UMI IKA STORE 2" class="img-fluid rounded shadow slideshow-img" style="max-width: 320px; max-height: 220px; object-fit: contain; background: #fff; position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; transition: opacity 0.7s;">
          <img src="Images/steffie 1.jpeg" alt="UMI IKA STORE 3" class="img-fluid rounded shadow slideshow-img" style="max-width: 320px; max-height: 220px; object-fit: contain; background: #fff; position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; transition: opacity 0.7s;">
        </div>
      </div>
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
  <?php include __DIR__ . '/../src/partials/footer.php'; ?>

</div>
<!-- Bootstrap JS Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="Function/Js/fade animation.js"></script>
<script>
  // Simple JS slideshow
  const slides = document.querySelectorAll('.slideshow-img');
  let currentSlide = 0;
  setInterval(() => {
    slides[currentSlide].style.opacity = 0;
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].style.opacity = 1;
  }, 3000);
</script>

</body>
</html>