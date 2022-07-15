<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1><i class="fa fa-users"></i>
          Pegawai
          <small>Master</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="dashboard.html"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="mst-pegawai.html">Master Pegawai</a></li>
          <li class="active">Pegawai</li>
        </ol>
      </section>

      <!-- Main content Master Pegawai -->
      <section class="content">

        <!-- From Pegawai -->
        <form id="frmPetugas" onsubmit="return false;">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pegawai</h3>

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
                    <label for="txt_namaPegawai">ID</label>
                    <input readonly type="text" class="form-control" id="id" name="id" placeholder="Auto">
                    <input type="hidden" id="param" name="param" value="f">
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="txt_namaPegawai">Nama Pegawai</label>
                      <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="txt_namaPegawai">Username</label>
                      <input type="text" class="form-control" id="user" name="user">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="pass" name="pass">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputPassword1">Retpye Password</label>
                      <input type="password" class="form-control" id="repass" name="repass">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Level</label>
                    <select class="form-control select2" id="level" name="level" style="width: 100%;">
                      <option selected="selected" disabled value="-">-</option>
                      <option value="Admin">Admin</option>
                      <option value="Petugas">Petugas</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <div class="pull-right">
                  <button type="button" class="btn btn-success btn-sm" id="simpan"></i> Simpan</button>
                  <button type="button" class="btn btn-danger btn-sm" id="batal"></i> Batal</button>
                </div>
                <div class="pull-left">
                  <button type="button" class="btn btn-primary btn-sm" style="display: none;" id="ubah"></i> Ubah Password</button>
                  <button type="button" class="btn btn-danger btn-sm" style="display: none;" id="bubah"></i> Batal Ubah Password</button>
                </div>
              </div>
            </div>
          </div>
        </form>

        <!-- Daftar Pegawai -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Daftar Pegawai</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
              <table id="tpetugas" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama Pegawai</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </section>
      <!-- Main content Master Pegawai -->
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

      let mode='save';
      let cPass='f';

    function validasi(e){

        var n = $('#nama').val()
        var u = $('#user').val()
        var p = $('#pass').val()
        var l = $('#level').val()
        var param = $('#param').val()
        var r = $('#repass').val()

        if(e=='new'){
          if(n != '' && n != null){
            if(u != '' && u != null){
              if(p != '' && p != null){
                if(r != '' && r != null){
                  if(p == r){
                    if(l != '-' && l != null && l != undefined){
                      return true
                    }else{
                      alert('Plih Level User')
                      return false;
                    }
                  }else{
                    alert('Konfirmasi Password Salah')
                    return false;
                  }
                }else{
                  alert('Mohon isi Konfirmasi Password')
                  return false;
                }
              }else{
                alert('Mohon isi Password')
                return false;
              }
            }else{
              alert('Mohon Isi Username')
              return false;
            }
          }else{
            alert('Mohon Isi Nama Petugas')
            return false;
          }
        }else if(e=='edit'){
          if(n != '' && n != null){
            if(u != '' && u != null){
              if(l != '-' && l != null && l != undefined){
                if(param=='t'){
                  if( p != '' && p != null){
                    if(r != '' && r != null){
                      if(p == r){
                         return true
                      }else{
                        alert('Konfirmasi Password Salah')
                        return false;
                      }
                    }else{
                      alert('Mohon isi Konfirmasi Password')
                      return false;
                    }
                  }else{
                    alert('Mohon isi Password')
                    return false;
                  }
                }else if(param=='f'){
                  return true;
                }

              }else{
                alert('Plih Level User')
                return false;
              }
            }else{
              alert('Mohon Isi Username')
              return false;
            }
          }else{
            alert('Mohon Isi Nama Petugas')
            return false;
          }
        }
    }



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

      var table = $("#tpetugas").dataTable({
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
                "url": "<?php echo base_url() . 'Petugas/getPetugas' ?>",
                "type": "POST"
            },
            columns: [{
                    "data": "id_petugas"
                },
                {
                    "data": "username"
                },
                {
                    "data": "nama_petugas"
                },
                {
                    "data": "level"
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
        $('#frmPetugas').trigger("reset")
        $('#level').val('-').trigger("change")
        $('#ubah').css('display','none')
        $('#ubah').css('display','none')
        $('#param').val('f')
        $('#pass').prop('readonly',false)
        $('#repass').prop('readonly',false)
        mode='save'
      });

      $('#ubah').click(function(){
        $('#pass').prop('readonly',false)
        $('#repass').prop('readonly',false)
        $('#ubah').css('display','none')
        $('#bubah').css('display','block')
        $('#param').val('t')
      });


      $('#bubah').click(function(){
        $('#pass').prop('readonly',true)
        $('#repass').prop('readonly',true)
        $('#pass').val('')
        $('#repass').val('')
        $('#param').val('f')
        $('#bubah').css('display','none')
        $('#ubah').css('display','block')
      });

      $('#tpetugas').on('click', '.edit', function() {

            $('#pass').prop('readonly',true)
            $('#repass').prop('readonly',true)
            $('#ubah').css('display','block')

            let id = $(this).data('id')
            let nama = $(this).data('nama')
            let user = $(this).data('user')
            let level = $(this).data('level')
            $('#param').val('f')


            $('#id').val(id)
            $('#nama').val(nama)
            $('#user').val(user)
            $('#level').val(level).trigger("change")

            mode='edit'

            $('html, body').animate({scrollTop: '0px'}, 300)
      });

      $('#tpetugas').on('click', '.hapus', function() {
           if(confirm('Hapus Data?')){
             var id = $(this).data('id');

              $.ajax({
                url: "<?php echo base_url(); ?>Petugas/hapusPetugas/"+id,
                method: "Get",
                success: function(data) {
                    if (data == '1') {
                        $('#tpetugas').DataTable().ajax.reload();
                    }
                }
              });
           }
      });

      $('#simpan').click(function(){
        if(mode=='save'){
          if(validasi('new')){
            if(confirm('Tambah Petugas?')){
              $.ajax({
                  url: "<?php echo base_url(); ?>Petugas/insertPetugas",
                  method: "POST",
                  dataType: 'text',
                  data: $('#frmPetugas').serialize(),
                  success: function(data) {
                      if (data == '1') {
                          $('#batal').click()
                          $('#tpetugas').DataTable().ajax.reload();
                      }
                  }
               });
              // alert('oke')
            }
          }
        }else if(mode=='edit'){
          if(validasi('edit')){
            if(confirm('Edit Data Petugas?')){
                $.ajax({
                  url: "<?php echo base_url(); ?>Petugas/editPetugas",
                  method: "POST",
                  dataType: 'text',
                  data: $('#frmPetugas').serialize(),
                  success: function(data) {
                      if (data == '1') {
                          $('#batal').click()
                          $('#tpetugas').DataTable().ajax.reload();
                      }
                  }
                });
                // alert('oke')

            }
          }
        }
      })

    })

</script>


</body>

</html>