<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Theme extends CI_Model {

    function get_couple($url_couple){
        $query = $this->db->query("SELECT a.id id_couple, a.male_name, b.male_father, b.male_mother, a.female_name, b.female_father, b.female_mother, b.date_akad, b.date_resepsi, CASE
            WHEN DAYNAME(b.date_akad) = 'Monday' THEN 'Senin'
            WHEN DAYNAME(b.date_akad) = 'Tuesday' THEN 'Selasa'
            WHEN DAYNAME(b.date_akad) = 'Wednesday' THEN 'Rabu'
            WHEN DAYNAME(b.date_akad) = 'Thursday' THEN 'Kamis'
            WHEN DAYNAME(b.date_akad) = 'Friday' THEN 'Jumat'
            WHEN DAYNAME(b.date_akad) = 'Saturday' THEN 'Sabtu'
            WHEN DAYNAME(b.date_akad) = 'Sunday' THEN 'Minggu'
        END AS hari, 
        CASE 
            WHEN MONTHNAME(b.date_akad) = 'January' THEN 'Januari'
            WHEN MONTHNAME(b.date_akad) = 'February' THEN 'Februari'
            WHEN MONTHNAME(b.date_akad) = 'March' THEN 'Maret'
            WHEN MONTHNAME(b.date_akad) = 'April' THEN 'April'
            WHEN MONTHNAME(b.date_akad) = 'May' THEN 'Mei'
            WHEN MONTHNAME(b.date_akad) = 'June' THEN 'Juni'
            WHEN MONTHNAME(b.date_akad) = 'July' THEN 'Juli'
            WHEN MONTHNAME(b.date_akad) = 'August' THEN 'Agustus'
            WHEN MONTHNAME(b.date_akad) = 'September' THEN 'September'
            WHEN MONTHNAME(b.date_akad) = 'October' THEN 'Oktober'
            WHEN MONTHNAME(b.date_akad) = 'November' THEN 'November'
            WHEN MONTHNAME(b.date_akad) = 'December' THEN 'Desember'
        END AS bulan,
        DATE_FORMAT(NOW(), '%d') AS tanggal,
        DATE_FORMAT(NOW(), '%Y') AS tahun
        FROM `tb_couple` a JOIN tb_couple_detail b ON a.id = b.id_couple
        WHERE a.url_couple = '".$url_couple."'");

        return $query->result();
    }

    function getAttend($url_couple){
        $query = $this->db->query("SELECT SUM(hadir) hadir, SUM(tidak_hadir) tidak_hadir FROM ( SELECT count(attend) hadir, 0 tidak_hadir FROM tb_comments WHERE id_couple = (SELECT id FROM tb_couple WHERE url_couple = '".$url_couple."') AND attend = 1 GROUP BY id_couple UNION ALL SELECT 0 hadir, count(attend) tidak_hadir FROM tb_comments WHERE id_couple = (SELECT id FROM tb_couple WHERE url_couple = '".$url_couple."') AND attend = 0 GROUP BY id_couple ) AS subquery");

        return $query->result();
    }
}