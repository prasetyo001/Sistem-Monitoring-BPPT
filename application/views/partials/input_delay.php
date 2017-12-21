<div class="row">
    <center><h4><b>DELAY MONITORING SUHU DAN KELEMBABAN<b></h4></center>
</div>
  <br><br>
<div class="row">
    <div class="col-lg-4">
    </div>
    <div class="col-lg-4">
        <form action="<?php echo base_url('index.php/monitoring/u_delay')?>" method="post" role="form">
            <div class="form-group" >
              <label> Pilih Room yang akan di Update</label><br>
              <select name="kd_room" class="form-control">
                  <option value="1">Room 1</option>
                  <option value="2">Room 2</option>
                  <option value="3">Room 3</option>
                  <option value="4">Room 4</option>
                  <option value="5">Room 5</option>
                  <option value="6">Room 6</option>
                  <option value="7">Room 7</option>
                  <option value="8">Room 8</option>
                  <option value="9">Room 9</option>
                  <option value="10">Room 10</option>
                </select>

            </div>
            <br>
            <div class="form-group">
              <label>Masukkan Lama Delay</label>
                <input type="text" maxlength="5" onkeypress="return hanyaAngka(event)" name="delay" class="form-control" placeholder="masukkan menit" required>
            </div>
            <br>

            <button type="submit" class="btn btn-default">UPDATE DELAY</button>
          </form>
          <br>

    </div>
