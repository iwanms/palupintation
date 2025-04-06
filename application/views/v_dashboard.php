<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Palupintation.com</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="<?=base_url();?>assets/dashboard/img/favicon.png" rel="icon" />
    <link href="<?=base_url();?>assets/dashboard/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="<?=base_url();?>assets/dashboard/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="<?=base_url();?>assets/dashboard/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="<?=base_url();?>assets/dashboard/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="<?=base_url();?>assets/dashboard/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="<?=base_url();?>assets/dashboard/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="<?=base_url();?>assets/dashboard/css/main.css" rel="stylesheet" />
    <link href="<?=base_url();?>assets/dashboard/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Yummy
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
  #text-berubah {
    display: inline-block; /* Penting agar transisi vertikal bekerja dengan baik */
    transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out; /* Tambahkan transisi */
    transform: translateY(0);
    opacity: 1;
  }

  #text-berubah.slide-out-up {
    transform: translateY(-10px); /* Geser sedikit ke atas */
    opacity: 0;
  }

  #text-berubah.slide-in-down {
    transform: translateY(10px); /* Geser sedikit ke bawah */
    opacity: 0;
  }
  footer{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  footer p {
    font-weight:bold;
  }
  .whatsapp-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #25D366; /* Warna hijau WhatsApp */
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    font-size: 16px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 260px;
  }
  .whatsapp-button:hover {
    background-color: #128C7E; /* Warna hijau WhatsApp lebih gelap saat hover */
  }
  .telegram-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #229ED9; /* Warna biru Telegram */
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    font-size: 16px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 260px;
  }
  .telegram-button:hover {
    background-color: #177EBE; /* Warna biru Telegram lebih gelap saat hover */
  }
  </style>

  </head>

  <body class="index-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
      <div
        class="container position-relative d-flex align-items-center justify-content-between"
      >
        <a
          href="index.html"
          class="logo d-flex align-items-center me-auto me-xl-0"
        >
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="<?=base_url();?>assets/dashboard/img/logo.png" alt=""> -->
          <h1 class="sitename">Palupintation</h1>
          <span>.</span>
          <h1>com</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li>
              <a href="#hero" class="active">Home<br /></a>
            </li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <!-- <a class="btn-getstarted" href="index.html#book-a-table">Book a Table</a> -->
      </div>
    </header>

    <main class="main">
      <!-- Hero Section -->
      <section id="hero" class="hero section light-background">
        <div class="container">
          <div
            class="row gy-4 justify-content-center justify-content-lg-between"
          >
            <div
              class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center"
            >
              <h1 data-aos="fade-up">Undangan Digital</h1>
              <p data-aos="fade-up" data-aos-delay="100">
                Berbagi momen dengan <b class="text-danger" id="text-berubah">mudah.</b>
              </p>
              <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                <!-- <a href="#book-a-table" class="btn-get-started"
                  >Lihat katalog</a
                > -->
              </div>
            </div>
            <div
              class="col-lg-5 order-1 order-lg-2 hero-img"
              data-aos="zoom-out"
            >
              <img
                src="<?=base_url();?>assets/dashboard/img/banner.png"
                class="img-fluid animated"
                alt=""
              />
            </div>
          </div>
        </div>
      </section>
      <!-- /Hero Section -->

      <!-- Chefs Section -->
      <section id="chefs" class="chefs section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>KATALOG</h2>
          <p>
            <span>Pilih</span> <span class="description-title">Tema<br /></span>
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="row gy-3">
            <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="team-member">
                <div class="member-img">
                  <img
                    src="<?=base_url();?>assets/dashboard/img/tema/spesial_01.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <!-- <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div> -->
                </div>
                <div class="member-info">
                  <h4>Spesial 01</h4>
                  <span>Kategori : Tanpa Foto</span>
                  <div class="harga-lama">Rp. 100.00</div>
                  <div class="harga-baru">Rp. 70.000</div>
                  <!-- <a href="<?= base_url(); ?>rossa-iwan?to=Tamu+Undangan" target="_blank">Preview</a> -->
                  <a href="https://palupintation.com/rossa-iwan/spesial_01?to=Tamu+Undangan" target="_blank">Preview</a>
                </div>
              </div>
            </div>
            <!-- End Card -->

            <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="team-member">
                <div class="member-img">
                  <img
                    src="<?=base_url();?>assets/dashboard/img/tema/spesial_02.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <!-- <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div> -->
                </div>
                <div class="member-info">
                  <h4>Spesial 02</h4>
                  <span>Kategori : Tanpa Foto</span>
                  <div class="harga-lama">Rp. 100.00</div>
                  <div class="harga-baru">Rp. 70.000</div>
                  <!-- <a href="<?= base_url(); ?>rossa-iwan?to=Tamu+Undangan" target="_blank">Preview</a> -->
                  <a href="https://palupintation.com/rossa-iwan/spesial_02?to=Tamu+Undangan" target="_blank">Preview</a>
                </div>
              </div>
            </div>
            <!-- End Card -->
          </div>
        </div>
      </section>
      <!-- /Chefs Section -->
    </main>

    <footer id="footer" class="footer dark-background">
      <p>Palupintation.com</p>
      <div class="mb-3">
        <a href="https://wa.me/6282319334003" target="_blank" rel="noopener noreferrer">
          <button class="whatsapp-button"><i class="bi bi-whatsapp"></i>&nbsp; Chat Admin via WhatsApp</button>
        </a>
      </div>
      <!-- <div>
        <a href="https://t.me/username_telegram_admin" target="_blank" rel="noopener noreferrer">
          <button class="telegram-button"><i class="bi bi-telegram"></i>&nbsp; Chat Admin via Telegram</button>
        </a>
      </div> -->
    </footer>

    <!-- Scroll Top -->
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?=base_url();?>assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url();?>assets/dashboard/vendor/php-email-form/validate.js"></script>
    <script src="<?=base_url();?>assets/dashboard/vendor/aos/aos.js"></script>
    <script src="<?=base_url();?>assets/dashboard/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?=base_url();?>assets/dashboard/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?=base_url();?>assets/dashboard/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="<?=base_url();?>assets/dashboard/js/main.js"></script>

    <script>
      function changeText() {
        const textElement = document.getElementById("text-berubah");
        if (textElement) {
          textElement.classList.add("slide-out-up");

          setTimeout(() => {
            if (textElement.textContent === "mudah") {
              textElement.textContent = "murah.";
            } else {
              textElement.textContent = "mudah.";
            }
            textElement.classList.remove("slide-out-up");
            textElement.classList.add("slide-in-down");

            setTimeout(() => {
              textElement.classList.remove("slide-in-down");
            }, 300);
          }, 300);
        }
      }

      const intervalId = setInterval(changeText, 2000);
    </script>
  </body>
</html>
