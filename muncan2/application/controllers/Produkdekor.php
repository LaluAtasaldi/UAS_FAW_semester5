


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produkdekor extends CI_Controller {
    public function index()
    {
        $produkdekor = $this->Produkdekor_model->get_all();

        $data = array(
            'judul' => "Produk Dekor",
            'page' =>  "produk/dekor",
            'produkdekor_data' => $produkdekor
        );
        $this->load->view('halaman',$data);
    }

    public function create(){
         $data = array(
            'button' => 'Tambah',
            'judul' => 'Form Dekor',
            'sub_title' => 'Tambah data baru',
            'action' => site_url('produkdekor/create_action'),
        'id_dekor' => set_value('id_dekor'),
        'nama_dekor' => set_value('nama_dekor'),
        'gambar' => set_value('gambar'),
        'harga' => set_value('harga'),
        'keterangan' => set_value('keterangan')
    );
        $data['page'] = "produk/formdekor";
        $this->load->view('halaman', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();       
        $gambar=$_FILES['gambar']['name'];
        if($gambar==''){}else{
            $config['upload_path']= './upload/dekor/';
            $config['allowed_types']= 'jpg|png|gif';

            $this->load->library('upload', $config);


            if(!$this->upload->do_upload('gambar')){
                echo "gagal";die();
            }else{
                // if ($this->form_validation->run() == FALSE) {
                //     $this->create();
                // } else {
                    $data = array(
                        'id_dekor' => $this->input->post('id_dekor',TRUE),
                        'nama_dekor' => $this->input->post('nama_dekor',TRUE),
                        'gambar' => $this->input->post('gambar',TRUE),
                        'harga' => $this->input->post('harga',TRUE),
                        'keterangan' => $this->input->post('keterangan',TRUE),
                        'gambar' => $gambar
                );
                // }
                $this->Produkdekor_model->insert($data);
                $this->session->set_flashdata('message', '<p class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Berhasil Menambahkan</p>');
                redirect(site_url('produkdekor'));
            }
        } 
    }

    public function update($id) 
    {
        $row = $this->Produkdekor_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Ubah',
                'judul' => 'Produk Dekor',
                'sub_title' => 'Ubah Data',
                'action' => site_url('produkdekor/update_action'),
        'id_dekor' => set_value('id_dekor', $row->id_dekor),
        'nama_dekor' => set_value('nama_dekor', $row->nama_dekor),
        'gambar' => set_value('gambar', $row->gambar),
        'harga' => set_value('harga', $row->harga),
        'keterangan' => set_value('keterangan', $row->keterangan)
        );
           $data['page'] = "produk/formdekor";
            $this->load->view('halaman', $data);
        } else {
            $this->session->set_flashdata('message', '<p class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong>Data Tidak Ditemukan</p>');
            redirect(site_url('produkdekor'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();       
        $gambar=$_FILES['gambar']['name'];
        if($gambar==''){}else{
            $config['upload_path']= './upload/dekor/';
            $config['allowed_types']= 'jpg|png|gif';

            $this->load->library('upload', $config);


            if(!$this->upload->do_upload('gambar')){
                echo "gagal";die();
            }else{
                // if ($this->form_validation->run() == FALSE) {
                //     $this->create();
                // } else {
                    $data = array(
                        'id_dekor' => $this->input->post('id_dekor',TRUE),
                        'nama_dekor' => $this->input->post('nama_dekor',TRUE),
                        'gambar' => $this->input->post('gambar',TRUE),
                        'harga' => $this->input->post('harga',TRUE),
                        'keterangan' => $this->input->post('keterangan',TRUE),
                        'gambar' => $gambar
                );
           
            // }
            $this->Produkdekor_model->update($this->input->post('id_dekor', TRUE), $data);
            $this->session->set_flashdata('message', '<p class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Berhasil Memperbaharui</p>');
            redirect(site_url('produkdekor'));
            }
        }
    }

    public function delete($id) 
    {
        $row = $this->Produkdekor_model->get_by_id($id);

        if ($row) {
            $this->Produkdekor_model->delete($id);
            $this->session->set_flashdata('message', '<p class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Berhasil Menghapus</p>');
            redirect(site_url('produkdekor'));
        } else {
            $this->session->set_flashdata('message', '<p class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong>Data Tidak Ditemukan</p>');
            redirect(site_url('produkdekor'));
        }
    }
          
  public function _rules() 
    {
        
        $this->form_validation->set_rules('id_dekor', 'Id Dekor', 'trim');
        $this->form_validation->set_rules('nama_dekor', 'Nama Dekor', 'trim|required');
        $this->form_validation->set_rules('gambar', 'Gambar', 'trim|required');
        $this->form_validation->set_rules('harga', 'Harga', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        }




}



