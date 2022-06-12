<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kategori_model extends CI_Model
{

    public $table = 'kategori';
    public $id = 'kategori_id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
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
        $this->db->like('kategori_id', $q);
	$this->db->or_like('kode_kategori', $q);
	$this->db->or_like('nama_kategori', $q);
	$this->db->or_like('bobot', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }


    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

	function generatekode()
    {

        $this->db->select('RIGHT(kode_kategori,4) as kode_kategori', false);
        $this->db->order_by("kode_kategori", "DESC");
        $this->db->limit(1);
        $query = $this->db->get('kategori');

        // CEK JIKA DATA ADA
        if ($query->num_rows() <> 0) {
            $data       = $query->row(); // ambil satu baris data
            $kodeReq  = intval($data->kode_kategori) + 1; // tambah 1
        } else {
            $kodeReq  = 1; // isi dengan 1
        }

        $lastKode = str_pad($kodeReq, 4, "0", STR_PAD_LEFT);
        $REQ      = "K";

        $newKode  = $REQ . "". $lastKode;

        return $newKode;  // return kode baru

    }

}
