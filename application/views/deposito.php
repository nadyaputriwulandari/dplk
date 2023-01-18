   <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
               <?php echo anchor('deposito/input','<button class="btn btn-sm btn-primary mb-1"><i class=" fas fa-plus fa-sm"> NEW</i></button>') ?>
              <h6><center>Table Deposito</center></h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <br>
                <table class="table align-items-center mb-0">

                  <thead>
                     
    <tr>
        <th>ID</th>
        <th>Nomor Bilyet</th>
        <th>No. Rek Bilyet</th>
        <th>Nama Bank</th>
        <th>Cabang Bank </th>
        <th>Rate Bunga Berjalan</th>
        <th>Rate Bunga Piutang</th>
        <th>Tanggal Penempatan</th>
        <th>Tanggal Roll Over</th>
        <th>Jangka Waktu</th>
        <th>Saldo</th>
        <th>Bank DPLK</th>
        <th colspan="2">Action</th>
    </tr>
    <?php
        $no=1;
        foreach ($deposito as $d) : ?>
            <tr>
                <td width="20px"><?php echo $no++ ?> </td>
                <td><?php echo $d->no_bilyet ?></td>
                <td><?php echo $d->norek_bilyet ?></td>
                <td><?php echo $d->nama_bank ?></td>
                <td><?php echo $d->cabang ?></td>
                <td><?php echo $d->rate_bunga_berjalan ?></td>
                <td><?php echo $d->rate_bunga_piutang ?></td>
                <td><?php echo $d->tanggal_penempatan ?></td>
                <td><?php echo $d->tanggal_ro ?></td>
                <td><?php echo $d->jangka_waktu ?></td>
                <td><?php echo $d->saldo ?></td>
                <td><?php echo $d->bank_dplk ?></td>
                <td width="20px"><?php echo anchor('deposito/update/' .$d->id,'<div class="btn btn-sm btn-primary">Edit</div>')?></td>
                <td width="20px"><?php echo anchor('deposito/delete/' .$d->id,'<div class="btn btn-sm btn-primary">Delete</div>')?></td>
            </tr>
            <?php endforeach; ?>

            
</table>

    </div>
    <br><br>
</html>