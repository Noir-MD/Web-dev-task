<?php
// Set $active to 'home', 'about', or 'contact' before including this file
if (!isset($active)) $active = '';
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow">
  <div class="container">
    <a class="navbar-brand" href="/Web/Home.php">UMI IKA STORE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link<?php if($active=='home') echo ' active'; ?>" href="/Web/Home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php if($active=='about') echo ' active'; ?>" href="/Web/Function/About/about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php if($active=='contact') echo ' active'; ?>" href="/Web/Function/Contact/contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
