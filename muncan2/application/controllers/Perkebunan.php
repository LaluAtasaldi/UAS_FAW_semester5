<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perkebunan extends CI_Controller {
    public function index()
    {
        $perkebunan = $this->Perkebunan_model->get_all();

        $data = array(
            'judul' => "Perkebunan",
            'page' =>  "potensi/perkebunan",
            'perkebunan_data' => $perkebunan
        );
        $this->load->view('halaman',$data);
    }

    public function create(){
         $data = array(
            'button' => 'Tambah',
            'judul' => 'Form Perkebunan',
            'sub_title' => 'Tambah data baru',
            'action' => site_url('perkebunan/create_action'),
        'id_perkebunan' => set_value('id_perkebunan'),
        'pemilik' => set_value('pemilik'),
        'gambar' => set_value('gambar'),
        'daerah' => set_value('daerah'),
        'luas' => set_value('luas'),
        'keterangan' => set_value('keterangan')
    );
        $data['page'] = "potensi/formperkebunan";
        $this->load->view('halaman', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();       
        $gambar=$_FILES['gambar']['name'];
        if($gambar==''){}else{
            $config['upload_path']= './upload/perkebunan/';
            $config['allowed_types']= 'jpg|png|gif';

            $this->load->library('upload', $config);


            if(!$this->upload->do_upload('gambar')){
                echo "gagal";die();
            }else{
                // if ($this->form_validation->run() == FALSE) {
                //     $this->create();
                // } else {
                    $data = array(
                        'id_perkebunan' => $this->input->post('id_perkebunan',TRUE),
                        'pemilik' => $this->input->post('pemilik',TRUE),
                        'gambar' => $this->input->post('gambar',TRUE),
                        'daerah' => $this->input->post('daerah',TRUE),
                        'luas' => $this->input->post('luas',TRUE),
                        'keterangan' => $this->input->post('keterangan',TRUE),
                        'gambar' => $gambar
                );
                // }
                $this->Perkebunan_model->insert($data);
                $this->session->set_flashdata('message', '<p class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Berhasil Menambahkan</p>');
                redirect(site_url('perkebunan'));
            }
        } 
    }

    public function update($id) 
    {
        $row = $this->Perkebunan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Ubah',
                'judul' => 'Perkebunan',
                'sub_title' => 'Ubah Data',
                'action' => site_url('perkebunan/update_action'),
        'id_perkebunan' => set_value('id_perkebunan', $row->id_perkebunan),
        'pemilik' => set_value('pemilik', $row->pemilik),
        'gambar' => set_value('gambar', $row->gambar),
        'daerah' => set_value('daerah', $row->daerah),
        'luas' => set_value('luas', $row->luas),
        'keterangan' => set_value('keterangan', $row->keterangan)
        );
           $data['page'] = "potensi/formperkebunan";
            $this->load->view('halaman', $data);
        } else {
            $this->session->set_flashdata('message', '<p class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong>Data Tidak Ditemukan</p>');
            redirect(site_url('perkebunan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();       
        $gambar=$_FILES['gambar']['name'];
        if($gambar==''){}else{
            $config['upload_path']= './upload/perkebunan/';
            $config['allowed_types']= 'jpg|png|gif';

            $this->load->library('upload', $config);


            if(!$this->upload->do_upload('gambar')){
                echo "gagal";die();
            }else{
                // if ($this->form_validation->run() == FALSE) {
                //     $this->create();
                // } else {
                    $data = array(
                        'id_perkebunan' => $this->input->post('id_perkebunan',TRUE),
                        'pemilik' => $this->input->post('pemilik',TRUE),
                        'gambar' => $this->input->post('gambar',TRUE),
                        'daerah' => $this->input->post('daerah',TRUE),
                        'luas' => $this->input->post('luas',TRUE),
                        'keterangan' => $this->input->post('keterangan',TRUE),
                        'gambar' => $gambar
                );
           
            // }
            $this->Perkebunan_model->update($this->input->post('id_perkebunan', TRUE), $data);
            $this->session->set_flashdata('message', '<p class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Berhasil Memperbaharui</p>');
            redirect(site_url('perkebunan'));
            }
        }
    }

    public function delete($id) 
    {
        $row = $this->Perkebunan_model->get_by_id($id);

        if ($row) {
            $this->Perkebunan_model->delete($id);
            $this->session->set_flashdata('message', '<p class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Berhasil Menghapus</p>');
            redirect(site_url('perkebunan'));
        } else {
            $this->session->set_flashdata('message', '<p class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong>Data Tidak Ditemukan</p>');
            redirect(site_url('perkebunan'));
        }
    }
          
  public function _rules() 
    {
        
        $this->form_validation->set_rules('id_perkebunan', 'Id Perkebunan', 'trim');
        $this->form_validation->set_rules('pemilik', 'Pemilik', 'trim|required');
        $this->form_validation->set_rules('gambar', 'Gambar', 'trim|required');
        $this->form_validation->set_rules('daerah', 'daerah', 'trim|required');
        $this->form_validation->set_rules('luas', 'luas', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        }




}






