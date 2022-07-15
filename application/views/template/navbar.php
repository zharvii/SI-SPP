<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="<?php echo base_url(); ?>assets/template/dist/img/logo/logo-smk-Krian-1.png" alt=""></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SMK</b> KRIAN 1</span>
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

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url(); ?>assets/template/dist/img/user.png" class="user-image" id="lblFtoUser1" alt="User Image">
                        <span class="hidden-xs" id="lblNmUser1"> <?php echo $this->session->userdata('nama'); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo base_url(); ?>assets/template/dist/img/user.png" class="img-circle" id="lblFtoUser2" alt="User Image">

                            <p id="LblNmUser2">
                                <?php echo $this->session->userdata('nama'); ?>
                                <small><?php echo $this->session->userdata('role'); ?></small>
                            </p>
                        </li>



                        <li class="user-footer">
                            <?php if (trim($this->session->userdata('role'))!="siswa") {
                                # code...
                             ?>
                            <!-- <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div> -->
                            <?php 
                            }
                            ?>
                            <div class="pull-right">
                                <a href="<?php echo base_url('Front/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>