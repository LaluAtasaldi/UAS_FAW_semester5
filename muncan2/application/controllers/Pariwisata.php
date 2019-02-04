<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pariwisata extends CI_Controller {
    public function index()
    {
        $pariwisata = $this->Pariwisata_model->get_all();

        $data = array(
            'judul' => "Pariwisata",
            'page' =>  "potensi/pariwisata",
            'pariwisata_data' => $pariwisata
        );
        $this->load->view('halaman',$data);
    }

    public function create(){
         $data = array(
            'button' => 'Tambah',
            'judul' => 'Form Pariwisata',
            'sub_title' => 'Tambah data baru',
            'action' => site_url('pariwisata/create_action'),
        'id_pariwisata' => set_value('id_pariwisata'),
        'nama_wisata' => set_value('nama_wisata'),
        'gambar' => set_value('gambar'),
        'daerah' => set_value('daerah'),
        'keterangan' => set_value('keterangan')
    );
        $data['page'] = "potensi/formpariwisata";
        $this->load->view('halaman', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();       
        $gambar=$_FILES['gambar']['name'];
        if($gambar==''){}else{
            $config['upload_path']= './upload/pariwisata/';
            $config['allowed_types']= 'jpg|png|gif';

            $this->load->library('upload', $config);


            if(!$this->upload->do_upload('gambar')){
                echo "gagal";die();
            }else{
                // if ($this->form_validation->run() == FALSE) {
                //     $this->create();
                // } else {
                    $data = array(
                        'id_pariwisata' => $this->input->post('id_pariwisata',TRUE),
                        'nama_wisata' => $this->input->post('nama_wisata',TRUE),
                        'gambar' => $this->input->post('gambar',TRUE),
                        'daerah' => $this->input->post('daerah',TRUE),
                        'keterangan' => $this->input->post('keterangan',TRUE),
                        'gambar' => $gambar
                );
                // }
                $this->Pariwisata_model->insert($data);
                $this->session->set_flashdata('message', '<p class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Berhasil Menambahkan</p>');
                redirect(site_url('pariwisata'));
            }
        } 
    }

    public function update($id) 
    {
        $row = $this->Pariwisata_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Ubah',
                'judul' => 'pariwisata',
                'sub_title' => 'Ubah Data',
                'action' => site_url('pariwisata/update_action'),
        'id_pariwisata' => set_value('id_pariwisata', $row->id_pariwisata),
        'nama_wisata' => set_value('nama_wisata', $row->nama_wisata),
        'gambar' => set_value('gambar', $row->gambar),
        'daerah' => set_value('daerah', $row->daerah),
        'keterangan' => set_value('keterangan', $row->keterangan)
        );
           $data['page'] = "potensi/formpariwisata";
            $this->load->view('halaman', $data);
        } else {
            $this->session->set_flashdata('message', '<p class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong>Data Tidak Ditemukan</p>');
            redirect(site_url('pariwisata'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();       
        $gambar=$_FILES['gambar']['name'];
        if($gambar==''){}else{
            $config['upload_path']= './upload/pariwisata/';
            $config['allowed_types']= 'jpg|png|gif';

            $this->load->library('upload', $config);


            if(!$this->upload->do_upload('gambar')){
                echo "gagal";die();
            }else{
                // if ($this->form_validation->run() == FALSE) {
                //     $this->create();
                // } else {
                    $data = array(
                        'id_pariwisata' => $this->input->post('id_pariwisata',TRUE),
                        'nama_wisata' => $this->input->post('nama_wisata',TRUE),
                        'gambar' => $this->input->post('gambar',TRUE),
                        'daerah' => $this->input->post('daerah',TRUE),
                        'keterangan' => $this->input->post('keterangan',TRUE),
                        'gambar' => $gambar
                );
           
            // }
            $this->Pariwisata_model->update($this->input->post('id_pariwisata', TRUE), $data);
            $this->session->set_flashdata('message', '<p class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Berhasil Memperbaharui</p>');
            redirect(site_url('pariwisata'));
            }
        }
    }

    public function delete($id) 
    {
        $row = $this->Pariwisata_model->get_by_id($id);

        if ($row) {
            $this->Pariwisata_model->delete($id);
            $this->session->set_flashdata('message', '<p class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Berhasil Menghapus</p>');
            redirect(site_url('pariwisata'));
        } else {
            $this->session->set_flashdata('message', '<p class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong>Data Tidak Ditemukan</p>');
            redirect(site_url('pariwisata'));
        }
    }
          
  public function _rules() 
    {
        
        $this->form_validation->set_rules('id_pariwisata', 'Id pariwisata', 'trim');
        $this->form_validation->set_rules('nama_wisata', 'nama_wisata', 'trim|required');
        $this->form_validation->set_rules('gambar', 'Gambar', 'trim|required');
        $this->form_validation->set_rules('daerah', 'daerah', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        }




}







