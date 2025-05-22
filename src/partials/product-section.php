<?php
?>
<section class="content-box mb-4 d-flex flex-column flex-md-row align-items-center">
  <div>
    <h2><?= $title ?></h2>
    <p><?= $desc ?></p>
  </div>
  <div class="ms-md-4 mt-3 mt-md-0">
    <img src="<?= 'Images/' . $img . '.jpeg' ?>" alt="<?= $title ?>" class="img-fluid rounded shadow" style="max-width:220px; max-height:180px; object-fit:contain; background:#fff;">
  </div>
</section>
