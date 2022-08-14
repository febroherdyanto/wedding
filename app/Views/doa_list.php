
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<div class="container">
<?php
        $db      = \Config\Database::connect();
        $query   = $db->query("SELECT * FROM doa order by idDoa desc");
        $hadir = $query->getResultArray();
        if($hadir): foreach ($hadir as $h): ?>

<div class="toast" data-autohide="false">
    <div class="toast-header">
      <strong class="mr-auto text-primary" style="font-size: 11px;"><?= $h['pengirimDoa']; ?></strong>
      <small class="text-muted" style="font-size: 9px;"><?php echo $h['waktu']; ?> WIB</small>
    </div>
    <div class="toast-body">
        <p style="font-size: 13px;">
            <?= $h['ucapanDoa']; ?>
        </p>
    </div>
  </div>

  
  <?php endforeach; endif; ?>
  <script>
$(document).ready(function(){
  $('.toast').toast('show');
});
</script>