<?php date_default_timezone_set('Asia/Jakarta'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href='<?php echo base_url();?>asset/Logo_BPPT.png' rel='shortcut icon'>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="60">

    <title>Monitoring Suhu</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>asset/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>asset/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url(); ?>asset/vendor/datatables-plugins/dataTables.bootstrap.css">

    <!-- jQuery -->
    <script href="<?php echo base_url();?>asset/jquery/jquery-1.3.2.min.js" rel="stylesheet" type="text/javascript" ></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: #3b3e44;">
            <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url('index.php') ?>">Sistem Monitoring</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                    <a class="navbar-brand  "href="<?php echo base_url('index.php/monitoring/cetak') ?>" style="">History</a>
                      <a class="navbar-brand  "href="<?php echo base_url('index.php/monitoring/set_tampil') ?>" style="btn btn-info btn-lg">
                        <span class="glyphicon glyphicon-wrench"></span></a>
            </ul>

        </nav>
<!-- Body -->
      <div id="page-wrapper" style="min-height: 349px; margin:0;">
            <!-- /.row -->
      <?php echo $template['body']; ?>
<!-- footer -->
      <?php echo $template['partials']['footer']; ?>
<!--end Container-->
  </div>
</div>
<div class="clearfix"></div>
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>asset/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>asset/vendor/metisMenu/metisMenu.min.js"></script>

    <script src="<?php echo base_url(); ?>asset/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/vendor/datatables/js/dataTables.bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url(); ?>asset/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>asset/dist/js/sb-admin-2.js"></script>

</body>

</html>
