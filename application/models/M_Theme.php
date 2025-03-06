<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Theme extends CI_Model {

    function get_couple($url_couple){
        $query = $this->db->get_where("tb_couple", ["url_couple" => $url_couple]);
        return $query->row();
    }

}