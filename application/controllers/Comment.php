<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("M_Comment","model");
    }

    function save(){
        $url_couple = $this->input->post("url_couple");
        $name       = $this->input->post("name");
        $comment    = $this->input->post("comment");
        $attend     = $this->input->post("attend");

        if($url_couple == ""){
            $data = array(
                'status' => 'failed',
                'message' => 'URL Couple kosong',
            );
    
            // Set the response format to JSON
            $this->output
                 ->set_content_type('application/json')
                 ->set_output(json_encode($data));
        }

        if($name == "" || $comment == "" || $attend==""){
            $data = array(
                'status' => 'failed',
                'message' => 'Nama dan Komentar tidak boleh kosong',
            );
    
            // Set the response format to JSON
            $this->output
                 ->set_content_type('application/json')
                 ->set_output(json_encode($data));
        }else{
            $save = $this->model->saveComment($name, $comment, $attend, $url_couple);
            if($save == true){
                $data = array(
                    'status' => 'success',
                    'message' => 'Pesan berhasil di kirim',
                );
        
                // Set the response format to JSON
                $this->output
                     ->set_content_type('application/json')
                     ->set_output(json_encode($data));
            }else{
                $data = array(
                    'status' => 'failed',
                    'message' => 'Internal server error',
                );
        
                // Set the response format to JSON
                $this->output
                     ->set_content_type('application/json')
                     ->set_output(json_encode($data));
            }
        }
    }

    function getComment(){
        $url_couple = $this->input->post("url_couple");
        $comments = $this->model->comments($url_couple);

        $data = array(
            'comments' => $comments
        );

        // Set the response format to JSON
        $this->output
             ->set_content_type('application/json')
             ->set_output(json_encode($data));
    }
}