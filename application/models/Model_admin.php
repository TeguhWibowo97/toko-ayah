<?php

class Model_Admin extends CI_Model{

    public function tambahDataProduk()
    {
        $data = [
            "nama_produk" => $this->input->post('nama_produk'),
            "stok" => $this->input->post('stok'),
            "harga" => $this->input->post('harga'),
            "kondisi" => $this->input->post('kondisi'),
            "kategori" => $this->input->post('kategori'),
            "deskripsi" => $this->input->post('deskripsi')
        ];

        $this->db->insert('produk',$data);
    }

    public function editDataProduk($id)
    {
        
    }
    public function getProdukById($id)
    {
        return $this->db->get('produk',['id_produk'=>$id])->row_array();
    }
    public function getAllSmartphoneBaru()
    {
        return $this->db->get_where('produk',['kategori'=>'Smartphone','kondisi'=>'Baru'])->result_array();
    }

}