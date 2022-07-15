<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home_model extends Data_Model {

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'vw_hsitori';
        $this->pkey = 'nis';
    }

    function get()
    {
        $this->datatables->select('tgl_bayar, no_pembayaran, nis, nama , total,nama_petugas');
        $this->datatables->from('vw_hsitori');
        $this->datatables->where('tgl_bayar', date('Y-m-d'));
        $this->datatables->add_column('view', '<a style="margin-right: 8px;" data-id="$1" class="hapus btn btn-sm btn-info"><i class="fa fa-trash"></i> Bukti Pembayaran</a>', 'no_pembayaran');
        return $this->datatables->generate();
    }

}
