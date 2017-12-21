<script src="<?php echo base_url(); ?>asset/jquery/jquery-3.2.1.min.js" rel="stylesheet" type="text/javascript"></script>
  <script>
  $(document).ready(function(){

      setTimeout(function(){
          location.reload();
        },60000);
  });

  </script>

<?php

    $suhuA=$suhu['s'][0]->suhuA;
    $suhuB=$suhu['s'][0]->suhuB;

    $kelA=$suhu['k'][0]->kelembabanA;
    $kelB=$suhu['k'][0]->kelembabanB;
?>
<!-- <div class="a"> -->
<?php if ($suhu[6] == null AND $suhu[7] == null AND $suhu[8] == null AND $suhu[9] == null AND $suhu[10] == null):

  echo "<br><br><h3> No Database Available </h3><br><hr style='border: 0.1px solid'>"
?>
<?php else: ?>

<div class="panel panel-default">
    <div class="panel-heading">
      <div class="row">
        <div class="col-lg-10">
          <h3>Suhu dan Kelembaban Server </h3>
        </div>
        <div class="col-lg-3">
          <h4>Room 6 - Room 10 </h4>
        </div>
      </div>
    </div>

  <!-- SHOW HIDE ROOM 6 - 10 -->
  <!-- Suhu -->
  <div class="row">
    <div class="col-lg-10">
    </div>
    <div class="col-lg-2">
      <a href="<?php echo base_url('index.php');?>"><button class="btn btn-primary">Change Room 1-Room 5</button></a>
    </div>
  </div>
  <!-- Room 1-->
      <br><br>
  <div class="bc">
    <div class="row">
        <div class="col-md-offset-1 col-lg-2  col-md-2">
          <?php
            $no = 6;
              foreach($suhu[$no] as $key => $a){
          ?>
            <?php if ($a->suhu >= $suhuA or $a->suhu <= $suhuB)
                         {$c=("panel panel-red");}

                    else { $c = ("panel panel-green");} ?>
            <div class="<?php echo $c ?>">
            <?php } ?>
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-9">

                        </div>
                        <div class="col-xs-9" style="padding:15px; text-align:right">
                          <?php
                            $no = 6;
                              foreach($suhu[$no] as $key => $a){
                          ?>
                            <div class="huge"><?php echo $a->suhu ?>&deg;C</div>
                          <?php } ?>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('index.php/C_GetSuhu/get_suhu6') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Suhu Room 6</span>
                        <span class="pull-right"></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

      <!-- Room 2-->
        <div class="col-lg-2 col-md-2">
          <?php
            $no = 7;
              foreach($suhu[$no] as $key => $a){
          ?>

            <?php if ($a->suhu >= $suhuA or $a->suhu <= $suhuB)
                       {$c=("panel panel-red");}

                      else { $c = ("panel panel-green");} ?>
            <div class="<?php echo $c ?>">
            <?php } ?>
                <div class="panel-heading">
                    <div class="row">

                        <div class="col-xs-9 text-right"style="padding:15px; text-align:right">
                          <?php
                            $no = 7;
                              foreach($suhu[$no] as $key => $a){
                          ?>
                            <div class="huge"><?php echo $a->suhu ?>&deg;C</div>
                          <?php } ?>

                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('index.php/C_GetSuhu/get_suhu7') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Suhu Room 7</span>
                        <span class="pull-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

      <!--Room 3-->
        <div class="col-lg-2 col-md-2">
          <?php
            $no = 8;
              foreach($suhu[$no] as $key => $a){
          ?>

            <?php if ($a->suhu >= $suhuA or $a->suhu <= $suhuB)
                       {$c=("panel panel-red");}

                      else { $c = ("panel panel-green");} ?>
            <div class="<?php echo $c ?>">
            <?php } ?>
                <div class="panel-heading">
                    <div class="row">

                        <div class="col-xs-9 text-right" style="padding:15px; text-align:right">
                          <?php
                            $no = 8;
                              foreach($suhu[$no] as $key => $a){
                          ?>
                            <div class="huge"><?php echo $a->suhu ?>&deg;C</div>
                          <?php } ?>

                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('index.php/C_GetSuhu/get_suhu8') ?>">
                    <div class="panel-footer">
                        <span class="pull-left"> Suhu Room 8</span>
                        <span class="pull-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

    <!--Room 4-->
        <div class="col-lg-2 col-md-2">
          <?php
            $no = 9;
              foreach($suhu[$no] as $key => $a){
          ?>

            <?php if ($a->suhu >= $suhuA or $a->suhu <= $suhuB)
                       {$c=("panel panel-red");}

                      else { $c = ("panel panel-green");} ?>
            <div class="<?php echo $c ?>">
            <?php } ?>
                <div class="panel-heading">
                    <div class="row">

                        <div class="col-xs-9 text-right"style="padding:15px; text-align:right">
                          <?php
                            $no = 9;
                              foreach($suhu[$no] as $key => $a){
                          ?>
                            <div class="huge"><?php echo $a->suhu ?>&deg;C</div>
                          <?php } ?>

                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('index.php/C_GetSuhu/get_suhu9') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Suhu Room 9</span>
                        <span class="pull-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

      <!--Room 5-->
        <div class="col-lg-2 col-md-2">
          <?php
            $no = 10;
              foreach($suhu[$no] as $key => $a){
          ?>

            <?php if ($a->suhu >= $suhuA or $a->suhu <= $suhuB)
                       {$c=("panel panel-red");}

                      else { $c = ("panel panel-green");} ?>
            <div class="<?php echo $c ?>">
            <?php } ?>
                <div class="panel-heading">
                    <div class="row">

                        <div class="col-xs-9 text-right" style="padding:15px; text-align:right">
                          <?php
                            $no = 10;
                              foreach($suhu[$no] as $key => $a){
                          ?>
                            <div class="huge"><?php echo $a->suhu ?>&deg;C</div>
                          <?php } ?>

                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('index.php/C_GetSuhu/get_suhu10') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Suhu Room 10</span>
                        <span class="pull-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Humadity -->
    <!-- Humandity R1-->
      <div class="row">
        <div class="col-md-offset-1 col-lg-2  col-md-2">
          <?php
            $no = 6;
              foreach($suhu[$no] as $key => $k){
          ?>
            <?php if ($k->kelembapan >= $kelA or $k->kelembapan <= $kelB)
                         {$c=("panel panel-yellow");}

                    else { $c = ("panel panel-primary");} ?>
            <div class="<?php echo $c ?>">
            <?php } ?>
                <div class="panel-heading" style="" >
                    <div class="row">

                        <div class="col-xs-9" style="padding:15px; text-align:right">
                          <?php
                            $no = 6;
                              foreach($suhu[$no] as $key => $a){
                          ?>
                            <div class="huge"><?php echo $a->kelembapan ?><sup>%</sup></div>
                          <?php } ?>

                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('index.php/C_GetSuhu/get_suhu6') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Kelembaban Room 6</span>
                        <span class="pull-right"></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

    <!-- Humandity R2-->
        <div class="col-lg-2 col-md-2">
          <?php
            $no = 7;
              foreach($suhu[$no] as $key => $k){
          ?>
            <?php if ($k->kelembapan >= $kelA or $k->kelembapan <= $kelB)
                         {$c=("panel panel-yellow");}

                    else { $c = ("panel panel-primary");} ?>
            <div class="<?php echo $c ?>">
            <?php } ?>
                <div class="panel-heading">
                    <div class="row">

                        <div class="col-xs-9" style="padding:15px; text-align:right">
                          <?php
                            $no = 7;
                              foreach($suhu[$no] as $key => $a){
                          ?>
                            <div class="huge"><?php echo $a->kelembapan ?><sup>%</sup></div>
                          <?php } ?>

                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('index.php/C_GetSuhu/get_suhu7') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Kelembaban Room 7</span>
                        <span class="pull-right"></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    <!-- Humandity R3-->
        <div class="col-lg-2 col-md-2">
          <?php
            $no = 8;
              foreach($suhu[$no] as $key => $k){
          ?>
            <?php if ($k->kelembapan >= $kelA or $k->kelembapan <= $kelB)
                         {$c=("panel panel-yellow");}

                    else { $c = ("panel panel-primary");} ?>
            <div class="<?php echo $c ?>">
            <?php } ?>
                <div class="panel-heading">
                    <div class="row">

                        <div class="col-xs-9" style="padding:15px; text-align:right">
                          <?php
                            $no = 8;
                              foreach($suhu[$no] as $key => $a){
                          ?>
                            <div class="huge"><?php echo $a->kelembapan ?><sup>%</sup></div>
                          <?php } ?>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('index.php/C_GetSuhu/get_suhu8') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Kelembaban Room 8</span>
                        <span class="pull-right"></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

    <!-- Humandity R4-->
        <div class="col-lg-2 col-md-2">
          <?php
            $no = 9;
              foreach($suhu[$no] as $key => $k){
          ?>
            <?php if ($k->kelembapan >= $kelA or $k->kelembapan <= $kelB)
                         {$c=("panel panel-yellow");}

                    else { $c = ("panel panel-primary");} ?>
            <div class="<?php echo $c ?>">
            <?php } ?>
                <div class="panel-heading">
                    <div class="row">

                        <div class="col-xs-9" style="padding:15px; text-align:right">
                          <?php
                            $no = 9;
                              foreach($suhu[$no] as $key => $a){
                          ?>
                            <div class="huge"><?php echo $a->kelembapan ?><sup>%</sup></div>
                          <?php } ?>
                        </div>
                    </div>
                  </div>

                <a href="<?php echo base_url('index.php/C_GetSuhu/get_suhu9') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Kelembaban Room 9</span>
                        <span class="pull-right"></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
          </div>

    <!-- Humandity R5-->
        <div class="col-lg-2 col-md-2">
          <?php
            $no = 10;
              foreach($suhu[$no] as $key => $k){
          ?>
            <?php if ($k->kelembapan >= $kelA or $k->kelembapan <= $kelB)
                         {$c = ("panel panel-yellow");}

                    else { $c = ("panel panel-primary");} ?>
            <div class="<?php echo $c ?>">
            <?php } ?>
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-9" style="padding:15px; text-align:right">
                          <?php
                            $no = 10;
                              foreach($suhu[$no] as $key => $a){
                          ?>
                            <div class="huge"><?php echo $a->kelembapan ?><sup>%</sup></div>
                          <?php } ?>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('index.php/C_GetSuhu/get_suhu10') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Kelembaban Room 9</span>
                        <span class="pull-right"></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
          </div>
        </div>
  </div>
    <hr style="border: 0.1px solid"></hr>
</div>
<!-- </div> -->
<?php endif; ?>
