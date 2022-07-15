<select  class="select2" name="spp" id="spp" style="width: 100%;" >
    <option value="-" selected disabled>-</option>
    <?php
    $tahun = $this->db->query("select * from spp");

    foreach ($tahun->result() as $row) {

    ?>
    <option value="<?php echo $row->id_spp; ?>"><?php echo $row->tahun; ?></option>
    <?php
    }
    ?>
</select>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Sekolah</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini fixed">
  <!-- Site wrapper -->
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="/dist/img/logo-smk-kecil.png" style="width: 40px; height: 40px;"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SMK</b> Krian 1</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="/dist/img/admin.png" class="user-image" alt="User Image">
                <span class="hidden-xs">Admin</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="/dist/img/admin.png" class="img-circle" alt="User Image">

                  <p>
                    Admin
                    <small>NIK</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <button type="button" class="btn btn-danger">Sign out</button>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="/dist/img/admin.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Admin</p>
            <small>NIK</small>
          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <!-- Dashboard -->
          <li><a href="dashboard.html"><i class="fa fa-dashboard"></i><span> Dashboard</span></a></li>

          <!-- Master -->
          <li class="header">MASTER</li>
          <li class="active"><a href="mst-pegawai.html"><i class="fa fa-users"></i><span> Pegawai</span></a></li>
          <li><a href="mst-kelas.html"><i class="fa fa-building-o"></i><span> Kelas</span></a></li>
          <li><a href="#"><i class="fa fa-graduation-cap"></i><span> Siswa</span></a></li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-money"></i> <span>Tarif</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="mst-spp.html"><i class="fa fa-circle-thin"></i> SPP</a></li>
            </ul>
          </li>


          <li class="header">MAIN MENU</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-graduation-cap"></i> <span>Siswa</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="mn-data-siswa.html"><i class="fa fa-folder"></i> Data Siswa</a></li>
              <li><a href="mn-pembayaran-spp.html"><i class="fa fa-money"></i> Pembayaran SPP</a></li>
              <li><a href="mn-riwayat-pembayaran.html"><i class="fa fa-clock-o"></i> Riwayat Pembayaran</a></li>
            </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

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

        <div class="row">
          <div class="col-md-6">
        <form>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Profil</h3>

              <!-- <div class="pull-right">
                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-plus"></i></button>
                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
              </div> -->
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label for="txt_namaPegawai">ID</label>
                    <input readonly type="text" class="form-control" id="" name="" placeholder="Auto">
                  </div>

                  <div class="form-group">
                    <label for="txt_namaPegawai">Nama</label>
                    <input readonly type="text" class="form-control" id="" name="" placeholder="Auto">
                  </div><div class="form-group">
                    <label for="txt_namaPegawai">Level</label>
                    <input readonly type="text" class="form-control" id="" name="" placeholder="Auto">
                  </div><div class="form-group">
                    <label for="txt_namaPegawai">Username</label>
                    <input readonly type="text" class="form-control" id="" name="" placeholder="Auto">
                  </div>
              <div class="box-footer">
                <div class="pull-right">
                  <button type="button" class="btn btn-success btn-sm" id=""></i> Simpan</button>
                  <button type="button" class="btn btn-danger btn-sm" id=""></i> Batal</button>
                  <button type="button" class="btn btn-info btn-sm" id=""></i> Ubah Username</button>
                </div>
              </div>
            </div>
          </div>
        </form>
          </div>

           <div class="col-md-6">
            <form>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Password</h3>

              
              <!-- <div class="pull-right">
                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-plus"></i></button>
                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
              </div> -->
            </div>
            <div class="box-body">
               <div class="form-group">
                    <label for="txt_namaPegawai">Password Lama</label>
                    <input  type="text" class="form-control" id="" name="" placeholder="Auto">
                  </div>
                  <div class="form-group">
                    <label for="txt_namaPegawai">Password Baru</label>
                    <input  type="text" class="form-control" id="" name="" placeholder="Auto">
                  </div>
                  <div class="form-group">
                    <label for="txt_namaPegawai">Ketik Ulang Password Baru</label>
                    <input  type="text" class="form-control" id="" name="" placeholder="Auto">
                  </div>
              <div class="box-footer">
                <div class="pull-right">
                  <button type="button" class="btn btn-success btn-sm" id=""></i> Simpan</button>
                  <button type="button" class="btn btn-danger btn-sm" id=""></i> Batal</button>
                  <button type="button" class="btn btn-info btn-sm" id=""></i> Ubah Password</button>
                </div>
              </div>
            </div>
          </div>
        </form>
          </div>
        </div>

        <!-- From Pegawai -->
        

      

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
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- DataTables -->
  <script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
  <!-- Select2 -->
  <script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <script>
    $('.select2').select2()

    $(document).ready(function () {
      $('.sidebar-menu').tree()
    })

    $(function () {
      $('#example2').DataTable({
        'paging': true,
        'lengthChange': true,
        'searching': true,
        'ordering': false,
        'info': true,
        'autoWidth': true
      })
    })

  </script>
</body>

</html>