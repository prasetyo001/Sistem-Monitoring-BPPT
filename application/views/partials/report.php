<div class="panel-body">
  <div class="row">
      <center><h4><b>CETAK LAPORAN MONITORING SUHU DAN KELEMBABAN<b></h4></center>
  </div>
    <br><br>
<div class="container">
    <div class="row">
        <form action="<?= base_url('index.php/report/laporan');?>" method="POST">
          <div class='col-xs-3' style="border:1px solid black">
              <div class="form-group">
                  <center><label> Pilih Room yang ingin dicetak</label></center>
                  <hr style="border: 0.1px solid"></hr>
                 <div class="checkbox">
                   <label><input type="checkbox" value="1" name="room[]" checked>Room 1</label>
                 </div>
                 <div class="checkbox">
                   <label><input type="checkbox" value="2" name="room[]" checked>Room 2</label>
                 </div>
                 <div class="checkbox">
                   <label><input type="checkbox" value="3" name="room[]" checked>Room 3</label>
                 </div>
                 <div class="checkbox">
                   <label><input type="checkbox" value="4" name="room[]" checked>Room 4</label>
                 </div>
                 <div class="checkbox">
                   <label><input type="checkbox" value="5" name="room[]" checked>Room 5</label>
                 </div>
                 <div class="checkbox">
                   <label><input type="checkbox" value="6" name="room[]" checked>Room 6</label>
                 </div>
                 <div class="checkbox">
                   <label><input type="checkbox" value="7" name="room[]" checked>Room 7</label>
                 </div>
                 <div class="checkbox">
                   <label><input type="checkbox" value="8" name="room[]" checked>Room 8</label>
                 </div>
                 <div class="checkbox">
                   <label><input type="checkbox" value="9" name="room[]" checked>Room 9</label>
                 </div>
                 <div class="checkbox">
                   <label><input type="checkbox" value="10" name="room[]" checked>Room 10</label>
                 </div>
              </div>

          </div>
          <div class='col-xs-3'>
              <div class="form-group">
                  <div class='input-group date' id='datetimepicker6'>
                      <input type='date' class="form-control" name="ts" required/>
                      <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                  <p class="help-block">Masukan Tanggal Awal</p>
              </div>
          </div>
          <div class='col-xs-3'>
              <div class="form-group">
                  <div class='input-group date' id='datetimepicker7'>
                      <input type='date' class="form-control" name="te" required/>
                      <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                  <p class="help-block">Masukan Tanggal Akhir</p>
              </div>
          </div>
          <div class="col-xs-3">
            <div class="form-group">
              <input type="submit" name="_submit" value="Print PDF" class="btn btn-default">
              <input type="submit" name="_submit" value="Export Excel" class="btn btn-default">
            </div>
          </div>
        </form>
      </div>
    </div>
</div>
<div class="clearfix">
