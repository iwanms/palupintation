<?php
  $url_couple   = isset($url_couple) ? $url_couple : "";

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

  $hadir        = isset($attend[0]->hadir)? $attend[0]->hadir : 0;
  $tidak_hadir  = isset($attend[0]->tidak_hadir)? $attend[0]->tidak_hadir : 0;
  

setlocale(LC_TIME, 'id_ID.UTF-8');
    $date = new DateTime(); // Mendapatkan tanggal saat ini
    $date->modify('+1 day'); // Menambah 1 hari
    $tanggalSample = $date->format('d ') . strftime('%B', $date->getTimestamp()) . ' ' . $date->format('Y');
    $hariSample = strftime('%A', $date->getTimestamp()); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spesial 02</title>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
    />

    <script src="<?= base_url();?>assets/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="<?= base_url();?>assets/theme/tanpa_foto/spesial_02/style.css" />

    <link rel="stylesheet" href="<?= base_url();?>assets/font-awesome/css/all.min.css">
    <script src="<?= base_url();?>assets/font-awesome/js/all.min.js"></script>
</head>
<body>
    <section class="box slide-opening bg-dua" id="slide-pembuka">
        <div class="image-and-name">
            <img src="<?=base_url();?>assets/theme/tanpa_foto/spesial_02/img/couple.png" alt="couple">
            <div class="name"><?=$female_short;?> & <?=$male_short;?></div>
        </div>
        <div class="guest">
            <div>dear,</div>
            <div><?=$guest;?></div>
        </div>
        <div class="button">
            <button class="btn-black" onclick="enableScroll()">Buka Undangan</button>
        </div>
    </section>

    <section class="box slide-satu" id="fade-in-slide-satu">
        <div class="name-couple">
            <div><?=$female_short;?> & <?=$male_short;?></div>
            <div><?=$hariSample?>, <?=$tanggalSample?></div>
        </div>
    </section>

    <section class="slide-dua">
        <div class="doa fade-in">
            “Dan di antara tanda-tanda (kebesaran)-Nya, ialah Dia menciptakan
            pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan
            merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan
            sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda
            (kebesaran Allah) bagi kaum yang berpikir”
            <br>
            <p>(QS Ar-Rum : 21)</p>
        </div>
    </section>

    <section class="box slide-tiga">
      <div class="transparent">
        <div class="salam fade-in">
          <p>Assalamualaikum Wr. Wb</p>
          Tanpa mengurangi rasa hormatkami mengundang Bapak/Ibu/Saudara/i untuk
          menghadiri acara pernikahan kami
        </div>

        <div class="couple fade-in">
          <img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_02/img/tema_2_female.png" />
          <div class="nama"><?=$female;?></div>
          <div class="orang-tua">
            Putri Bapak Nama Bapak<br />
            & Ibu Nama Ibu
          </div>
        </div>

        <div class="dan fade-in">&</div>

        <div class="couple fade-in">
          <img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_02/img/tema_2_male.png" />
          <div class="nama"><?=$male;?></div>
          <div class="orang-tua">
            Putri Bapak Nama Bapak<br />
            & Ibu Nama Ibu
          </div>
        </div>
      </div>
    </section>

    <section class="box slide-empat">
      <div class="box-title fade-in">Cerita Kami</div>
      <div class="cerita">
        <div class="box-cerita fade-in">
          <div class="text">
            <div class="head">Awal Cerita</div>
            <div class="body">
                Segala sesuatu yang indah bermula di tahun 2024, saat dua jiwa yang berbeda dipertemukan oleh takdir. Dalam kesederhanaan pertemuan itu, kami mulai merasakan bahwa hidup lebih bermakna ketika dijalani bersama.
            </div>
          </div>
        </div>
        <div class="box-cerita fade-in">
          <div class="text">
            <div class="head">Tunangan</div>
            <div class="body">
                Hari itu menjadi momen yang sangat spesial. Pada tanggal 26 Oktober 2024, dengan keyakinan penuh, kami mengucap janji untuk melangkah ke tahap berikutnya. Sebuah awal dari perjalanan cinta yang lebih serius menuju ikatan suci.
            </div>
          </div>
        </div>
        <div class="box-cerita fade-in">
          <div class="text">
            <div class="head">Pernikahan</div>
            <div class="body">
                Dengan penuh sukacita, kami mengundang Anda untuk hadir dan menjadi saksi atas awal baru dalam kehidupan kami. Pada tanggal 8 Februari 2025, kami akan mengikat janji suci dalam sebuah pernikahan.
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="box slide-lima">
      <div class="box-transparent fade-in">
        <div class="date">
          <div class="date-title fade-in">Save The Date</div>
          <div class="date-text fade-in">
            Tanpa mengurangi rasa hormat. Kami mengundang Bapak/Ibu/Saudara/i
            serta Kerabat sekalian untuk menghadiri acara pernikahan kami:
          </div>
          <div class="countdown fade-in">
            <div class="box-time">
              <div class="number" id="days">0</div>
              <div class="number-text">Hari</div>
            </div>
            <div class="box-time">
              <div class="number" id="hours">0</div>
              <div class="number-text">Jam</div>
            </div>
            <div class="box-time">
              <div class="number" id="minutes">0</div>
              <div class="number-text">Menit</div>
            </div>
            <div class="box-time">
              <div class="number" id="seconds">0</div>
              <div class="number-text">Detik</div>
            </div>
          </div>
        </div>
      </div>

      <div class="box-transparent-biru fade-in">
        <div class="title-acara">Akad Nikah</div>
        <div class="tanggal"><?=$hariSample?>, <?=$tanggalSample?></div>
        <div class="jam">Pukul : 08.30 WIB</div>
        <div class="alamat">Alamat : Gedung Islamic Centre Subang</div>

        <div class="ornamen"><img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/img/G2-ornamen-1.png" alt="" /></div>

        <div class="title-acara">Resepsi</div>
        <div class="tanggal"><?=$hariSample?>, <?=$tanggalSample?></div>
        <div class="jam">Pukul : 08.30 WIB</div>
        <div class="alamat">Alamat : Gedung Islamic Centre Subang</div>
      </div>
    </section>

    <section class="slide-enam">  
      <div class="maps">
        <div class="title fade-in">Location</div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.745350443343!2d107.75640937531423!3d-6.553798893439252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e693c80bf858333%3A0x6555a6e39e86099c!2sIslamic%20Centre!5e0!3m2!1sid!2sid!4v1742134780485!5m2!1sid!2sid"
          style="border:0;" allowfullscreen="" loading="lazy" width="100%" height="200px">
        </iframe>
        <div class="tombol">
          <a href="https://maps.app.goo.gl/oNQnvCvcmLuVvjXG9" target="_blank">Buka Maps</a>
        </div>

        <div class="amplop-title">Amplop Digital</div>
        <div class="amplop-digital fade-in">
          <div class="bank fade-in">
            <div><img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/img/bca.png" /></div>
            <div class="rekening" id="rek-1">01234556789</div>
            <a href="javascript:void(0)" onclick="clipboard('rek-1')" class="rek-copy"><i class="fa-solid fa-copy"></i></a>
          </div>
          <div class="bank fade-in">
            <div><img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/img/mandiri.webp" /></div>
            <div class="rekening" id="rek-2">01234556789</div>
            <a href="javascript:void(0)" onclick="clipboard('rek-2')" class="rek-copy"><i class="fa-solid fa-copy"></i></a>
          </div>
        </div>
      </div>
    </section>

    <section class="box slide-tujuh">
      <div class="box-transparent fade-in">
        <div class="rspv fade-in">
          <p class="title">Ucapan & Do'a</p>
          <p class="text">
            Berikan ucapan harapan dan do’a <br />kepada kedua mempelai
          </p>
          <div class="box-hadir">
            <div class="hadir">
              <div id="hadir"><?=$hadir;?></div>
              <div>Hadir</div>
            </div>
            <div class="hadir">
              <div id="tidak-hadir"><?=$tidak_hadir;?></div>
              <div>Tidak Hadir</div>
            </div>
          </div>
          <div class="box-komen fade-in">
            <input type="hidden" name="url_couple" value="<?=$url_couple;?>">
            <input type="text" placeholder="Nama" name="name"/>
            <textarea name="comment" id="comment"></textarea>
            <select name="attend" id="attend">
              <option value="1">Hadir</option>
              <option value="0">Tidak Hadir</option>
            </select>
            <button onclick="saveComment()">Kirim</button>

            <div class="box-komentar" id="box-komentar">

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="box slide-delapan">
      <div class="gambar fade-in">
        <div class="nama">Rossa & Iwan</div>
        <img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_02/img/couple-circle.png" alt="gambar-penutup">
      </div>
      <div class="penutup fade-in">
        Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila
        Bapak/Ibu/Saudara/i berkenan hadir dan memberikan doa restu. Atas
        kehadiran dan doa restunya, kami mengucapkan terima kasih.
      </div>
      <div class="footer fade-in">
        <img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_02/img/palupintation.png" alt="palupintation.com">
      </div>
    </section>

    <section class="">
      <div id="audio-container">
        <audio id="song" loop>
          <source src="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/audio/sabilulungan.mp3" />
        </audio>

        <div class="audio-icon-wrapper" style="display: none">
          <i class="bi bi-disc"></i>
        </div>
      </div>
    </section>


    <script src="<?= base_url();?>assets/theme/tanpa_foto/spesial_02/script.js"></script>
    <script>
      const base_url = '<?=base_url();?>';
    </script>
</body>
</html>