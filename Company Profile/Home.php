<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Company Profile</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Optional: Your custom CSS -->
  <link rel="stylesheet" href="Function/CSS/Style.css" />
</head>
<body>
<div class="container-fluid min-vh-100 d-flex flex-column p-0">

  <!-- Top Bar -->
  <div class="bg-light py-2 px-3 border-bottom">
    <span class="fw-bold">UMI IKA STORE</span>
  </div>

  <!-- Logo Bar -->
  <div class="d-flex justify-content-center align-items-center py-4">
    <img src="Images/logo.png" alt="Company Logo" class="img-fluid" style="max-height: 80px;">
  </div>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
      <a class="navbar-brand" href="home.php">Company Profile</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Function/About/about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Function/Contact/contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

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