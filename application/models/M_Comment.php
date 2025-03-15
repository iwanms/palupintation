<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Comment extends CI_Model {

    function comments($url_couple){
        $query = $this->db->query("SELECT * FROM tb_comments WHERE id_couple = (SELECT id FROM tb_couple WHERE url_couple = '".$url_couple."')");
        return $query->result();
    }

    function saveComment($name, $comment, $attend, $url_couple){

        $query = "INSERT INTO tb_comments (id_couple, name, comment, attend, date) VALUES ((SELECT id FROM tb_couple WHERE url_couple = '".$url_couple."'), '".$name."', '".$comment."', '".$attend."', NOW())";

        $this->db->query($query);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}