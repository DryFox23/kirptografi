<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KELOMPOK 3</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" type="text/css" href=""<?php echo base_url(); ?>bower_components/bootstrap/dist/css/style.css">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition sidebar-mini" style="background-color: #283747;">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini" style="color :white;"><b>Kri</b>pto</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="color :white;"><b>Kripto</b>Grafi</span>
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

      <div style="text-align:center; color:#D5DBDB;">
      <h1><strong>UAS KRIPTOGRAFI</strong></h1>
      </div>

      <div class="navbar-custom-menu">
 
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside style="background-color:#34495E;" class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
  
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
 
        
        
      
        <li><a href="enkripsi" style="color :white;"><i class="fa fa-circle-o text-blue" ></i> <span><b>ENKRIPSI</span></b></a></li>
        <li><a href="dekripsi" style="color :white;"><i class="fa fa-circle-o text-orange"></i> <span><b>DEKRIPSI</b></span></a></li>



	<!-- <li><a href="index.php/enkripsi"><i class="fa fa-circle-o text-blue"></i> <span>Start</span></a></li> -->

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper aaaa">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <style>
      img{
        width : 1250;
        height: 400;
        object-fit: cover;
      }
    </style>
    <img src="./bower_components/bootstrap/img/e1.jpg" width="1500" height="400"> 
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          
          <!-- /.box -->

          <!-- Form Element sizes -->
          
          <!-- /.box -->

          
          <!-- /.box -->

          <!-- Input addon -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-12">
              </div>
          <!-- Horizontal Form -->
          <div class="box box-info" style="background-color:#283747;">
            <div class="box-header with-border">
             
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="background-color:#E5E7E9;">Pesan</label>

                  <div class="col-sm-10">
                   <input class="form-control" placeholder="Masukan Pesan" type="text" name="text" value="<?=isset($_POST['text']) ? $_POST['text'] : ''?>"/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" style="background-color:#E5E7E9;">kunci</label>

                  <div class="col-sm-10">
                     <input class="form-control" placeholder="Masukan Kunci" type="text" name="key" value="<?=isset($_POST['key']) ? $_POST['key'] : ''?>"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

                <button type="refresh" class="btn btn-default" style="background-color:#E5E7E9;"><b>REFRESH</b></button>
                <button type="submit" name="submit"  value="Simpan" class="btn btn-default pull-right" style="background-color:#E5E7E9;"><b>PROSES</b></button>
               

              
              </div>

              <div class="social-auth-links text-center mb-3">

<div class="form-group">
                <?php
                require_once("Cipher.php");
                $cipher = new Cipher(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
                if (isset($_POST['submit'])) {
                 
                  echo '<h1><b>HASIL ENKRIPSI :</b></h1>';
                  echo '<ul>';


                  $en = $cipher->encrypt($_POST['text'], $_POST['key']);
                  $de = $cipher->encrypt($en, $_POST['key']);
                  
                  echo "<h1><b>$en</b><br></h1>";


                }?>

                
              </div>




    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer style="background-color:#34495E;" class="main-footer">
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>dist/js/demo.js"></script>
</body>
</html>
