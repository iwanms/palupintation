<?php
  $female       = isset($data[0]->female_name) ? $data[0]->female_name : "";
  $female_index = strpos($female, ' '); 
  $female_short = substr($female,0,$female_index);

  $male         = isset($data[0]->male_name) ? $data[0]->male_name : "";
  $male_index   = strpos($male, ' '); 
  $male_short   = substr($male,0,$male_index);

  $guest        = isset($guest) ? $guest : "";

  $hari         = isset($data[0]->hari) ? $data[0]->hari : "";
  $tanggal      = isset($data[0]->tanggal) ? $data[0]->tanggal : "";
  $bulan        = isset($data[0]->bulan) ? $data[0]->bulan : "";
  $tahun        = isset($data[0]->tahun) ? $data[0]->tahun : "";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$female_short;?> & <?=$male_short;?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Italianno&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/style.css" />
  </head>
  <body>
    <section class="box slide-pembuka" id="slide-pembuka">
      <div class="box-transparent">
        <img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/img/couple-open.png">
        <div class="nama"><?=$female_short;?> & <?=$male_short;?></div>
        <div class="guest">dear, <br>
        <?=$guest;?></div>
        <div class="tombol"><a href="#slide-satu" onclick="enableScroll()">Buka Undangan</a></div>
      </div>
    </section>
    <section class="box slide-satu" id="slide-satu">
      <div class="couple">
        <img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/img/couple-circle.png" />
      </div>
      <div class="title">
        <img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/img/wayang-brown.png" />
        <div class="nama"><?=$female_short;?> & <?=$male_short;?></div>
        <div class="tanggal"><?=$hari;?>, <?=$tanggal;?> <?=$bulan;?> <?=$tahun;?></div>
      </div>
    </section>
    <section class="box-doa">
      <div class="doa">
        “Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan
        pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan
        merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan
        sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda
        (kebesaran Allah) bagi kaum yang berpikir”
        <br />
        <p>(QS Ar-Rum : 21)</p>
      </div>
    </section>
    <section class="box slide-dua">
      <div class="box-transparent">
        <div class="salam">
          <p>Assalamualaikum Wr. Wb</p>
          Tanpa mengurangi rasa hormatkami mengundang Bapak/Ibu/Saudara/i untuk
          menghadiri acara pernikahan kami
        </div>

        <div class="couple">
          <img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/img/female.png" />
          <div class="nama">Rossa Amalia Rizqi</div>
          <div class="orang-tua">
            Putri Bapak Nama Bapak<br />
            & Ibu Nama Ibu
          </div>
        </div>

        <div class="dan">&</div>

        <div class="couple">
          <img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/img/male.png" />
          <div class="nama">Iwan Maolana Sidik</div>
          <div class="orang-tua">
            Putri Bapak Nama Bapak<br />
            & Ibu Nama Ibu
          </div>
        </div>
      </div>
    </section>
    <section class="box slide-tiga">
      <div class="box-title">Cerita Kami</div>
      <div class="cerita">
        <div class="box-cerita">
          <div class="text">
            <div class="head">Awal Cerita</div>
            <div class="body">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Repellendus atque obcaecati laboriosam autem a odit nihil eos
              magni, est, iusto labore possimus pariatur quia tenetur totam quas
              nostrum cum facilis.
            </div>
          </div>
        </div>
        <div class="box-cerita">
          <div class="text">
            <div class="head">Tunangan</div>
            <div class="body">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Repellendus atque obcaecati laboriosam autem a odit nihil eos
              magni, est, iusto labore possimus pariatur quia tenetur totam quas
              nostrum cum facilis.
            </div>
          </div>
        </div>
        <div class="box-cerita">
          <div class="text">
            <div class="head">Pernikahan</div>
            <div class="body">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Repellendus atque obcaecati laboriosam autem a odit nihil eos
              magni, est, iusto labore possimus pariatur quia tenetur totam quas
              nostrum cum facilis.
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="box slide-empat">
      <div class="box-transparent">
        <div class="date">
          <div class="date-title">Save The Date</div>
          <div class="date-text">
            Tanpa mengurangi rasa hormat. Kami mengundang Bapak/Ibu/Saudara/i
            serta Kerabat sekalian untuk menghadiri acara pernikahan kami:
          </div>
          <div class="countdown">
            <div class="box-time">
              <div class="number">0</div>
              <div class="number-text">Hari</div>
            </div>
            <div class="box-time">
              <div class="number">0</div>
              <div>Jam</div>
            </div>
            <div class="box-time">
              <div class="number">0</div>
              <div>Menit</div>
            </div>
            <div class="box-time">
              <div class="number">0</div>
              <div>Detik</div>
            </div>
          </div>
        </div>
      </div>
      <div class="box-transparent-brown">
        <div class="title-acara">Akad Nikah</div>
        <div class="tanggal">Sabtu, 08 Februari 2025</div>
        <div class="jam">Pukul : 08.30 WIB</div>
        <div class="alamat">Alamat : Gedung Islamic Centre Subang</div>

        <div class="ornamen"><img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/img/G2-ornamen-1.png" alt="" /></div>

        <div class="title-acara">Resepsi</div>
        <div class="tanggal">Sabtu, 08 Februari 2025</div>
        <div class="jam">Pukul : 08.30 WIB</div>
        <div class="alamat">Alamat : Gedung Islamic Centre Subang</div>
      </div>
    </section>
    <section class="box slide-lima">
      <div class="box-transparent">
        <div class="amplop-digital">
          <p>Amplop Digital</p>
          <div class="bank">
            <div><img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/img/bca.png" /></div>
            <div class="rekening">01234556789</div>
          </div>
          <div class="bank">
            <div><img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/img/mandiri.webp" /></div>
            <div class="rekening">01234556789</div>
          </div>
        </div>
      </div>

      <div class="box-transparent">
        <div class="rspv">
          <p class="title">Ucapan & Do'a</p>
          <p class="text">
            Berikan ucapan harapan dan do’a <br />kepada kedua mempelai
          </p>
          <div class="box-hadir">
            <div class="hadir">
              <div>0</div>
              <div>Hadir</div>
            </div>
            <div class="hadir">
              <div>0</div>
              <div>Tidak Hadir</div>
            </div>
          </div>
          <div class="box-komen">
            <input type="text" placeholder="Nama" />
            <textarea name="komen" id="komen"></textarea>
            <button>Kirim</button>

            <div class="komentar">
              <div class="nama">Iwan</div>
              <div class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </div>
            </div>
            <div class="komentar">
              <div class="nama">Valentino Rossi</div>
              <div class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </div>
            </div>
            <div class="komentar">
              <div class="nama">Fabio</div>
              <div class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="box slide-enam">
      <div class="box">
        <div class="penutup">
          Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila
          Bapak/Ibu/Saudara/i berkenan hadir dan memberikan doa restu. Atas
          kehadiran dan doa restunya, kami mengucapkan terima kasih.
          <br />Kami yang berbahagia,
        </div>
        <div class="gambar">
          <img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/img/couple-circle.png" />
          <div class="nama">Rossa & Iwan</div>
        </div>
      </div>
    </section>
    <section class="footer">
      <div class="website">Palupintation.com</div>
      <div class="signature">make with 💝</div>
    </section>



    <script>
      const rootElement = document.querySelector(":root");  

      function disableScroll() {
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

        window.onscroll = function () {
          window.scrollTo(scrollTop, scrollLeft);
        };

        rootElement.style.scrollBehavior = "auto"; 
      }

      function enableScroll() {
        // Remove the custom scroll lock
        window.onscroll = function () {};

        // Enable smooth scrolling globally
        rootElement.style.scrollBehavior = "smooth";  

        // Hide the 'slide-pembuka' section
        const slidePembuka = document.getElementById("slide-pembuka");
        if (slidePembuka) {
          slidePembuka.style.display = "none";  // Hide the opening section
        }

        // Optionally, scroll to 'slide-satu' after hiding the 'slide-pembuka'
        const slideSatu = document.getElementById("slide-satu");
        if (slideSatu) {
          slideSatu.scrollIntoView({ behavior: "smooth", block: "start" });  // Smooth scroll to 'slide-satu'
        }
      }

      disableScroll();
    </script>
  </body>
</html>
