<?php date_default_timezone_set('Asia/Jakarta'); ?>
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href='<?php echo base_url();?>asset/Logo_BPPT.png' rel='shortcut icon'>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'"> -->

    <title>Monitoring Suhu</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>asset/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>asset/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url(); ?>asset/vendor/datatables-plugins/dataTables.bootstrap.css">

</head>
<body>
    <div id="wrapper" >
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: #7a92a3;">
            <div class="navbar-header">
                    <a class="navbar-brand" style="color:#fff" href="<?php echo base_url('index.php') ?>">Sistem Monitoring</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" style="color:#000" href="#">
                      <i class="glyphicon glyphicon-menu-hamburger"></i> <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-user">
                      <li><a href="<?php echo base_url('index.php/monitoring/history') ?>"><i class="fa fa-book fa-fw"></i> History</a>
                      </li>
                      <li><a href="<?php echo base_url('index.php/report/report') ?>"><i class="fa fa-print fa-fw"></i> Print Report </a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url('index.php/monitoring/set_tampil')?>"><i class="fa fa-gear fa-fw"></i> Setting </a>
                      </li>
                  </ul>
                  <!-- /.dropdown-user -->
              </li>
                    <!-- <a class="navbar-brand  " style="color:#fff" href="<?php echo base_url('index.php/monitoring/cetak') ?>" style="">History</a>
                      <a class="navbar-brand  " style="color:#fff" href="<?php echo base_url('index.php/monitoring/set_tampil') ?>" style="btn btn-info btn-lg">
                        <span class="glyphicon glyphicon-wrench"></span></a> -->
            </ul>
        </nav>
<!-- Body -->
      <div onload="javascript:setTimeout("location.reload(true);",1000);" id="page-wrapper" style="min-height: 349px; margin:0;">
      <?php echo $template['body']; ?>
      </div>
  </div>
<!-- footer -->
<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="background-color: #7a92a3; margin-bottom:0px; padding-top:10px;">
  <div class="navbar-footer" style="font-text:100px; color:#fff; ">
    <?php echo $template['partials']['footer']; ?>
  </div>
</nav>


<!--end Container-->

<div class="clearfix"></div>
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>asset/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>asset/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/vendor/datatables/js/dataTables.bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>asset/dist/js/sb-admin-2.js"></script>
    <!-- jQuery -->
    <script src="<?php echo base_url();?>asset/jquery/jquery-1.3.2.min.js" rel="stylesheet" type="text/javascript" ></script>
</body>

</html>
