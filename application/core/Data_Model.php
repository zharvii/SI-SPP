<?php defined('BASEPATH') || exit('No direct script access allowed');

class Data_Model extends CI_Model
{
    protected $table_name = '';
    protected $pkey = '';

    function __construct()
    {
        parent::__construct();
    }

    function select_all()
    {
        $query = $this->db->get($this->table_name);
        return $query;
    }

    function select($id)
    {
        $result = $this->db->get_where($this->table_name, array($this->pkey => $id));
        return $result;
    }

    function delete($id)
    {
        $result = $this->db->delete($this->table_name, array($this->pkey => $id));
        return (bool) $result;
    }

    function autonumber($id_terakhir, $panjang_kode, $panjang_angka)
    {
        $kode = substr($id_terakhir, 0, $panjang_kode);
        $angka = substr($id_terakhir, $panjang_kode, $panjang_angka);
        $id_baru = $kode . ($angka + 1);
        return $id_baru;
    }
}
