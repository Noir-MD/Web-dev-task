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
  <main class="flex-grow-1" id="main-content" style="opacity: 0; transition: opacity 0.8s;">
    <?php  

      $title = "Lokasi Toko";
      $content = '
      <div style="display: flex; align-items: center; justify-content: space-between;">
        <p class="mb-0">Bukit Cimanggu City Blok V6 no.35</p>
        <a href="https://www.google.com/maps?q=Bukit+Cimanggu+City+Blok+V6+no.35" target="_blank" style="margin-left: 1rem; color: #4285F4; text-decoration: none; font-size: 1.8rem; height: 2.5em; display: flex; align-items: center;">
          <!-- Google Maps SVG Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="height: 100%; width: auto; display: block;"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/></svg>
        </a>
      </div>
      ';
      include '../../../src/partials/section.php';

      
      $title = "Kontak Pemilik";
      $content = '
      <div style="display: flex; align-items: center; justify-content: space-between;">
        <p class="mb-0">081310921832</p>
        <a href="https://wa.me/6281310921832" target="_blank" style="margin-left: 1rem; color: #25D366; text-decoration: none; font-size: 1.8rem; height: 2.5em; display: flex; align-items: center;">
          <!-- WhatsApp SVG Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" style="height: 100%; width: auto; display: block;">
            <path d="M16 3C9.373 3 4 8.373 4 15c0 2.637.86 5.08 2.36 7.09L4 29l7.18-2.31A12.93 12.93 0 0 0 16 27c6.627 0 12-5.373 12-12S22.627 3 16 3zm0 22.917c-2.13 0-4.21-.62-5.97-1.8l-.43-.27-4.27 1.37 1.4-4.16-.28-.44A9.93 9.93 0 0 1 6 15c0-5.514 4.486-10 10-10s10 4.486 10 10-4.486 10-10 10zm5.13-7.47c-.28-.14-1.65-.81-1.9-.9-.25-.09-.43-.14-.61.14-.18.28-.7.9-.86 1.08-.16.18-.32.2-.6.07-.28-.14-1.18-.44-2.25-1.4-.83-.74-1.39-1.65-1.55-1.93-.16-.28-.02-.43.12-.57.13-.13.28-.32.42-.48.14-.16.18-.28.28-.46.09-.18.05-.34-.02-.48-.07-.14-.61-1.47-.84-2.01-.22-.53-.45-.46-.61-.47-.16-.01-.34-.01-.52-.01-.18 0-.48.07-.73.34-.25.27-.97.95-.97 2.3s.99 2.67 1.13 2.85c.14.18 1.95 2.98 4.73 4.06.66.28 1.18.45 1.58.58.66.21 1.26.18 1.73.11.53-.08 1.65-.67 1.88-1.32.23-.65.23-1.2.16-1.32-.07-.12-.25-.18-.53-.32z"/>
          </svg>
        </a>
      </div>
    ';
      include '../../../src/partials/section.php';

    ?>
  </main>

  <!-- Footer -->
  <?php include __DIR__ . '/../../../src/partials/footer.php'; ?>

</div>
<!-- Bootstrap JS Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="../Js/fade animation.js"></script>

</body>
</html>