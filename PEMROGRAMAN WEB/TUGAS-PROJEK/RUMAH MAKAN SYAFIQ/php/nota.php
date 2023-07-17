<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <!-- fonts !-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
<!-- fonts end !-->

<!-- CSS !-->
  <link rel="stylesheet" type="text/css" href="/RUMAH MAKAN SYAFIQ/css/app.css">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

</head>
<body>
  <!-- NavBar Start -->
  <nav class="navbar">
    <a href="#" class="navbar-logo">SYAFIQ<span> STORE</span> </a>

  <div class="navbar-nav">
    <a href="#home">Home</a>
    <a href="#menu">Menu</a>
    <a href="#contact">Kontak</a>
   </div>

    <div class="navbar-extra">
      <a href="#" id="search"><i data-feather="search"></i> </a>
      <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i> </a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i> </a>
    </div>

  </nav>

  <!-- Navbar END -->

<section class="hero" id="home">
    <main class="content">
      <h1>MAKAN ENAK DAN MURAH HANYA<span> SYAFIQ DINNERS</span></h1>
      <p>.</p>
      <a href="#menu" class="cta">Beli Sekarang</a>
    </main>
  </section>


  <!-- Menu Section Start -->
  <section id="menu" class="menu">
    <div class="row">
    <div class="menu-card">
      <h4>Your Order</h4>


        <?php
    $file_path = "pesanan.txt";
$file = fopen($file_path, "r");

if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line . "<br>";
    }

    fclose($file);
} else {
    echo "Gagal membuka file.";
}

?>
<a href="/RUMAH MAKAN SYAFIQ/index.html"> <button class="btn">HOME</button> </a>
<a href="nota.php"><button class="btn">Lihat Data</button> </a>
</div>
</div>
  </div>

</section>

  <!-- Menu Section END -->

   <section id="contact" class="contact">
    <h2><span>Kontak </span>Saya</h2>

    <div class="row">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.5891799531328!2d110.38054627452507!3d-7.8332295778154615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5701a2ae1c23%3A0x173dbeeddc56d9e!2sUniversitas%20Ahmad%20Dahlan%20-%20Kampus%204!5e0!3m2!1sid!2sid!4v1689088560927!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

      <form action="">
        <div class="input-group" >
          <i data-feather="user"></i>
          <input type="text" name="nama" placeholder="Nama" ><br>
        </div>

       <div class="input-group" >
          <i data-feather="user"></i>
          <input type="number" name="nim" placeholder="NIM" ><br>
        </div>

        <div class="input-group">
          <i data-feather="mail"></i>
          <input type="email" name="email" placeholder="Email"><br>
        </div>

        <div class="input-group">
          <i data-feather="phone"></i>
          <input type="number" name="phone" placeholder="NO HP"><br>
        </div>


        <div class="input-group">
          <textarea name="komentar" placeholder="Komentar" class="komentar"></textarea><br>
        </div>

        <div>
        <button type="submit" class="btn">Kirim</button>
      </div>
      </form>
    </div>
</section>



  <!-- Footer Start -->

    <footer>
      <div class="social">
        <a href="https://www.instagram.com/syaafik_/?next=%2F"><i data-feather="instagram"></i></a>
        <a href="https://www.tiktok.com/@cr4venn"><img src="image/logosocial/tiktok.jpeg"></a>
        <a href="https://wa.wizard.id/4082dd" target="_blank"><i data-feather="phone"></i></a>
      </div>

      <div class="links">
        <a href="#home">>Home<</a>
        <a href="#menu">>Menu<</a>
        <a href="#contact">>Kontak<</a>

      </div>

      <div class="credit">
        <p>Copyright & Created By <a href="">Muhammad Syafiq Zhalifunnas. | &copy; 2023.</a>
      </div>

    </footer>
  <!-- Foooter END -->


<script>
      feather.replace()
    </script>

    <!-- JavaScript -->
    <script type="text/javascript" src="js/script.js"></script> 
    <script type="text/javascript" src="js/coba.js"></script>
    <script type="text/javascript" src="save.js"></script>
    <!-- JavaScript END -->
</html>


