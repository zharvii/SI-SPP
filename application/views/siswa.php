<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1><i class="fa fa-graduation-cap"></i>
          Siswa
          <small>Master</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="dashboard.html"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="mst-siswa.html">Master Siswa</a></li>
          <li class="active">Siswa</li>
        </ol>
      </section>

      <!-- Main content Master Siswa -->
      <section class="content">

        <!-- From Kelas -->
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
                    <input readonly type="text" class="form-control" id="nis" name="nis" placeholder="NIS">
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="txt_namaPegawai">NISN</label>
                      <input type="text" minlength="10" maxlength="10" class="form-control number" id="nisn" name="nisn">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="txt_namaPegawai">No. Telepon</label>
                      <input type="text" class="form-control number" minlength="11" maxlength="13" id="hp" name="hp">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="txt_namaPegawai">Kelas</label>
                      <select  class="select2" name="kelas" id="kelas" style="width: 100%;" placeholder="oke" >
                        <option value="-" selected disabled>-</option>
                        <?php
                            $kelas = $this->db->query("select * from kelas");

                            foreach ($kelas->result() as $row) {

                            ?>
                            <option value="<?php echo $row->id_kelas; ?>;<?php echo $row->jurusan; ?>"><?php echo $row->nama_kelas; ?></option>
                        <?php
                            }
                        ?>
                      </select>
                    </div>
                     <div class="form-group col-md-6">
                      <label for="txt_namaPegawai">Jurusan</label>
                      <select disabled  class="select2" name="spp" id="spp" style="width: 100%;" >
                        <option value="-" selected disabled>-</option>
                        <option value="RPL">RPL</option>
                        <option value="TPM">TPM</option>
                        <option value="LAS">LAS</option>
                        <option value="TITL" >TITL</option>
                      </select>
                      <input type="hidden" id="kom" name="kom">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="txt_namaPegawai">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                  </div>
                  <div class="form-group">
                    <label for="txt_namaPegawai">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                  </div>
                   <div class="form-group">
                    <label for="txt_namaPegawai">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgllhr" name="tgllhr">
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <div class="pull-right">
                  <button type="button" class="btn btn-success btn-sm" id="simpan"></i> Simpan</button>
                  <button type="button" class="btn btn-danger btn-sm" id="batal"></i> Batal</button>
                </div>
              </div>
            </div>
          </div>
        </form>

        <!-- Daftar Siswa -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Daftar Siswa</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
              <table id="tsiswa" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>NIS</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>No. Telepon</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- <tr>
                    <td>12345678</td>
                    <td>123456789</td>
                    <td>Zharvi Achmadha</td>
                    <td>Jln. Panjang</td>
                    <td>0812321212</td>
                    <td>
                      <button type="button" class="btn btn-warning btn-xs" id=""><i class="fa fa-edit"></i> Edit</button>
                      <button type="button" class="btn btn-danger btn-xs" id=""><i class="fa fa-trash"></i> Hapus</button>
                    </td>
                  </tr> -->
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </section>
      <!-- Main content Master Siswa -->
    </div>
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
  <script>
    $(function () {

      (function($) {
				$.fn.inputFilter = function(inputFilter) {
					return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
						if (inputFilter(this.value)) {
							this.oldValue = this.value;
							this.oldSelectionStart = this.selectionStart;
							this.oldSelectionEnd = this.selectionEnd;
						} else if (this.hasOwnProperty("oldValue")) {
							this.value = this.oldValue;
							this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
						}
					});
				};
			}(jQuery));

      let mode='save';

      function formatDate(date) {
        var d = new Date(date),
          month = '' + (d.getMonth() + 1),
          day = '' + d.getDate(),
          year = d.getFullYear();

        if (month.length < 2)
          month = '0' + month;
        if (day.length < 2)
          day = '0' + day;

        return [year, month, day].join('-');
      }

      function getID(){
         $.ajax({
            url: "<?php echo base_url(); ?>siswa/getNis",
            method: "Get",
            dataType: 'text',
            success: function(data) {
              $('#nis').val(data.trim())
            }
        });
      }

      function validasi(){
        if($('#nisn').val()=='' || $('#nisn').val()==null){
          alert('Mohon Isi Nisn')
          return false;
        }else{
          if($('#hp').val()=='' || $('#hp').val()==null){
            alert('Mohon Isi No Telepon')
            return false;
          }else{
            if($('#nama').val()=='' || $('#nama').val()==null){
              alert('Mohon Isi Nama Siswa')
              return false;
            }else{
              if($('#alamat').val()=='' || $('#alamat').val()==null){
                alert('Mohon Isi Alamat Siswa')
                return false;
              }else{
                if($('#tgllhr').val()=='' || $('#tgllhr').val()==null){
                  alert('Mohon Isi Tanggal Lahir')
                  return false;
                }else{
                  if($('#kelas').val()=='-' || $('#kelas').val()==null || $('#kelas').val()==undefined){
                    alert('Mohon Isi Kelas')
                    return false;
                  }else{
                    if($('#spp').val()=='-' || $('#spp').val()==null || $('#spp').val()==undefined){
                      // alert('Mohon Isi Tahun Spp')
                      return false;
                    }else{
                      return true;
                    }
                  }
                }
              }
            }
          }
        }
      }

      getID();

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

      var table = $("#tsiswa").dataTable({
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
                "url": "<?php echo base_url() . 'siswa/getSiswa' ?>",
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
                    "data": "alamat"
                },
                {
                    "data": "nama_kelas"
                },
                {
                    "data": "jurusan"
                },
                {
                    "data": "no_tlp"
                },
                {
                    "data": "view"
                }
            ],


            order: [
                [0, 'asc']
            ],
            // fnDrawCallback: function() {
            //     $('.toggle-demo').bootstrapToggle();
            // },
            rowCallback: function(row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                $('td:eq(0)', row).html();
            }

      });

      $('#batal').click(function(){
        $('#frmSiswa').trigger("reset")
        $('#kelas').val('-').trigger("change")
        $('#spp').val('-').trigger("change")
        mode='save'
        getID()

      });

      $(".number").inputFilter(function(value) {
				return /^\d*$/.test(value);
			});

      $('#tsiswa').on('click', '.edit', function() {
            let tgl = $(this).data('tgllhr')
            let nis = $(this).data('nis')
            let nisn = $(this).data('nisn')
            let nama = $(this).data('nama')
            let notlp = $(this).data('notlp')
            let alamat = $(this).data('alamat')
            let kelas = $(this).data('idkelas')
            // let spp = $(this).data('idspp')

            let spp = $(this).data('kom')

            let kom = $(this).data('kom')


            $('#nis').val(nis)
            $('#nisn').val(nisn)
            $('#nama').val(nama)
            $('#hp').val(notlp)
            $('#alamat').val(alamat)
            $('#kelas').val(kelas+';'+kom).trigger("change")
            $('#spp').val(spp).trigger("change")
            $('#tgllhr').val(formatDate(tgl))

            mode='edit'

            $('html, body').animate({scrollTop: '0px'}, 300)
      });

      $('#tsiswa').on('click', '.hapus', function() {
           if(confirm('Hapus Data?')){
             var id = $(this).data('nis');

              $.ajax({
                url: "<?php echo base_url(); ?>siswa/hapusSiswa/"+id,
                method: "Get",
                success: function(data) {
                    if (data == '1') {
                        $('#tsiswa').DataTable().ajax.reload();
                        getID();
                    }
                }
              });
           }
      });

      $('#kelas').change(function(){
        try {
          var a = $(this).val().split(';')
          $('#spp').val(a[1]).trigger('change');

        }
        catch(err) {
          $('#spp').val('-').trigger('change');

        }
      })

      $('#simpan').click(function(){
        if(mode=='save'){
          if(validasi()){
            $.ajax({
                url: "<?php echo base_url(); ?>siswa/checkNisn/"+$('#nisn').val(),
                method: "Get",
                success: function(data) {
                    if (data.trim() == 't') {
                      $.ajax({
                            url: "<?php echo base_url(); ?>siswa/checkNoHp/"+$('#hp').val(),
                            method: "Get",
                            success: function(data) {
                                if (data.trim() == 't') {
                                  if(confirm('Tambah Siswa?')){
                                      $.ajax({
                                          url: "<?php echo base_url(); ?>siswa/insertSiswa",
                                          method: "POST",
                                          dataType: 'text',
                                          data: $('#frmSiswa').serialize(),
                                          success: function(data) {
                                              if (data == '1') {
                                                  $('#batal').click()
                                                  $('#tsiswa').DataTable().ajax.reload();
                                              }
                                          }
                                      });
                                    }
                                }else{
                                  alert('No Hp Sudah Dipakai')
                                }
                            }
                      });
                    }else{
                      alert('Nisn Sudah Dipakai')
                    }
                }
            });
          }
        }else if(mode=='edit'){
          if(validasi()){
            if(confirm('Edit Data Siswa?')){
              $.ajax({
                  url: "<?php echo base_url(); ?>siswa/editSiswa",
                  method: "POST",
                  dataType: 'text',
                  data: $('#frmSiswa').serialize(),
                  success: function(data) {
                      if (data == '1') {
                          $('#batal').click()
                          $('#tsiswa').DataTable().ajax.reload();
                      }
                  }
              });
            }
          }
        }
      })

    })

  </script>
</body>

</html>