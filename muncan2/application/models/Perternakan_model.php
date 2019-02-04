<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Perternakan_model extends CI_Model
{
    public $table = 'tb_perternakan';
    public $id = 'id_perternakan';
    public $order = 'ASC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by('pemilik ASC');
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_perternakan', $q);
        $this->db->or_like('pemilik', $q);
        $this->db->or_like('daerah', $q);
        $this->db->or_like('jenis_hewan', $q);
        $this->db->or_like('jumlah', $q);
        $this->db->or_like('keterangan', $q);
    	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_perternakan', $q);
        $this->db->or_like('pemilik', $q);
        $this->db->or_like('daerah', $q);
        $this->db->or_like('jenis_hewan', $q);
        $this->db->or_like('jumlah', $q);
        $this->db->or_like('keterangan', $q);
    	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        return $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->delete($this->table);
    }
    
}
