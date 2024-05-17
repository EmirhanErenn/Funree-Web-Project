<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Real Estate Website Template</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">Logo<em> </em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.html" class="active" title="Anasayfa">Ana sayfa</a></li>
                            <li><a href="properties.html" title="Ürünler">Ürünler</a></li>
                            <li><a href="about.html" title="Hakkımızda">Hakkımızda</a></li>
                            <li><a href="#" title="Galeri" >Galerİ</a></li>
                            <li><a href="contact.html" title="İletişim">İletİşİm</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menü</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h2>Buraya yazı gelecek</h2>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Featured Products Start ***** -->

    <section class="section section-bg" id="schedule" style="background-image: url()">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Ürünlerimiz Hakkında</h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Ürünler hakkında bilgi</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>Ürünler hakkında bilgi</p>

                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Featured Products ends Here ***** -->

   <!-- ***** Cars Starts ***** -->
   <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <?php
                include("baglanti.php");

                $sec = "select * from deneme";
                $sonuc = $baglan->query($sec);

                if ($sonuc->num_rows > 0) {
                    while ($cek = $sonuc->fetch_assoc()) {
                        echo "
                        <div class='col-lg-4'>
                            <div class='trainer-item'>
                                <div class='image-thumb'>
                                    <img src='" . $cek['resim'] . "' alt=''>
                                </div>
                                <div class='down-content'>
                                <span></span>
                                    <h4>" . $cek['isim'] . "</h4>
                                    <p>" . $cek['acıklama'] . "</p>
                                    <ul class='social-icons'>
                                        <li><a href='property-details.php'>Detaylı bilgi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        ";
                    }
                } else {
                    echo "<div class='col-lg-12'><p>Veri yok dayı</p></div>";
                }
                ?>
            </div>
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->
<br><br>

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url()">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>İletişim</h2>
                        <p>Sorularınız mı var, geri bildirimde bulunmak mı istiyorsunuz veya işbirliği fırsatları hakkında daha fazla bilgi almak mı istiyorsunuz? Bizimle iletişime geçmekten çekinmeyin!</p>
                        <div class="main-button">
                            <a href="contact.html">Bizimle İletişime Geç</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->


    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2024 Designed By - Beker Software
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>

<?php 
include("baglanti.php");
?>