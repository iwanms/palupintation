<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Theme extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("M_Theme","model");
    }

    function tanpa_foto_spesial_01(){
        $this->load->view("theme/tanpa_foto/spesial_01");
    }

    function couple(){
        $url_couple = $this->uri->segment(1);
        $to = $this->input->get("to");

        $data["attend"]     = $this->model->getAttend($url_couple);
        $data["data"]       = $this->model->get_couple($url_couple);
        $data["guest"]      = $to;
        $data["url_couple"] = $url_couple;

        // var_dump($data["data"]); die;
        $this->load->view("theme/tanpa_foto/spesial_01", $data);
    }

}
