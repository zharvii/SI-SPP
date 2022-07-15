 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1><i class="fa fa-book"></i>
          Laporan Pembayaran
        </h1>
      </section>

      <!-- Main content Menu Riwayat Pembayaran -->
      <section class="content">



          <form>

              <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <!-- <li class="active"><a href="#tab_2-2" data-toggle="tab">Tanggal</a></li> -->
              <li class="pull-left header"><i class="fa fa-th"></i> Filter </li>
            </ul>
            <div class="tab-content">

              <div class="tab-pane active" id="tab_2-2">
               <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="txt_namaPegawai">Dari Tanggal</label>
                      <input type="date" class="form-control" id="f" name="f">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="txt_namaPegawai">Sampai Tanggal</label>
                      <input type="date" class="form-control" id="t" name="t">
                    </div>
                  </div>
                  <div>
                                   <button type="button" id="oke" class="btn btn-success btn-xl" id="" style="width: 100%!important;"></i> Generate</button>

                </div>
                </div>
              </div>
              
              </div>
              <!-- /.tab-pane -->
              
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
         
        </form>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Kelas</h3>

              <div class="btn-group pull-right">
                <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-th"></i></button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#" id="print"><i class="fa fa-print"></i>Print Or Pdf</a></li>
                  <li><a href="#" id="csv"><i class="fa fa-file-excel-o"></i>Csv</a></li>
                </ul>
              </div>
              <!-- <div class="pull-right">
                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-plus"></i></button>
                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
              </div> -->
            </div>
            <div class="box-body">
              <div class="table-responsive">
              <table id="tabel" class="table table-bordered table-hover">
                <thead>
                  <tr>
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
                  <!-- <tr>
                    <td>01/01/2020</td>
                    <td>Batman Bin Robin</td>
                    <td>XII-RPL-1</td>
                    <td>RPL</td>
                    <td>Aktif</td>
                    <td>Aktif</td>
                    <td>Aktif</td>
                  </tr> -->
                </tbody>
              </table>
            </div>
            </div>
          </div>

        <!-- Daftar Pembayaran -->


      </section>
      <!-- Main content Menu Riwayat Pembayaran -->
    </div>
    <!-- /.content-wrapper -->

   

    <!-- End Modal Section -->

    <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
       <b>Version</b> Test
    </div>
    <strong>Copyright &copy; 2020 <a href="http://smkkrian1.sch.id/"> SMK 1 KRIAN</a>.</strong> All rights
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
 <!-- <script>
    $('.select2').select2()

    $(document).ready(function () {
      $('.sidebar-menu').tree()

       $('#tabel').DataTable({
        'paging': false,
        'lengthChange': false,
        'searching': false,
        'ordering': false,
        'info': false,
        'autoWidth': true
      })

       $('#example1').DataTable()

    //   $('#modal-siswa #siswa').DataTable()
    })

</script> -->



<script>

    $(function () {

      $('.select2').select2()

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
                "url": "<?php echo base_url() . 'Laporan/get' ?>",
                "type": "POST",
                 "data": function(data) {
                  data.from = $('#f').val();
                  data.to = $('#t').val();
                  // data.state = '202006260004';
                  // data.<?php echo $this->security->get_csrf_token_name(); ?> = "<?php echo $this->security->get_csrf_hash(); ?>";
                },
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
                    "data": "bulan_dibayar"
                },
                {
                    "data": "tahun_dibayar"
                },
                {
                    "data": "jumlah_bayar"
                }
            ],
            order: [
                [0, 'asc']
            ],
            rowCallback: function(row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                $('td:eq(0)', row).html();
            }

      });

      $('#oke').click(function(){
        if($('#f').val() == '' || $('#f').val()==null){
            alert('Mohon Masukan Dari Tanggal')
        }else if($('#t').val() == '' || $('#t').val()==null){
            alert('Mohon Masukan Sampai Tanggal')
        }else{
            $('#tabel').DataTable().ajax.reload();
        }
      })

      $('#print').click(function(){
        var count = table.column( 0 ).data().length;
        if(count==0){
            alert('Mohon Filter Data Terlebih Dahulu')
        }else{
            window.open('<?php echo base_url(); ?>Laporan/exportPrint?f=' + $('#f').val()+'&t='+$('#t').val(), '_blank');
        }

        // alert('print')
      })


      $('#csv').click(function(){
        var count = table.column( 0 ).data().length;
        if(count==0){
            alert('Mohon Filter Data Terlebih Dahulu')
        }else{
            window.location.href = '<?php echo base_url(); ?>Laporan/exportCsv?f=' + $('#f').val()+'&t='+$('#t').val() ;
        }

        // alert('csv
      })
    })

</script>


</body>

</html>