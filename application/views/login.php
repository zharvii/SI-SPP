<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login | Sistem Informasi Spp Smk Krian 1</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/plugins/iCheck/square/blue.css">

  <link rel="icon" href="<?php echo base_url(); ?>assets/template/dist/img/logo/logo-smk-Krian-1.png" type="image/x-icon">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
   <div class="alert alert-info alert-dismissible" id="info">
      <button type="button" class="close" id="closeinfo" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-info"></i> Info!</h4>
      <p>Catatan : Password = tanggal lahir anda</p>
      <p>Contoh : tanggal lahir = 21-Jan-2006 maka password nya 21012006</p>
    </div>
<div class="login-box" id="loginsiswa">
  <div class="login-logo">
    <a id="title">Login Siswa</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan Login</p>

    <form id="frmlogin" method="post" action="<?php echo base_url('front/login'); ?>" autocomplete="off">
      <div class="form-group has-feedback">
        <input type="text" id="c1" name="username" class="form-control" placeholder="Nisn">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="c2" name="password" class="form-control" placeholder="Password">
        <input type="hidden" id="type" name="tipe" value="S">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button id="submitLogin" style="display: none;" type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button id="btnLogin" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a id="b1" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-user"></i> Login Sebagai Admin</a>
      <a  id="b2" style="display: none;" class="btn btn-block btn-social btn-success btn-flat" style="margin-top: 10px!important;"><i class="fa fa-user"></i> Login Sebagai siswa</a>
    </div>
    <!-- /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/template/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {

    $("#b1").click(function(){
        $('#title').text('Login Admin');
        $('#c1').attr("placeholder", "Username");
        $('#c2').attr("placeholder", "Password");
        $('#type').val('P');
        $(this).css("display", "none");
        $("#b2").css("display", "block");
        $("#info").css("display", "none");
    });

    $("#b2").click(function(){
        $('#title').text('Login Siswa');
        $('#c1').attr("placeholder", "Nisn");
        $('#c2').attr("placeholder", "Password");
        $('#type').val('S');
        $(this).css("display", "none");
        $("#b1").css("display", "block");
        $("#info").css("display", "block");

    });

    $('#closeinfo').click(function(){
        $("#info").css("display", "none");
    });

    $("#btnLogin").click(function(){
        let usr = $('#c1').val();
        let pas = $('#c2').val();
        let tipe = $('#type').val();
        if (usr != null && pas != null && usr != '' && pas != '') {
          if(usr == '=' || pas=='='){
            if(tipe=='P'){
              alert('Mohon Masukan Username Dan Password Anda Dengan Benar');
            }else if(tipe=='S'){
              alert('Mohon Masukan Nisn Dan Tanggal Lahir Anda Dengan Benar');
            }
          }else{
            $.ajax({
                type: "POST",
                url: "<?php echo base_url() . 'welcome/cekLogin' ?>",
                data: $('#frmlogin').serialize(),
                dataType: "text",
                cache: false,
                success: function(msg) {
                    if (msg == 'Error') {
                        alert('Error Mas');
                    }else if(msg=='404'){
                        if(tipe=='P'){
                            alert('Petugas Dengan Username '+usr+' Tidak Terdaftar');
                        }else if(tipe=='S'){
                            alert('Siswa Dengan Nis '+usr+' Tidak Terdaftar');

                        }
                    }else if(msg=='500'){
                        if(tipe=='P'){
                            alert('Password Salah');
                        }else if(tipe=='S'){
                            alert('Tanggal Lahir Salah');
                        }
                    } else if(msg=='200'){
                        $('#submitLogin').click();
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert(errorThrown + usr + pas);
                }
            });
          }
          
        } else {
          if(tipe=='P'){
              alert('Mohon Masukan Username Dan Password Anda');
          }else if(tipe=='S'){
              alert('Mohon Masukan Nisn Dan Tanggal Lahir Anda');
          }
        }
    });
  });
</script>
</body>
</html>
