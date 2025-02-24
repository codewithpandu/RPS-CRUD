<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>RPS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        * {
            font-family: 'Times New Roman', Times, serif;
        }
        table {
            width: 100%;
            table-layout: auto;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
	<CENTER>
        <div class="container w-75 mt-5 mb-5 border">
            <h3 class="fw-bolder mt-3">RENCANA PEMBELAJARAN SEMESTER (RPS)</h3>
            <hr>
            <img src="<?php echo base_url('assets/img/logo_amikom_full.png') ?>" alt="amikom" width="200px">
            <hr>
            <table class="table-bordered text-center">
                <thead>
                    <tr class="fw-bold">
                        <td>Disetujui oleh, <br>Dekan Fak. Ilmu Komputer</td>
                        <td>Diperiksa oleh, <br>Kaprodi D3 Teknik Informatika</td>
                        <td>Disusun oleh,</td>
                        <td>Dikendalikan oleh, <br>Sekretaris D3 Teknik Informatika</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><br><br>Hanif Al Fatta, M.Kom <br> Nik. 190302096</td>
                        <td><br><br>Barka Satya, M.Kom <br> Nik. 190302126</td>
                        <td><br><br><?php echo $rps->nama_dosen_penyusun ?> <br>Nik. <?php echo $rps->nik_dosen_penyusun ?></td>
                        <td><br><br>Lukman, M.Kom <br> Nik. 190302151</td>
                    </tr>
                </tbody>
            </table>
            <h5><strong>MATA KULIAH: <?php echo $rps->nama_matkul ?> (<?php echo $rps->kode_matkul ?>)</strong></h5>
            <hr>
            <h5><strong>Program Studi: <?php echo $rps->nama_prodi ?></strong></h5>
            <table class="table-bordered text-center">
                <thead>
                    <tr class="fw-bold">
                        <td>Tgl. Disusun</td>
                        <td>Tgl. Berlaku Mulai</td>
                        <td>Revisi</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $rps->tgl_disusun; ?></td>
                        <td><?php echo $rps->tgl_berlaku; ?></td>
                        <td>00</td>
                    </tr>
                </tbody>
            </table>
            <h4 class="fw-bolder">UNIVERSITAS AMIKOM YOGYAKARTA</h4>
            <h4 class="fw-bolder">YOGYAKARTA</h4>
            <h4 class="fw-bolder">2024</h4>
            <br>
            <p class="fs-5">(<a href="" onclick="window.print()">Print</a>)</p>
    </div>
	</CENTER>
</body>
</html>