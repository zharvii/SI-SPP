<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class histori_model extends Data_Model {

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'vw_siswa';
        $this->pkey = 'nis';
    }

    function getSiswa($kelas,$jurusan)
    {
        $this->datatables->select('nis,nisn,nama,id_kelas,alamat,no_tlp,id_spp,tgl_lahir,pin,tahun_masuk,nama_kelas,jurusan,tahun,nominal');
        $this->datatables->from('vw_siswa');
        if($kelas!='-'){
            $this->datatables->where('id_kelas',$kelas);
        }

         if($jurusan!='-'){
            $this->datatables->where('jurusan',$jurusan);
        }

        $this->datatables->add_column('view', '<span style="margin-right: 8px;" data-nis="$1" class="edit btn btn-xs btn-info"><i class="fa fa-edit"></i> Riwayat Pembayaran</span>', 'nis');
        return $this->datatables->generate();
    }


    function getHistori($no='')
    {
        $this->datatables->select('tgl_bayar, no_pembayaran, nis, nama , total,nama_petugas');
        $this->datatables->from('vw_hsitori');
        $this->datatables->where('nis', $no);
        $this->datatables->add_column('view', '<a style="margin-right: 8px;" data-id="$1" class="hapus btn btn-sm btn-info"><i class="fa fa-trash"></i> Bukti Pembayaran</a>', 'no_pembayaran');
        return $this->datatables->generate();
    }

}
