<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pembayaran_model extends Data_Model {

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'pembayaran';
        $this->pkey = 'id_pembayaran';
    }

    function getAll($no='')
    {
        $this->datatables->select('id_pembayaran, id_petugas, nis, tgl_bayar, bulan_dibayar, tahun_dibayar, id_spp, jumlah_bayar, no_pembayaran, status');
        $this->datatables->from('pembayaran');
        $this->datatables->where('no_pembayaran', $no);


        $this->datatables->add_column('lunas', '<span class="label label-success">Lunas</span>', 'id_pembayaran');
        $this->datatables->add_column('view', '<a style="margin-right: 8px;" data-id="$1" class="hapus btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>', 'id_pembayaran');
        return $this->datatables->generate();
    }

    function getNo(){
        $count = $this->db->get('pembayaran')->num_rows();
        $result = '';
        if ($count > 0) {
            $pay = $this->db->query('SELECT no_pembayaran FROM pembayaran ORDER BY no_pembayaran DESC LIMIT 1')->row();
            $angka=substr($pay->no_pembayaran,8,12);
            $result = date('Y').date('m').date('d').str_pad((int)$angka + 1, 4, '0', STR_PAD_LEFT);
            return $result;
        } else {
            $result = date('Y').date('m').date('d').'0001';
            return $result;
        }
    }

    function insert($id_petugas='', $nis='', $bulan_dibayar='', $tahun_dibayar='', $id_spp='', $jumlah_bayar='', $no_pembayaran=''){
        $tgl_bayar=date('Y-m-d');
        $sql = "INSERT INTO pembayaran(id_petugas, nis, tgl_bayar, bulan_dibayar, tahun_dibayar, id_spp, jumlah_bayar, no_pembayaran, status) VALUES('$id_petugas','$nis','$tgl_bayar','$bulan_dibayar','$tahun_dibayar','$id_spp','$jumlah_bayar','$no_pembayaran','Lunas')";
        return $this->db->query($sql);
    }

    function delete($id=''){
        $query = "DELETE FROM pembayaran WHERE id_pembayaran='$id'";

        return $this->db->query($query);
    }


    function cancel($id=''){
        $query = "DELETE FROM pembayaran WHERE no_pembayaran='$id'";

        return $this->db->query($query);
    }


    function check($nis='',$tahun='',$bulan=''){
        return $this->db->query("select * from pembayaran where nis='$nis' and bulan_dibayar='$bulan' and tahun_dibayar='$tahun'")->num_rows();;
    }

    function getTotal($no=''){
        $this->db->select('SUM(jumlah_bayar) as total');
        $this->db->from('pembayaran');
        $this->db->where('no_pembayaran', $no);
        echo $this->db->get()->row()->total;
    }

}
