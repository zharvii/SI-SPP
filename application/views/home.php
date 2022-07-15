 <?php
$siswa = $this->db->query("select * from siswa")->num_rows();
$kelas = $this->db->query("select * from kelas")->num_rows();

$rpl = $this->db->query("select * from vw_siswa where jurusan='RPL'")->num_rows();
$mesin = $this->db->query("select * from vw_siswa where jurusan='TPM'")->num_rows();
$listrik = $this->db->query("select * from vw_siswa where jurusan='TITL'")->num_rows();
$las = $this->db->query("select * from vw_siswa where jurusan='LAS'")->num_rows();



?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Dashboard
           <?php
				      if($this->session->userdata('role')=='Admin' || $this->session->userdata('role')=='Petugas'){
			     ?>
             <small>Manajemen Pembayaran SPP</small>
           <?php
				      }else{
           ?>
             <small>Siswa</small>
           <?php
				      }
			     ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- /.row -->
      <!-- Main row -->
      <!-- Data Sekolah -->
        <?php
				  if($this->session->userdata('role')=='Admin' || $this->session->userdata('role')=='Petugas'){
			  ?>
        <div class="row">
          <div class="col-md-4">
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo $siswa; ?></h3>
                <p>Siswa Aktif</p>
              </div>
              <div class="icon">
                <i class="fa fa-graduation-cap"></i>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>4</h3>
                <p>Jurusan</p>
              </div>
              <div class="icon">
                <i class="fa fa-gear"></i>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo $kelas; ?></h3>
                <p>kelas</p>
              </div>
              <div class="icon">
                <i class="fa fa-home"></i>
              </div>
            </div>
          </div>
        </div>

        <!-- Daftar Jurusan -->
        <h2 class="page-header no-margin">Daftar Jurusan</h2>
        <div class="row">
          <!-- Teknik Mesin -->
          <div class="col-md-3">
            <div class="box box-default collapsed-box ">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-gears"></i> TPm</h3>
                <br>
                <small>(Teknik Permesinan)</small>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                  </button>
                </div>
              </div>
              <div class="box-body">
                <ul class="nav nav-stacked">
                  <li><a href="#">Total Siswa <span class="pull-right badge bg-blue"><?php echo $mesin; ?></span></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Teknik Listrik -->
          <div class="col-md-3">
            <div class="box box-default collapsed-box">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-flash"></i> TITL</h3>
                <br>
                <small>(Teknik Instalasi Tenaga Listrik)</small>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                  </button>
                </div>
              </div>
              <div class="box-body">
                <ul class="nav nav-stacked">
                  <li><a href="#">Total Siswa <span class="pull-right badge bg-blue"><?php echo $listrik; ?></span></a></li>
                  <!-- <li><a href="#">Terbayar <span class="pull-right badge bg-green">31</span></a></li>
                  <li><a href="#">Belum Bayar <span class="pull-right badge bg-red">158</span></a></li> -->
                </ul>
              </div>
            </div>
          </div>
          <!-- Rekaya Perangkat Lunak -->
          <div class="col-md-3">
            <div class="box box-default collapsed-box">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-laptop"></i> RPL</h3>
                <br>
                <small>(Rekayasa Perangkat Lunak)</small>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                  </button>
                </div>
              </div>
              <div class="box-body">
                <ul class="nav nav-stacked">
                  <li><a href="#">Total Siswa <span class="pull-right badge bg-blue"><?php echo $rpl; ?></span></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Teknik Pengelasan -->
          <div class="col-md-3">
            <div class="box box-default collapsed-box">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-fire"></i> Las</h3>
                <br>
                <small>(Teknik Pengelasan)</small>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                  </button>
                </div>
              </div>
              <div class="box-body">
                <ul class="nav nav-stacked">
                  <li><a href="#">Total Siswa <span class="pull-right badge bg-blue"><?php echo $las; ?></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
         <?php
				  if($this->session->userdata('role')=='Admin'){
			  ?>
        <!-- Transaksi Terakhir -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Transaksi Hari Ini</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
              <table id="tabel" class="table table-bordered table-hover table no-margin">
                <thead>
                  <tr>
                    <th>Tanggal</th>
                    <th>No Pembayaran</th>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Total</th>
                    <th>Nama Petugas</th>
                    <th>Detail Pembayaran</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
          </div>
          <!-- /.box-body -->
        </div>

        <?php
          }
				  }else{
            $nis=$this->session->userdata('userid');
            $siswa=$this->db->query("select * from vw_siswa where nis='$nis'")->row();
        ?>
        

         <form id="frmSiswa" onsubmit="return false;">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Siswa</h3>

              <!-- <div class="btn-group pull-right">
                <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-th"></i></button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#" id=""><i class="fa fa-plus"></i>Tambah</a></li>
                  <li><a href="#" id=""><i class="fa fa-pencil"></i>Edit</a></li>
                </ul>
              </div> -->
              <!-- <div class="pull-right">
                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-plus"></i></button>
                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
              </div> -->
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="txt_namaPegawai">NIS</label>
                    <input readonly type="text" class="form-control" id="nis" name="nis" placeholder="NIS" value="<?php echo $siswa->nis ?>">
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="txt_namaPegawai">NISN</label>
                      <input readonly type="text" minlength="10" maxlength="10" class="form-control number" id="nisn" name="nisn" value="<?php echo $siswa->nisn ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="txt_namaPegawai">No. Telepon</label>
                      <input readonly type="text" class="form-control number" minlength="11" maxlength="13" id="hp" name="hp" value="<?php echo $siswa->no_tlp ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="txt_namaPegawai">Kelas</label>
                      <input readonly type="text" class="form-control number" minlength="11" maxlength="13" id="hp" name="hp" value="<?php echo $siswa->nama_kelas ?>">
                    </div>
                     <div class="form-group col-md-6">
                      <label for="txt_namaPegawai">Tahun Spp</label>
                      <input readonly type="text" class="form-control number" minlength="11" maxlength="13" id="hp" name="hp" value="<?php echo $siswa->tahun ?>">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="txt_namaPegawai">Nama</label>
                    <input readonly type="text" class="form-control" id="nama" name="nama" value="<?php echo $siswa->nama ?>">
                  </div>
                  <div class="form-group">
                    <label for="txt_namaPegawai">Alamat</label>
                    <input readonly type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $siswa->alamat ?>">
                  </div>
                   <div class="form-group">
                    <label for="txt_namaPegawai">Tanggal Lahir</label>
                    <input readonly type="text" class="form-control" id="tgllhr" name="tgllhr" value="<?php echo $siswa->tgl_lahir ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      <?php } ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.00
    </div>
    <strong>Copyright &copy; 2020 Zharvi Achmadha.</strong> All rights
    reserved.
  </footer>

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
<?php
		if($this->session->userdata('role')=='Admin' || $this->session->userdata('role')=='Petugas'){
?>
 <script>

    $(function () {

      

      $('.sidebar-menu').tree()

      $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
        return {
          "iStart": oSettings._iDisplayStart,
          "iEnd": oSettings.fnDisplayEnd(),
          "iLength": oSettings._iDisplayLength,
          "iTotal": oSettings.fnRecordsTotal(),
          "iFilteredTotal": oSettings.fnRecordsDisplay(),
          "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
          "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
        };
      };

      var table = $("#tabel").DataTable({
            initComplete: function() {
                var api = this.api();
                $('#mytable_filter input')
                    .off('.DT')
                    .on('input.DT', function() {
                        api.search(this.value).draw();
                    });
            },
            oLanguage: {
                sProcessing: '<p style="color: green"><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></p><span class="sr-only">Loading…</span>'
            },
            search: {
                "caseInsensitive": false
            },
            responsive: true,
            autoWidth: false,
            pageLength: 100,
            processing: true,
            serverSide: true,
            ajax: {
                "url": "<?php echo base_url() . 'Home/today' ?>",
                "type": "POST",
            },
            columns: [{
                    "data": "tgl_bayar"
                },
                {
                    "data": "no_pembayaran"
                },
                {
                    "data": "nis"
                },
                {
                    "data": "nama"
                },
                {
                    "data": "total"
                },
                {
                    "data": "nama_petugas"
                },
                {
                    "data": "view"
                }
            ],
            order: [
                [0, 'desc']
            ],
            rowCallback: function(row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                $('td:eq(0)', row).html();
            }

      });

      $('#tabel tbody').on('click', '.hapus', function() {
		    var id = $(this).data('id');
            window.location.href = '<?php echo base_url(); ?>Pembayaran/invoice?param=' + id ;
      });

       

    })

</script>
<?php
		}else{
?>
  <script>
    $(document).ready(function () {
      $('.sidebar-menu').tree()
    })

  </script>
<?php
		}
?>
</body>
</html>
