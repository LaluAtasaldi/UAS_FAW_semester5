<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produkmebel extends CI_Controller {
    public function index()
    {
        $produkmebel = $this->Produkmebel_model->get_all();

        $data = array(
            'judul' => "Produk Mebel",
            'page' =>  "produk/mebel",
            'produkmebel_data' => $produkmebel
        );
        $this->load->view('halaman',$data);
    }

    public function create(){
         $data = array(
            'button' => 'Tambah',
            'judul' => 'Form mebel',
            'sub_title' => 'Tambah data baru',
            'action' => site_url('produkmebel/create_action'),
        'id_mebel' => set_value('id_mebel'),
        'nama_mebel' => set_value('nama_mebel'),
        'jenis_mebel' => set_value('jenis_mebel'),
        'harga_mebel' => set_value('harga_mebel'),
        'nama_penjual' => set_value('nama_penjual'),
        'gambar_mebel' => set_value('gambar_mebel'),
        'keterangan_mebel' => set_value('keterangan_mebel')
    );
        $data['page'] = "produk/formmebel";
        $this->load->view('halaman', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();       
        $gambar_mebel=$_FILES['gambar_mebel']['name'];
        if($gambar_mebel==''){}else{
            $config['upload_path']= './upload/mebel/';
            $config['allowed_types']= 'jpg|png|gif';

            $this->load->library('upload', $config);


            if(!$this->upload->do_upload('gambar_mebel')){
                echo "gagal";die();
            }else{
                // if ($this->form_validation->run() == FALSE) {
                //     $this->create();
                // } else {
                    $data = array(
                        'id_mebel' => $this->input->post('id_mebel',TRUE),
                        'nama_mebel' => $this->input->post('nama_mebel',TRUE),
                        'jenis_mebel' => $this->input->post('jenis_mebel',TRUE),
                        'harga_mebel' => $this->input->post('harga_mebel',TRUE),
                        'nama_penjual' => $this->input->post('nama_penjual',TRUE),
                        'gambar_mebel' => $this->input->post('gambar_mebel',TRUE),
                        'keterangan_mebel' => $this->input->post('keterangan_mebel',TRUE),
                        'gambar_mebel' => $gambar_mebel
                );
                // }
                $this->Produkmebel_model->insert($data);
                $this->session->set_flashdata('message', '<p class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Berhasil Menambahkan</p>');
                redirect(site_url('produkmebel'));
            }
        } 
    }

    public function update($id) 
    {
        $row = $this->Produkmebel_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Ubah',
                'judul' => 'Produk Mebel',
                'sub_title' => 'Ubah Data',
                'action' => site_url('produkmebel/update_action'),
        'id_mebel' => set_value('id_mebel', $row->id_mebel),
        'nama_mebel' => set_value('nama_mebel', $row->nama_mebel),
        'jenis_mebel' => set_value('jenis_mebel', $row->jenis_mebel),
        'harga_mebel' => set_value('harga_mebel', $row->harga_mebel),
        'nama_penjual' => set_value('nama_penjual', $row->nama_penjual),
        'gambar_mebel' => set_value('gambar_mebel', $row->gambar_mebel),
        'keterangan_mebel' => set_value('keterangan_mebel', $row->keterangan_mebel)
        );
           $data['page'] = "produk/formmebel";
            $this->load->view('halaman', $data);
        } else {
            $this->session->set_flashdata('message', '<p class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong>Data Tidak Ditemukan</p>');
            redirect(site_url('produkmebel'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();       
        $gambar_mebel=$_FILES['gambar_mebel']['name'];
        if($gambar_mebel==''){}else{
            $config['upload_path']= './upload/mebel/';
            $config['allowed_types']= 'jpg|png|gif';

            $this->load->library('upload', $config);


            if(!$this->upload->do_upload('gambar_mebel')){
                echo "gagal";die();
            }else{
                // if ($this->form_validation->run() == FALSE) {
                //     $this->create();
                // } else {
                    $data = array(
                        'id_mebel' => $this->input->post('id_mebel',TRUE),
                        'nama_mebel' => $this->input->post('nama_mebel',TRUE),
                        'jenis_mebel' => $this->input->post('jenis_mebel',TRUE),
                        'harga_mebel' => $this->input->post('harga_mebel',TRUE),
                        'nama_penjual' => $this->input->post('nama_penjual',TRUE),
                        'gambar_mebel' => $this->input->post('gambar_mebel',TRUE),
                        'keterangan_mebel' => $this->input->post('keterangan_mebel',TRUE),
                        'gambar_mebel' => $gambar_mebel
                );
           
            // }
            $this->Produkmebel_model->update($this->input->post('id_mebel', TRUE), $data);
            $this->session->set_flashdata('message', '<p class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Berhasil Memperbaharui</p>');
            redirect(site_url('produkmebel'));
            }
        }
    }

    public function delete($id) 
    {
        $row = $this->Produkmebel_model->get_by_id($id);

        if ($row) {
            $this->Produkmebel_model->delete($id);
            $this->session->set_flashdata('message', '<p class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Berhasil Menghapus</p>');
            redirect(site_url('produkmebel'));
        } else {
            $this->session->set_flashdata('message', '<p class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong>Data Tidak Ditemukan</p>');
            redirect(site_url('produkmebel'));
        }
    }
          
  public function _rules() 
    {
        
        $this->form_validation->set_rules('id_mebel', 'Id Mebel', 'trim');
        $this->form_validation->set_rules('nama_mebel', 'Nama Mebel', 'trim|required');
        $this->form_validation->set_rules('jenis_mebel', 'Jenis Mebel', 'trim|required');
        $this->form_validation->set_rules('harga_mebel', 'Harga Mebel', 'trim|required');
        $this->form_validation->set_rules('nama_penjual', 'Nama Penjual', 'trim|required');
        $this->form_validation->set_rules('gambar_mebel', 'Gambar Mebel', 'trim|required');
        $this->form_validation->set_rules('keterangan_mebel', 'Keterangan Mebel', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        }




}



