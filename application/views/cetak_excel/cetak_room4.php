<!DOCTYPE html>
<?php
// $title = "Laporan_Monitoring-(".date('d-F-Y').").xls";
 header("Content-Disposition: attachment; filename=$title");
 header("Content-type: application/vnd.ms-excel");

 ?>
<html>
<head>

  <title><?=$title?></title>
  <style>
  table{
      border-collapse: collapse;
      width: 100%;
      margin: 0 auto;
  }
  table th{
      border:1px solid #000;
      padding: 3px;
      font-weight: bold;
      text-align: center;
  }
  table td{
      border:1px solid #000;
      padding: 3px;
      vertical-align: top;
      text-align: center;
  }
  </style>
</head>
<body>
<p style="text-align: center">Tabel History Monitoring Suhu dan Kelembapan Server (4) BPPT</p>
<br><br><br>
<table>
    <tr>
        <th style="width: 2%">No</th>
        <th style="width: 20%">Time</th>
        <th>No Room Server</th>
        <th>Suhu</th>
        <th>Kelembaban</th>

    </tr>
    <?php $no=0; foreach($rsuhu as $d){
    $no++;
    ?>
    <tr>
        <td><?php echo $no;?></td>
        <?php $b = mysql_to_unix($d->time);  ?>
        <td><?php echo date('d F Y [H:i:s]' , $b ); ?></td>
        <td><?php echo $d->kd_room;?></td>
        <td><?php echo $d->suhu;?> &deg;C</td>
        <td><?php echo $d->kelembapan;?> %</td>
    </tr>
  <?php }?>
</table>
</body>
</html>
