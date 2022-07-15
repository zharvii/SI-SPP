<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends Data_Controller {

    function __construct()
	{
		parent::__construct();
        $this->load->library('datatables');
        $this->load->model('laporan_model');
        $this->mymodel = $this->laporan_model;
	}

	function index()
	{
		$this->data['view']    = 'laporan';
		$this->data['param']    = '';
		$this->load->view('template/default', $this->data);
    }

	function get()
    {
        $kelas = $this->input->post('from');
        $jurusan = $this->input->post('to');
        header('Content-Type: application/json');
        echo $this->mymodel->get($kelas,$jurusan);
    }
    
    function exportCsv()
    {
        $f = $this->input->get('f');
        $t = $this->input->get('t');

        $filename = 'Laporan Pembayaran' . '('. $f . '='.$t.')' . '.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv; ");

        $faktur = $this->mymodel->csv($t, $f);
        $total=array('','','','','','Total',$this->mymodel->getTotal($t,$f));

        $file = fopen('php://output', 'w');
 
        $header = array("Tanggal","No_Pembayaran","Nis","Nama","Tahun Dibayar","Bulan Dibayar","Jumlah Bayar"); 
        fputcsv($file, $header);
        foreach ($faktur as $key=>$line){ 
            fputcsv($file,$line); 
        }
        fputcsv($file,$total); 
        fclose($file); 
        exit; 
    }

    function exportPrint()
    {
        $this->data['view']    = 'print';
		$this->data['param']    = '';
		$this->load->view('simple', $this->data);
    }


    // function export()
    // {
    //     $exported = array('exported' => '1');
    //     $tgl = $this->input->get('tgl');
    //     $filename = 'Faktur' . '(' . $tgl . ')' . '.csv';
    //     header("Content-Description: File Transfer");
    //     header("Content-Disposition: attachment; filename=$filename");
    //     header("Content-Type: application/csv; ");

    //     $faktur = $this->faktur->getDataToExport($tgl);

    //     $file = fopen('php://output', 'w');

    //     $header = array('FM,"KD_JENIS_TRANSAKSI","FG_PENGGANTI","NOMOR_FAKTUR","MASA_PAJAK","TAHUN_PAJAK","TANGGAL_FAKTUR","NPWP","NAMA","ALAMAT_LENGKAP","JUMLAH_DPP","JUMLAH_PPN","JUMLAH_PPNBM","IS_CREDITABLE"');
    //     fputcsv($file, $header);
    //     foreach ($faktur as $line) {
    //         $da = array($line->fm, $line->kdjstrx, $line->fg_pengganti, $line->no_faktur, $line->masa_pajak, $line->tahun_pajak, $line->tgl_faktur, $line->npwp, $line->nama_pbf, str_replace(',', '.', $line->alamat_lengkap), $line->dpp, $line->ppn, $line->ppnbm, $line->is_creditable);
    //         fputcsv($file, array(implode(',', $da)));
    //         $this->db->update('header_faktur', $exported, array('no_faktur' => $line->no_faktur));
    //     }
    //     fclose($file);
    //     exit;
    // }
    
    
}

    /* End of file  spp.php */
