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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/style.css" />

    <script src="<?= base_url();?>assets/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="<?= base_url();?>assets/font-awesome/css/all.min.css">
    <script src="<?= base_url();?>assets/font-awesome/js/all.min.js"></script>
  </head>
  <body>
    <section class="box slide-pembuka" id="slide-pembuka">
      <div class="box-transparent" >
        <div id="fade-in">
          <img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/img/couple-open.png">
          <div class="nama"><?=$female_short;?> & <?=$male_short;?></div>
          <div class="guest">dear, <br>
          <?=$guest;?></div>
          <div class="tombol"><a href="#slide-satu" onclick="enableScroll()">Buka Undangan</a></div>
        </div>
      </div>
    </section>

    <!-- slide satu -->
    <section class="box slide-satu" id="slide-satu">
      <div id="fade-in-slide-satu">
        <div class="couple">
          <img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/img/couple-circle.png" />
        </div>
        <div class="title">
          <img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/img/wayang-brown.png" />
          <div class="nama"><?=$female_short;?> & <?=$male_short;?></div>
          <!--<div class="tanggal"><?=$hari;?>, <?=$tanggal;?> <?=$bulan;?> <?=$tahun;?></div>-->
          <div class="tanggal"><?=$hariSample?>, <?=$tanggalSample?></div>
        </div>
      </div>
    </section>

    <section class="box-doa">
      <div class="doa fade-in">
        “Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan
        pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan
        merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan
        sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda
        (kebesaran Allah) bagi kaum yang berpikir”
        <br />
        <p>(QS Ar-Rum : 21)</p>
      </div>
    </section>

    <!-- slide dua  -->
    <section class="box slide-dua">
      <div class="box-transparent">
        <div class="salam fade-in">
          <p>Assalamualaikum Wr. Wb</p>
          Tanpa mengurangi rasa hormatkami mengundang Bapak/Ibu/Saudara/i untuk
          menghadiri acara pernikahan kami
        </div>

        <div class="couple fade-in">
          <img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/img/female.png" />
          <div class="nama">Rossa Amalia Rizqi</div>
          <div class="orang-tua">
            Putri Bapak Nama Bapak<br />
            & Ibu Nama Ibu
          </div>
        </div>

        <div class="dan fade-in">&</div>

        <div class="couple fade-in">
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
    <section class="box slide-empat">
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
              <div>Jam</div>
            </div>
            <div class="box-time">
              <div class="number" id="minutes">0</div>
              <div>Menit</div>
            </div>
            <div class="box-time">
              <div class="number" id="seconds">0</div>
              <div>Detik</div>
            </div>
          </div>
        </div>
      </div>
      <div class="box-transparent-brown fade-in">
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
      <div class="box-transparent-maps fade-in">
        <div class="location">Location</div>
        <div class="maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.760383054254!2d-74.00597238439804!3d40.71277577933126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a1f993c7771%3A0x4533ec58f7e8315e!2sOne%20World%20Trade%20Center!5e0!3m2!1sen!2sus!4v1615225943129!5m2!1sen!2sus"
          style="border:0;" allowfullscreen="" loading="lazy" width="100%" height="100%"></iframe>
        </div>
        <div class="tombol"><a href="https://maps.app.goo.gl/oNQnvCvcmLuVvjXG9" target="_blank">Buka Maps</a></div>
      </div>
    </section>
    <section class="box slide-lima">
      <div class="box-transparent fade-in">
        <div class="amplop-digital fade-in">
          <p>Amplop Digital</p>
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
    <section class="box slide-enam">
      <div class="box fade-in">
        <div class="penutup fade-in">
          Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila
          Bapak/Ibu/Saudara/i berkenan hadir dan memberikan doa restu. Atas
          kehadiran dan doa restunya, kami mengucapkan terima kasih.
          <br />Kami yang berbahagia,
        </div>
        <div class="gambar fade-in">
          <img src="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/img/couple-circle.png" />
          <div class="nama">Rossa & Iwan</div>
        </div>
      </div>
    </section>
    <section class="footer">
      <div class="website">Palupintation.com</div>
      <div class="signature">make with 💝</div>
    </section>

    <section class="">
      <div id="audio-container">
        <audio id="song" autoplay loop>
          <source src="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/audio/sabilulungan.mp3" />
        </audio>

        <div class="audio-icon-wrapper" style="display: none">
          <i class="bi bi-disc"></i>
        </div>
      </div>
    </section>

    <script src="<?= base_url();?>assets/theme/tanpa_foto/spesial_01/script.js"></script>
    <script>
      const base_url = '<?=base_url();?>';
    </script>
  </body>
</html>
