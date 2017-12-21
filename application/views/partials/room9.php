<br/>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4>History Room 9</h4>
            </div>

            <div class="panel-body">
                  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="text-align: center">
                    <thead>
                      <tr class="info">
                        <th style="text-align:center">No</th>
                        <th style="text-align:center">Time</th>
                        <th style="text-align:center">Temperature</th>
                        <th style="text-align:center">Humidity</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php
                          $no = 9;
                            foreach($get_suhu_room[$no] as $key => $a){
                        ?>
                          <tr>
                          <?php $b = mysql_to_unix($a->time);  ?>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo date('d-m-Y [H:i:s]' , $b); ?></td>
                                <td><?php echo $a->suhu?> &deg;C</td>
                                <td><?php echo $a->kelembapan ?>%</td>
                          </tr>
                         <?php } ?>
                    </tbody>

                    <tr>
                      <th colspan="4" align="center">
                        <?php echo $this->pagination->create_links(); ?>
                        <!-- <a class="btn btn-default navbar-right" data-toggle="modal" target="_blank" style="position: relative; margin-right: 10px;" href="<?php echo base_url().'index.php/c_excel/export_room9/' . $this->uri->segment(3);?>">
                          <i class="glyphicon glyphicon-print"></i> Export Excel</a>
                        <a class="btn btn-default navbar-right" data-toggle="modal" target="_blank" style="position: relative; margin-right: 10px;" href="<?php echo base_url().'index.php/claporanpdf/room9/'. $this->uri->segment(3);?>">
                          <i class="glyphicon glyphicon-print"></i> Print PDF</a> -->
                      </tr>
                  </table>

            </div><!-- /.content-wrapper -->

        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
