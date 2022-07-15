 <?php 
$id = $_GET['param'];
$left = $this->db->query("SELECT * FROM vw_pembayaran WHERE no_pembayaran='$id' Limit 1 ")->row();
$right = $this->db->query("SELECT * FROM vw_pembayaran WHERE no_pembayaran='$id'")->result();
$sum = $this->db->query("SELECT sum(jumlah_bayar) as total FROM pembayaran WHERE no_pembayaran='$id'")->row();
$total=$sum->total;
$tgl=$left->tgl_bayar;
$phpdate = strtotime( $tgl );
$mysqldate = date( 'd/m/Y', $phpdate );
$nis=$left->nis;
$siswa=$this->db->query("SELECT nama_kelas FROM vw_siswa WHERE nis='$nis' limit 1")->row();
$kelas=$siswa->nama_kelas;
function rupiah($angka){
	
	$hasil_rupiah = number_format($angka,0,',','.');
	return $hasil_rupiah;
 
}

?>
 
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="invoice">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group col-xs-2">
                <img src="<?php echo base_url(); ?>assets/template/dist/img/logo-smk-kecil.png" />
              </div>
              <div class="row form-group col-sm-10">
                <h2 class="no-margin"><b> TANDA BUKTI PEMBAYARAN</b></h2>
                <h4>TAHUN AJARAN 2019-2021</h4>
                <h4 class="no-margin">SMK KRIAN 1</h4>
                <h4 class="no-margin">Jl. Kyai Mojo, Krian, Sidoarjo</h4>
              </div>
              <h4 class="pull-right">Sidoarjo, <?php echo $mysqldate ?></h4>
            </div>
          </div>

          <!-- info row -->
          <div class="row">
            <div class="col-md-12">
              <!-- Data Siswa -->
              <div class="col-md-6 col-xs-6">
                <div class="box box-default">
                  <div class="box-header with-border">
                    <h3 class="box-title">Data Siswa :</h3>
                    <table class="table table-striped">
                      <tr>
                        <th>No Bukti Pembayaran</th>
                        <th>:</th>
                        <th><?php echo $left->no_pembayaran ?></th>
                      </tr>
                      <tr>
                        <th>Nama Siswa</th>
                        <th>:</th>
                        <th><?php echo $left->nama ?></th>
                      </tr>
                      <tr>
                        <th>NIS</th>
                        <th>:</th>
                        <th><?php echo $left->nis ?></th>
                      </tr>
                      <tr>
                        <th>Jurusan</th>
                        <th>:</th>
                        <th><?php echo $left->kompetensi ?></th>
                      </tr>
                      <tr>
                        <th>Kelas</th>
                        <th>:</th>
                        <th><?php echo $kelas ?></th>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>

              <!-- Rincian Tagihan -->
              <div class="row">
                <div class="col-md-6 col-xs-6">
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">Rincian Tagihan :</h3>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Rincian Pendidikan</th>
                            <th>Nominal</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            $no = 1;
                            foreach($right as $u){ 
                          ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td>SPP/<?php echo $u->bulan_dibayar . ' ' .  $u->tahun_dibayar ?></td>
                            <td><?php echo rupiah($u->jumlah_bayar) ?></td>
                          </tr>
                          <?php } ?>
                          <tr>
                            <td></td>
                            <td><b>Total :</b></td>
                            <td><b> <?php echo rupiah($total) ?></b></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <h4 class="pull-left" style="text-align: center;">Petugas</h4>
          </div>
          <br>
          <br>
          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <button
                type="button"
                class="btn btn-primary pull-right"
                style="margin-right: 5px;"
                onclick="window.print()"
              >
                <i class="fa fa-print"></i> cetak
              </button>
               <button
                class="btn btn-success pull-left"
                style="margin-left: 15px;"
                onclick="window.history.back();"
              >
                <i class="fa fa-back"></i> Kembali
              </button>
            </div>
            
          </div>
        </section>
        <!-- /.content -->
        <div class="clearfix"></div>
      </div>
      <!-- /.content-wrapper -->

    <!-- End Modal Section -->

    <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <div class="pull-right hidden-xs">
       <b>Version</b> Test
    </div>
    <strong>Copyright &copy; 2020 <a href="http://smkkrian1.sch.id/"> SMK 1 KRIAN</a>.</strong> All rights
    reserved.
  </footer> -->

     <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/template/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url(); ?>assets/template/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>assets/template/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>assets/template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/template/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>assets/template/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/template/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>assets/template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Datatable -->
<script src="<?php echo base_url(); ?>assets/template/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/template/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>assets/template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/template/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/template/dist/js/demo.js"></script>
 <script>
    
</script>


</body>

</html>