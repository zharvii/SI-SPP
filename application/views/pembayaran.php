    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1><i class="fa fa-money"></i>
          Pembayaran SPP
        </h1>
        <ol class="breadcrumb margin">
          <li><a href="dashboard.html"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Master Tarif</a></li>
          <li class="active">SPP</li>
        </ol>
      </section>

      <!-- Main content Menu Pembayaran SPP -->
      <section class="content">

        <!-- From Pembayaran SPP -->
        <form id="frmBayar" onsubmit="return false;">
          <div class="box box-primary">
            <div class="box-header with-border">
              <div class="pull-left">
                <button type="button" id="cari" data-toggle="modal" data-target="#modal-siswa" class="btn btn-warning btn-sm"><i class="fa fa-search"></i> Cari Siswa</button>
              </div>
              <div class="pull-right">
                <input readonly type="text" value="<?php echo date('d/m/Y') ?>" class="form-control input-sm" id="" name="" placeholder="Tanggal" style="font-size: 13px;width:84px;">
              </div>
            </div>
            <div class="box-body">
              <h3 class="page-header">Data Siswa :</h3>
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label for="txt_namaPegawai">No. Pembayaran</label>
                      <input readonly type="text" class="form-control" id="nobayar" name="nobayar" placeholder="Auto">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="txt_namaPegawai">NIS</label>
                      <input readonly type="text" class="form-control" id="nis" name="nis" placeholder="Auto">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="txt_namaPegawai">Nama</label>
                      <input readonly type="text" class="form-control" id="nama" name="nama" placeholder="Auto">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="txt_namaPegawai">Jurusan</label>
                      <input readonly type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Auto">
                      <input type="hidden" id="tbayar" name="tbayar">
                      <input type="hidden" id="bbayar" name="bbayar">
                      <input type="hidden" id="idspp" name="idspp">
                      <input type="hidden" id="jbayar" name="jbayar">
                    </div>
                  </div>
                </div>
              </div>
              <button type="button" data-toggle="modal" id="pspp" data-target="#modal-tmb" class="btn btn-primary pull-right" disabled>Pilih SPP</button>
              <h4>Rincian Tagihan :</h4>
              <div class="table-responsive">
              <table id="tabelbayar" class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>No Bayar</th>
                    <th>Tanggal</th>
                    <th>Spp Tahun</th>
                    <th>Spp Bulan</th>
                    <th>Jumlah Bayar</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
              </div>
              <div class="alert alert-success" style="margin-top: 10px;">
                <b><i> Terbayar :</i></b>
                <h4 class="pull-right" id="total">Rp. 0</h4>
              </div>
            </div>
            <div class="box-footer">
              <div class="pull-right">
                <button type="button" class="btn btn-success btn-sm" id="bayar" disabled></i> Bayar</button>
                <button type="button" class="btn btn-danger btn-sm" id="batal"></i> Batal</button>
              </div>
            </div>
          </div>
        </form>

      </section>
      <!-- Main content Menu Pembayaran SPP -->
    </div>

    <!-- Start Modal Section -->

    <div class="modal fade" id="modal-tmb">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button
          type="button"
          class="close"
          id="cspp"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">SPP</h4>
      </div>
      <form id="frmTambah">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Spp Tahun</label>
                <select
                  name="tb"
                  id="tb"
                  class="select2"
                  style="width: 100%;"
                >
                  <option value="-">-</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Spp Bulan</label>
                <select name="bb" id="bb" class="select2" style="width: 100%;">
                  <option value="-" selected disabled>-</option>
                  <option value="Januari">Januari</option>
                  <option value="Februari">Februari</option>
                  <option value="Maret">Maret</option>
                  <option value="April">April</option>
                  <option value="Mei">Mei</option>
                  <option value="Juni">Juni</option>
                  <option value="Juli">Juli</option>
                  <option value="Agustus">Agustus</option>
                  <option value="September">September</option>
                  <option value="Oktober">Oktober</option>
                  <option value="November">November</option>
                  <option value="Desember">Desember</option>
                </select>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button
              type="button"
              id="btnTmb"
              class="btn btn-info btn-xl"
              style="width: 100%;"
            >
              Tambah
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end modal-dialog -->

<div class="modal fade" id="modal-siswa">
  <div class="modal-dialog" style="width: 70%; max-height: 100%;">
    <div class="modal-content">
      <div class="modal-header">
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
          id="csiswa"
        >
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Cari Siswa</h4>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table id="tsiswa" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>NIS</th>
                <th>NISN</th>
                <th>NAMA</th>
                <th>KELAS</th>
                <th>JURUSAN</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


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
      var tahun=2017;
      $('#tahunb').append(`<option value="${tahun}"> ${tahun} </option>`); 
      $('#tahunb').append(`<option value="${tahun+1}"> ${tahun+1} </option>`); 
      $('#tahunb').append(`<option value="${tahun+2}"> ${tahun+2} </option>`); 

       $('#example2').DataTable({
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

      function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
          split = number_string.split(','),
          sisa = split[0].length % 3,
          rupiah = split[0].substr(0, sisa),
          ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
          separator = sisa ? '.' : '';
          rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
      }

      function getID(){
         $.ajax({
            url: "<?php echo base_url(); ?>Pembayaran/getNo",
            method: "Get",
            dataType: 'text',
            success: function(data) {
              $('#nobayar').val(data.trim())
            }
        });
      }

      function getTotal(){
        var no=$('#nobayar').val();
        // var no='202006260001';

         $.ajax({
            url: "<?php echo base_url(); ?>Pembayaran/getTotal/"+no,
            method: "Get",
            dataType: 'text',
            success: function(data) {
              console.log(data)
              if(data==''){
                $('#total').text('Rp. 0')
              }else{
                $('#total').text(formatRupiah(data.trim(), 'Rp.'))
              }
            }
        });
      }

      getID();
      getTotal();

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

      var table = $("#tsiswa").DataTable({
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
                "url": "<?php echo base_url() . 'Siswa/getSiswa' ?>",
                "type": "POST"
            },
            columns: [{
                    "data": "nis"
                },
                {
                    "data": "nisn"
                },
                {
                    "data": "nama"
                },
                {
                    "data": "nama_kelas"
                },
                {
                    "data": "jurusan"
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

      $('#tsiswa tbody').on('dblclick', 'tr', function() {
				  var nis = table.row(this).data().nis;
				  var nama = table.row(this).data().nama;
				  var jurusan = table.row(this).data().jurusan;
				  var tahunMasuk = table.row(this).data().tahun_masuk;
				  var idspp = table.row(this).data().id_spp;
				  var jbayar = table.row(this).data().nominal;

          $('#nis').val(nis);
          $('#nama').val(nama);
          $('#jurusan').val(jurusan);
          $('#idspp').val(idspp);
          $('#jbayar').val(jbayar);

          console.log($('#idspp').val())
          console.log($('#jbayar').val())

          var tahun=parseInt(tahunMasuk);
          console.log(tahunMasuk);
          $('#tb').empty();
          $('#tb').append(`<option value="-" selected disabled> - </option>`); 
          $('#tb').append(`<option value="${tahun}"> ${tahun} </option>`); 
          $('#tb').append(`<option value="${tahun+1}"> ${tahun+1} </option>`); 
          $('#tb').append(`<option value="${tahun+2}"> ${tahun+2} </option>`); 

          $('#csiswa').click();
          $('#pspp').prop('disabled',false);
          $('#bayar').prop('disabled',false);
          $('#cari').prop('disabled',true);

      });

       var tpembayaran = $("#tabelbayar").DataTable({
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
            paging: false,
            lengthChange: false,
            searching: false,
            ordering: false,
            info: false,
            ajax: {
                "url": "<?php echo base_url() . 'Pembayaran/getList' ?>",
                "type": "POST",
                "data": function(data) {
                  data.state = $('#nobayar').val();
                  // data.state = '202006260004';
                  // data.<?php echo $this->security->get_csrf_token_name(); ?> = "<?php echo $this->security->get_csrf_hash(); ?>";
                },
            },
            columns: [{
                    "data": "id_pembayaran"
                },
                {
                    "data": "no_pembayaran"
                },
                {
                    "data": "tgl_bayar"
                },
                {
                    "data": "tahun_dibayar"
                },
                {
                    "data": "bulan_dibayar"
                },
                {
                    "data": "jumlah_bayar"
                },
                {
                    "data": "lunas"
                },
                {
                    "data": "view"
                }
            ],
            order: [
                [0, 'asc']
            ],
            rowCallback: function(row, data, iDisplayIndex) {
               var info = this.fnPagingInfo();
               var page = info.iPage;
               var length = info.iLength;
               var index = page * length + (iDisplayIndex + 1);
               $('td:eq(0)', row).html(index);
            }
      });

      $('#btnTmb').click(function(){
          var t = $('#tb').val();
          var b = $('#bb').val();
          if(t=='-' || t==null || t==undefined){
            alert('Pilih Tahun')
          }else if(b=='-' || b==null || b==undefined){
            alert('Pilih Bulan')
          }else{
             $('#tbayar').val(t);
             $('#bbayar').val(b);
             console.log($('#tbayar').val())
             console.log($('#bbayar').val())

              $.ajax({
                url: "<?php echo base_url(); ?>Pembayaran/bayar",
                method: "POST",
                dataType: 'text',
                data: $('#frmBayar').serialize(),
                success: function(data) {
                  if (data == '2') {
                    alert('Siswa Sudah Membayar Spp Tahun '+t+' Bulan '+b)
                  }else if (data == '1') {
                    $('#cspp').click();
                    $('#tabelbayar').DataTable().ajax.reload();
                    getTotal();
                  }else if (data == '0') {
                      alert('Terjadi Kesalahan')
                  }else{
                      alert('Respon Ga Jelas')
                  }
                }
              });
          }
      })

      $('#batal').click(function(){
        if(confirm('Batal?')){
             var id = $('#nobayar').val();

              $.ajax({
                url: "<?php echo base_url(); ?>Pembayaran/batal/"+id,
                method: "Get",
                success: function(data) {
                    if (data == '1') {
                        $('#tabelbayar').DataTable().ajax.reload();
                        $('#nis').val('');
                        $('#nama').val('');
                        $('#jurusan').val('');
                        $('#idspp').val('');
                        $('#jbayar').val('');
                        $('#tbayar').val('');
                        $('#bbayar').val('');
                        $('#pspp').prop('disabled',true);
                        getID();
                        getTotal();
                        // $('#total').text('Rp. 0')
                        $('#bayar').prop('disabled',true);
                        $('#cari').prop('disabled',false);

                        $('html, body').animate({scrollTop: '0px'}, 300)

                    }
                }
              });
        }
      });

      $('#tabelbayar').on('click', '.hapus', function() {
           if(confirm('Hapus?')){
             var id = $(this).data('id');

              $.ajax({
                url: "<?php echo base_url(); ?>Pembayaran/hapus/"+id,
                method: "Get",
                success: function(data) {
                    if (data == '1') {
                        $('#tabelbayar').DataTable().ajax.reload();
                        getTotal();

                    }
                }
              });
           }
      });

      $('#bayar').click(function(){
        var count = tpembayaran.column( 0 ).data().length;
        if(count==0){
          alert('Mohon Entry Rincian Pembayaran')
        }else{
           var no = $('#nobayar').val();
           window.location.href = '<?php echo base_url(); ?>Pembayaran/invoice?param=' + no ;
          console.log('<?php echo base_url(); ?>Pembayaran/invoice?param=' + no )
        }
      })

      // $('#simpan').click(function(){
      //   if(mode=='save'){
      //     if(validasi()){
      //       if(confirm('Tambah Spp?')){
      //         $.ajax({
      //             url: "<?php echo base_url(); ?>spp/insertSpp",
      //             method: "POST",
      //             dataType: 'text',
      //             data: $('#frmSpp').serialize(),
      //             success: function(data) {
      //                 if (data == '1') {
      //                     $('#batal').click()
      //                     $('#tspp').DataTable().ajax.reload();
      //                 }
      //             }
      //         });
      //       }
      //     }
      //   }else if(mode=='edit'){
      //     if(validasi()){
      //       if(confirm('Edit Data Spp?')){
      //           $.ajax({
      //             url: "<?php echo base_url(); ?>spp/editSpp",
      //             method: "POST",
      //             dataType: 'text',
      //             data: $('#frmSpp').serialize(),
      //             success: function(data) {
      //                 if (data == '1') {
      //                     $('#batal').click()
      //                     $('#tspp').DataTable().ajax.reload();
      //                 }
      //             }
      //           });
      //       }
      //     }
      //   }
      // })

    })

</script>


</body>

</html>