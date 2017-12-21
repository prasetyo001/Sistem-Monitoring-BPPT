<!-- <pre>
<?php print_r($data); ?>
</pre> -->
<script>
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))

    return false;
    return true;
  }
</script>
<div class="panel-body">
  <div class="row">
      <center><h4><b>PENGATURAN BATASAN SUHU DAN KELEMBABAN<b></h4></center>
  </div>
    <br><br>
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-4">
            <form action="<?php echo base_url('index.php/monitoring/set_monitoring')?>" method="post" role="form">
                <div class="form-group" >
                    <label>Batas Suhu</label>
                    <br><br>
                    <input type="text" maxlength="2" onkeypress="return hanyaAngka(event)" name="suhuA"class="form-control" placeholder="Batas Atas" required>
                    <p class="help-block">Masukan batas Suhu aman teratas</p>
                    <p class="help-block" style="color : red">Batas Atas Terakhir (
                              <?php
                              echo $data['s'][0]->suhuA;
                              ?> &deg;C )
                    </p>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" maxlength="2" onkeypress="return hanyaAngka(event)" name="suhuB"class="form-control" placeholder="Batas Bawah" required>
                    <p class="help-block">Masukan batas Suhu aman terendah</p>
                    <p class="help-block" style="color : red">Batas Bawah Terakhir (
                              <?php
                              echo $data['s'][0]->suhuB;
                              ?> &deg;C )
                    </p>
                </div>

                <button type="submit" class="btn btn-default">Update Data Batas Suhu</button>
              </form>
              <br>
                <p class="help-block">Last Update (
                          <?php
                          $time = mysql_to_unix($data['s'][0]->time);
                          echo date('d F Y [H:i:s]' , $time );
                          ?> )
                </p>
        </div>

        <div class="col-lg-4">

            <form action="<?php echo base_url('index.php/monitoring/set_kelembaban')?>" method="post" role="form">
                <div class="form-group">
                    <label>Batas Kelembaban</label>
                    <br><br>
                    <input type="text" maxlength="2" onkeypress="return hanyaAngka(event)" name="kelembabanA"class="form-control" placeholder="Batas Atas" required>
                    <p class="help-block">Masukan batas Kelembaban aman teratas</p>
                    <p class="help-block" style="color : red;">Batas Atas Terakhir (
                              <?php
                              echo $data['k'][0]->kelembabanA;
                              ?> % )
                    </p>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" maxlength="2" onkeypress="return hanyaAngka(event)" name="kelembabanB"class="form-control" placeholder="Batas Bawah" required>
                    <p class="help-block">Masukan batas Kelembaban aman terendah</p>
                    <p class="help-block" style="color : red">Batas Bawah Terakhir (
                              <?php
                              echo $data['k'][0]->kelembabanB;
                              ?> % )
                    </p>
                </div>

                <button type="submit" class="btn btn-default">Update Data Batas Kelembaban</button>
              </form>
              <br>
                <p class="help-block">Last Update (
                          <?php
                          $time = mysql_to_unix($data['k'][0]->time);
                          echo date('d F Y [H:i:s]' , $time );
                          ?> )
                </p>

        </div>

    </div>
</div>
