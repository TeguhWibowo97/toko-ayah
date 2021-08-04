<?php 

class Admin extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Model_admin');
    }

    public function index()
    {
        $this->load->view('template/headeradmin');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }

    public function baru()
    {
        $data['produk'] = $this->Model_admin->getAllSmartphoneBaru();
        $this->load->view('template/headeradmin');
        $this->load->view('admin/baru',$data);
        $this->load->view('template/footer');

        $this->load->view('modal/modaltambahbarang');
    }

    public function tambah()
    {
        $this->Model_admin->tambahDataProduk();
    }
    public function detail($id)
    {
        $data['produk'] = $this->Model_admin->getProdukById($id);
        $this->load->view('template/headeradmin');
        $this->load->view('admin/detail',$data);
        $this->load->view('template/footer');
        
    }
    public function edit()
    {
        
    }
}


