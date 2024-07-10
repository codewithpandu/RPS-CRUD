<!-- application/views/rps_update.php -->
<html>
<head>
    <title>Form Edit RPS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
         <?php echo form_open('Rps/update/' . $rps->id_rps); ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
					<ul class="list-group">
						<li class="list-group-item active">Edit RPS</li>
						<div class="row">
							<div class="col-md-6">
								<li class="list-group-item">
									<div class="mb-3">
										<label for="nama_prodi" class="form-label">Nama Prodi</label>
										<input type="text" class="form-control form-control-sm" name="nama_prodi" id="nama_prodi" value="<?php echo $rps->nama_prodi; ?>" required />
									</div>
								</li>
							</div>
							<div class="col-md-6">
								<li class="list-group-item">
									<div class="mb-3">
										<label for="kode_matkul" class="form-label">Kode Mata Kuliah</label>
										<input type="text" class="form-control form-control-sm" name="kode_matkul" id="kode_matkul" value="<?php echo $rps->kode_matkul; ?>" required />
									</div>
								</li>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<li class="list-group-item">
									<div class="mb-3">
										<label for="nama_matkul" class="form-label">Nama Mata Kuliah</label>
										<input type="text" class="form-control form-control-sm" name="nama_matkul" id="nama_matkul" value="<?php echo $rps->nama_matkul; ?>" required />
									</div>
								</li>
							</div>
							<div class="col-md-6">
								<li class="list-group-item">
									<div class="mb-3">
										<label for="nama_dosen_penyusun" class="form-label">Dosen Penyusun</label>
										<input type="text" class="form-control form-control-sm" name="nama_dosen_penyusun" id="nama_dosen_penyusun" value="<?php echo $rps->nama_dosen_penyusun; ?>" required />
									</div>
								</li>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<li class="list-group-item">
									<div class="mb-3">
										<label for="nik_dosen_penyusun" class="form-label">NIK Dosen</label>
										<input type="number" class="form-control form-control-sm" name="nik_dosen_penyusun" id="nik_dosen_penyusun" value="<?php echo $rps->nik_dosen_penyusun; ?>" required />
									</div>
								</li>
							</div>
							<div class="col-md-6">
								<li class="list-group-item">
									<div class="mb-3">
										<label for="tgl_disusun" class="form-label">Tanggal Disusun</label>
										<input type="date" class="form-control form-control-sm" name="tgl_disusun" id="tgl_disusun" value="<?php echo $rps->tgl_disusun; ?>" required/>
									</div>
								</li>
							</div>
						</div>
						<li class="list-group-item">
							<div class="mb-3">
								<label for="tgl_berlaku" class="form-label">Tanggal Berlaku</label>
								<input type="date" class="form-control form-control-sm" name="tgl_berlaku" id="tgl_berlaku" value="<?php echo $rps->tgl_berlaku; ?>" required/>
							</div>
						</li>
					</ul>
            </div>
            <div class="col-md-2">
                <div class="list-group">
                    <button type="submit" value="Simpan" class="list-group-item list-group-item-action">Simpan</button>
                    <a href="<?php echo base_url('index.php/rps'); ?>"class="list-group-item list-group-item-action">Batal</a>
                 </div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
