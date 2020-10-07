<?php include 'sendmail.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hubungi Customer Service</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>

  <!-- Alert Pesan Succes -->
  <?php  echo$alert; ?>
  <!-- Alert Pesan Gagal -->
  <!--  -->
  <!-- Content Section Start-->
  <div class="contact-section">
    <div class="contact-info">
      <div><i class="fas fa-map-marker-alt"></i>Wonosari, Gorontalo, Indonesia</div>
      <div><i class="fas fa-envelope"></i>anwardesu@gmail.com</div>
      <div><i class="fas fa-phone"></i>+62 821 9058 7868</div>
      <div><i class="fas fa-clock"></i>Minggu - Senin 8:00 AM - 5:00 PM</div>
    </div>
    <div class="contact-form">
      <h2>Hubungi Kami</h2>
      <form class="contact" action="" method="post">
        <input type="text" name="name" class="text-box" placeholder="Masukan Nama" required>
        <input type="text" name="email" class="text-box" placeholder="Masukan Email" required>
        <textarea name="messaga" id="5" placeholder="Masukan Pesan" required></textarea>
        <input type="submit" name="submit" class="send-btn" value="Kirim">
      </form>
    </div>
  </div>
  <!-- Content Section End -->

  <script type="text/javascript">
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }

</script>
</body>

</html>