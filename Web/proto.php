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
    <span class="fw-bold">Nama Toko</span>
  </div>

  <!-- Logo Bar -->
  <div class="d-flex justify-content-center align-items-center py-4">
    <img src="Images/logo.png" alt="Company Logo" class="img-fluid" style="max-height: 80px;">
  </div>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
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
      <div class="row align-items-center">
        <div class="col-md-7">
          <h2>Best Deck in the Current Format</h2>
          <h3 class="mt-4">Tier 1</h3>
          <p>Blue-Eyes</p>
          <h3 class="mt-4">Tier 2</h3>
          <p>Snake-eyes Fiendsmith</p>
          <p>Snake-eyes Fire King</p>
          <h4 class="mt-4">Tier 3</h4>
          <p>Memento</p>
          <p>White Forest Azamina</p>
          <p>Tenpai Dragon</p>
          <p>Centur-Ion</p>
          <p>Fiendsmith</p>
          <p>Branded</p>
          <p>Adamancipator</p>
        </div>
        <div class="col-md-5 text-center">
          <img src="Images/Test.png" alt="sample image" class="img-fluid rounded shadow">
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