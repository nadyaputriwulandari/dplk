   <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6><center>Form Deposito</center></h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <br>
                <div class="container-fluid">
  
  <form method="POST" action="<?php echo site_url('deposito/input_aksi')?>">
    
    

      <div class="form-group">
        <label>No Bilyet</label>
        <input type="text" name="no_bilyet" placeholder="Masukkan No Bilyet " class="form-control" >


      <div class="form-group">
        <label>No. Rek Bilyet</label>
        <input type="text" name="norek_bilyet" placeholder="Masukkan No. Rek Bilyet " class="form-control" >


      </div>
      <div class="form-group">
        <label>Nama Bank</label>
        <input type="text" name="nama_bank" placeholder="Masukkan Nama Bank " class="form-control" >

      </div>
      <div class="form-group">
        <label>Cabang Bank</label>
        <input type="text" name="cabang" placeholder="Masukkan Cabang " class="form-control" >


      </div>
      <div class="form-group">
        <label>Rate Bunga Berjalan</label>
        <input type="text" name="rate_bunga_berjalan" placeholder="Masukkan Rate Bunga Berjalan " class="form-control" >


      </div>
      <div class="form-group">
        <label>Rate Bunga Piutang</label>
        <input type="text" name="rate_bunga_piutang" placeholder="Masukkan Rate Bunga Piutang " class="form-control" >

      </div>
        <div class="form-group">
        <label>Tanggal Penempatan</label>
        <input type="date" name="tanggal_penempatan" placeholder="Masukkan Tanggal Penempatan  " class="form-control" >

      </div>
       <div class="form-group">
        <label>Tanggal Roll Over</label>
        <input type="date" name="tanggal_ro" placeholder="Masukkan Tanggal Roll Over  " class="form-control" >

      </div>
       <div class="form-group">
        <label>Jangka Waktu</label>
        <input type="text" name="jangka_waktu" placeholder="Masukkan Jangka Waktu " class="form-control" >

      </div>
       <div class="form-group">
        <label>Saldo</label>
        <input type="text" name="saldo" placeholder="Masukkan Saldo " class="form-control" >

      </div>
       <div class="form-group">
        <label>Bank DPLK</label>
        <input type="text" name="bank_dplk" class="form-control" >

      </div>

      <button type="submit" class="btn btn-primary">Add</button>

    </form>

  

                  <thead>
                  </thead>
                </table>
              </div>
            </div>
          </div>
        