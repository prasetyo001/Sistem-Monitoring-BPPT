<!-- <?php echo '<pre>';?>
  <?php print_r($suhu);?>
  <?php '</pre>'; ?> -->
<br/>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-lg-5" >
                      <h4>History Monitoring</h4>
                    </div>
                    <div class="col-lg-3" style="align: right" >
                    </div>
                        <div class="col-lg-2" >
                          <p class="help-block" style="color: blue">Dari tanggal (
                            <?php
                                $s= $suhu['temp']['date_awal'];
                                echo $new_date = date_format(date_create($s), 'd-m-Y');
                            ?> )
                          </p>
                        </div>
                        <div class="col-lg-2" >
                          <p class="help-block" style=" color: blue">Sampai tanggal (
                              <?php
                                  $t= $suhu['temp']['date_akhir'];
                                  echo $new_date = date_format(date_create($t), 'd-m-Y');
                              ?> )
                            </p>
                        </div>
                  </div>
                </div>

                </div>
            </div>

            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="text-align: center">
                    <thead>
                        <tr class="info">
                            <th style="text-align:center">No</th>
                            <th style="text-align:center">Time</th>
                            <th style="text-align:center">Room</th>
                            <th style="text-align:center">Temperature</th>
                            <th style="text-align:center">Humidity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
		                      $no = $this->uri->segment('3') + 1;
		                        foreach($suhu['suhu'] as $u => $a){
		                    ?>
		                      <tr>
                                <td><?php echo $u + 1; ?></td>
                                <?php $b = mysql_to_unix($a->time);  ?>
			                          <td><?php echo date('d F Y [H:i:s]' , $b ); ?></td>
			                          <td><?php echo $a->kd_room ?></td>
			                          <td><?php echo $a->suhu ?> &deg;C </td>
			                          <td><?php echo $a->kelembapan ?> %</td>
		                            </tr>
	                       <?php } ?>
                       </tbody>
                        </table>

                        <!-- <a class="btn btn-default navbar-right" data-toggle="modal" target="_blank" style="position: relative; margin-right: 10px;" href="<?php echo base_url().'index.php/c_excel/export_history/' . $this->uri->segment(3);?>"> <
                          <i class="glyphicon glyphicon-print"></i> Export Excel</a>
                        <a class="btn btn-default navbar-right" data-toggle="modal" target="_blank" style="position: relative; margin-right: 10px;" href="<?php echo base_url() .'index.php/claporanpdf/cetakpdf/' . $this->uri->segment(3);?>">
                          <i class="glyphicon glyphicon-print"></i> Print PDF</a> -->

                        <th colspan="3" style="text-align: left;">
                       <?php echo $this->pagination->create_links(); ?>
                        </th>
                        <a class="btn btn-primary navbar-right" data-toggle="modal" style="position: relative; margin-right: 10px;" href="<?php echo base_url() .'index.php/monitoring/history'?>"> Back </a>

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
