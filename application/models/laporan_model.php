<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class laporan_model extends Data_Model {

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'vw_pembayaran';
        $this->pkey = 'id_pembayaran';
    }

    function get($tf,$tt)
    {
        $this->datatables->select('id_pembayaran, id_petugas, nis, tgl_bayar, bulan_dibayar, tahun_dibayar, id_spp, jumlah_bayar, no_pembayaran, status, nama_petugas, nama, kompetensi, id_kelas, tahun, nominal');
        $this->datatables->from('vw_pembayaran');
        $this->datatables->where('tgl_bayar >=',$tf);
        $this->datatables->where('tgl_bayar <=',$tt);
        return $this->datatables->generate();
    }

    function csv($t='',$f=''){
        $this->db->select('tgl_bayar, no_pembayaran, nis,nama , bulan_dibayar, tahun_dibayar, jumlah_bayar');
        $this->db->from('vw_pembayaran');
        $this->db->where('tgl_bayar >=',$f);
        $this->db->where('tgl_bayar <=',$t);
        return $this->db->get()->result_array();
    }


    function getTotal($t='',$f=''){
        return $this->db->query("select sum(jumlah_bayar) as total from vw_pembayaran where tgl_bayar>='$f' and tgl_bayar<='$t'")->row()->total;
    }



}
