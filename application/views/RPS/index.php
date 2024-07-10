<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RPS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
      <!-- Table  -->
      <div class="container mt-5 table-responsive">
      <ul class="list-group">
  <li class="list-group-item" aria-current="true"><a href="<?php echo base_url('Rps/create/'); ?>" class="btn btn-success">Tambah RPS</a></li>
  <table class="table table-sm table-bordered text-center">
  <thead>
    <tr class="table-primary">
      <th scope="col" hidden>Id</th>
      <th scope="col">Nama Prodi</th>
      <th scope="col">Kode Mata Kuliah</th>
      <th scope="col">Nama Mata Kuliah</th>
      <th scope="col">Nama Dosen Penyusun</th>
      <th scope="col">NIK Dosen Penyusun</th>
      <th scope="col">Tanggal disusun</th>
      <th scope="col">Tanggal berlaku</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($data_rps as $rps): ?>
    <tr>
        <td hidden><?= $rps->id; ?></td>
        <td><?= $rps->nama_prodi; ?></td>
        <td><?= $rps->kode_matkul; ?></td>
        <td><?= $rps->nama_matkul; ?></td>
        <td><?= $rps->nama_dosen_penyusun; ?></td>
        <td><?= $rps->nik_dosen_penyusun; ?></td>
        <td><?= $rps->tgl_disusun; ?></td>
        <td><?= $rps->tgl_berlaku; ?></td>
        <td>
          <a href="<?php echo base_url('Rps/update/' . $rps->id_rps);?>" class="btn btn-secondary mb-1 text-white">Edit</a><br>
          <a href="<?php echo base_url('Rps/delete/' . $rps->id_rps); ?>"class="btn btn-danger mb-1">Hapus</a><br>
          <a href="<?php echo base_url('Rps/submit/' . $rps->id_rps); ?>"class="btn btn-primary text-white">Cetak</a>
        </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</ul>
      
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>