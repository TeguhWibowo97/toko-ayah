<?php

class User extends CI_Controller{

    public function baru()
    {
        $this->load->view('template/header');
        $this->load->view('smartphone/baru');
        $this->load->view('template/footer');
    }
    public function second()
    {
        $this->load->view('template/header');
        $this->load->view('smartphone/second');
        $this->load->view('template/footer');
    }

    
}