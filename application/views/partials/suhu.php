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

<div class="panel panel-default">
    <div class="panel-heading">
      <div class="row">
        <div class="col-lg-10">
          <h3>Suhu dan Kelembaban Server </h3>
        </div>
        <div class="col-lg-3">
          <h4>Room 1 - Room 5 </h4>
        </div>
      </div>
    </div>

  <!-- Suhu -->
  <div class="row">
    <div class="col-lg-10">
    </div>
    <div class="col-lg-2">
      <a href="<?php echo base_url('index.php/monitoring/suhu2');?>"><button class="btn btn-primary">Change Room 6-Room 10</button></a>
    </div>
  </div>
      <!-- <a href="#"><button class="atas btn btn-danger">R1 - R5</button></a> -->
  <!-- Room 1-->
      <br><br>
  <div class="ab">
    <div class="row">
        <div class="col-md-offset-1 col-lg-2  col-md-2">
          <?php
            $no = 1;
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
                            $no = 1;
                              foreach($suhu[$no] as $key => $a){
                          ?>
                            <div class="huge"><?php echo $a->suhu ?>&deg;C</div>
                          <?php } ?>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('index.php/C_GetSuhu/get_suhu1') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Suhu Room 1</span>
                        <span class="pull-right"></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

      <!-- Room 2-->
        <div class="col-lg-2 col-md-2">
          <?php
            $no = 2;
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
                            $no = 2;
                              foreach($suhu[$no] as $key => $a){
                          ?>
                            <div class="huge"><?php echo $a->suhu ?>&deg;C</div>
                          <?php } ?>

                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('index.php/C_GetSuhu/get_suhu2') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Suhu Room 2</span>
                        <span class="pull-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

      <!--Room 3-->
        <div class="col-lg-2 col-md-2">
          <?php
            $no = 3;
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
                            $no = 3;
                              foreach($suhu[$no] as $key => $a){
                          ?>
                            <div class="huge"><?php echo $a->suhu ?>&deg;C</div>
                          <?php } ?>

                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('index.php/C_GetSuhu/get_suhu3') ?>">
                    <div class="panel-footer">
                        <span class="pull-left"> Suhu Room 3</span>
                        <span class="pull-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

    <!--Room 4-->
        <div class="col-lg-2 col-md-2">
          <?php
            $no = 4;
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
                            $no = 4;
                              foreach($suhu[$no] as $key => $a){
                          ?>
                            <div class="huge"><?php echo $a->suhu ?>&deg;C</div>
                          <?php } ?>

                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('index.php/C_GetSuhu/get_suhu4') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Suhu Room 4</span>
                        <span class="pull-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

      <!--Room 5-->
        <div class="col-lg-2 col-md-2">
          <?php
            $no = 5;
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
                            $no = 5;
                              foreach($suhu[$no] as $key => $a){
                          ?>
                            <div class="huge"><?php echo $a->suhu ?>&deg;C</div>
                          <?php } ?>

                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('index.php/C_GetSuhu/get_suhu5') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Suhu Room 5</span>
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
            $no = 1;
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
                            $no = 1;
                              foreach($suhu[$no] as $key => $a){
                          ?>
                            <div class="huge"><?php echo $a->kelembapan ?><sup>%</sup></div>
                          <?php } ?>

                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('index.php/C_GetSuhu/get_suhu1') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Kelembaban Room 1</span>
                        <span class="pull-right"></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

    <!-- Humandity R2-->
        <div class="col-lg-2 col-md-2">
          <?php
            $no = 2;
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
                            $no = 2;
                              foreach($suhu[$no] as $key => $a){
                          ?>
                            <div class="huge"><?php echo $a->kelembapan ?><sup>%</sup></div>
                          <?php } ?>

                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('index.php/C_GetSuhu/get_suhu2') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Kelembaban Room 2</span>
                        <span class="pull-right"></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    <!-- Humandity R3-->
        <div class="col-lg-2 col-md-2">
          <?php
            $no = 3;
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
                            $no = 3;
                              foreach($suhu[$no] as $key => $a){
                          ?>
                            <div class="huge"><?php echo $a->kelembapan ?><sup>%</sup></div>
                          <?php } ?>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('index.php/C_GetSuhu/get_suhu3') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Kelembaban Room 3</span>
                        <span class="pull-right"></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

    <!-- Humandity R4-->
        <div class="col-lg-2 col-md-2">
          <?php
            $no = 4;
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
                            $no = 4;
                              foreach($suhu[$no] as $key => $a){
                          ?>
                            <div class="huge"><?php echo $a->kelembapan ?><sup>%</sup></div>
                          <?php } ?>
                        </div>
                    </div>
                  </div>

                <a href="<?php echo base_url('index.php/C_GetSuhu/get_suhu4') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Kelembaban Room 4</span>
                        <span class="pull-right"></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
          </div>

    <!-- Humandity R5-->
        <div class="col-lg-2 col-md-2">
          <?php
            $no = 5;
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
                            $no = 5;
                              foreach($suhu[$no] as $key => $a){
                          ?>
                            <div class="huge"><?php echo $a->kelembapan ?><sup>%</sup></div>
                          <?php } ?>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('index.php/C_GetSuhu/get_suhu5') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Kelembaban Room 5</span>
                        <span class="pull-right"></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
          </div>
        </div>
  </div>
    <hr style="border: 0.1px solid"></hr>


  <!-- SHOW HIDE ROOM 6 - 10 -->

  <div class=bc>

  </div>
</div>
<!-- </div> -->
