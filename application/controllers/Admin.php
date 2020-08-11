<?php 

class Admin extends CI_Controller{

    public function index()
    {
        $this->load->view('template/headeradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function baru()
    {
        $this->load->view('template/headeradmin');
        $this->load->view('admin/baru');
        $this->load->view('template/footer');

        $this->load->view('modal/modaltambahbarang');
    }

    public function tambah()
    {
        
    }
}


