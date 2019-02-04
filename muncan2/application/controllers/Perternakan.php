<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perternakan extends CI_Controller {
    public function index()
    {
        $perternakan = $this->Perternakan_model->get_all();

        $data = array(
            'judul' => "perternakan",
            'page' =>  "potensi/perternakan",
            'perternakan_data' => $perternakan
        );
        $this->load->view('halaman',$data);
    }

    public function create(){
         $data = array(
            'button' => 'Tambah',
            'judul' => 'Form perternakan',
            'sub_title' => 'Tambah data baru',
            'action' => site_url('perternakan/create_action'),
        'id_perternakan' => set_value('id_perternakan'),
        'pemilik' => set_value('pemilik'),
        'jenis_hewan' => set_value('jenis_hewan'),
        'daerah' => set_value('daerah'),
        'jumlah' => set_value('jumlah'),
        'keterangan' => set_value('keterangan')
    );
        $data['page'] = "potensi/formperternakan";
        $this->load->view('halaman', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();       
        
                
                    $data = array(
                        'id_perternakan' => $this->input->post('id_perternakan',TRUE),
                        'pemilik' => $this->input->post('pemilik',TRUE),
                        'jenis_hewan' => $this->input->post('jenis_hewan',TRUE),
                        'daerah' => $this->input->post('daerah',TRUE),
                        'jumlah' => $this->input->post('jumlah',TRUE),
                        'keterangan' => $this->input->post('keterangan',TRUE)
                        
                );
                // }
                $this->Perternakan_model->insert($data);
                $this->session->set_flashdata('message', '<p class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Berhasil Menambahkan</p>');
                redirect(site_url('perternakan'));
            
         
    }

    public function update($id) 
    {
        $row = $this->Perternakan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Ubah',
                'judul' => 'perternakan',
                'sub_title' => 'Ubah Data',
                'action' => site_url('perternakan/update_action'),
        'id_perternakan' => set_value('id_perternakan', $row->id_perternakan),
        'pemilik' => set_value('pemilik', $row->pemilik),
        'jenis_hewan' => set_value('jenis_hewan', $row->jenis_hewan),
        'daerah' => set_value('daerah', $row->daerah),
        'jumlah' => set_value('jumlah', $row->jumlah),
        'keterangan' => set_value('keterangan', $row->keterangan)
        );
           $data['page'] = "potensi/formperternakan";
            $this->load->view('halaman', $data);
        } else {
            $this->session->set_flashdata('message', '<p class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong>Data Tidak Ditemukan</p>');
            redirect(site_url('perternakan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();       
        
                    $data = array(
                        'id_perternakan' => $this->input->post('id_perternakan',TRUE),
                        'pemilik' => $this->input->post('pemilik',TRUE),
                        'jenis_hewan' => $this->input->post('jenis_hewan',TRUE),
                        'daerah' => $this->input->post('daerah',TRUE),
                        'jumlah' => $this->input->post('jumlah',TRUE),
                        'keterangan' => $this->input->post('keterangan',TRUE)
                      
                );
           
            // }
            $this->Perternakan_model->update($this->input->post('id_perternakan', TRUE), $data);
            $this->session->set_flashdata('message', '<p class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Berhasil Memperbaharui</p>');
            redirect(site_url('perternakan'));
         
    }

    public function delete($id) 
    {
        $row = $this->Perternakan_model->get_by_id($id);

        if ($row) {
            $this->Perternakan_model->delete($id);
            $this->session->set_flashdata('message', '<p class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Berhasil Menghapus</p>');
            redirect(site_url('perternakan'));
        } else {
            $this->session->set_flashdata('message', '<p class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong>Data Tidak Ditemukan</p>');
            redirect(site_url('perternakan'));
        }
    }
          
  public function _rules() 
    {
        
        $this->form_validation->set_rules('id_perternakan', 'Id perternakan', 'trim');
        $this->form_validation->set_rules('pemilik', 'Pemilik', 'trim|required');
        $this->form_validation->set_rules('jenis_hewan', 'jenis_hewan', 'trim|required');
        $this->form_validation->set_rules('daerah', 'daerah', 'trim|required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        }




}








