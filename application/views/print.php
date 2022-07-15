<?php
    $f=$_GET['f'];
    $t=$_GET['t'];
    $this->db->select('id_pembayaran,tgl_bayar, no_pembayaran, nis,nama , bulan_dibayar, tahun_dibayar, jumlah_bayar');
    $this->db->from('vw_pembayaran');
    $this->db->where('tgl_bayar >=',$f);
    $this->db->where('tgl_bayar <=',$t);
    $this->db->order_by('id_pembayaran', 'DESC');
    $data = $this->db->get()->result();
    $total=$this->db->query("select sum(jumlah_bayar) as total from vw_pembayaran where tgl_bayar>='$f' and tgl_bayar<='$t'")->row()->total;


    function rupiah($angka){
	
        $hasil_rupiah = number_format($angka,0,',','.');
        return $hasil_rupiah;
 
    }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Sekolah</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="<?php echo base_url(); ?>assets/template/dist/img/logo/logo-smk-Krian-1.png" type="image/x-icon">

  <!-- Bootstrap 3.3.7 -->

    <style>
        table{
            width: 100%;
        }

        table th{
            background-color: grey;
            height: 30px;
            font-size: 10pt;
            font-family: 'Times New Roman', Times, serif;
            font-size:medium;
        }
      table, th, td {
        border: 1px solid black;
        }
        table.center {
        margin-left: auto;
        margin-right: auto;
        }
    </style>
</head>

<body onload="window.print()">
  <!-- Site wrapper -->

    <center>
        <h2><b>LAPORAN PEMBAYARAN SPP</b></h2>
        <h2><b>SMK KRIAN 1 SIDOARJO</b></h2>
    </center>
  <div style="margin: 10px;">
              <table>
                <thead>
                   <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>No Pembayaran</th>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Spp Tahun</th>
                    <th>Spp Bulan</th>
                    <th>Jumlah Bayar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                        $no = 1;

                        foreach($data as $u){ 
                          ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $u->tgl_bayar ?></td>
                            <td><?php echo $u->no_pembayaran ?></td>
                            <td><?php echo $u->nis ?></td>
                            <td><?php echo $u->nama ?></td>
                            <td><?php echo $u->tahun_dibayar ?></td>
                            <td><?php echo $u->bulan_dibayar ?></td>
                            <td><?php echo $u->jumlah_bayar ?></td>
                          </tr>
                          <?php } ?>

                          <tr>
                            <td colspan="7"><b>Total Pendapatan :</b></td>
                            <td><b> <?php echo rupiah($total) ?></b></td>
                          </tr>
                        
                 
                </tbody>
              </table>
    </div>
  <!-- ./wrapper -->

</body>

</html>